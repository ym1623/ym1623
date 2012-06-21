<?php
/**
 * 登陆
 *
 *
 */
class Login extends Controller
{
	/**
	 * 构造函数
	 *
	 * 
	 */	
	function __construct()
    {
        parent::Controller();                
    }
    
	// --------------------------------------------------------------------

    /**
	 * 登陆界面
	 *
	 *
	 */	
    function index()
    {
				
		$data = array();

        $this->load->view('_login',$data);
    }
    
    // --------------------------------------------------------------------

    /**
	 * 登陆检验
	 *
	 *
	 */	
	function signin()
	{
        if($this->input->post('act')=='signin'){

			//接受客户端数据
			$name = $this->input->post('name');
			$password = $this->input->post('password');
            
			// 把数据提交给模型
			$this->load->model('admin_user_model');
			$this->admin_user_model->name = $name;
			$this->admin_user_model->password = $password;	

			if ($user = $this->admin_user_model->signin()){

               // session记录登陆者信息
               $users = array(
                   'name'  => $user['name'],
				   'id'  => $user['id'],
				   'role_id'  => $user['role_id'],
				   'action_list'  => $user['action_list'],
                   'logged_in' => TRUE
               );
               $this->session->set_userdata($users);

			   echo 1;
			   //redirect('frameset');

			// 用户名称和密码不匹配
			}else{
				echo 2;
				//show_message2('用户名称或者密码错误!', 'login');
			}
        
		//非法登陆
		}else{
			redirect('login');
		}
	}

}
