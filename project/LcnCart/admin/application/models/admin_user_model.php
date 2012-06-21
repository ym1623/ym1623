<?php
/**
 * 管理员
 *
 *
 */
class Admin_user_model extends Model
{

    var $name;
    
	var $email;

	var $password;

	

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

        $query = $this->db->get_where('admin_user',array('id' => $id));

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
		$this->db->set('email', $this->email);
		$this->db->set('password', md5($this->password));
		$this->db->set('role_id', $this->role_id);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
              
        return $this->db->insert('admin_user');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_admin_users()
	{
        $query = $this->db->get('admin_user');
        $rows = array();
        foreach ($query->result_array() as $row){          
			// 角色
			$query1 = $this->db->get_where('role',array('id' => $row['role_id']));
			$row1 = $query1->row_array();
			if (!empty($row1)){
				$row['role_name'] = $row1['name'];
			}
			else{
				$row['role_name'] = '';			
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
        $datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('email', $this->email);
		if($this->password){
		    $this->db->set('password', md5($this->password));
		}
		$this->db->set('role_id', $this->role_id);
		$this->db->set('updated_at', $datetime);
        
        $this->db->where('id', $id);
        return $this->db->update('admin_user');
    }
       
	// --------------------------------------------------------------------

    /**
	 * 总数
	 *
	 *
	 */	
	function total_rows()
    {
        return $this->db->count_all_results('admin_user');
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

        return $this->db->delete('admin_user'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('admin_user');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }

    // --------------------------------------------------------------------

    /**
	 * 登陆后获取操作权限
	 *
	 *
	 */
	function signin()
	{
        $query = $this->db->get_where('admin_user',array('name' => $this->name,'password' => md5($this->password)));

        if ($row = $query->row_array()){
			// 角色
			$query1 = $this->db->get_where('role',array('id' => $row['role_id']));
			$row1 = $query1->row_array();
			if (!empty($row1)){
				$row['action_list'] = $row1['action_list'];
			}
			else{
				$row['action_list'] = '';			
			}
            return $row;
        }

        return array();
	}
    
	// --------------------------------------------------------------------

    /**
	 * 获取该用户角色
	 *
	 *
	 */
	function role_user($role_id)
    {
        if (!$role_id){
            return array();
        }

        $query = $this->db->get_where('admin_user',array('role_id' => $role_id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

    
}