<?php
/**
 * 品牌
 *
 *
 */
class brand_model extends Model
{

    var $name;
    
	var $byname;

	var $desc;

	var $logo_path;

	var $logo;
    
    var $website;

	var $sort_order;

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

        $query = $this->db->get_where('product_brand',array('id' => $id));

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
        $this->db->set('name', $this->name);
		$this->db->set('byname', $this->byname);
		$this->db->set('logo_path', $this->logo_path);
		$this->db->set('logo', $this->logo);
		$this->db->set('desc', $this->desc);
		$this->db->set('website', $this->website);
        $this->db->set('sort_order', $this->sort_order);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
              
        return $this->db->insert('product_brand');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_brands($options = array(), $count=20, $offset=0)
	{
		if (!is_array($options)){
            return array();
        }
        if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }
        
		//brand
		$this->db->select('b.*');

		$query = $this->_query_brands($options);

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
        $datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('byname', $this->byname);
		$this->db->set('logo_path', $this->logo_path);
		if ($this->logo){
			$this->db->set('logo', $this->logo);
		}
		$this->db->set('desc', $this->desc);
		$this->db->set('website', $this->website);
        $this->db->set('sort_order', $this->sort_order);
		$this->db->set('updated_at', $datetime);
        
        $this->db->where('id', $id);
        return $this->db->update('product_brand');
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

        return $this->db->delete('product_brand'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('product_brand');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }

    // --------------------------------------------------------------------

    /**
	 * 私有函数
	 *
	 *
	 */
	function _query_brands($options = null)
    {
        $this->db->from('product_brand as b');
       
		if (!empty($options['conditions'])){
            $this->db->where($options['conditions']);
        }
        
        if (isset($options['order'])){
            $this->db->order_by($options['order'],'desc');
        } else {
            $this->db->order_by('b.id DESC');
        }

        return $this->db->get();
    }
    
	// --------------------------------------------------------------------

	/**
	 * 总数
	 *
	 *
	 */	
	function count_brands($options = array())
    {
        $this->db->select('COUNT(DISTINCT(b.id)) as total');
        
        $query = $this->_query_brands($options);
        
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
    }
    
}