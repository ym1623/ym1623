<?php
/* *
 * 支付宝接口公用函数
 * 详细：该类是请求、通知返回两个文件所调用的公用函数核心处理文件
 * 版本：3.2
 * 日期：2011-03-25
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。
 */

/**
 * 生成签名结果
 * @param $sort_para 要签名的数组
 * @param $key 支付宝交易安全校验码
 * @param $sign_type 签名类型 默认值：MD5
 * return 签名结果字符串
 */
function buildMysign($sort_para,$key,$sign_type = "MD5") {
	//把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
	$prestr = createLinkstring($sort_para);
	//把拼接后的字符串再与安全校验码直接连接起来
	$prestr = $prestr.$key;
	//把最终的字符串签名，获得签名结果
	$mysgin = sign($prestr,$sign_type);
	return $mysgin;
}
/**
 * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
 * @param $para 需要拼接的数组
 * return 拼接完成以后的字符串
 */
function createLinkstring($para) {
	$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".$val."&";
	}
	//去掉最后一个&字符
	$arg = substr($arg,0,count($arg)-2);
	
	//如果存在转义字符，那么去掉转义
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
}
/**
 * 除去数组中的空值和签名参数
 * @param $para 签名参数组
 * return 去掉空值与签名参数后的新签名参数组
 */
function paraFilter($para) {
	$para_filter = array();
	while (list ($key, $val) = each ($para)) {
		if($key == "sign" || $key == "sign_type" || $val == "")continue;
		else	$para_filter[$key] = $para[$key];
	}
	return $para_filter;
}
/**
 * 对数组排序
 * @param $para 排序前的数组
 * return 排序后的数组
 */
function argSort($para) {
	ksort($para);
	reset($para);
	return $para;
}
/**
 * 签名字符串
 * @param $prestr 需要签名的字符串
 * @param $sign_type 签名类型 默认值：MD5
 * return 签名结果
 */
function sign($prestr,$sign_type='MD5') {
	$sign='';
	if($sign_type == 'MD5') {
		$sign = md5($prestr);
	}elseif($sign_type =='DSA') {
		//DSA 签名方法待后续开发
		die("DSA 签名方法待后续开发，请先使用MD5签名方式");
	}else {
		die("支付宝暂不支持".$sign_type."类型的签名方式");
	}
	return $sign;
}
/**
 * 写日志，方便测试（看网站需求，也可以改成把记录存入数据库）
 * 注意：服务器需要开通fopen配置
 * @param $word 要写入日志里的文本内容 默认值：空值
 */
function logResult($word='') {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
	flock($fp, LOCK_UN);
	fclose($fp);
}

/**
 * 远程获取数据
 * 注意：该函数的功能可以用curl来实现和代替。curl需自行编写。
 * $url 指定URL完整路径地址
 * @param $input_charset 编码格式。默认值：空值
 * @param $time_out 超时时间。默认值：60
 * return 远程输出的数据
 */
function getHttpResponse($url, $input_charset = '', $time_out = "60") {
	$urlarr     = parse_url($url);
	$errno      = "";
	$errstr     = "";
	$transports = "";
	$responseText = "";
	if($urlarr["scheme"] == "https") {
		$transports = "ssl://";
		$urlarr["port"] = "443";
	} else {
		$transports = "tcp://";
		$urlarr["port"] = "80";
	}
	$fp=@fsockopen($transports . $urlarr['host'],$urlarr['port'],$errno,$errstr,$time_out);
	if(!$fp) {
		die("ERROR: $errno - $errstr<br />\n");
	} else {
		if (trim($input_charset) == '') {
			fputs($fp, "POST ".$urlarr["path"]." HTTP/1.1\r\n");
		}
		else {
			fputs($fp, "POST ".$urlarr["path"].'?_input_charset='.$input_charset." HTTP/1.1\r\n");
		}
		fputs($fp, "Host: ".$urlarr["host"]."\r\n");
		fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
		fputs($fp, "Content-length: ".strlen($urlarr["query"])."\r\n");
		fputs($fp, "Connection: close\r\n\r\n");
		fputs($fp, $urlarr["query"] . "\r\n\r\n");
		while(!feof($fp)) {
			$responseText .= @fgets($fp, 1024);
		}
		fclose($fp);
		$responseText = trim(stristr($responseText,"\r\n\r\n"),"\r\n");
		
		return $responseText;
	}
}
/**
 * 实现多种字符编码方式
 * @param $input 需要编码的字符串
 * @param $_output_charset 输出的编码格式
 * @param $_input_charset 输入的编码格式
 * return 编码后的字符串
 */
