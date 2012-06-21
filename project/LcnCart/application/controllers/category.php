<?php
/**
 * 分类下的商品
 *
 *
 */
class Category extends Controller
{
	function __construct()
    {
        parent::Controller();		
    }
   
    // --------------------------------------------------------------------

    /**
	 * 分类列表
	 *
	 *
	 */	
    function index()
    {
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/allsort.css'>";
	   $data['title'] = '全部分类';
	   $this->load->view('category/list',$data);
    }


    // --------------------------------------------------------------------

    /**
	 * 一级分类
	 *
	 *
	 */	
	function index_1()
	{
		//判断是否二级分类，否则跳转到首页
		$segments = $this->uri->uri_to_assoc();
		if (!empty($segments['cat_id'])){
		    $cat_id = (int)$segments['cat_id'];
			$this->load->model('category_model');
			$cat = $this->category_model->load($cat_id);		
			if (empty($cat)){
                redirect('home');
			    exit();
			}else if($cat['level'] != 1){
                redirect('home');
			    exit();
			}
		}else{
			redirect('home');
			exit();
		}

		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/electronic.css' />";
	    $data['title'] = $cat['name'].'&nbsp;【行情  价格 评价 正品行货】';
		$data['cat'] = $cat;
		$data['nav_index'] = $cat['id']+1;

		$this->load->view('category/list_1',$data);
	}


    // --------------------------------------------------------------------

    /**
	 * 二级分类
	 *
	 *
	 */	
	function index_2()
	{
		$this->load->model('category_model');
		//判断是否二级分类，否则跳转到首页
		$segments = $this->uri->uri_to_assoc();
		if (!empty($segments['cat_id'])){
		    $cat_id = (int)$segments['cat_id'];
			$cat = $this->category_model->load($cat_id);		
			if (empty($cat)){
                redirect('home');
			    exit();
			}else if($cat['level'] != 2){
                redirect('home');
			    exit();
			}
		}else{
			redirect('home');
			exit();
		}

		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/plist.css' />";
	    $data['title'] = $cat['name'].'&nbsp;【行情  价格 评价 正品行货】';
		$data['cat'] = $cat;
        
		//所属分类
		$data['parent'] = $this->category_model->load($cat['parent_id']);

		//该分类下的子分类
		$data['childs'] = $this->category_model->find_childs($cat['id']);

		//顶级菜单索引
		$data['nav_index'] = $cat['parent_id']+1;

        //本分类下的产品

		  //计算查询条件
		$options = array('order'=>null);
		if(!empty($segments['order'])){
			switch($segments['order']){
				case 'price_up' : $options['order'] = 'price_up';break;
				case 'price_down' : $options['order'] = 'price_down';break;
				case 'osa' : $options['order'] = 'osa';break;
				default : $options['order'] = null;
			}
		}
          //分类下属产品总数
		$this->load->model('product_model');
		$cat_ids = $this->category_model->find_sub_cat_ids($cat_id);
		$total = $this->product_model->count_products_by_category($cat_ids); 
		$data['total'] = $total;

		  //分页配置
		$this->config->set_item('enable_query_strings',FALSE) ;
        $config = $this->config->item('pagination');

		  //生成分页
        $this->load->library('pagination');
        $config['base_url'] = site_url('category/index_2/cat_id/'.$cat_id.'/page') . '/';
		$config['uri_segment'] = '6';
        if ($options['order']){
            $config['base_url'] = site_url('category/index_2/cat_id/'.$cat_id.'/order/'.$options['order'].'/page') . '/';
		    $config['uri_segment'] = '8';
		}
		$config['total_rows'] = $data['total'];
		$config['per_page'] = '15';	
		$this->pagination->initialize($config); 
		$data['pagination'] = $this->pagination->create_links();

           //offset
		if (!empty($segments['page']) && (int)$segments['page']>0){
            $page_offset = (int)$segments['page'];			
        } else {
            $page_offset = 0;
        }      
		$products = $this->product_model->find_products_by_category($cat_ids, $options, $config['per_page'],$page_offset);

          //添加商品主图信息
		foreach($products as $key => $product):			
			$this->load->model('image_model');	
			$product_base_image = $this->image_model->find_product_base_image((int)$product['id']);
			if (empty($product_base_image)){//如果没有建立主图，就从相册中取
				$product_images = $this->image_model->find_product_images((int)$product['id']);
				if (!empty($product_images)){
                    $product_base_image = $product_images[0];
				}else{
                    $product_base_image = array('image_name'=>'','file'=>'','file_ext'=>'');
				}
			}
			$products[$key]['base_image'] = $product_base_image;
		endforeach;
        $data['products'] = $products;

		$this->load->view('category/list_2',$data);
	}


