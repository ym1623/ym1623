<?php
/**
 * 订单
 *
 *
 */
class Order_model extends Model
{

    public $order_sn;

	public $customer_id;

	public $payment_id;

	public $shipping_id;

	public $total_product_price;

	public $total_weight = '';

	public $auto_freight_fee ;

	public $actual_freight_fee = '';

	public $payment_fee = '';

	public $total_cost = '';

	public $total_price;

	public $need_pay = '';

	public $already_pay = '';

	public $is_need_invoice = '';

	public $customer_remark = '';

	public $status;

	public $is_delete = 0;

	public $place_at;

    
	function __construct()
    {
        parent::Model();
    }

    // --------------------------------------------------------------------

    /**
	 * load by id
	 *
	 *
	 */	
    function load($id)
    {
        if (!$id){
            return array();
        }

        $query = $this->db->get_where('order',array('id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

    // --------------------------------------------------------------------

    /**
	 * 添加订单
	 *
	 *
	 */	
    function create()
    { 
		$datetime = date('Y-m-d H:i:s');

        $this->db->set('order_sn', $this->order_sn);
		$this->db->set('customer_id', $this->customer_id);
		$this->db->set('payment_id', $this->payment_id);					
		$this->db->set('shipping_id', $this->shipping_id);
		$this->db->set('total_product_price', $this->total_product_price);
		$this->db->set('total_weight', $this->total_weight);
		$this->db->set('auto_freight_fee', $this->auto_freight_fee);
		$this->db->set('actual_freight_fee', $this->actual_freight_fee);
		$this->db->set('payment_fee', $this->payment_fee);
		$this->db->set('total_cost', $this->total_cost);
		$this->db->set('total_price', $this->total_price);
		$this->db->set('already_pay', $this->already_pay);
		$this->db->set('need_pay', $this->need_pay);
		$this->db->set('is_need_invoice', $this->is_need_invoice);
		$this->db->set('customer_remark', $this->customer_remark);
        $this->db->set('status', $this->status);
		$this->db->set('is_delete', $this->is_delete);
		$this->db->set('place_at', $datetime);
            
        return $this->db->insert('order');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 查询订单号是否存在，存在返回true
	 *
	 *
	 */	
	function check_order_sn($order_sn)
	{
        $this->db->select('id');
        $query = $this->db->get_where('order',array('order_sn' => $order_sn));
		if ($query->row_array()){
			return true;
		}
		return false;
	}


    /**
	 * 修改订单为已支付状态
	 *
	 * @access  public
	 * @param   string  $order_sn   订单号
	 * @return  void
	 */
	function order_paid($order_sn)
	{
        $this->db->set('status', OS_PAID);
		$this->db->where('order_sn', $order_sn);
		$this->db->update('order');
	}


    /**
	 * 检查支付的金额是否与订单相符
	 *
	 * @access  public
	 * @param   string   $order_sn   订单号
	 * @param   float    $money       支付接口返回的金额
	 * @return  true
	 */
	function check_money($order_sn, $money)
	{
		$this->db->select('total_price');
		$query = $this->db->get_where('order',array('order_sn' => $order_sn));

		if ($row = $query->row_array()){
            if ($row['total_price'] == $money){
				return true;
			}else{
				return false;
			}
        }

		return false;
	}

    // --------------------------------------------------------------------

    /**
	 * 查询某用户的订单
	 *
	 *
	 */	
	function find_customer_orders($customer_id, $options = array(), $count=5, $offset=0)
	{

		if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }

		$this->db->order_by('place_at','desc');

		$query = $this->_query_orders($customer_id,$options);

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }

        return $rows;
	}

    // --------------------------------------------------------------------

    /**
	 * 私有函数
	 *
	 *
	 */
	function _query_orders($customer_id,$options)
    {
        $this->db->from('order');
		
		$this->db->where('customer_id',$customer_id); //不在回收站的
		
        return $this->db->get();
    }
    
    // --------------------------------------------------------------------

	/**
	 * 总数
	 *
	 *
	 */	
	function count_orders($customer_id,$options = null)
	{		
		$this->db->select('COUNT(DISTINCT(id)) as total');       
        $query = $this->_query_orders($customer_id,$options);
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
	}

    // --------------------------------------------------------------------

	/**
	 * 待付款订单
	 *
	 *
	 */	
	function count_wait_pay_orders($customer_id)
	{
        $status = array(OS_UNCONFIRMED,OS_CONFIRMED);

        $this->db->select('COUNT(DISTINCT(id)) as total');

		$this->db->from('order');

		$this->db->where_in('status',$status);

		$this->db->where('customer_id',$customer_id);

		$query = $this->db->get();

		$total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
	}

    // --------------------------------------------------------------------

	/**
	 * 未完成订单
	 *
	 *
	 */	
	function count_unfinish_orders($customer_id)
	{
        $status = array(1,2,3,4,5,6,7,8);

        $this->db->select('COUNT(DISTINCT(id)) as total');

		$this->db->from('order');

		$this->db->where_in('status',$status);

		$this->db->where('customer_id',$customer_id);

		$query = $this->db->get();

		$total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
	}

    // --------------------------------------------------------------------

	/**
	 * 已完成订单
	 *
	 *
	 */	
	function count_finished_orders($customer_id)
	{
        $status = array(9);

        $this->db->select('COUNT(DISTINCT(id)) as total');

		$this->db->from('order');

		$this->db->where_in('status',$status);

		$this->db->where('customer_id',$customer_id);

		$query = $this->db->get();

		$total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
	}

    // --------------------------------------------------------------------

	/**
	 * 已取消订单
	 *
	 *
	 */	
	function count_cancel_orders($customer_id)
	{
        $status = array(10);

        $this->db->select('COUNT(DISTINCT(id)) as total');

		$this->db->from('order');

		$this->db->where_in('status',$status);

		$this->db->where('customer_id',$customer_id);

		$query = $this->db->get();

		$total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
	}




}