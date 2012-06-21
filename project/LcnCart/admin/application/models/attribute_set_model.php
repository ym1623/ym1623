<?php
/**
 * 
 *
 */
class Attribute_set_model extends Model
{

    var $name;
    
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

        $query = $this->db->get_where('product_attr_set',array('id' => $id));

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
              
        return $this->db->insert('product_attr_set');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_attribute_sets()
	{
        $query = $this->db->get('product_attr_set');
        $rows = array();
        foreach ($query->result_array() as $row){
			$this->db->select('COUNT(DISTINCT(id)) as total');
        	$query_attr = $this->db->get_where('product_attr',array('attr_set_id' => $row['id']));
            $row['attr_count'] = 0;
            if ($row_attr = $query_attr->row_array()){
                $row['attr_count'] = (int)$row_attr['total'];
            }
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
       
        $this->db->where('id', $id);
        return $this->db->update('product_attr_set');
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

        return $this->db->delete('product_attr_set'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('product_attr_set');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }
    
    
}