    // --------------------------------------------------------------------

    /**
	 * 三级分类
	 *
	 *
	 */	
	function index_3()
	{
		//判断是否三级分类，否则跳转到首页
		$segments = $this->uri->uri_to_assoc();
		if (!empty($segments['cat_id'])){
		    $cat_id = (int)$segments['cat_id'];
			$this->load->model('category_model');
			$cat = $this->category_model->load($cat_id);		
			if (empty($cat)){
                redirect('home');
			    exit();
			}else if($cat['level'] != 3){
                redirect('home');
			    exit();
			}
		}else{
			redirect('home');
			exit();
		}
        
		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/plist_a.css' />";
	    $data['title'] = $cat['name'].'&nbsp;【行情  价格 评价 正品行货】';
		$parent = $this->category_model->load($cat['parent_id']);
		$grandparent = $this->category_model->load($parent['parent_id']);
        
		//本分类
        $data['cat'] = $cat;

		//所属二级分类
		$data['parent'] = $parent;

		//所属一级分类
		$data['grandparent'] = $grandparent;

		//顶级菜单索引
		$data['nav_index'] = $parent['parent_id']+1;

		//本分类下的产品

          //计算查询条件
		$options = array('order'=>null);
		if(!empty($segments['order'])){
			switch($segments['order']){
				case 'price_up' : $options['order'] = 'price_up';break;
				case 'price_down' : $options['order'] = 'price_down';break;
				case 'osa' : $options['order'] = 'osa';break;
				default : $options['order'] = null;
			}
		}

		$this->load->model('product_model');
		$data['total'] = $this->product_model->count_products_by_category(array((int)$cat['id']),$options); 		
		
		  //分页配置
		$this->config->set_item('enable_query_strings',FALSE) ;
        $config = $this->config->item('pagination');
		  //生成分页
        $this->load->library('pagination');
        $config['base_url'] = site_url('category/index_3/cat_id/'.$cat_id.'/page') . '/';
		$config['uri_segment'] = '6';
        if ($options['order']){
            $config['base_url'] = site_url('category/index_3/cat_id/'.$cat_id.'/order/'.$options['order'].'/page') . '/';
		    $config['uri_segment'] = '8';
		}
		$config['total_rows'] = $data['total'];
		$config['per_page'] = '20';	
		$this->pagination->initialize($config); 
		$data['pagination'] = $this->pagination->create_links();
          //offset
		if (!empty($segments['page']) && (int)$segments['page']>0){
            $page_offset = (int)$segments['page'];			
        } else {
            $page_offset = 0;
        }      
		$products = $this->product_model->find_products_by_category(array((int)$cat['id']), $options, $config['per_page'],$page_offset);

        //添加商品主图信息
		foreach($products as $key => $product):			
			$this->load->model('image_model');	
			$product_base_image = $this->image_model->find_product_base_image((int)$product['id']);
			if (empty($product_base_image)){//如果没有建立主图，就从相册中取
				$product_images = $this->image_model->find_product_images((int)$product['id']);
				if (!empty($product_images)){
                    $product_base_image = $product_images[0];
				}else{
                    $product_base_image = array('image_name'=>'','file'=>'','file_ext'=>'');
				}
			}
			$products[$key]['base_image'] = $product_base_image;
		endforeach;
        $data['products'] = $products;		
		
		$this->load->view('category/list_3',$data);
	}

}

?>