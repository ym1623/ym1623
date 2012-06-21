<?php
/**
 * 省 市 县
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
     * 孩子节点
     *
     * @param integer $parent_id
     */
    function children_of($parent_id, $select="*")
    {
        $parent_id = (int)$parent_id;
        
		if ($parent_id>0){
			$this->db->select($select);
			$this->db->where('parent_id', $parent_id);
			$query = $this->db->get('region');       
			return $query->result_array(); 
		}else{
			return array();
		}
    }

    // --------------------------------------------------------------------

	/**
     * 省份
     *
     * @return array
     */
    function provinces()
    {
        return $this->children_of(1);
    }
    
	// --------------------------------------------------------------------

    /**
     * 非叶节点
     *
     * @return array
     */
    function get_parent_ids()
	{
        $query = $this->db->get('region');
        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['region_id']] = $row['parent_id'];
        }
        return $rows;
	}
    
    // --------------------------------------------------------------------

    /**
     * 区域名
     *
     * @return array
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

}