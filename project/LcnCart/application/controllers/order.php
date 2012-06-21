<?php
/**
 * 
 *
 */
class Order extends Controller
{

    /**
	 * 构造函数
	 *
	 *
	 */	
	function __construct()
    {
        parent::Controller();
		//判断用户是否登录
		if (!$this->session->userdata('user_in')){          		
			redirect('login');
			exit();
		}
		//判断购物车是否有商品
		$this->load->library('cart');
		if (!$this->cart->total_items()){
			redirect('home');
			exit();
		}
		$this->load->helper('order');
    }

    // --------------------------------------------------------------------

    /**
	 * 订单界面
	 *
	 *
	 */	
    function  index()
	{
       $data = array();
	   $data['title'] = '订单信息确认';
       
	   //顾客信息
	   $this->load->model('customer_model');
	   $data['customer'] = $this->customer_model->load($this->session->userdata('user_id'));

	   //默认地址
	   $this->load->model('customer_address_model');
	   $data['address'] = $this->customer_address_model->load($this->session->userdata('user_id'));
      
	   $this->load->view('order',$data);
	}
    
	// --------------------------------------------------------------------

    /**
	 * 生成收货人地址 
	 *
	 * ajax
	 */	
	function show_consignee()
	{
        $consignee = $this->input->post('consignee');
		$province_id = $this->input->post('province_id');
	    $city_id = $this->input->post('city_id');
		$district_id = $this->input->post('district_id');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
	    $mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$postcode = $this->input->post('postcode');

		//更新默认地址
		$this->load->model('customer_model');        
		$this->customer_model->email = $email;
		$this->customer_model->update($this->session->userdata('user_id'));

        $this->load->model('customer_address_model');
		$this->customer_address_model->consignee = $consignee;
		$this->customer_address_model->phone = $phone;
		$this->customer_address_model->mobile = $mobile;
		$this->customer_address_model->province_id = $province_id;
		$this->customer_address_model->city_id = $city_id;
		$this->customer_address_model->district_id = $district_id;
		$this->customer_address_model->address = $address;
		$this->customer_address_model->postcode = $postcode;
		$this->customer_address_model->update($this->session->userdata('user_id'));
        
		$this->load->model('region_model');       
        $province = $this->region_model->get_name($province_id);
		$city = $this->region_model->get_name($city_id);
		$district = $this->region_model->get_name($district_id);
        $province = $province.'省'.$city.'市'.$district;

		$data = array(
				'consignee' => $consignee,
				'phone' => $phone,
				'mobile' => $mobile,
				'province' => $province,				
				'address' => $address,
				'postcode' => $postcode,
			    'email'    => $email,
			    'province_id' => $province_id,
                'city_id' => $city_id,
				'district_id' => $district_id,
            );
        $this->load->view('order/consignee',$data);
	}
    
	// --------------------------------------------------------------------

    /**
	 * 编辑收货人地址
	 *
	 * ajax
	 */		
	function write_consignee()
	{
	    $consignee = $this->input->post('consignee');
		$province_id = $this->input->post('province_id');
	    $city_id = $this->input->post('city_id');
		$district_id = $this->input->post('district_id');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
	    $mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$postcode = $this->input->post('postcode');

		$data = array(
				'consignee' => $consignee,
				'phone' => $phone,
				'mobile' => $mobile,
				'address' => $address,
				'postcode' => $postcode,
			    'email'    => $email,
			    'province_id' => $province_id,
                'city_id' => $city_id,
				'district_id' => $district_id,
            );
        
        $this->load->view('order/consignee_edit',$data);
	}
    
	// --------------------------------------------------------------------

    /**
	 * 生成支付及配送方式
	 *
	 * ajax
	 */	
	function show_pay_and_ship()
	{
		$payment_id = $this->input->post('payment_id');
        $shipping_id = $this->input->post('shipping_id');
	    $shipping_fee = $this->input->post('shipping_fee');

        $this->load->model('payment_model');				
		$data['payment'] = $this->payment_model->load($payment_id);

		$this->load->model('shipping_model');				
		$data['shipping'] = $this->shipping_model->load($shipping_id);

		$data['payment_id'] = $payment_id;
		$data['shipping_id'] = $shipping_id;
        
		$data['shipping_fee'] = $shipping_fee;

		$data['product_fee'] = $this->cart->total();

        $this->load->view('order/pay_and_ship',$data);
	}
    
	// --------------------------------------------------------------------

