<?php
/**
 * 订单模块
 *
 *
 */
class Order extends Controller
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
	 * 订单列表
	 *
	 *
	 */	
    function index()
    {
        // 当前页码 
		$page = $this->input->post('page'); $page = (int)$page;
        
		// 查询标记
		$search = $this->input->post('search');
        
		// 查询的订单号
		$order_sn = $this->input->post('order_sn'); $order_sn = $order_sn ? $order_sn : 0;
        
		// 查询的收货人
		$consignee = $this->input->post('consignee'); $consignee = $consignee ? $consignee : 0;
        
		// 查询耳朵订单状态
		$status = $this->input->post('status');

		
        
		// 分页+查询的url设置
		$segments = $this->uri->uri_to_assoc();
		if ($search){
			$segments['order_sn'] = $order_sn;
			$segments['consignee'] = $consignee;
			$segments['status'] = $status;		
		}else{
			$segments['order_sn'] = !empty($segments['order_sn']) ? $segments['order_sn'] : 0;
			$segments['consignee'] = !empty($segments['consignee']) ? $segments['consignee'] : 0;
			$segments['status'] = !empty($segments['status']) ? $segments['status'] : 0;
		}
		$search_uri = '/order_sn/' . $segments['order_sn'] . '/consignee/' . $segments['consignee'] .
			          '/status/' . $segments['status'];
 
		
		//计算查询条件
        $options = array(
            'conditions' => null,
        );

		$data['order_sn'] =  '';
        $data['consignee'] = '';
		$data['status_seleted'] = 0;

        if (!empty($segments['order_sn'])){
			$options['conditions']['o.order_sn'] = $segments['order_sn'];
			$data['order_sn'] = $segments['order_sn'];
        }
        if (!empty($segments['consignee'])){
			$options['conditions']['d.consignee'] = $segments['consignee'];
			$data['consignee'] = $segments['consignee'];
        }
		if (!empty($segments['status'])){
		    $options['conditions']['o.status'] = (int)$segments['status'];
            $data['status_selected'] = (int)$segments['status'];     
        }
       
		// 分页的开始数据行：$page_offset
		if($page){
            $page_offset = $page-1;
		}else if (!empty($segments['page'])){
            $page_offset = (int)$segments['page'];		
        } else {
            $page_offset = 0;
        }
		if ($page_offset<0){
            $page_offset=0;
		}
		
		// 分页url
		$base_url = site_url('order/index/page') . '/';

		// 每页显示数据条数
        $per_page = 15;

        // 数据总数
		$this->load->model('order_model');		
		$data['total_rows'] =  $this->order_model->count_orders($options);

		// 总页数
        $data['total_pages'] = ceil($data['total_rows']/$per_page);
        
		// 当前页（input）
        $data['page'] = $page_offset+1;
		$data['page'] = ($data['page']>$data['total_pages'] && $data['total_pages']>0) ? $data['total_pages'] : $data['page'];

		// 第一页 最后一页 前一页 后一页
		$data['page_first'] = $base_url.'0'.$search_uri;
		$data['page_last'] = $base_url.($data['total_pages']-1).$search_uri;
		$data['page_prev'] = ($data['page']>1) ? $base_url.($data['page']-2).$search_uri : $data['page_first'];
	    $data['page_next'] = ($data['page']<$data['total_pages']) ? $base_url.($data['page']).$search_uri : $data['page_last'];

		// 当前页
		$data['cur_page'] =  $base_url.($data['page']-1).$search_uri;
		
		// 当前页起始数据号
		$data['show_start'] = ($data['page']-1)*$per_page+1;

		// 当前页结束数据号
		$data['show_end'] = ($page_offset<$data['total_pages']-1) ? ($data['show_start']+$per_page-1) : $data['total_rows'];

	    // 订单结果集
		$data['orders'] = $this->order_model->find_orders($options, $per_page, ($data['page']-1)*$per_page);
        
		// ajax
		if (!empty($segments['ajax']) || $search==1){
			$this->load->view('sales/order/ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('sales/order/list',$data);
		}
	}

	// --------------------------------------------------------------------

    /**
	 * 编辑订单状态或者查看订单
	 *
	 *
	 */	  
    function edit()
    {
		
	   $params = $this->uri->uri_to_assoc();

        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];

            //订单
            $this->load->model('order_model');			
            $data['editing'] = $this->order_model->load($id);

			//顾客
            $this->load->model('customer_model');
			$data['editing']['customer'] = $this->customer_model->load($data['editing']['customer_id']);

			//配送方式
			$this->load->model('shipping_model');
			$data['editing']['shipping'] = $this->shipping_model->load($data['editing']['shipping_id']);

			//支付方式
			$this->load->model('payment_model');
			$data['editing']['payment'] = $this->payment_model->load($data['editing']['payment_id']);

			//送货地址
			$this->load->model('order_delivery_model');
			$data['editing']['delivery'] = $this->order_delivery_model->load($id);
			$this->load->model('region_model');       
			$province = $this->region_model->get_name($data['editing']['delivery']['province_id']);
			$city = $this->region_model->get_name($data['editing']['delivery']['city_id']);
			$district = $this->region_model->get_name($data['editing']['delivery']['district_id']);
			$data['editing']['delivery']['district'] = $province.'省'.$city.'市'.$district;

			//购物清单
			$this->load->model('order_item_model');
			$data['editing']['order_items'] = $this->order_item_model->find_order_items($id);

			$data['header_text'] = '订单(ID:'.$data['editing']['id'].')详情';
        } else {
			redirect('order');
        }

       $this->load->view('sales/order/edit',$data);

    }
    
    // --------------------------------------------------------------------

	/**
	 * 提交数据
	 *
	 *
	 */	
    function save()
	{
        $id = $this->input->post('id');
		$status = $this->input->post('status');

		$this->load->model('order_model');
        $this->order_model->change_status($id,$status);

		show_message2('"订单(ID:'.$id.')" 已更新!', 'order/edit/id/'.$id);
			
	}

    // --------------------------------------------------------------------

    /**
	 * 订单回收站
	 *
	 *
	 */	 
	function recycle()
	{
        // 当前页码 
		$page = $this->input->post('page'); $page = (int)$page;
        
		// 查询标记
		$search = $this->input->post('search');
        
		// 查询的订单号
		$order_sn = $this->input->post('order_sn'); $order_sn = $order_sn ? $order_sn : 0;
        
		// 查询的收货人
		$consignee = $this->input->post('consignee'); $consignee = $consignee ? $consignee : 0;
        
		// 查询耳朵订单状态
		$status = $this->input->post('status');

		
        
		// 分页+查询的url设置
		$segments = $this->uri->uri_to_assoc();
		if ($search){
			$segments['order_sn'] = $order_sn;
			$segments['consignee'] = $consignee;
			$segments['status'] = $status;		
		}else{
			$segments['order_sn'] = !empty($segments['order_sn']) ? $segments['order_sn'] : 0;
			$segments['consignee'] = !empty($segments['consignee']) ? $segments['consignee'] : 0;
			$segments['status'] = !empty($segments['status']) ? $segments['status'] : 0;
		}
		$search_uri = '/order_sn/' . $segments['order_sn'] . '/consignee/' . $segments['consignee'] .
			          '/status/' . $segments['status'];
 
		
		//计算查询条件
        $options = array(
            'conditions' => null,
        );

		$data['order_sn'] =  '';
        $data['consignee'] = '';
		$data['status_seleted'] = 0;

        if (!empty($segments['order_sn'])){
			$options['conditions']['o.order_sn'] = $segments['order_sn'];
			$data['order_sn'] = $segments['order_sn'];
        }
        if (!empty($segments['consignee'])){
			$options['conditions']['d.consignee'] = $segments['consignee'];
			$data['consignee'] = $segments['consignee'];
        }
		if (!empty($segments['status'])){
		    $options['conditions']['o.status'] = (int)$segments['status'];
            $data['status_selected'] = (int)$segments['status'];     
        }
       
		// 分页的开始数据行：$page_offset
		if($page){
            $page_offset = $page-1;
		}else if (!empty($segments['page'])){
            $page_offset = (int)$segments['page'];		
        } else {
            $page_offset = 0;
        }
		if ($page_offset<0){
            $page_offset=0;
		}
		
		// 分页url
		$base_url = site_url('order/recycle/page') . '/';

		// 每页显示数据条数
        $per_page = 2;

        // 数据总数
		$this->load->model('order_model');		
		$data['total_rows'] =  $this->order_model->count_orders($options,1);

		// 总页数
        $data['total_pages'] = ceil($data['total_rows']/$per_page);
        
		// 当前页（input）
        $data['page'] = $page_offset+1;
		$data['page'] = ($data['page']>$data['total_pages'] && $data['total_pages']>0) ? $data['total_pages'] : $data['page'];

		// 第一页 最后一页 前一页 后一页
		$data['page_first'] = $base_url.'0'.$search_uri;
		$data['page_last'] = $base_url.($data['total_pages']-1).$search_uri;
		$data['page_prev'] = ($data['page']>1) ? $base_url.($data['page']-2).$search_uri : $data['page_first'];
	    $data['page_next'] = ($data['page']<$data['total_pages']) ? $base_url.($data['page']).$search_uri : $data['page_last'];

		// 当前页
		$data['cur_page'] =  $base_url.($data['page']-1).$search_uri;
		
		// 当前页起始数据号
		$data['show_start'] = ($data['page']-1)*$per_page+1;

		// 当前页结束数据号
		$data['show_end'] = ($page_offset<$data['total_pages']-1) ? ($data['show_start']+$per_page-1) : $data['total_rows'];

	    // 订单结果集
		$data['orders'] = $this->order_model->find_orders($options, $per_page, ($data['page']-1)*$per_page,1);
        
		// ajax
		if (!empty($segments['ajax']) || $search==1){
			$this->load->view('sales/order/recycle_ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('sales/order/recycle_list',$data);
		}

	}

	// --------------------------------------------------------------------

    /**
	 * 入回收站
	 *
	 *
	 */	 
	function in_recycle()
	{		
        $segments = $this->uri->uri_to_assoc(); 
		$order_id = (int)$segments['order'];
		$this->load->model('order_model');
        $this->order_model->in_recycle($order_id);

		show_message2('"订单(ID:'.$order_id.')" 已被放入回收站!', 'order');
	}

	// --------------------------------------------------------------------

    /**
	 * 出回收站
	 *
	 *
	 */	  
	function out_recycle()
	{
        $segments = $this->uri->uri_to_assoc(); 
		$order_id = (int)$segments['order'];
		$this->load->model('order_model');
        $this->order_model->out_recycle($order_id);

		show_message2('"订单(ID:'.$order_id.')" 已被还原!', 'order/recycle');
	}


}