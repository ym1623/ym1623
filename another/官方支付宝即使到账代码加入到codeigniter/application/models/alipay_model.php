<?php
/**
 * 支付宝模型
 * @version 0.1
 * @author heui
 *
 */
class Alipay_model extends CI_Model{
	
	var $alipay_config;
	
  
	function __construct ()
	{
		parent::__construct();
		$this->config->load('alipay', TRUE);
		$this->alipay_config = $this->config->item('alipay');
	}
	/**
	 * 
	 * 服务器异步通知
	 */
	function notify_verify ()
	{
		$tmp = array(
			'partner'        => $this->alipay_config['partner'], 
			'key'            => $this->alipay_config['key'], 
			'sign_type'      => $this->alipay_config['sign_type'],
		    '_input_charset' => $this->alipay_config['sign_type'],
		    'transport'      => $this->alipay_config['transport'],
		);
					
		$this->load->library('alipay/alipay_notify', $tmp);
		$verify_result = $this->alipay_notify->notify_verify();
		
		if($verify_result) {
    		$dingdan           = $_POST['out_trade_no'];	//获取支付宝传递过来的订单号
    		$total             = $_POST['total_fee'];		//获取支付宝传递过来的总价格
	
    		if($_POST['trade_status'] == 'TRADE_FINISHED' ||$_POST['trade_status'] == 'TRADE_SUCCESS') {    //交易成功结束
				echo "success";		//请不要修改或删除    
    		} else {
        		echo "success";		//其他状态判断。普通即时到帐中，其他状态不用判断，直接打印success。
    		}
    		self::update_status($_POST['trade_no'], $dingdan);
		} else {
   			echo "fail";

		}
	}
	
