<?php
/**
 * 商品属性
 *
 *
 */
class Attribute_model extends Model
{

    var $attr_set_id;

	var $attr_name;

	var $attr_type;

	var $option_values;

	var $default_value;

    
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

        $query = $this->db->get_where('product_attr',array('id' => $id));

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
        $this->db->set('attr_set_id', $this->attr_set_id);
		$this->db->set('attr_name', $this->attr_name);
        $this->db->set('attr_type', $this->attr_type);
        $this->db->set('option_values', $this->option_values);
        $this->db->set('default_value', $this->default_value);

		return $this->db->insert('product_attr');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */
    function find_attributes($options = array(), $count=20, $offset=0)
	{
		if (!is_array($options)){
            return array();
        }
        if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }
        //attribute
		$this->db->select('a.*');
        //attr_set
        $this->db->select('s.name as attr_set_name');

        $query = $this->_query_attributes($options);

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
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
		$this->db->set('attr_set_id', $this->attr_set_id);
        $this->db->set('attr_name', $this->attr_name);
        $this->db->set('attr_type', $this->attr_type);
        $this->db->set('option_values', $this->option_values);
        $this->db->set('default_value', $this->default_value);
       
        $this->db->where('id', $id);
        return $this->db->update('product_attr');
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

        return $this->db->delete('product_attr'); 
    }
    
    // --------------------------------------------------------------------

    /**
	 * 私有函数
	 *
	 *
	 */	
    function _query_attributes($options = null)
    {
        $this->db->from('product_attr as a');
        $this->db->join('product_attr_set as s', 's.id = a.attr_set_id', 'left outer');
       
		if (!empty($options['conditions'])){
            $this->db->where($options['conditions']);
        }
        
        if (isset($options['order'])){
            $this->db->order_by($options['order']);
        } else {
            $this->db->order_by('a.id DESC');
        }

        return $this->db->get();
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('product_attr');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }
    
    // --------------------------------------------------------------------

    /**
	 * 总数
	 *
	 *
	 */
	function count_attributes($options = array())
    {
        $this->db->select('COUNT(DISTINCT(a.id)) as total');
        
        $query = $this->_query_attributes($options);
        
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
    }
	
    // --------------------------------------------------------------------

    /**
	 * 根据属性分组筛选属性
	 *
	 *
	 */
	function find_attrs_by_attr_set($attr_set_id=0)
	{
		$query = $this->db->get_where('product_attr',array('attr_set_id' => $attr_set_id));
        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }
        return $rows;
	}
    
}