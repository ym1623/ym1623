<?php

class school
{
    function __construct()
    {
        if (!isset($db))
            global $db;
        $this->db = $db;
    }

    function getAllSchool()
    {
        $db = $this->db;
        try
        {
            $sql = "SELECT * FROM yitao_school";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $retval = array('code' => EC_SUCCESS, 'data' => $data);
        }
        catch(PDOException $e)
        {
            $retval = array('code' =>EC_SQL_ERROR, 'data' => $e->getMessage());
        }

        return $retval;
    }

    function getProvinceSchool($pid,$type)
    {
        $db = $this->db;
        try
        {
            $sql = "SELECT id,name FROM yitao_school WHERE pid=:pid and `types` = '". $type."'";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':pid',$pid,PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $retval = array('code' => EC_SUCCESS, 'data' => $data);
        }
        catch(PDOException $e)
        {
            $retval = array('code' =>EC_SQL_ERROR, 'data' => $e->getMessage());
        }

        return $retval;
    }

    function getids()
    {
        $db = $this->db;
        try
        {
            $sql = "SELECT a.id as aid,b.id as bid FROM `yitao_school` as a,`yitao_school` as b  WHERE a.name=b.name and a.id!=b.id group by a.id";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $retval = array('code' => EC_SUCCESS, 'data' => $data);
        }
        catch(PDOException $e)
        {
            $retval = array('code' =>EC_SQL_ERROR, 'data' => $e->getMessage());
        }

        return $retval;

    }
    
    function searchSchool($q)
    {
    	$db = $this->db;
        try
        {
        	$q = $q.'%';
            $sql = "SELECT * FROM yitao_school WHERE name LIKE :q LIMIT 8";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':q',$q,PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $retval = array('code' => EC_SUCCESS, 'data' => $data);
        }
        catch(PDOException $e)
        {
            $retval = array('code' =>EC_SQL_ERROR, 'data' => $e->getMessage());
        }

        return $retval;    	
    }


}
?>
