<?php
/**
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
	 * load by id
	 *
	 *
	 */	
    function load($id)
    {
        if (!$id){
            return array();
        }

        $query = $this->db->get_where('product_image',array('id' => $id));

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
        $this->db->set('product_id', $this->product_id);
		$this->db->set('image_name', $this->image_name);
		$this->db->set('file', $this->file);
		$this->db->set('file_ext', $this->file_ext);
		$this->db->set('file_mime', $this->file_mime);
        $this->db->set('width', $this->width);
        $this->db->set('height', $this->height);
        $this->db->set('file_size', $this->file_size);
        $this->db->set('is_base', $this->is_base);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
              
        return $this->db->insert('product_image');
    }

	// --------------------------------------------------------------------

    /**
	 * 结果集
	 *
	 *
	 */	
    function find_images()
	{
        $query = $this->db->get('product_image');
        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

    // --------------------------------------------------------------------

    /**
	 * 设置主图
	 *
	 *
	 */	
    function update_is_base($id)
    {
		$this->db->set('is_base', 1);
        $this->db->where('id', $id);
        $this->db->update('product_image');

		$this->db->set('is_base', 0);
        $this->db->where_not_in('id',$id);
        return $this->db->update('product_image');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 设置图片排序
	 *
	 *
	 */	
	function update_sort_order($id,$sort_order)
    {
		$this->db->set('sort_order', $sort_order);
        $this->db->where('id', $id);
        return $this->db->update('product_image');
    }
	
	// --------------------------------------------------------------------

    /**
	 * 总数
	 *
	 *
	 */	
	function total_rows()
    {
        return $this->db->count_all_results('product_image');
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

        return $this->db->delete('product_image'); 
    }

    // --------------------------------------------------------------------

    /**
	 * 获取最新添加的数据
	 *
	 *
	 */
	function get_newly_one()
    {
        $this->db->from('product_image');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();
    }
    
}