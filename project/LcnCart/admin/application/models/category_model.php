<?php
/**
 * 
 *
 */
class category_model extends Model
{

    var $name;

    var $parent_id;

	var $sort_order;

	var $_level = 1;

	var $_path =array();

	var $_is_root;

	var $_is_leaf;

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

        $query = $this->db->get_where('product_cat',array('id' => $id));
        $row = array();
        $row = $query->row_array();    
		
		// 分类下的商品数
        $this->db->select('COUNT(DISTINCT(id)) as total');
		$query_pro = $this->db->get_where('product',array('cat_id' => $id));
		$row['pro_count'] = 0;
		if ($row_pro = $query_pro->row_array()){
			$row['pro_count'] = (int)$row_pro['total'];
		}

        return $row;
    }

	// --------------------------------------------------------------------

    /**
	 * 创建
	 *
	 *
	 */	
    function create()
    { 
		//确定父节点不是叶节点
		if ($this->parent_id!=0){
            $this->_update_leaf($this->parent_id,0);
		}

		$datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('parent_id', $this->parent_id);
        $this->db->set('sort_order', $this->sort_order);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
        $this->db->insert('product_cat');

	    $newly_one = $this->_get_newly_one();
		$_level = $this->_set_level($newly_one['id']);
		$_path = $this->_set_path($newly_one['id']);
		$_is_root = $this->_set_root($newly_one['id']);
		$_is_leaf = $this->_set_leaf($newly_one['id']);
		$this->db->set('level', $_level);
		$this->db->set('path', $_path);
		$this->db->set('is_root', $_is_root);
		$this->db->set('is_leaf', $_is_leaf);
		$this->db->where('id', $newly_one['id']);
        $this->db->update('product_cat');

    }

    // --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
	function find_all_categorys()
	{
		$this->db->from('product_cat');
        		
	    $this->db->order_by('path','asc');		   

        $query = $this->db->get();
        $rows = array();
        foreach ($query->result_array() as $row){
			$this->db->select('COUNT(DISTINCT(id)) as total');
        	$query_pro = $this->db->get_where('product',array('cat_id' => $row['id']));
            $row['pro_count'] = 0;
            if ($row_pro = $query_pro->row_array()){
                $row['pro_count'] = (int)$row_pro['total'];
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
		// 重新设置旧父节点是否为叶节点
		$row = $this->load($id);
		if ($row['parent_id']!=0 && $row['parent_id']!=$this->parent_id){
          $query = $this->db->get_where('product_cat',array('parent_id' => $row['parent_id']));
		  $rows = $query->result_array();
		  if (count($rows)<2){
              $this->_update_leaf($row['parent_id'],1);
		  }
		}

        // 确定新父节点不是叶节点
		if ($this->parent_id!=0){
            $this->_update_leaf($this->parent_id,0);
		}

        $datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('parent_id', $this->parent_id);
        $this->db->set('sort_order', $this->sort_order);
		$this->db->set('updated_at', $datetime);       
        $this->db->where('id', $id);
        $this->db->update('product_cat');

		$_level = $this->_set_level($id);
		$_path = $this->_set_path($id);
		$_is_root = $this->_set_root($id);
		$this->db->set('level', $_level);
		$this->db->set('path', $_path);
		$this->db->set('is_root', $_is_root);
		$this->db->where('id', $id);
        $this->db->update('product_cat');
		$this->_path = array();
		$this->_level = 1;
    }

    // --------------------------------------------------------------------

    /**
	 * 删除
	 *
	 *
	 */	
	function delete($id)
    {
		// 重新设置旧父节点是否为叶节点
		$row = $this->load($id);
		if ($row['parent_id']!=0){
          $query = $this->db->get_where('product_cat',array('parent_id' => $row['parent_id']));
		  $rows = $query->result_array();
		  if (count($rows)<2){
              $this->_update_leaf($row['parent_id'],1);
		  }
		}

		$this->db->where('id', $id);

        return $this->db->delete('product_cat'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function _get_newly_one()
    {
        $this->db->from('product_cat');
        $this->db->order_by("updated_at", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }
    
    // --------------------------------------------------------------------

    /**
	 * 设置层次
	 *
	 *
	 */
    function _set_level($id)
	{
		$row = $this->load($id);
		if ($row['parent_id']!=0){
		    $this->_level++;
			$this->_set_level($row['parent_id']);
		}
		return $this->_level;
	}

    // --------------------------------------------------------------------

    /**
	 * 设置路径
	 *
	 *
	 */
	function _set_path($id)
	{
        $row = $this->load($id);
		if ($row['parent_id']!=0){
            $this->_path[] = $row['parent_id'];			
			$this->_set_path($row['parent_id']);
		}
		$rsort = array();
		for($i=count($this->_path)-1;$i>=0;$i--)
		{
            $rsort[] = $this->_path[$i];
		}
        $rsort_str = implode(',',$rsort);
		if(!empty($rsort_str)){
		    $path_str = $rsort_str.','.$row['id'];
		}else{
            $path_str = $row['id'];
		}
        return $path_str;
	}

    // --------------------------------------------------------------------

    /**
	 * 设置根
	 *
	 *
	 */
	function _set_root($id)
	{
        $row = $this->load($id);
		if ($row['parent_id']==0){
			$this->_is_root = 1;
		}else{
            $this->_is_root = 0;
		}
        return $this->_is_root;
	}

    // --------------------------------------------------------------------

    /**
	 * 设置叶
	 *
	 *
	 */
	function _set_leaf($id)
	{
        $query = $this->db->get_where('product_cat',array('parent_id' => $id));
        $row = $query->row_array();
		if (!empty($row)){
			$this->_is_leaf = 0;
		}else{
            $this->_is_leaf = 1;
		}
		return $this->_is_leaf;
	}

    // --------------------------------------------------------------------

    /**
	 * 设置分类为叶分类
	 *
	 *
	 */                                                                          
    function _update_leaf($id,$_is_leaf)
	{
        $this->db->set('is_leaf', $_is_leaf);
        $this->db->where('id', $id);
        return $this->db->update('product_cat');      
	}
    
    // --------------------------------------------------------------------

    /**
	 * 子孙分类
	 *
	 *
	 */
	function find_sub_cats($id=0)
	{
        static $rows = array();	
	    	
        $this->db->select('id, is_leaf');
		$query = $this->db->get_where('product_cat',array('id' => $id));
        $row = $query->row_array();
		if (!empty($row)){
			if (!$row['is_leaf']){
				$this->db->select('id, is_leaf');
	         	$query1 = $this->db->get_where('product_cat',array('parent_id' => $id));
                $row1 = $query1->result_array();
				foreach($row1 as $_row1):
					$rows[] = $this->load($_row1['id']);
					if (!$_row1['is_leaf']){
                        $this->find_sub_cats($_row1['id']);
				    }
				endforeach;
			}else{
				$rows[] = $this->load($id);
			}
		}
								
        return $rows;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 非叶分类
	 *
	 *
	 */
	function find_not_leaf()
	{		
        $this->db->where('is_leaf',0);
		$this->db->order_by('path','asc');		   
        $query = $this->db->get('product_cat');
        $rows = array();
        foreach ($query->result_array() as $row){
			$this->db->select('COUNT(DISTINCT(id)) as total');
        	$query_pro = $this->db->get_where('product',array('cat_id' => $row['id']));
            $row['pro_count'] = 0;
            if ($row_pro = $query_pro->row_array()){
                $row['pro_count'] = (int)$row_pro['total'];
            }
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

    // --------------------------------------------------------------------

    /**
	 * 更新孩子分类
	 *
	 *
	 */
	function update_child($id)
	{
		$this->db->from('product_cat');
        $this->db->like('path',$id.',');
		$query = $this->db->get();
		foreach ($query->result_array() as $row){
            $path = $this->_set_path($row['id']);
			$level = $this->_set_level($row['id']);
			$this->db->set('path', $path);
			$this->db->set('level', $level);
            $this->db->where('id', $row['id']);
            $this->db->update('product_cat'); 
			$this->_path = array();
			$this->_level = 1;
        }
	}

}
