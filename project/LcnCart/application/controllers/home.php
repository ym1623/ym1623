<?php
/**
 * 首页
 *
 *
 */
class Home extends Controller
{
	function __construct()
    {
        parent::Controller();		
    }
   

    function index()
    {    
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/home2010.css'>";
	   $data['title'] = 'xx商城';
	   $data['nav_index'] = 1;
       
	   $this->load->model('brand_model');
	   $data['hot_brands'] = $this->brand_model->find_brands(array(), 14, 0);
	   $data['all_brands'] = $this->brand_model->find_brands(array(), 0, 0);

	   $this->load->model('product_model');

	   //热卖
	   $hot_products = $this->product_model->find__product_by_feature('is_hot',6);
        //添加商品主图信息
		foreach($hot_products as $key => $product):			
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
			$hot_products[$key]['base_image'] = $product_base_image;
		endforeach;
        $data['hot_products'] = $hot_products;

        //新品
		$new_products = $this->product_model->find__product_by_feature('is_new',6);
        //添加商品主图信息
		foreach($new_products as $key => $product):			
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
			$new_products[$key]['base_image'] = $product_base_image;
		endforeach;
        $data['new_products'] = $new_products;

		//特价
	   $special_price_products = $this->product_model->find__product_by_feature('is_special_price',6);
        //添加商品主图信息
		foreach($special_price_products as $key => $product):			
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
			$special_price_products[$key]['base_image'] = $product_base_image;
		endforeach;
        $data['special_price_products'] = $special_price_products;

	   $this->load->view('home',$data);
    }

}

?>