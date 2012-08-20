<?php
/**
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
        $query = $this->db->get('ps_region');
        
        return $query->result_array(); 
    }

	/**
     * 
     *
     * @return array
     */
    function provinces()
    {
        return $this->children_of(1);
    }




}