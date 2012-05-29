<?php


class db
{
    private $host;
    private $user;
    private $pwd;
    private $dbname;
    private $port;

    private $configs;

    function  __construct($configs=null)
    {
        if (isset($configs))
           $this->configs = $configs;
    }

    function getDB($configs)
    {
        if (isset($configs))
        {
            $host = $configs['host'];
            $dbname = $configs['dbname'];
            $port = $configs['port'];
            $pwd  = $configs['pwd'];
            $user = $configs['user'];
        }
        else
        {
            global $configs;
        }

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname";

	try
	{
		$db = new PDO($dsn, $user, $pwd);
	}
	catch (PDOException $e)
	{
	   echo 'pdoHelper failed: ' . $e->getMessage();
	   return null;
	}

	if (!is_object($db))
	{
	   echo 'pdoHelper failed';
	   return null;
	}
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec('SET NAMES utf8'); 

        return $db;
    }

}

?>
