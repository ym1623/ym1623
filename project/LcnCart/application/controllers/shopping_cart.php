<?php
/**
 * 购物车
 *
 *
 */
class shopping_cart extends Controller
{
	function __construct()
    {
        parent::Controller();		
    }
   
    
	// --------------------------------------------------------------------

    /**
	 * 购物车界面
	 *
	 *
	 */	
    function index()
    {
    
       $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/shoppingcart.css'>";
	   $data['title'] = '我的购物车';
	   $this->load->library('cart'); 
	   $data['total_price'] = round($this->cart->total(),2);
	   $this->load->view('shopping_cart',$data);
    }

    // --------------------------------------------------------------------

    /**
	 * 更新购物车商品数量
	 *
	 *
	 */	
	function update()
	{
		$segments = $this->uri->uri_to_assoc(); 
        $rowid = $segments['rowid'];
		$qty = $segments['qty'];

        $data = array(
               'rowid'      => $rowid,
               'qty'     => $qty,     
            );
		$this->load->library('cart');
        $this->cart->update($data);	
		echo round($this->cart->total(),2);
	}

	
    // --------------------------------------------------------------------

    /**
	 * 添加新商品到购物车
	 *
	 *
	 */	
	function add()
	{
		$segments = $this->uri->uri_to_assoc();
		$product_id = $segments['product_id'];
        $this->load->model('product_model');
		$product = $this->product_model->load($product_id);
		if (empty($product)){
                redirect('home');
			    exit();
		}

		$this->load->library('cart');
	    $data = array(
			   'id'      => $product['id'],
			   'qty'     => 1,
			   'price'   => $product['price'],
			   'name'    => $product['name'],
			   'options' => array( 'weight' => $product['weight'] )
			);
	    $this->cart->insert($data); 
	    redirect('shopping_cart');
	}


    //清空购物车
	function destroy()
	{   
		$this->load->library('cart');
		$this->cart->destroy();
	}

}