<?php
/**
 * 订单项
 *
 *
 */
class Order_item_model extends Model
{

    public $order_id;

	public $product_id;

	public $product_name;

	public $quantity;

	public $price;

	public $weight;


    
	function __construct()
    {
        parent::Model();
    }

	// --------------------------------------------------------------------

    /**
	 * 添加订单项
	 *
	 *
	 */	
    function create()
    { 
        $this->db->set('order_id', $this->order_id);
		$this->db->set('product_id', $this->product_id);
		$this->db->set('product_name', $this->product_name);					
		$this->db->set('quantity', $this->quantity);
		$this->db->set('price', $this->price);
		$this->db->set('weight', $this->weight);		
            
        return $this->db->insert('order_item');
    }
  
    // --------------------------------------------------------------------

    /**
	 * 查找订单项
	 *
	 *
	 */	
	function find_order_items($order_id, $count='')
	{
		if (!$order_id){
            return array();
        }
       
		if ($count){
            $this->db->limit((int)$count, 0);
        }

        $query = $this->db->get_where('order_item',array('order_id' => $order_id));

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

}