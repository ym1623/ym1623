<?php
/**
 * 登陆，注册，注销
 *
 *
 */
class Login extends Controller
{
	function __construct()
    {
        parent::Controller();
    }
   
    
    // --------------------------------------------------------------------

    /**
	 * 登陆，注册 界面
	 *
	 *
	 */	
    function index()
    { 
		
	    $data = array();
		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/login.css'>";
		$data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/jq_login.css'>";
	    $data['title'] = '用户登录';

		$data['error_msg'] = $this->uri->segment(3, 0);
	    $this->load->view('login',$data);
    }
    
    // --------------------------------------------------------------------

    /**
	 * 验证名字是否已存在 ajax
	 *
	 *
	 */		
	function check_name()
	{
		$qs = query_string_to_array();
	    $name = $qs['tbxRegisterNickname'];
		$this->load->model('customer_model');
		$msg = array('Result' => true);
		if ($name){
		    if ($this->customer_model->check_name($name)){
				$msg = array('Result' => false);
			}				
		}
        
		echo json_encode($msg);
	}

    // --------------------------------------------------------------------

    /**
	 * 验证邮箱是否已存在 ajax
	 *
	 *
	 */	
	function check_email()
	{
        $qs = query_string_to_array();
	    $email = $qs['tbxRegisterEmail'];
		$this->load->model('customer_model');
		$msg = array('Result' => true);
		if ($email){
		    if ($this->customer_model->check_email($email)){
				$msg = array('Result' => false);
			}				
		}
        
		echo json_encode($msg);
	}
    
    // --------------------------------------------------------------------

    /**
	 * 注册生成验证码
	 *
	 *
	 */	
	function yzm_img()
	{
		$this->load->helper('captcha');
		code();
	}
    
	// --------------------------------------------------------------------

    /**
	 * 登陆生成验证码
	 *
	 *
	 */	
	function yzm_img1()
	{
		$this->load->helper('captcha1');
		code();
	}
    
	// --------------------------------------------------------------------

    /**
	 * 检查注册验证码是否准确
	 *
	 *
	 */	
	function _check_yzm()
	{
		session_start();
        $Verifier = $this->input->post('tbxRegisterVerifier');
        if ($_SESSION['verify'] == $Verifier){
			//
		}else{
			redirect('login/index/verifier');
		}
		return;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 检查登陆验证码是否准确
	 *
	 *
	 */	
	function _check_yzm1()
	{
		session_start();
        $Verifier = $this->input->post('tbxLoginVerifier');
        if (!empty($_SESSION['verify1']) && $_SESSION['verify1'] == $Verifier){
			//
		}else{
			redirect('login/index/verifier1');
		}
		return;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 保存注册信息
	 *
	 *
	 */	
	function save()
	{
        $this->_check_yzm();

		$name = $this->input->post('tbxRegisterNickname');
		$password = $this->input->post('tbxRegisterPassword');
		$email = $this->input->post('tbxRegisterEmail');
        
        $this->load->library('validation');
        $this->set_save_form_rules();
        
		if (TRUE == $this->validation->run()){
			$this->load->model('customer_model');            
            $this->customer_model->name = $name;
		    $this->customer_model->email = $email;
		    $this->customer_model->password = $password;
			$this->customer_model->create();
            $customer_id = $this->db->insert_id();

			$this->load->model('customer_address_model');
			$this->customer_address_model->customer_id = $this->db->insert_id();
			$this->customer_address_model->is_default = 1;
			$this->customer_address_model->consignee = null;
			$this->customer_address_model->phone =  null;
			$this->customer_address_model->mobile = null;
			$this->customer_address_model->province_id = null;
			$this->customer_address_model->city_id = null;
			$this->customer_address_model->district_id = null;
			$this->customer_address_model->address = null;
			$this->customer_address_model->postcode = null;
			$this->customer_address_model->remark = null;
			$this->customer_address_model->fax = null;
			$this->customer_address_model->invoice_head = null;
			$this->customer_address_model->address_name = null;
			$this->customer_address_model->create();

			$customer = array(
                   'user_name'  => $name,
				   'user_id'  => $customer_id,
                   'user_in' => TRUE
               );
            $this->session->set_userdata($customer);
			redirect('home');
		}else{
            redirect('login');
		}
	}
    
	// --------------------------------------------------------------------

    /**
	 * 注册验证规则
	 *
	 *
	 */	
	function set_save_form_rules()
    {
        $rules['tbxRegisterNickname'] = 'required|min_length[4]|max_length[20]|alpha_dash';	
		$rules['tbxRegisterPassword'] = 'required|min_length[6]|max_length[16]|alpha_dash';	
		$rules['tbxRegisterEmail'] = 'required|valid_email';	
		$this->validation->set_rules($rules);		
    }
    
	// --------------------------------------------------------------------

    /**
	 * 登出
	 *
	 *
	 */	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
    
	// --------------------------------------------------------------------

    /**
	 * 登陆
	 *
	 *
	 */	
	function check_customer()
	{
		$this->_check_yzm1();

        $name = $this->input->post('tbxLoginNickname');
		$password = $this->input->post('tbxLoginPassword');	
		
		$this->load->model('customer_model');            
        $this->customer_model->name = $name;
		$this->customer_model->password = $password;
		$_customer = $this->customer_model->check_customer();
		if ($_customer){
			$customer = array(
				   'user_name'  => $_customer['name'],
				   'user_id'  => $_customer['id'],
				   'user_in' => TRUE,
				   'user_last_login' => $_customer['last_login_at']
			   );
			$this->session->set_userdata($customer);
            
			$this->customer_model->update_last_login($_customer['id']);

			redirect('home');
		}else{
            redirect('login/index/customer');
		}
	}




}