function charsetEncode($input,$_output_charset ,$_input_charset) {
	$output = "";
	if(!isset($_output_charset) )$_output_charset  = $_input_charset;
	if($_input_charset == $_output_charset || $input ==null ) {
		$output = $input;
	} elseif (function_exists("mb_convert_encoding")) {
		$output = mb_convert_encoding($input,$_output_charset,$_input_charset);
	} elseif(function_exists("iconv")) {
		$output = iconv($_input_charset,$_output_charset,$input);
	} else die("sorry, you have no libs support for charset change.");
	return $output;
}
/**
 * 实现多种字符解码方式
 * @param $input 需要解码的字符串
 * @param $_output_charset 输出的解码格式
 * @param $_input_charset 输入的解码格式
 * return 解码后的字符串
 */
function charsetDecode($input,$_input_charset ,$_output_charset) {
	$output = "";
	if(!isset($_input_charset) )$_input_charset  = $_input_charset ;
	if($_input_charset == $_output_charset || $input ==null ) {
		$output = $input;
	} elseif (function_exists("mb_convert_encoding")) {
		$output = mb_convert_encoding($input,$_output_charset,$_input_charset);
	} elseif(function_exists("iconv")) {
		$output = iconv($_input_charset,$_output_charset,$input);
	} else die("sorry, you have no libs support for charset changes.");
	return $output;
}

class AlipaySubmit {
    /**
     * 生成要请求给支付宝的参数数组
     * @param $para_temp 请求前的参数数组
     * @param $alipay_config 基本配置信息数组
     * @return 要请求的参数数组
     */
    function buildRequestPara($para_temp,$alipay_config) {
        //除去待签名参数数组中的空值和签名参数
        $para_filter = paraFilter($para_temp);

        //对待签名参数数组排序
        $para_sort = argSort($para_filter);

        //生成签名结果
        $mysign = buildMysign($para_sort, trim($alipay_config['key']), strtoupper(trim($alipay_config['sign_type'])));
        
        //签名结果与签名方式加入请求提交参数组中
        $para_sort['sign'] = $mysign;
        $para_sort['sign_type'] = strtoupper(trim($alipay_config['sign_type']));
        
        return $para_sort;
    }

    /**
     * 生成要请求给支付宝的参数数组
     * @param $para_temp 请求前的参数数组
     * @param $alipay_config 基本配置信息数组
     * @return 要请求的参数数组字符串
     */
    function buildRequestParaToString($para_temp,$alipay_config) {
        //待请求参数数组
        $para = $this->buildRequestPara($para_temp,$alipay_config);
        
        //把参数组中所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
        $request_data = createLinkstring($para);
        
        return $request_data;
    }
    
    /**
     * 构造提交表单HTML数据
     * @param $para_temp 请求参数数组
     * @param $gateway 网关地址
     * @param $method 提交方式。两个值可选：post、get
     * @param $button_name 确认按钮显示文字
     * @return 提交表单HTML文本
     */
    function buildForm($para_temp, $gateway, $method,$alipay_config) {
        //待请求参数数组
        $para = $this->buildRequestPara($para_temp,$alipay_config);
        return $para;
    }
    
    /**
     * 构造模拟远程HTTP的POST请求，获取支付宝的返回XML处理结果
     * 注意：该功能PHP5环境及以上支持，因此必须服务器、本地电脑中装有支持DOMDocument、SSL的PHP配置环境。建议本地调试时使用PHP开发软件
     * @param $para_temp 请求参数数组
     * @param $gateway 网关地址
     * @param $alipay_config 基本配置信息数组
     * @return 支付宝返回XML处理结果
     */
    function sendPostInfo($para_temp, $gateway, $alipay_config) {
        $xml_str = '';
        
        //待请求参数数组字符串
        $request_data = $this->buildRequestParaToString($para_temp,$alipay_config);
        //请求的url完整链接
        $url = $gateway . $request_data;
        //远程获取数据
        $xml_data = getHttpResponse($url,trim(strtolower($alipay_config['input_charset'])));
        //解析XML
        $doc = new DOMDocument();
        $doc->loadXML($xml_data);

        return $doc;
    }
}

class AlipayService {
    
    var $alipay_config;
    /**
     *支付宝网关地址（新）
     */
    var $alipay_gateway_new = 'https://mapi.alipay.com/gateway.do?';

    function __construct($alipay_config){
        $this->alipay_config = $alipay_config;
    }

    /**
     * 构造即时到帐接口
     * @param $para_temp 请求参数数组
     * @param $btname 提交按钮的显示信息
     * @param $btnstyle 提交按钮样式
     * 
     * @return 表单提交HTML信息
     */
    function create_direct_pay_by_user($para_temp) {
        //生成表单提交HTML文本信息
        $alipaySubmit = new AlipaySubmit();
        $html_text = $alipaySubmit->buildForm($para_temp, $this->alipay_gateway_new, "get", $this->alipay_config);
        return $html_text;
    }
    
