<?php
/**
 * 分类
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
        
        return $row;
    }

    // --------------------------------------------------------------------

    /**
	 * 全部分类
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
            $rows[] = $row;
        }
        return $rows;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 按等级查询子分类
	 *
	 *
	 */	
    
	function find_by_level($level = 1,$parent_id='')
	{
		$this->db->from('product_cat');
        $this->db->where('level',(int)$level);
		if ($parent_id){
            $this->db->where('parent_id',(int)$parent_id);
		}
	    $this->db->order_by('path','asc');		   
        $query = $this->db->get();
        $rows = array();
        foreach ($query->result_array() as $row){			
            $rows[] = $row;
        }
        return $rows;
	}

	
    
	// --------------------------------------------------------------------

    /**
	 * 子分类
	 *
	 *
	 */	
    function find_childs($id=0)
	{
		$this->db->from('product_cat');
        $this->db->where('parent_id',(int)$id);
		
	    //$this->db->order_by('path','asc');		   
        $query = $this->db->get();
        $rows = array();
        foreach ($query->result_array() as $row){			
            $rows[] = $row;
        }
        return $rows;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 子孙分类id
	 *
	 *
	 */	
	function find_sub_cat_ids($id=0)
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
					$rows[] = $_row1['id'];
					if (!$_row1['is_leaf']){
                        $this->find_sub_cat_ids($_row1['id']);
				    }
				endforeach;
			}else{
				$rows[] = $id;
			}
		}
								
        return $rows;
	}


}