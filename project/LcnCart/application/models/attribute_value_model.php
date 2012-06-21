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
	 * 某个商品属性值
	 *
	 *
	 */	
	function find_product_attr_values($product_id = '')
	{
		if (empty($product_id)){
			return array();
		}
		//attr_value
        $this->db->select('v.*');
		//attr
        $this->db->select('attr_name as attr_name');

		$this->db->from('product_attr_value as v');
        $this->db->join('product_attr as a', 'a.id = v.attr_id', 'left outer');

		$this->db->where('product_id' , (int)$product_id);

		$query = $this->db->get();

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }
        return $rows;
	}
}