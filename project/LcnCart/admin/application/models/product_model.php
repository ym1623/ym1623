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

	var $short_name;

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

        $query = $this->db->get_where('product',array('id' => $id));

        if ($row = $query->row_array()){
			// 图片
			$query1 = $this->db->get_where('product_image',array('product_id' => $id));
            $row1 = $query1->result_array();
			if (!empty($row1)){
				$row['images'] = $row1;
			}
			else{
				$row['images'] = array();			
			}
            // 属性
            $this->db->select('a.*');
			$this->db->from('product_attr as a');
            $this->db->join('product_attr_value as v', 'v.attr_id = a.id', 'left outer');
			$this->db->where('v.product_id',$id);
   			$this->db->where('a.attr_set_id',$row['attr_set_id']);     
			$query2 = $this->db->get();     
            $rows2 = array();
			foreach ($query2->result_array() as $row2){
				$row2['option_values_array'] = array();
				if (!empty($row2['option_values'])){
					$row2['option_values_array'] = explode(",",$row2['option_values']);
				}
				$rows2[] = $row2;
			}
			if (!empty($rows2)){
				$row['attr_list'] = $rows2;
			}
			else{
				$row['attr_list'] = array();			
			}            
			// 分类
			$query3 = $this->db->get_where('product_attr_set',array('id' => $row['cat_id']));
            $row3 = $query3->row_array();
			if (!empty($row3)){
				$row['attr_set_name'] = $row3['name'];
			}
			else{
				$row['attr_set_name'] = '';			
			}

			// 品牌
			$query4 = $this->db->get_where('product_brand',array('id' => $row['brand_id']));
            $row4 = $query4->row_array();
			if (!empty($row4)){
				$row['brand_name'] = $row4['name'];
			}
			else{
				$row['brand_name'] = '';			
			}

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
        $this->db->set('cat_id', $this->cat_id);
		$this->db->set('name', $this->name);
		$this->db->set('short_name', $this->short_name);
		$this->db->set('url_alias', $this->url_alias);
		$this->db->set('brand_id', $this->brand_id);
		$this->db->set('weight', $this->weight);
        $this->db->set('stock', $this->stock);
		$this->db->set('price', $this->price);
		$this->db->set('market_price', $this->market_price);
		$this->db->set('is_special_price', $this->is_special_price);
		if(!empty($this->special_price) && $this->is_special_price){
			$this->db->set('special_price', $this->special_price);
			$this->db->set('special_price_start_at', $this->special_price_start_at);
		    $this->db->set('special_price_end_at', $this->special_price_end_at);
		}
		if($this->is_on_sale){
		    $this->db->set('is_on_sale', $this->is_on_sale);
		    $this->db->set('on_sale_at', $datetime);
		}
		$this->db->set('is_new', $this->is_new);
        $this->db->set('is_hot', $this->is_hot);
		$this->db->set('is_commend', $this->is_commend);
		$this->db->set('desc', $this->desc);
		$this->db->set('short_desc', $this->short_desc);
		$this->db->set('meta_title', $this->meta_title);
        $this->db->set('meta_keywords', $this->meta_keywords);
		$this->db->set('meta_desc', $this->meta_desc);
		$this->db->set('attr_set_id', $this->attr_set_id);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
		if ($this->is_on_sale){
		    $this->db->set('on_sale_at', $datetime);
		}
              
        return $this->db->insert('product');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_products($options = array(), $count=20, $offset=0, $is_delete=0)
	{
		if (!is_array($options)){
            return array();
        }

        if ($count){
            $this->db->limit((int)$count, (int)$offset);
        }
        
		//product
        $this->db->select('p.*');
        //brand
        $this->db->select('b.name as brand_name');
        //category
        $this->db->select('c.name as cat_name');
		//attr_set
        $this->db->select('a.name as attr_set_name');

        $query = $this->_query_products($options,$is_delete);

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
        $this->db->set('cat_id', $this->cat_id);
		$this->db->set('name', $this->name);
		$this->db->set('short_name', $this->short_name);
		$this->db->set('url_alias', $this->url_alias);
		$this->db->set('brand_id', $this->brand_id);
		$this->db->set('weight', $this->weight);
        $this->db->set('stock', $this->stock);
		$this->db->set('price', $this->price);
		$this->db->set('market_price', $this->market_price);
		if($this->is_special_price){
			$this->db->set('is_special_price', $this->is_special_price);
			$this->db->set('special_price', $this->special_price);
			$this->db->set('special_price_start_at', $this->special_price_start_at);
		    $this->db->set('special_price_end_at', $this->special_price_end_at);
		}else{
			$this->db->set('is_special_price', 0);
			$this->db->set('special_price', 0.00);
			$this->db->set('special_price_start_at', '0000-00-00 00:00:00');
			$this->db->set('special_price_end_at', '0000-00-00 00:00:00');
		}		
		$this->db->set('is_on_sale', $this->is_on_sale);
		$this->db->set('is_new', $this->is_new);
        $this->db->set('is_hot', $this->is_hot);
		$this->db->set('is_commend', $this->is_commend);
		$this->db->set('desc', $this->desc);
		$this->db->set('short_desc', $this->short_desc);
		$this->db->set('meta_title', $this->meta_title);
        $this->db->set('meta_keywords', $this->meta_keywords);
		$this->db->set('meta_desc', $this->meta_desc);
		$this->db->set('attr_set_id', $this->attr_set_id);
		$this->db->set('updated_at', $datetime);
		$product = $this->load($id);
		if ($this->is_on_sale && $product['is_on_sale']==0){
		    $this->db->set('on_sale_at', $datetime);
		}else if(!$this->is_on_sale ){
            $this->db->set('on_sale_at', '0000-00-00 00:00:00');
		}
        
        $this->db->where('id', $id);
        return $this->db->update('product');
    }
    
		
    // --------------------------------------------------------------------

    /**
	 * 删除
	 *
	 *
	 */	
    function delete($id)
    {
		// 删除图片
		$this->db->where('product_id', $id);
        $this->db->delete('product_image'); 
        // 删除属性值
        $this->db->where('product_id', $id);
        $this->db->delete('product_attr_value'); 

		$this->db->where('id', $id);
        return $this->db->delete('product'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('product');
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
    function _query_products($options = null,$is_delete)
    {
        $this->db->from('product as p');
        $this->db->join('product_brand as b', 'b.id = p.brand_id', 'left outer');
        $this->db->join('product_cat as c', 'c.id = p.cat_id', 'left outer');
        $this->db->join('product_attr_set as a', 'a.id = p.attr_set_id', 'left outer');
        
		$this->db->where('is_delete',$is_delete);

		if (!empty($options['conditions'])){
			foreach($options['conditions'] as $key => $value ):
				switch($key){
                    case 'p.cat_id' : $this->db->where_in($key,$value);break;
					case 'p.name' : $this->db->like($key,$value);break;
					default : $this->db->where($key,$value);
			    }
			endforeach;
        }
        
        if (isset($options['order'])){
            $this->db->order_by($options['order']);
        } else {
            $this->db->order_by('p.id DESC');
        }

        return $this->db->get();
    }

	// --------------------------------------------------------------------

    /**
	 * 总数
	 *
	 *
	 */	
	function count_products($options = array(),$is_delete=0)
    {
        $this->db->select('COUNT(DISTINCT(p.id)) as total');
        
        $query = $this->_query_products($options,$is_delete);
        
        $total = 0;
        if ($row = $query->row_array()){
            $total = (int)$row['total'];
        }
        return $total;
    }

	// --------------------------------------------------------------------

    /**
	 * 入回收站
	 *
	 *
	 */	
	function in_recycle($id)
	{
        $this->db->set('is_delete', 1);
        $this->db->where('id', $id);
        return $this->db->update('product');
	}

	// --------------------------------------------------------------------

    /**
	 * 出回收站
	 *
	 *
	 */	
	function out_recycle($id)
	{
        $this->db->set('is_delete', 0);
        $this->db->where('id', $id);
        return $this->db->update('product');
	}
  
	// --------------------------------------------------------------------

    /**
	 * 更新单个字段
	 *
	 *
	 */	
	function update_one($fields=array(),$id)
    {      
		$this->db->set(key($fields),current($fields));    
        $this->db->where('id', $id);
        $this->db->update('product');

		$this->db->select(key($fields));
        $this->db->where('id', $id);
		$query = $this->db->get('product');      
        $field =  $query->row_array();
		return $field[key($fields)];

    }

    // --------------------------------------------------------------------

    /**
	 * 查询某分类下是否有商品
	 *
	 *
	 */	

	function check_product_by_cat($cat_id)
	{
		$this->db->select('id');
        $query = $this->db->get_where('product',array('cat_id' => $cat_id));
		return $query->row_array();
	}

}