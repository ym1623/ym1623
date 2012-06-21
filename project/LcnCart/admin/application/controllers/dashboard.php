<?php
/**
 * 控制面板
 *
 *
 */
class Dashboard extends Controller
{
	/**
	 * 构造函数
	 *
	 * 登陆检验
	 */	
	function __construct()
    {
        parent::Controller();  
		if (!$this->session->userdata('logged_in')){          		
			redirect('login');
			exit();
		}
    }
    
	// --------------------------------------------------------------------

    /**
	 * 内容
	 *
	 *
	 */	
	function index()
    {
		$data = array();
		$this->load->view('_dashboard',$data);
	}

}