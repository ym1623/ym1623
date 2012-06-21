<?php
/**
 * 配送方式
 *
 *
 */
class Shipping_model extends Model
{

    var $code;
    
	var $name;

	var $desc;
    
    var $insure;

	var $enabled;

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

        $query = $this->db->get_where('shipping',array('id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }
	
	// --------------------------------------------------------------------

    /**
	 * 按所选地区筛选符合条件的配送方式
	 *
	 *
	 */	
    function available_shipping_list($region_id_list)
	{
		//shpping
        $this->db->select('s.*');
		$this->db->select('s.name as shipping_name');
		//shipping_area
        $this->db->select('a.*');
		//area_region
        $this->db->select('r.*');

		$this->db->from('shipping as s');
        $this->db->join('shipping_area as a', 'a.shipping_id = s.id', 'left outer');
        $this->db->join('area_region as r', 'r.shipping_area_id = a.id', 'left outer');
        
		$this->db->where_in('r.region_id',$region_id_list);
		$this->db->where('s.enabled',1);
		
		$query = $this->db->get();

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }
        return $rows;
	}

    
}