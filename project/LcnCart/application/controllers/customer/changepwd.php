<?php
/**
 * 用户中心 > 修改密码
 *
 *
 */
class Changepwd extends Controller
{
	function __construct()
    {
        parent::Controller();
		if (!$this->session->userdata('user_in')){          		
			redirect('login');
			exit();
		}
    }
  
    // --------------------------------------------------------------------

    /**
	 * 修改密码界面
	 *
	 *
	 */	
    function index()
    {
      
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/userhome.css'>";
	   $data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/user_userinfo.css'>";
	   $data['title'] = '修改密码';
	   $data['error_msg'] = $this->uri->segment(4, 0);
	   $this->load->view('customer/changepwd',$data);
    }
    
	// --------------------------------------------------------------------

    /**
	 * 提交数据
	 *
	 *
	 */	
	function save()
	{
		$old_pwd = $this->input->post('txtOldPwd');
		$new_pwd = $this->input->post('txtNewPwd');

		$this->load->model('customer_model'); 
		if ($this->customer_model->check_pwd($old_pwd)){
			if ($this->customer_model->update_pwd($this->session->userdata('id'),$new_pwd)){
			    echo "<script>alert('密码修改成功');location.href='".site_url('customer/changepwd')."';</script>";
			}

		}else{
            redirect('customer/changepwd/index/pw_error');
		}
	}

}
