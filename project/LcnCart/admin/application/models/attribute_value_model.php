<?php
/**
 * 商品属性值
 *
 *
 */
class Attribute_value_model extends Model
{

    var $product_id;

	var $attr_id;

	var $attr_value;

    
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

        $query = $this->db->get_where('product_attr_value',array('id' => $id));

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
        $this->db->set('product_id', $this->product_id);
		$this->db->set('attr_id', $this->attr_id);
        $this->db->set('attr_value', $this->attr_value);

		return $this->db->insert('product_attr_value');
    }	

    // --------------------------------------------------------------------

    /**
	 * 更新
	 *
	 *
	 */	
    function update($attr_id,$product_id)
    {
		$this->db->set('product_id', $this->product_id);
		$this->db->set('attr_id', $this->attr_id);
        $this->db->set('attr_value', $this->attr_value);
       
        $this->db->where('attr_id', $attr_id);
		$this->db->where('product_id', $product_id);
        return $this->db->update('product_attr_value');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 删除
	 *
	 *
	 */	
    function delete($attr_id,$product_id,$attr_values = array())
    {        
		$this->db->where('attr_id', $attr_id);
		$this->db->where('product_id', $product_id);
		if(!empty($attr_values)){
		    $this->db->where_not_in('attr_value', $attr_values);
		}

        return $this->db->delete('product_attr_value'); 
    }


	
    // --------------------------------------------------------------------

    /**
	 * 判断单选属性是否存在
	 *
	 *
	 */	
	function is_exist($attr_id,$product_id)
	{
        $query = $this->db->get_where('product_attr_value',array('attr_id' => $attr_id,'product_id' => $product_id));

        if ($row = $query->row_array()){
            return TRUE;
        }

        return FALSE;
	}

   
    // --------------------------------------------------------------------

    /**
	 * 删除旧属性分组的属性值
	 *
	 *
	 */	
	function delete_old($product_id)
    {   
		$this->db->where('product_id', $product_id);
        return $this->db->delete('product_attr_value'); 
    }

   

    // --------------------------------------------------------------------

    /**
	 * 判断复选属性是否存在
	 *
	 *
	 */	
    function is_exist1($attr_value)
	{
        $query = $this->db->get_where('product_attr_value',array('attr_value' => $attr_value));

        if ($row = $query->row_array()){
            return TRUE;
        }

        return FALSE;
	}

}