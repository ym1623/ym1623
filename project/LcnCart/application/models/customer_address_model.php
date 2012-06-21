<?php
/**
 * 地址簿
 *
 *
 */
class Customer_address_model extends Model
{

    var $customer_id;
    
	var $address_name;

	var $consignee;

	var $invoice_head;
    
    var $province_id;

	var $city_id;

	var $district_id;

	var $address;

	var $postcode;

	var $remark;

	var $is_default;

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
    function load($customer_id)
    {
        if (!$customer_id){
            return array();
        }

        $query = $this->db->get_where('customer_address',array('customer_id' => $customer_id,'is_default' => 1));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

	// --------------------------------------------------------------------

    /**
	 * 更新默认地主
	 *
	 *
	 */	     
    function update($user_id)
    {
        $datetime = date('Y-m-d H:i:s');
		//$this->db->set('address_name', $this->address_name);
		$this->db->set('consignee', $this->consignee);
		$this->db->set('phone', $this->phone);
		$this->db->set('mobile', $this->mobile);
		//$this->db->set('invoice_head', $this->invoice_head);
		$this->db->set('province_id', $this->province_id);
		$this->db->set('city_id', $this->city_id);
		$this->db->set('district_id', $this->district_id);
		$this->db->set('address', $this->address);
		$this->db->set('postcode', $this->postcode);
		//$this->db->set('fax', $this->fax);
		$this->db->set('remark', $this->remark);
		$this->db->set('updated_at', $datetime);

        $this->db->where('is_default', 1);
        $this->db->where('customer_id', $user_id);

        return $this->db->update('customer_address');
    }

    // --------------------------------------------------------------------

    /**
	 * 添加默认地址
	 *
	 *
	 */	
	function create()
    { 
		$datetime = date('Y-m-d H:i:s');
        $this->db->set('customer_id', $this->customer_id);
		$this->db->set('is_default', 1);
		$this->db->set('address_name', $this->address_name);
		$this->db->set('consignee', $this->consignee);
		$this->db->set('phone', $this->phone);
		$this->db->set('mobile', $this->mobile);
		$this->db->set('invoice_head', $this->invoice_head);
		$this->db->set('province_id', $this->province_id);
		$this->db->set('city_id', $this->city_id);
		$this->db->set('district_id', $this->district_id);
		$this->db->set('address', $this->address);
		$this->db->set('postcode', $this->postcode);
		$this->db->set('fax', $this->fax);
		$this->db->set('remark', $this->remark);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
	             
        return $this->db->insert('customer_address');
    }
	
}