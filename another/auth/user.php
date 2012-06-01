<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends MY_Controller 
{
    public function login()
    {
    	/*跳转到首页*/
        if ($this->session->userdata('uid'))
           		redirect('/');

        if ($_POST) 
        {	
        	/*
        	 * IF LOGIN SUCCESS
        	 * $this->session->set_userdata('uid',$uid);
        	 */
        	/*判断是否有redirect信息*/
      		$redirect = isset($_GET['redirect']) ? $_GET['redirect'] : '/';
      		
      		Message::set('Login Success');
      		redirect($redirect);
        }
        $this->load->view('user_login');
    }

    public function logout()
    {
		$this->session->unset_userdata('uid');
        redirect('/user/login');
    }
}
/* End of file User.php */
/* Location: ./application/docs/user.php*/