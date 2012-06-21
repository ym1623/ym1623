<?php
/**
 * 支付返回信息
 *
 *
 */
class Respond extends Controller
{
	function __construct()
    {
        parent::Controller();		
    }

	function index()
    {

		if(empty($_GET['code'])){
			redirect('home');
			    exit();
		}
        
        $code = $_GET['code'];
         		
		$this->load->library('payment/'.$code);
		
		$data['msg'] = ($this->$code->respond()) ? '支付成功' : '支付失败';

		$data['title'] = '支付反馈信息';

		$this->load->view('respond',$data);
	}
   
}

?>