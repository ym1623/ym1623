<?php
require_once('./include/db.class.php');

$configs = array
            (
             'host' => 'localhost',
             'port' => '3306',
             'dbname' => 'school',
             'user' => 'root',
             'pwd' => 'xampp'
            );

$db = new db();
$db = $db->getDB($configs);

require_once('./include/school.class.php');
require_once('./include/province.class.php');

$action = $_GET['action'];
if ($action == 'getProvince') //获取省及直辖市//
{
    $province = new province();
    $province = $province->getProvince();
    echo json_encode($province['data']);
    exit;
}else if ($action == 'getCity'){ //获取城市//
	$pid = $_GET['pid'];
    $province = new province();
    $province = $province->getCity($pid);
    echo json_encode($province['data']);
    exit;
}else if($action == 'getArea'){//获取区级县级地名//
	$pid = $_GET['pid'];
    $province = new province();
    $province = $province->getArea($pid);
    echo json_encode($province['data']);
    exit;
}

$pid = $_GET['pid'];
$type = $_GET['type'];
if($pid > 0 && isset($type))
{
    $school = new school();
    $school = $school->getProvinceSchool($pid,$type);
    $school = json_encode($school['data']);
    echo $school;
    exit;
}

$q = $_GET['q'];
if (strlen($q) > 0)
{
	$school = new school();
	$school = $school->searchSchool($q);
	foreach ($school['data'] as $value)
        {
            echo "$value[id]|$value[name]\n";
        }
}

?>
