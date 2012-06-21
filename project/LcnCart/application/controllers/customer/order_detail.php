<?php
/**
 * 用户中心 > 订单 > 订单详情
 *
 *
 */
class Order_detail extends Controller
{


	function __construct()
    {
        parent::Controller();

		if (!$this->session->userdata('user_in')){          		
			redirect('login');
			exit();
		}

		$this->load->helper('order');
    }


	function index()
	{
		//判断是否有订单，否则跳转订单中心
		$segments = $this->uri->uri_to_assoc();

		if (!empty($segments['index'])){
		    $order_id = (int)$segments['index'];
			$this->load->model('order_model');
			$order = $this->order_model->load($order_id);		
			if (empty($order)){
                redirect('customer/order');
			    exit();
			}
		}else{
			redirect('customer/order');
			exit();
		}

		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/orderdetail.css'>";
  
	    $data['title'] = '订单详情';

		$data['order'] =  $order;

		//送货地址
		$this->load->model('order_delivery_model');
		$data['delivery'] = $this->order_delivery_model->load($order_id);
	    
		//顾客
		$this->load->model('customer_model');
		$data['customer'] = $this->customer_model->load($this->session->userdata('user_id'));


		//支付方式
		$this->load->model('payment_model');
		$data['payment'] = $this->payment_model->load($order['payment_id']);

		//购物清单
		$this->load->model('order_item_model');
		$data['order_items'] = $this->order_item_model->find_order_items($order_id);

		/* 取得支付信息，生成支付代码 */
	    $this->load->model('payment_model');
	    $payment = $this->payment_model->load($order['payment_id']);		
	    $this->load->library('payment/'.$payment['code']);
	    $data['pay_online'] = $this->$payment['code']->get_code($order, unserialize_config($payment['pay_config']));

		$this->load->view('customer/order_detail',$data);
	}

}