<?php
/**
 * 配送方式 区域
 *
 *
 */
class shipping_area_model extends Model
{

    var $name;
    
	var $shipping_id;

	var $configure;

	

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

        $query = $this->db->get_where('shipping_area',array('id' => $id));

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
        $this->db->set('name', $this->name);
		$this->db->set('shipping_id', $this->shipping_id);
		$this->db->set('configure', $this->configure);
	
              
        return $this->db->insert('shipping_area');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_shipping_areas()
	{
        $query = $this->db->get_where('shipping_area',array('shipping_id' => $this->shipping_id));
        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

    // --------------------------------------------------------------------

    /**
	 * 更新
	 *
	 *
	 */	
    function update($id)
    {
        $this->db->set('name', $this->name);
		$this->db->set('shipping_id', $this->shipping_id);
		$this->db->set('configure', $this->configure);
        
        $this->db->where('id', $id);
        return $this->db->update('shipping_area');
    }
    
		
	function total_rows()
    {
        return $this->db->count_all_results('shipping_area');
    }

    // --------------------------------------------------------------------

    /**
	 * 删除
	 *
	 *
	 */	
    function delete($id)
    {
		$this->db->where('shipping_area_id', $id);
        $this->db->delete('area_region');
		
		$this->db->where('id', $id);
        return $this->db->delete('shipping_area'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('shipping_area');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }

   
}