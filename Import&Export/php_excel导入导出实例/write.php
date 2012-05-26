<?php
$filename=date("Y-m-d").".xls";//先定义一个excel文件
$host="localhost";
$user="root";
$ups="123456";
$datebase="test";
$table="lovewall";


$conn = mysql_connect($host,$user,$ups);
mysql_select_db($datebase);
mysql_query("set names 'utf8'");

header("Content-Type: application/vnd.ms-execl"); 
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=$filename"); 
header("Pragma: no-cache"); 
header("Expires: 0");

$sql="SELECT * from ".$table;
$result=mysql_query($sql); 
while($row =mysql_fetch_array($result)){
	$onerow=implode("\t",$row);
	echo $onerow."\n";
	//$onerow[].="\n";print_r($onerow);
	/*echo $row['order_no']."\t";
	echo $row['product_name']."\t";
	echo $row['product_spec']."\t";
	echo $row['product_model']."\t";
	echo $row['product_price']."\t";
	echo $row['product_unit']."\t";
	echo $row['product_sum']."\n";*/
}
?>
