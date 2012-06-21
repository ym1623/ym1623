<?php
/**
 * 品牌
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
    function load($id)
    {
        if (!$id){
            return array();
        }

        $query = $this->db->get_where('customer_address',array('id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

	// --------------------------------------------------------------------

    /**
	 * 创建
	 *
	 *
	 */	
    function create()
    { 
		$datetime = date('Y-m-d H:i:s');
        $this->db->set('customer_id', $this->customer_id);
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
    
    // --------------------------------------------------------------------

    /**
	 * 更新
	 *
	 *
	 */	
    function update($id)
    {
        $datetime = date('Y-m-d H:i:s');
        $this->db->set('customer_id', $this->customer_id);
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
		$this->db->set('updated_at', $datetime);
        $this->db->where('id', $id);

        return $this->db->update('customer_address');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
	function find_customer_address($customer_id)
	{
        $query = $this->db->get_where('customer_address',array('customer_id' => $customer_id));
		$rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

    // --------------------------------------------------------------------

    /**
	 * 删除
	 *
	 *
	 */
    function delete($id)
    { 	
		$this->db->where('id', $id);
        return $this->db->delete('customer_address'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('customer_address');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }

    // --------------------------------------------------------------------

    /**
	 * 设置默认地址
	 *
	 *
	 */
	function set_default($id,$customer_id,$is_default)
    {
		if($is_default){
			$this->db->set('is_default', 1);
			$this->db->where('id', $id);
			$this->db->update('customer_address');

			$this->db->set('is_default', 0);
			$this->db->where('customer_id', $customer_id);
			$this->db->where_not_in('id', $id);
			$this->db->update('customer_address');
		}else{
			$this->db->set('is_default', 0);
			$this->db->where('id', $id);
			$this->db->update('customer_address');
		}

		return true;
    }
	   
}