    /**
     * 用于防钓鱼，调用接口query_timestamp来获取时间戳的处理函数
     * 注意：该功能PHP5环境及以上支持，因此必须服务器、本地电脑中装有支持DOMDocument、SSL的PHP配置环境。建议本地调试时使用PHP开发软件
     * return 时间戳字符串
     */
    function query_timestamp() {
        $url = $this->alipay_gateway_new."service=query_timestamp&partner=".trim($this->alipay_config['partner']);
        $encrypt_key = "";

        $doc = new DOMDocument();
        $doc->load($url);
        $itemEncrypt_key = $doc->getElementsByTagName( "encrypt_key" );
        $encrypt_key = $itemEncrypt_key->item(0)->nodeValue;
        
        return $encrypt_key;
    }
    
    /**
     * 构造支付宝其他接口
     * @param $para_temp 请求参数数组
     * @return 表单提交HTML信息/支付宝返回XML处理结果
     */
    function alipay_interface($para_temp) {
        //获取远程数据
        $alipaySubmit = new AlipaySubmit();
        $html_text = "";
        //请根据不同的接口特性，选择一种请求方式
        //1.构造表单提交HTML数据:（$method可赋值为get或post）
        //$alipaySubmit->buildForm($para_temp, $this->alipay_gateway, "get", $button_name,$this->alipay_config);
        //2.构造模拟远程HTTP的POST请求，获取支付宝的返回XML处理结果:
        //注意：若要使用远程HTTP获取数据，必须开通SSL服务，该服务请找到php.ini配置文件设置开启，建议与您的网络管理员联系解决。
        //$alipaySubmit->sendPostInfo($para_temp, $this->alipay_gateway, $this->alipay_config);
        
        return $html_text;
    }
}

class AlipayNotify {
    /**
     * HTTPS形式消息验证地址
     */
    var $https_verify_url = 'https://www.alipay.com/cooperate/gateway.do?service=notify_verify&';
    /**
     * HTTP形式消息验证地址
     */
    var $http_verify_url = 'http://notify.alipay.com/trade/notify_query.do?';
    var $alipay_config;

    function __construct($alipay_config){
        $this->alipay_config = $alipay_config;

    }
    /**
     * 针对notify_url验证消息是否是支付宝发出的合法消息
     * @return 验证结果
     */
    function verifyReturn($params){
        //if(empty($_POST)) {//判断POST来的数组是否为空
        if(empty($params)) {//判断POST来的数组是否为空
            return false;
        }
        else {
            //生成签名结果
            $mysign = $this->getMysign($params);
            //获取支付宝远程服务器ATN结果（验证是否是支付宝发来的消息）
            $responseTxt = 'true';
            if (! empty($params["notify_id"])) {$responseTxt = $this->getResponse($params["notify_id"]);}
            
            //写日志记录
            //$log_text = "responseTxt=".$responseTxt."\n notify_url_log:sign=".$_POST["sign"]."&mysign=".$mysign.",";
            //$log_text = $log_text.createLinkString($_POST);
            //logResult($log_text);
            
            //验证
            //$responsetTxt的结果不是true，与服务器设置问题、合作身份者ID、notify_id一分钟失效有关
            //mysign与sign不等，与安全校验码、请求时的参数格式（如：带自定义参数等）、编码格式有关
            if (preg_match("/true$/i",$responseTxt) && $mysign == $params["sign"]) {
                return true;
            } else {
                return false;
            }
        }
    }
    

    
    /**
     * 根据反馈回来的信息，生成签名结果
     * @param $para_temp 通知返回来的参数数组
     * @return 生成的签名结果
     */
    function getMysign($para_temp) {
        //除去待签名参数数组中的空值和签名参数
        $para_filter = paraFilter($para_temp);
        
        //对待签名参数数组排序
        $para_sort = argSort($para_filter);
        
        //生成签名结果
        $mysign = buildMysign($para_sort, trim($this->alipay_config['key']), strtoupper(trim($this->alipay_config['sign_type'])));
        
        return $mysign;
    }

    /**
     * 获取远程服务器ATN结果,验证返回URL
     * @param $notify_id 通知校验ID
     * @return 服务器ATN结果
     * 验证结果集：
     * invalid命令参数不对 出现这个错误，请检测返回处理中partner和key是否为空 
     * true 返回正确信息
     * false 请检查防火墙或者是服务器阻止端口问题以及验证时间是否超过一分钟
     */
    function getResponse($notify_id) {
        $transport = strtolower(trim($this->alipay_config['transport']));
        $partner = trim($this->alipay_config['partner']);
        $veryfy_url = '';
        if($transport == 'https') {
            $veryfy_url = $this->https_verify_url;
        }
        else {
            $veryfy_url = $this->http_verify_url;
        }
        $veryfy_url = $veryfy_url."partner=" . $partner . "&notify_id=" . $notify_id;
        $responseTxt = getHttpResponse($veryfy_url);
        
        return $responseTxt;
    }
}