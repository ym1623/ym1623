<?php
require("../config/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title><link rel="stylesheet" type="text/css" href="../css/css.css">
</head>

<body>

<?php
$sql="select * from type";
$result=mysql_query($sql);
?>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#6699FF">
    <tr>
      <td align="center" bgcolor="#FFFFFF"><span onclick="aa();" style="font-size:14px; font-weight:bold; color:#FF0000; cursor:pointer;">管理新闻类别</span></td>
    </tr>
  </table>

  <table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#6699FF">
    <tr>
      <td align="center" bgcolor="#FFFFFF"><input type="submit" name="Subindex" value="首页生成" /></td>
    </tr>
	<tr>
      <td align="center" bgcolor="#FFFFFF">添加新闻类别 <input name="type" type="text" /></td>
    </tr>
	<tr>
      <td align="center" bgcolor="#FFFFFF">生成文件夹名 <input name="entype" type="text" /></td>
    </tr>
	<tr>
      <td align="center" bgcolor="#FFFFFF">
      <input type="submit" name="Submit" value="添加" /></td>
    </tr>
  </table>
   <table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#6699FF">
    
	<?php while($rows=mysql_fetch_array($result)){?>
    <tr>
      <td width="273" align="center" bgcolor="#FFFFFF"><?php echo $rows['type'];?></td>
      <td width="70" align="center" bgcolor="#FFFFFF"><a href="geng.php?type=<?php echo $rows['type'];?>">更新列表</a></td>
      <td width="56" align="center" bgcolor="#FFFFFF">&nbsp;<span style="font-size:14px; font-weight:bold; cursor:pointer;" onclick="location.href='typexiu.php?id=<?php echo $rows['id'];?>'">修改</span></td>
      <td width="56" align="center" bgcolor="#FFFFFF"><span style="font-size:14px; font-weight:bold; cursor:pointer;" onclick="if(confirm('确认删除吗')){location.href='typedel.php?id=<?php echo $rows['id'];?>'}else{}">删除</span></td>
    </tr>
	<?php }?>
  </table>
 
</form>
</body>
</html>
<?php
//生成首页
if(isset($_POST['Subindex'])){
$url = 'http://'.$_SERVER['HTTP_HOST'].'/index.php';
$index = file_get_contents($url);
$indexUrl = $_SERVER['DOCUMENT_ROOT'].'/index.htm';
$fp = fopen($indexUrl,'w');
fwrite($fp,$index);
echo "<script>alert('成功生成')</script>";
}


//添加类别
if(isset($_POST['Submit'])){
$type = $_POST['type'];
$entype = $_POST['entype'];
$path = $_SERVER['DOCUMENT_ROOT'].'/newslist/'.$entype;
mkdir($path);
$pathList = $_SERVER['DOCUMENT_ROOT'].'/newslist/'.$entype.'/list';
mkdir($pathList);
$addType = mysql_query("INSERT INTO `type` (`id`,`type`,`entype`) VALUES (NULL,'$type','$entype')");
echo "<script>alert('成功添加')</script>";
}

?>