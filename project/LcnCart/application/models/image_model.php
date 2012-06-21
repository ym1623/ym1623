<?php
/**
 * 商品图片
 *
 *
 */
class Image_model extends Model
{

    var $product_id;
    
	var $image_name;

	var $file;

	var $file_ext;
    
    var $file_mime;

	var $width;

	var $height;

	var $file_size;

	var $is_base = 0;

	var $sort_order = 0;


	function __construct()
    {
        parent::Model();
    }

	// --------------------------------------------------------------------

    /**
	 * 商品相册
	 *
	 *
	 */	
	function find_product_images($product_id = '',$options = array())
	{
        if (empty($product_id)){
			return array();
		}
        
		if (isset($options['order'])){
            $this->db->order_by($options['order']);
        } else {
            $this->db->order_by('sort_order DESC');
        }

		$query = $this->db->get_where('product_image',array('product_id' => (int)$product_id));
        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[] = $row;
        }
        return $rows;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 商品主图
	 *
	 *
	 */	
	function find_product_base_image($product_id = '')
	{
        if (empty($product_id)){
			return array();
		}

		$query = $this->db->get_where('product_image',array('product_id' => (int)$product_id, 'is_base' => 1));
        if ($row = $query->row_array()){		
            return $row;
        }
        return array();
	}

}
