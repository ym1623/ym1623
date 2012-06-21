<?php
/**
 * 品牌
 *
 *
 */
class Brand extends Controller
{
	function __construct()
    {
        parent::Controller();		
    }
   
    // --------------------------------------------------------------------

    /**
	 * 品牌列表
	 *
	 *
	 */	
    function index()
    {
       $this->load->model('brand_model');
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/brand_sale.css'>";
	   $data['title'] = '全部品牌';
	   $this->load->view('brand/list',$data);
    }
    
	// --------------------------------------------------------------------

    /**
	 * 品牌详细页面
	 *
	 *
	 */	
	function single()
	{
		//判断是否二级分类，否则跳转到首页
		$segments = $this->uri->uri_to_assoc();
		if (!empty($segments['brand_id'])){
		    $brand_id = (int)$segments['brand_id'];
			$this->load->model('brand_model');
			$brand = $this->brand_model->load($brand_id);		
			if (empty($brand)){
                redirect('home');
			    exit();
			}
		}else{
			redirect('home');
			exit();
		}

		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/.css' />";
	    $data['title'] = $brand['name'].'&nbsp;【行情  价格 评价 正品行货】';	

		$this->load->view('brand/single',$data);

	}

}