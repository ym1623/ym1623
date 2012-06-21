<?php
/**
 * 地区三级联动
 *
 *
 */
class Region_change extends Controller
{
	function __construct()
    {
        parent::Controller();	
    }
    
	// --------------------------------------------------------------------

    /**
	 * 根据ajax反馈的父id，返回所有子集 （json格式）
	 *
	 *  
	 */	
	function select_children()
	{
        $segments = $this->uri->uri_to_assoc();  
		$this->load->model('region_model');
        $data['children']   = $this->region_model->children_of($segments['parent_id']);
		echo json_encode($data['children']);		
	}

}