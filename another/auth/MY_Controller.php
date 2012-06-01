<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		/*判断SESSION是否存在，判断当前URL是否是user/login*/        
		if ( ! $this->session->userdata('uid')
			   && ( $this->router->fetch_class() != 'user' && $this->router->fetch_method() != 'login'))
		{          	
			$redirect = $this->uri->uri_string();
			
			if ( $_SERVER['QUERY_STRING'])
			{
				$redirect .= '?' . $_SERVER['QUERY_STRING'];
			}
			/*跳转到用户登陆页面，指定Login后跳转的URL*/
			redirect('user/login?redirect='.$redirect);
		}
    }
}
/* End of file MY_Controller.php */
/* Location: ./application/docs/MY_Controller.php*/    
 