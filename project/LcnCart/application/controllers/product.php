<?php
/**
 *  商品列表
 *
 *
 */
class Product extends Controller
{
	function __construct()
    {
        parent::Controller();		
    }
   
    // --------------------------------------------------------------------

    /**
	 * 商品列表
	 *
	 *
	 */	
    function index()
    {
       $this->load->model('product_model');
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/allsort.css'>";
	   $data['title'] = '商品列表';
	   $this->load->view('product/list',$data);
    }
    
	// --------------------------------------------------------------------

    /**
	 * 商品详细
	 *
	 *
	 */	
	function single()
	{
		//判断是否二级分类，否则跳转到首页
		$segments = $this->uri->uri_to_assoc();
		if (!empty($segments['product_id'])){
		    $product_id = (int)$segments['product_id'];
			$this->load->model('product_model');
			$product = $this->product_model->load($product_id);		
			if (empty($product)){
                redirect('home');
			    exit();
			}
		}else{
			redirect('home');
			exit();
		}

		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/pshow.css' />";
		$data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/jquery.css' />";
	    $data['title'] = $product['name'].'&nbsp;【行情  价格 评价 正品行货】';

		//产品
		$data['product'] = $product;
        
		//所属分类
        $this->load->model('category_model');	
        $category = $this->category_model->load($product['cat_id']);
		$data['category'] = $category;
		if (empty($data['category'])){
            $data['category'] = array('id' => '', 'name' => '');
		}

		//顶级菜单索引
		$data['nav_index'] = 1;
		if(!empty($category['path'])){
			$path_array = explode(',',$category['path']);
			$data['nav_index'] = $path_array[0]+1;
		}
		
		//所属二级分类
		$data['level_2'] = array('id' => '', 'name' => '');
		if (!empty($category['parent_id'])){
		    $data['level_2'] = $this->category_model->load($category['parent_id']);
		}

		//所属一级分类
		$data['level_1'] = array('id' => '', 'name' => '');
		if (!empty($data['level_2']['parent_id'])){
		    $data['level_1'] = $this->category_model->load($data['level_2']['parent_id']);
		}
        
		//所属品牌
		$this->load->model('brand_model');	
		$data['brand'] = $this->brand_model->load($product['brand_id']);
		if (empty($data['brand'])){
            $data['brand'] = array('id' => '', 'name' => '');
		}

		//商品相册
		$this->load->model('image_model');	
		$data['product_images'] = $this->image_model->find_product_images((int)$product['id']);
		if (empty($data['product_images'])){
            $data['product_images'][0]=array('image_name'=>'','file'=>'','file_ext'=>'');
		}

		//商品属性
		$this->load->model('attribute_value_model');	
		$data['product_attr_values'] = $this->attribute_value_model->find_product_attr_values((int)$product_id);
		
        
        //所属分类的同级分类
	    $data['levels_3'] = array();
		if(!empty($data['level_2']['id'])){
		    $data['levels_3'] = $this->category_model->find_by_level(3,$data['level_2']['id']);
		}

		//同类品牌

		//所属分类销售排行榜


		$this->load->view('product/single',$data);

	}

}