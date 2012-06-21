<?php
/**
 * 客户
 *
 *
 */
class Customer_model extends Model
{

    var $name;
    
	var $email;

	var $password;

	var $dob;
    
    var $is_sendemail;

	var $password_auto;

	function __construct()
    {
        parent::Model();
    }

	// --------------------------------------------------------------------

    /**
	 * 添加新客户
	 *
	 *
	 */	
	function create()
    { 
		$datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('email', $this->email);
		$this->db->set('password', md5($this->password));					
		$this->db->set('registry_at', $datetime);
		$this->db->set('updated_at', $datetime);
              
        return $this->db->insert('customer');
    }

    // --------------------------------------------------------------------

    /**
	 * 查询该用户名是否存在
	 *
	 *
	 */	
	function check_name($name)
	{
		$query = $this->db->get_where('customer',array('name' => $name));
        if ($row = $query->row_array()){
            return true;
        }
        return false;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 查询该邮箱是否存在
	 *
	 *
	 */	
	function check_email($email)
	{
		$query = $this->db->get_where('customer',array('email' => $email));
        if ($row = $query->row_array()){
            return true;
        }
        return false;
	}

   // --------------------------------------------------------------------

    /**
	 * 查询该用户，返回用户信息
	 *
	 *
	 */	
	function check_customer()
	{
        $query = $this->db->get_where('customer',array('name' => $this->name,'password' => md5($this->password)));
        if ($row = $query->row_array()){			
            return $row;
        }
        return array();
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

        $query = $this->db->get_where('customer',array('id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }
	
    // --------------------------------------------------------------------

    /**
	 * 更新客户信息
	 *
	 *
	 */	
	function update($id)
    {
        $datetime = date('Y-m-d H:i:s');
		$this->db->set('email', $this->email);
		$this->db->set('dob', $this->dob);
		$this->db->set('updated_at', $datetime);
		
        $this->db->where('id', $id);
        return $this->db->update('customer');
    }

    // --------------------------------------------------------------------

    /**
	 * 查询密码是否正确
	 *
	 *
	 */	
    function check_pwd($password)
	{
		$query = $this->db->get_where('customer',array('password' => md5($password)));
        if ($row = $query->row_array()){
            return true;
        }
        return false;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 更新密码
	 *
	 *
	 */	
	function update_pwd($id,$pwd)
    {
		$this->db->set('password', md5($pwd));	
        $this->db->where('id', $id);
        return $this->db->update('customer');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 更新最后登录时间
	 *
	 *
	 */	
    function update_last_login($customer_id)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('last_login_at', $datetime);	
        $this->db->where('id', $customer_id);
        return $this->db->update('customer');
	}
}
