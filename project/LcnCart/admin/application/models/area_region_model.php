<?php
/**
 * 
 *
 */
class Area_region_model extends Model
{

    var $shipping_area_id;
    
	var $region_id;

	

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

        $query = $this->db->get_where('area_region',array('id' => $id));

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
        $this->db->set('shipping_area_id', $this->shipping_area_id);
		$this->db->set('region_id', $this->region_id);		
              
        return $this->db->insert('area_region');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_area_regions()
	{
        $query = $this->db->get_where('area_region',array('shipping_area_id' => $this->shipping_area_id));
        $rows = array();
        foreach ($query->result_array() as $row){
            $query1 = $this->db->get_where('region',array('region_id' => $row['region_id']));
			$row1 = $query1->row_array();
			$row['area'] = $row1['region_name'];
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

   
    // --------------------------------------------------------------------

    /**
	 * 根据配送区域id删除数据
	 *
	 *
	 */	
    function delete_by_shipping_area($shipping_area_id)
    {        
		$this->db->where('shipping_area_id', $shipping_area_id);

        return $this->db->delete('area_region'); 
    }
	  
}