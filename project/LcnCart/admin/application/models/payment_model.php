<?php
/**
 * 支付方式
 *
 *
 */
class Payment_model extends Model
{

    var $code;
    
	var $name;

	var $fee;

	var $desc;

    var $charge_date;

    var $order;

	var $pay_config;

	var $enabled;
    
    var $is_cod;

	var $is_online;

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

        $query = $this->db->get_where('payment',array('id' => $id));

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
    function find_payments()
	{
        $query = $this->db->get('payment');
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
		$this->db->set('fee', $this->fee);
		$this->db->set('desc', $this->desc);
		$this->db->set('charge_date', $this->charge_date);
		$this->db->set('order', $this->order);
        $this->db->set('pay_config', $this->pay_config);
		$this->db->set('is_cod', $this->is_cod);
		$this->db->set('is_online', $this->is_online);
        
        $this->db->where('id', $id);
        return $this->db->update('payment');
    }

    // --------------------------------------------------------------------

    /**
	 * 装载
	 *
	 *
	 */	
	function uninstall($id)
    {		
		$this->db->set('enabled', 0);       
        $this->db->where('id', $id);
        return $this->db->update('payment');
    }

    // --------------------------------------------------------------------

    /**
	 * 卸载
	 *
	 *
	 */	
	function install($id)
    {		
		$this->db->set('enabled', 1);       
        $this->db->where('id', $id);
        return $this->db->update('payment');
    }

}