<?php
/**
 * 省市县
 *
 *
 */
class Region_Model extends Model
{
    /**
     * 
     *
     * @return Region_Model
     */
    function Region_Model()
    {
        parent::Model();
    }
    
	// --------------------------------------------------------------------

    /**
     * 
     *
     * @param integer $parent_id
     */
    function children_of($parent_id, $select="*")
    {
        $parent_id = (int)$parent_id;
        
        $regions = array();
        $this->db->select($select);
        $this->db->where('parent_id', $parent_id);
        if ($query = $this->db->get('region')){
            return $query->result_array(); 
		}
		return array();       
    }

    // --------------------------------------------------------------------

	/**
     * 
     *
     * @return array
     */
    function provinces()
    {
        return $this->children_of(1);
    }

    // --------------------------------------------------------------------

    /**
	 * 区域名
	 *
	 *
	 */	
    function get_name($id)
	{
		if (!$id){
            return array();
        }
		$this->db->select('region_name');
        $query = $this->db->get_where('region',array('region_id' => $id));

        if ($row = $query->row_array()){
            return $row['region_name'];
        }
		return array();
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
        $query = $this->db->get_where('region',array('region_id' => $id));
        if ($row = $query->row_array()){
            return $row;
        }
		return array();
	}

}