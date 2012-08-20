<?php
/**
 * 
 *
 */
class Region_change extends Controller
{
	function __construct()
    {
        parent::Controller();
		
    }

    
	function select_children()
	{
        $segments = $this->uri->uri_to_assoc();  
		$this->load->model('region_model');
        $data['children']   = $this->region_model->children_of($segments['parent_id']);
		echo json_encode($data['children']);		
	}

}