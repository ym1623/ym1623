<?php
/**
 * 插件
 *
 *
 */
class Plugin extends Controller
{
	function __construct()
    {
        parent::Controller();  
		if (!$this->session->userdata('logged_in')){          		
			redirect('login');
			exit();
		}
    }

	function index()
    {
		$data = array();
		$this->load->view('_dashboard',$data);
	}
}