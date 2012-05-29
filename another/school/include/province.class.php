<?php

class province
{
    function __construct()
    {
        if (!isset($db))
            global $db;
        $this->db = $db;
    }

    function getProvince()
    {
        $db = $this->db;
        try
        {
            $sql = "SELECT * FROM yitao_province where pid = 0";
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

    function getCity($pid)
    {
        $db = $this->db;
        try
        {
            $sql = "SELECT * FROM yitao_province where pid = ".$pid;
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

    function getArea($pid)
    {
        $db = $this->db;
        try
        {
            $sql = "SELECT * FROM yitao_province where pid = ".$pid;
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
    
    function getProvinceCity($pid=0)
    {
        $db = $this->db;
        try
        {
            if ($pid > 0)
            {
                //$sql = "SELECT "
            }
            $sql = "SELECT * FROM yitao_city";
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
}
?>
