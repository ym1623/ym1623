<?php
/**
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
		$this->db->where('enabled',1);
        $query = $this->db->get('payment');
        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}   
	// --------------------------------------------------------------------

    /**
	 * 根据code获取支付方式
	 *
	 *
	 */	
    function get_payment($code)
    {
      
        $query = $this->db->get_where('payment',array('code' => $code));

        if ($row = $query->row_array()){
			$config_list = unserialize($row['pay_config']);
			foreach ($config_list AS $config){
				$row[$config['name']] = $config['value'];
			}
            return $row;
        }

        return array();
    }

}