	/**
	 * 
	 * 页面跳转同步通知
	 */
	function return_verify ()
	{
		$tmp = array(
			'partner'        => $this->alipay_config['partner'], 
			'key'            => $this->alipay_config['key'], 
			'sign_type'      => $this->alipay_config['sign_type'],
		    '_input_charset' => $this->alipay_config['sign_type'],
		    'transport'      => $this->alipay_config['transport'],
		);
					
		$this->load->library('alipay/alipay_notify', $tmp);
		$verify_result = $this->alipay_notify->return_verify();
		if($verify_result) {//验证成功
	
    		$dingdan           = $_GET['out_trade_no'];    //获取订单号
    		$total_fee         = $_GET['total_fee'];	    //获取总价格

    		if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
    		
    		} else {
      			return  $_GET['trade_status'];
    		}
    		self::update_status($_GET['trade_no'], $dingdan);
		} else {
    		return "fail";
		}
	}
	
	/**
	 * 
	 * 更新订单状态（更新支付宝订单号）
	 * @param string $alipay_trade_no 支付宝订单号
	 * @param string $order_sn 商户订单号
	 */
	function update_status ($alipay_trade_no, $order_id)
	{
		//请在这里加上商户的业务逻辑程序代
		$this->db->where('name', $order_id);
		$this->db->update('sl_order', array('trade_no' => $alipay_trade_no)); 
	}
	
    /**
     * 
     * 构造提交表单
     * @param 订单编号 $order_id
     * @param 订单名 $order_name
     * @param 订单金额 $money
     */
    function build_form ($order_id, $order_name, $money)
    {
		
    	/*以下参数是需要通过下单时的订单数据传入进来获得*/
		//必填参数
		$out_trade_no = $order_id;		//请与贵网站订单系统中的唯一订单号匹配
		$subject      = $order_name;	//订单名称，显示在支付宝收银台里的“商品名称”里，显示在支付宝的交易管理的“商品名称”的列表里。
		$body         = '';	//订单描述、订单详细、订单备注，显示在支付宝收银台里的“商品描述”里
		$total_fee    = $money;	//订单总金额，显示在支付宝收银台里的“应付总额”里
		
		//扩展功能参数——默认支付方式
		/*
		$pay_mode	  = $_POST['pay_bank'];
		if ($pay_mode == "directPay") {
			$paymethod    = "directPay";	//默认支付方式，四个值可选：bankPay(网银); cartoon(卡通); directPay(余额); CASH(网点支付)
			$defaultbank  = "";
		}
		else {
			$paymethod    = "bankPay";		//默认支付方式，四个值可选：bankPay(网银); cartoon(卡通); directPay(余额); CASH(网点支付)
			$defaultbank  = $pay_mode;		//默认网银代号，代号列表见http://club.alipay.com/read.php?tid=8681379
		}*/
		$paymethod    = "directPay";
		$defaultbank  = "";
		
		//扩展功能参数——防钓鱼
		//请慎重选择是否开启防钓鱼功能
		//exter_invoke_ip、anti_phishing_key一旦被使用过，那么它们就会成为必填参数
		//开启防钓鱼功能后，服务器、本机电脑必须支持远程XML解析，请配置好该环境。
		//若要使用防钓鱼功能，请打开class文件夹中alipay_function.php文件，找到该文件最下方的query_timestamp函数，根据注释对该函数进行修改
		//建议使用POST方式请求数据
		$anti_phishing_key  = '';			//防钓鱼时间戳
		$exter_invoke_ip =  $this->input->ip_address();				//获取客户端的IP地址，建议：编写获取客户端IP地址的程序
		//如：
		//$exter_invoke_ip = '202.1.1.1';
		//$anti_phishing_key = query_timestamp($partner);		//获取防钓鱼时间戳函数
		
		//扩展功能参数——其他
		$extra_common_param = '';			//自定义参数，可存放任何内容（除=、&等特殊字符外），不会显示在页面上
		$buyer_email		= '';			//默认买家支付宝账号
		
		//扩展功能参数——分润(若要使用，请按照注释要求的格式赋值)
		$royalty_type		= "";			//提成类型，该值为固定值：10，不需要修改
		$royalty_parameters	= "";
		//提成信息集，与需要结合商户网站自身情况动态获取每笔交易的各分润收款账号、各分润金额、各分润说明。最多只能设置10条
		//各分润金额的总和须小于等于total_fee
		//提成信息集格式为：收款方Email_1^金额1^备注1|收款方Email_2^金额2^备注2
		//如：
		//royalty_type = "10"
		//royalty_parameters	= "111@126.com^0.01^分润备注一|222@126.com^0.01^分润备注二"
		
		//$alipay_config = $this->alipay_config;
		$parameter = array(
	        "service"			=> "create_direct_pay_by_user",	//接口名称，不需要修改
	        "payment_type"		=> "1",               			//交易类型，不需要修改
	
			//获取配置文件中的值
	        "partner"			=> $this->alipay_config['partner'],
	        "seller_email"		=> $this->alipay_config['seller_email'],
	        "return_url"		=> $this->alipay_config['return_url'],
	        "notify_url"		=> $this->alipay_config['notify_url'],
	        "_input_charset"	=> $this->alipay_config['_input_charset'],
	        "show_url"			=> $this->alipay_config['show_url'],
	
			//从订单数据中动态获取到的必填参数
	        "out_trade_no"		=> $out_trade_no,
	        "subject"			=> $subject,
	        "body"				=> $body,
	        "total_fee"			=> $total_fee,
	
			//扩展功能参数——网银提前
	        "paymethod"			=> $paymethod,
	        "defaultbank"		=> $defaultbank,
	
			//扩展功能参数——防钓鱼
	        "anti_phishing_key"	=> $anti_phishing_key,
			"exter_invoke_ip"	=> $exter_invoke_ip,
	
			//扩展功能参数——自定义参数
			"buyer_email"		=> $buyer_email,
	        "extra_common_param"=> $extra_common_param,
	
			//扩展功能参数——分润
	        "royalty_type"		=> $royalty_type,
	        "royalty_parameters"=> $royalty_parameters
		);
		
		$tmp = array('parameter' => $parameter, 'key' => $this->alipay_config['key'], 'sign_type' =>$this->alipay_config['sign_type']);
					
		$this->load->library('alipay/alipay_service', $tmp);
		return $this->alipay_service->build_form();       
    }

    
}