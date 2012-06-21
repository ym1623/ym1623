<?php
/**
 * 注销
 *
 *
 */
class Logout extends Controller
{
	function __construct()
    {
        parent::Controller();  
		$this->session->sess_destroy();
		redirect('login');
    }
   
}
?>