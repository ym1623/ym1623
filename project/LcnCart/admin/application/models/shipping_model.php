<?php
/**
 * 
 *
 */
class Shipping_model extends Model
{

    var $code;
    
	var $name;

	var $desc;
    
    var $insure;

	var $enabled;

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

        $query = $this->db->get_where('shipping',array('id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	    
    function find_shippings()
	{
        $query = $this->db->get('shipping');
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
		$this->db->set('name', $this->name);
		$this->db->set('insure', $this->insure);
		$this->db->set('desc', $this->desc);
		$this->db->set('enabled', $this->enabled);
				      
        $this->db->where('id', $id);
        return $this->db->update('shipping');
    }

    // --------------------------------------------------------------------

    /**
	 * 卸载
	 *
	 *
	 */	
	function uninstall($id)
    {		
		$this->db->set('enabled', 0);       
        $this->db->where('id', $id);
        return $this->db->update('shipping');
    }

    // --------------------------------------------------------------------

    /**
	 * 装载
	 *
	 *
	 */	
	function install($id)
    {		
		$this->db->set('enabled', 1);       
        $this->db->where('id', $id);
        return $this->db->update('shipping');
    }

}