<?php 
class Pay extends CI_Controller{
    var $alipay_params = "";
    function __construct(){
        parent::__construct();
        $this->alipay_params = $this->config->item('alipay');
        $this->load->helper('alipayfuns');
    }
    /*
     * 支付页面
     */    
    function paypages(){
        
        $alipay_params = $this->alipay_params;
        //订单号码
        $data['order']['number']="1234567089";
        //订单中金额
        $data['order']['total_fe'] = 0.01;
        //订单主题
        $data['order']['subject'] = "订单主题";
        //订单备注信息
        $data['order']['body'] = "这里是备注信息";
        //显示订单详细信息页面
        //$data['alipay']['show_url'] = base_url().'index.php/';
        $alipay_params['show_url'] = 'http://www.baidu.com/s?wd=CKEDITOR.replace+name&rsv_bp=0&rsv_spt=3&rsv_n=2&inputT=3096';
        
        //构造要请求的参数数组
        $parameter = array(
                "service"           => "create_direct_pay_by_user",
                "payment_type"      => "1",
                
                "partner"           => trim($alipay_params['partner']),
                "_input_charset"    => trim(strtolower($alipay_params['input_charset'])),
                "seller_email"      => trim($alipay_params['seller_email']),
                "return_url"        => trim($alipay_params['return_url']),
                "notify_url"        => trim($alipay_params['notify_url']),
                
                "out_trade_no"      => $data['order']['number'],
                "subject"           => $data['order']['subject'],
                "body"              => $data['order']['body'],
                "total_fee"         => $data['order']['total_fe'],
                
                "paymethod"         => "",
                "defaultbank"       => "",
                
                "anti_phishing_key" => "",
                "exter_invoke_ip"   => "",
                
                "show_url"          => trim($alipay_params['show_url']),
                "extra_common_param"=> "",
                
                "royalty_type"      => "",
                "royalty_parameters"=> ""
        );
		$data['server_url'] = $alipay_params['server_url'];
        $alipayService = new AlipayService($alipay_params);
        $data['para'] = $alipayService->create_direct_pay_by_user($parameter);
        
        $this->load->view('include/header');
        $this->load->view('index',$data);
        $this->load->view('include/footer');        
    }
    /*
     * 支付宝同步回调通知接口
     */
    function revals(){
        $inputs = $this->input->get();
        //验证是不是支付宝的数据
        if($this->_verify($inputs)){
            //TODO：查看消息是否已经处理，未处理则更新订单数据库
            $data['out']['msg'] = '成功了';
            //提示用户支付成功
            $view = 'success';
        }else{
            //不是支付宝的消息
            $view = 'error';
            $data['out']['msg']="出错了,验证失败";
        }        
        $this->load->view('include/header');
        $this->load->view($view,$data);
        $this->load->view('include/footer');  
    }
    /*
     * 支付宝异步通知接口
     */
    function notify(){
        $inputs = $this->input->post();
        //查看消息是否已经处理
        //验证是不是支付宝的数据
        
        //更新自己数据库
        
        //记录日志
        echo "success";
        exit();          
    }
    /*
     * 验证消息来源
     */
    function _verify($inputs) {
        $alipay_params = $this->alipay_params;
        $alipayNotify = new AlipayNotify($alipay_params);
        return $alipayNotify->verifyReturn($inputs);

    }
}