    /**
	 * 编辑支付及配送方式
	 *
	 * ajax
	 */	
	function write_pay_and_ship()
	{
	    $district_id = $this->input->post('district_id');
	    $payment_id = $this->input->post('payment_id');
		$shipping_id = $this->input->post('shipping_id');
		
		$this->load->model('region_model');
        $district = $this->region_model->load($district_id);
        $city = $this->region_model->load($district['parent_id']);
		$province = $this->region_model->load($city['parent_id']);

        $region_id_list = array(1, $province['region_id'], $city['region_id'], $district['region_id']);
        $this->load->model('shipping_model');
		$shippings = $this->shipping_model->available_shipping_list($region_id_list);
    
		$total_weight = 0;//总重量
		$this->load->library('cart');
		foreach($this->cart->contents() as $items):
            $total_weight += $items['options']['weight']*$items['qty'];
        endforeach;
        $total_weight = ($total_weight/1000);

		$this->load->helper('shipping');
		foreach ($shippings as $key => $shipping):
            $shippings[$key]['fee'] = shipping_fee($shipping['code'],$shipping['configure'],$total_weight,'',$this->cart->total_items());
		endforeach;

		$data['shippings'] = $shippings;

		$this->load->model('payment_model');				
		$data['payments'] = $this->payment_model->find_payments();

		$data['payment_id'] = $payment_id;
		$data['shipping_id'] = $shipping_id;

        $this->load->view('order/pay_and_ship_edit',$data);
	}
    
	// --------------------------------------------------------------------

    /**
	 * 完成所有订单操作，提交到数据库
	 *
	 *
	 */	  
    function save()
	{

		/* 接收表单数据 */
        $consignee = $this->input->post('consignee');
        $address = $this->input->post('address');
        $postcode = $this->input->post('postcode');
        $phone = $this->input->post('phone');
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $province_id = $this->input->post('province_id');
        $city_id = $this->input->post('city_id');
        $district_id = $this->input->post('district_id');
        $payment_id = $this->input->post('payment_id');
        $shipping_id = $this->input->post('shipping_id');
        $product_fee = $this->input->post('product_fee');
        $shipping_fee = $this->input->post('shipping_fee');

	    /* 检查收货人信息是否完整(待定) */


		/* 插入新订单信息 */
		$this->load->model('order_model');
		$this->order_model->customer_id = $this->session->userdata('user_id');
		$this->order_model->payment_id = $payment_id;
		$this->order_model->shipping_id = $shipping_id;
		$this->order_model->total_product_price = $product_fee;
		$this->order_model->auto_freight_fee = $shipping_fee;
		$this->order_model->total_price = $product_fee + $shipping_fee;
		$this->order_model->status = 1;		

		$order_exist = false;
		do{
			$order_sn = get_order_sn(); 
			if ($this->order_model->check_order_sn($order_sn)){
			    $order_exist = true;
			}else{
                $this->order_model->order_sn = $order_sn;
                $this->order_model->create();
				$new_order_id = $this->db->insert_id();
			}
        }while($order_exist);//如果是订单号重复则重新提交数据
	
        /* 插入订单商品 */
		$this->load->model('order_item_model');

        foreach($this->cart->contents() as $items):
			$this->order_item_model->order_id = $new_order_id;
			$this->order_item_model->product_id = $items['id'];
			$this->order_item_model->product_name = $items['name'];
			$this->order_item_model->quantity = $items['qty'];
			$this->order_item_model->price = $items['price'];
			$this->order_item_model->weight = $items['options']['weight'];
			$this->order_item_model->create();
		endforeach;

		/* 插入收货人信息 */
		$this->load->model('order_delivery_model');
		$this->order_delivery_model->order_id = $new_order_id;
		$this->order_delivery_model->consignee = $consignee;
		$this->order_delivery_model->address = $address;
		$this->order_delivery_model->province_id = $province_id;
		$this->order_delivery_model->city_id = $city_id;
		$this->order_delivery_model->district_id = $district_id;
        $this->order_delivery_model->contact_phone = $phone;
		$this->order_delivery_model->contact_mobile = $mobile;
		$this->order_delivery_model->postcode = $postcode;
		$this->order_delivery_model->create();


        /* 清空购物车 */
        $this->cart->destroy();
        		
        
		/* 取得支付信息，生成支付代码 */
		$this->load->model('payment_model');
		$payment = $this->payment_model->load($payment_id);
        
		$this->load->library('payment/'.$payment['code']);
		$order = $this->order_model->load($new_order_id);
		$pay_online = $this->$payment['code']->get_code($order, unserialize_config($payment['pay_config']));

		/* 视图 */
		$data['title'] = '成功提交订单';
		$data['order_sn'] = $order_sn;
		$data['total_price'] = ($product_fee + $shipping_fee);
		$data['payment_name'] = $payment['name'];
		$data['pay_online'] = $pay_online;
		$data['order_id'] = $new_order_id;
		
		$this->load->view('succeed',$data);
	}
    
}
   