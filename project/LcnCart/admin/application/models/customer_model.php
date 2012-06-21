<?php
/**
 * 顾客
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
	 * 创建
	 *
	 *
	 */	
    function create()
    { 
		$datetime = date('Y-m-d H:i:s');
        $this->db->set('name', $this->name);
		$this->db->set('email', $this->email);
		if(!$this->password_auto){
		    $this->db->set('password', md5($this->password));
		}else{
			$this->db->set('password', md5($this->password_auto));
		    $this->db->set('password_auto', $this->password_auto);
		}
		$this->db->set('dob', $this->dob);
        $this->db->set('is_sendemail', $this->is_sendemail);
		$this->db->set('registry_at', $datetime);
		$this->db->set('updated_at', $datetime);
              
        return $this->db->insert('customer');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_customers($options = array(), $count=20, $offset=0)
	{
		if (!is_array($options)){
            return array();
        }

        if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }
        	
        $query = $this->_query_customers($options);

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
		$this->db->set('email', $this->email);
		if ($this->password_auto){
			$this->db->set('password', md5($this->password_auto));
		    $this->db->set('password_auto', $this->password_auto);
		}elseif ($this->password){
            $this->db->set('password', md5($this->password));
			$this->db->set('password_auto', null);
		}else{
            $this->db->set('password_auto', null);
		}
		$this->db->set('dob', $this->dob);
        $this->db->set('is_sendemail', $this->is_sendemail);
		$this->db->set('updated_at', $datetime);
        
        $this->db->where('id', $id);
        return $this->db->update('customer');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 删除
	 *
	 *
	 */			
    function delete($id)
    { 
		$this->db->where('customer_id', $id);
		$this->db->delete('customer_address'); 

		$this->db->where('id', $id);
        return $this->db->delete('customer'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('customer');
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
	function _query_customers($options = null)
    {
        $this->db->from('customer');
        
		if (!empty($options['conditions'])){
            $this->db->where($options['conditions']);
        }
        
        if (isset($options['order'])){
            $this->db->order_by($options['order']);
        } else {
            $this->db->order_by('id DESC');
        }

        return $this->db->get();
    }

    /**
	 * 总数
	 *
	 *
	 */	
	function count_customers($options = array())
    {
        $this->db->select('COUNT(DISTINCT(id)) as total');
        
        $query = $this->_query_customers($options);
        
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
    }
    
}