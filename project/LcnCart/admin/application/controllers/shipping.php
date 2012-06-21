<?php
/**
 * 配送方式
 *
 *
 */
class Shipping extends Controller
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
	 * 配送方式列表
	 *
	 *
	 */	
    function index()
    {
		$this->load->model('shipping_model');
				
		$data['shippings'] = $this->shipping_model->find_shippings();

        $this->load->view('system/shipping/list',$data);
    }
        
    // --------------------------------------------------------------------

    /**
	 * 卸载配送方式
	 *
	 *
	 */	
    function uninstall()
	{
		// 检验操作权限
		if (!admin_priv('shipping_manage')){
			return show_message2('你没有此项操作的权限!', 'shipping');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
			
            $this->load->model('shipping_model');
            if ($this->shipping_model->uninstall($id)){
                show_message2('"配送方式(ID:'.$id.')" 已被卸载!', 'shipping');
            } else {
                return show_message2('无效ID:'.$id, 'shipping');
            }
        }
	}
    
	// --------------------------------------------------------------------

    /**
	 * 装载配送方式
	 *
	 *
	 */	
	function install()
	{
		// 检验操作权限
		if (!admin_priv('shipping_manage')){
			return show_message2('你没有此项操作的权限!', 'shipping');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
			
            $this->load->model('shipping_model');
            if ($this->shipping_model->install($id)){
                show_message2('"配送方式(ID:'.$id.')" 已装载!', 'shipping');
            } else {
                return show_message2('无效ID:'.$id, 'shipping');
            }
        }
	}
    
  
}