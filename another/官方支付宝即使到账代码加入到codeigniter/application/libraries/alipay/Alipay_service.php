<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Codeigiter的支付宝外部服务接口控制
 * @author heui
 * @version 0.1
 */
require_once("alipay_function.php");
class Alipay_service {
	
	var $gateway;			//网关地址
    var $_key;				//安全校验码
    var $mysign;			//签名结果
    var $sign_type;			//签名类型
    var $parameter;			//需要签名的参数数组
    var $_input_charset;    //字符编码格式

	function __construct($parameter)
    {
		self::Alipay_service(
			$parameter['parameter'], 
			$parameter['key'], 
			$parameter['sign_type']
		);
    }
    
    /**
     * 构造函数
	 * 从配置文件及入口文件中初始化变量
     * @param array $parameter 需要签名的参数数组
     * @param string $key 安全校验码
     * @param string $sign_type 签名类型
     */  
    public function Alipay_service($parameter, $key, $sign_type) 
    {
    	
    	$this->gateway	   = "https://www.alipay.com/cooperate/gateway.do?";
        $this->_key        = $key;
        $this->sign_type   = $sign_type;
        
        $this->parameter   = para_filter($parameter);

        //设定_input_charset的值,为空值的情况下默认为GBK
        if($this->parameter['_input_charset'] == '')
            $this->parameter['_input_charset'] = 'GBK';

        $this->_input_charset   = $this->parameter['_input_charset'];

        //获得签名结果
        $sort_array   = arg_sort($this->parameter);    //得到从字母a到z排序后的签名参数数组
        $this->mysign = build_mysign($sort_array,$this->_key,$this->sign_type);
    }
 
	/**
	 * 
	 * Enter description here ...
	 */
    function build_form() {
		//GET方式传递
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='".$this->gateway."_input_charset=".$this->parameter['_input_charset']."' method='get'>";
		//POST方式传递（GET与POST二必选一）
		//$sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='".$this->gateway."_input_charset=".$this->parameter['_input_charset']."' method='post'>";

        while (list ($key, $val) = each ($this->parameter)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }

        $sHtml = $sHtml."<input type='hidden' name='sign' value='".$this->mysign."'/>";
        $sHtml = $sHtml."<input type='hidden' name='sign_type' value='".$this->sign_type."'/>";

		//submit按钮控件请不要含有name属性
        $sHtml = $sHtml."<input type='submit' value='支付宝确认付款'></form>";
		
		//$sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";
		
        return $sHtml;
    }

}