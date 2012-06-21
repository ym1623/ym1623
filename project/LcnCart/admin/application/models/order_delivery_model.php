<?php
/**
 * 收货信息
 *
 *
 */
class Order_delivery_model extends Model
{

    public $order_id;

	public $consignee;

	public $address;

	public $province='';

	public $city='';

	public $district='';

	public $province_id;

	public $city_id;

	public $district_id;

    public $postcode;

	public $shipping_remark = '';
    
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

        $query = $this->db->get_where('order_delivery',array('order_id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

}