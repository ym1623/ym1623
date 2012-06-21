<?php
/**
 * 用户中心 > 首页
 *
 *
 */
class Home extends Controller
{
	function __construct()
    {
        parent::Controller();
		if (!$this->session->userdata('user_in')){          		
			redirect('login');
			exit();
		}
    }
   

    function index()
    {
       $this->load->model('customer_model');
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/userhome.css'>";
	   $data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/user_userinfo.css'>";
	   $data['title'] = '我的xx';

	   $this->load->model('customer_model');
	   $data['customer'] = $this->customer_model->load($this->session->userdata('user_id'));
	   $this->load->view('customer/home',$data);
    }

	

}
