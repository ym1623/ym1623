<?php
require("../config/conn.php");
if(isset($_GET['id'])){
$id = $_GET['id'];
}
$sqlType = mysql_query("SELECT * FROM `type` WHERE `id` = $id");
$row = mysql_fetch_array($sqlType);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="450" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#6699FF">
    <tr>
      <th colspan="2" bgcolor="#FFFFFF">修改类别：</th>
    </tr>
    <tr>
      <td width="182" align="right" bgcolor="#FFFFFF">中文类别：</td>
      <td width="245" bgcolor="#FFFFFF"><input name="type" type="text" id="bigtype" value="<?php echo $row['type'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">外文类别：</td>
      <td bgcolor="#FFFFFF"><input name="entype" type="text" id="entype" value="<?php echo $row['entype'];?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="修改" />
      &nbsp;
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['Submit'])){
$type = $_POST['type'];
$entype = $_POST['entype'];
$oldPath = $_SERVER['DOCUMENT_ROOT'].'/newslist/'.$row['entype'];
$newPath = $_SERVER['DOCUMENT_ROOT'].'/newslist/'.$entype;
	if($type<> $row['type'] || $entype <> $row['entype']){
	
		function delDirAndFile( $dirName ){
		if ( $handle = opendir( "$dirName" ) ) {
			while ( false !== ( $item = readdir( $handle ) ) ) {
				if ( $item != "." && $item != ".." ) {
					if ( is_dir( "$dirName/$item" ) ) {
						delDirAndFile( "$dirName/$item" );
					} else {
						if( unlink( "$dirName/$item" ) )echo "成功删除文件： $dirName/$item<br />\n";
					}
				}
			}
		closedir( $handle );
		if( rmdir( $dirName ) )echo "成功删除目录： $dirName<br />\n";
		}
		}
		delDirAndFile($oldPath);
		mkdir($newPath);
	}
$sql = mysql_query("UPDATE `type` SET `type` = '$type',`entype` = '$entype' WHERE `id` = $id");
echo "<script>alert('修改成功');window.location=('/admin/')</script>";
}


?>