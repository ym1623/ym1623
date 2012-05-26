<?php
require_once 'Excel/reader.php';

$data = new Spreadsheet_Excel_Reader();

$data->setOutputEncoding('gb2312');//CP1251

$data->read('201006.xls');
error_reporting(E_ALL ^ E_NOTICE);
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		$str[$i][]="\"".$data->sheets[0]['cells'][$i][$j]."\",";
	}
}
//array_shift($str);array_shift($str);
for($v=0;$v<count($str);$v++)
{
	if($data->hanzi($str[$v][0]))continue;
	print_r($str[$v]);
	echo "<br />";
}
?>
