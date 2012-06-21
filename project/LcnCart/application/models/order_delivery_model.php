<?php
/**
 * 
 *
 */
class Order_delivery_model extends Model
{

    public $order_id;

	public $consignee;

	public $contact_mobile;

	public $contact_phone;

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
	 * 添加送货信息
	 *
	 *
	 */	
    function create()
    { 
        $this->db->set('order_id', $this->order_id);
		$this->db->set('consignee', $this->consignee);
		$this->db->set('contact_mobile', $this->contact_mobile);
		$this->db->set('contact_phone', $this->contact_phone);
		$this->db->set('address', $this->address);					
		$this->db->set('province', $this->province);
		$this->db->set('city', $this->city);
		$this->db->set('district', $this->district);
		$this->db->set('province_id', $this->province_id);
		$this->db->set('city_id', $this->city_id);					
		$this->db->set('district_id', $this->district_id);
		$this->db->set('postcode', $this->postcode);
		$this->db->set('shipping_remark', $this->shipping_remark);	
            
        return $this->db->insert('order_delivery');
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