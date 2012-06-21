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
	 * 结果集
	 *
	 *
	 */	
	function find_orders($options = array(), $count=20, $offset=0, $is_delete=0)
	{
		if (!is_array($options)){
            return array();
        }

        if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }
        
		//order
        $this->db->select('o.*');
		$this->db->select('o.id as id');

		//order_delivery
        $this->db->select('d.consignee');
        
        

        $query = $this->_query_orders($options,$is_delete);

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
	function _query_orders($options = null,$is_delete)
    {
        $this->db->from('order as o');
        $this->db->join('order_delivery as d', 'd.order_id= o.id', 'left outer');
       
		$this->db->where('o.is_delete',$is_delete);

		if (!empty($options['conditions'])){
			foreach($options['conditions'] as $key => $value ):
				switch($key){
                    case 'o.order_sn' : $this->db->like($key,$value);break;
					case 'd.consignee' : $this->db->like($key,$value);break;
					default : $this->db->where($key,$value);
			    }
			endforeach;
        }
        
        if (isset($options['order'])){
            $this->db->order_by($options['order']);
        } else {
            $this->db->order_by('o.place_at DESC');
        }

        return $this->db->get();
    }

    /**
	 * 总数
	 *
	 *
	 */	
	function count_orders($options = array(),$is_delete=0)
    {
        $this->db->select('COUNT(DISTINCT(o.id)) as total');
        
        $query = $this->_query_orders($options,$is_delete);
        
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
    }


	/**
	 * 入回收站
	 *
	 *
	 */	
	function in_recycle($id)
	{
        $this->db->set('is_delete', 1);
        $this->db->where('id', $id);
        return $this->db->update('order');
	}

    /**
	 * 出回收站
	 *
	 *
	 */	
	function out_recycle($id)
	{
        $this->db->set('is_delete', 0);
        $this->db->where('id', $id);
        return $this->db->update('order');
	}


	/**
	 * 更改订单状态
	 *
	 *
	 */	
	function change_status($id,$status)
	{
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        return $this->db->update('order');
	}

}