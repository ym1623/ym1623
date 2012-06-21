<?php
/**
 * 角色
 *
 *
 */
class role_model extends Model
{

    var $name;

	var $action_list;
    	
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

        $query = $this->db->get_where('role',array('id' => $id));

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
		$this->db->set('action_list', $this->action_list);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
              
        return $this->db->insert('role');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_roles()
	{
        $query = $this->db->get('role');
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
        $datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('action_list', $this->action_list);
		$this->db->set('updated_at', $datetime);
        
        $this->db->where('id', $id);
        return $this->db->update('role');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 总数
	 *
	 *
	 */	
	function total_rows()
    {
        return $this->db->count_all_results('role');
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

        return $this->db->delete('role'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('role');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }
    
}