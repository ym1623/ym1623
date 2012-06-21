<?php
/**
 * 商品
 *
 *
 */
class Product_model extends Model
{

    var $cat_id;
    
	var $name;

	var $url_alias;

	var $brand_id;
    
    var $weight;

	var $stock;

	var $price;

    var $market_price;

 	var $is_special_price;
   
	var $special_price;

	var $special_price_start_at;

	var $special_price_end_at;
    
    var $is_on_sale;

	var $is_new;

	var $is_hot;

    var $is_commend;
    
	var $short_desc;

	var $desc;

	var $meta_title;
    
    var $meta_keywords;

	var $meta_desc;

	var $attr_set_id;


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

		$this->db->where('is_on_sale',1); //上架的
		$this->db->where('is_delete',0); //不在回收站的
        $query = $this->db->get_where('product',array('id' => $id));

        if ($row = $query->row_array()){		
            return $row;
        }
        return array();
    }
    
	// --------------------------------------------------------------------

    /**
	 * 按分类查询商品
	 *
	 *
	 */	
	function find_products_by_category($category_ids = array(), $options = array(), $count=32, $offset=0)
	{
		if (empty($category_ids) || !is_array($category_ids)){
			return array();
		}

		switch($options['order']){
			case 'price_up' : $this->db->order_by('price ASC'); break;
			case 'price_down' : $this->db->order_by('price DESC'); break;
			case 'osa' : $this->db->order_by('on_sale_at DESC'); break;
			default : $this->db->order_by('on_sale_at DESC');
		}

		//$query = $this->db->get_where('product_cat',array('id' => $category_id));
        //$row = $query->row_array();  		
        //if ($row['is_leaf']){
		    //$this->db->where('cat_id' , (int)$row['id']);
		//}

		if (!is_array($options)){
            return array();
        }
		    
		if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }

		$query = $this->_query_products_by_category($category_ids,$options);

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }
        return $rows;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 私有函数
	 *
	 *
	 */	
    function _query_products_by_category($category_ids=array(),$options = null)
    {
        $this->db->from('product');
		$this->db->where_in('cat_id' , $category_ids);//某分类下的
		//$query = $this->db->get_where('product_cat',array('id' => $category_id));
        //$row = $query->row_array();  		
        //if ($row['is_leaf']){
		    //$this->db->where('cat_id' , (int)$row['id']);
		//}
        $this->db->where('is_on_sale',1); //上架的
		$this->db->where('is_delete',0); //不在回收站的
		
        return $this->db->get();
    }
    
	// --------------------------------------------------------------------

    /**
	 * 总数
	 *
	 *
	 */	
	function count_products_by_category($category_ids = array(),$options = null)
	{
		if (empty($category_ids) || !is_array($category_ids)){
			return ;
		}
		$this->db->select('COUNT(DISTINCT(id)) as total');       
        $query = $this->_query_products_by_category($category_ids,$options);
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
	}

    
    // --------------------------------------------------------------------

    /**
	 * 按特点查询商品
	 *
	 *
	 */	 
    function find__product_by_feature($feature = 'is_hot',$num = 9,$order = 'id')
	{
        $this->db->from('product');
		$this->db->where($feature,1); 
		$this->db->where('is_delete',0);
		$this->db->limit((int)$num, 0);
		$this->db->order_by($order);
		$query =  $this->db->get();
		$rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }
        return $rows;
	}



}