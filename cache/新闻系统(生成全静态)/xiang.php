<?php
require("config/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title><link rel="stylesheet" type="text/css" href="../css/css.css">
</head>

<body>
<?php
if(isset($_GET['type'])){
$type=$_GET['type'];
}

$sqlNum = mysql_query("select * from news where type='$type'");
$num = mysql_num_rows($sqlNum);
$pages=($num-1)/$pagesize+1;
$pages=intval($pages);
if(isset($_GET['page'])){
$page = $_GET['page'];
	if($page < 1 or $page > $pages)$page = 1;
}else{
	$page = 1;
}
$start = ($page-1)*$pagesize;
$sqlNews = mysql_query("select * from news where type='$type' limit $start,$pagesize");
		

?>
<table width="660" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#FF9900">
  <tr>
    <th bgcolor="#FFFFFF">新闻标题：</th>
    <th bgcolor="#FFFFFF">发布时间</th>
  </tr>
  <?php while($rows=mysql_fetch_assoc($sqlNews)){?>
  <tr>
    <td bgcolor="#FFFFFF"><a href="list/<?php echo $rows['newsfile'];?>"><?php echo $rows['title'];?></a></td>
    <td bgcolor="#FFFFFF"><?php echo date('Y-m-d H:i:s',$rows['time']);?></td>
  </tr>
  <?php }?>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><?php 
	$pre = $page-1;
		$next = $page+1;
		if($page==1 and $page <> $pages){
		echo "【首页】【上页】【<a href='".$next.".htm'>下页</a>】【<a href='".$pages.".htm'>末页</a>】";
		}
		if($page==$pages and $page <> 1){
		echo "【<a href=1.htm>首页</a>】【<a href='".$pre.".htm'>上页</a>】【下页】【末页】";
		}
		if($page > 1 && $page < $pages){
		echo "【<a href=1.htm>首页</a>】【<a href='".$pre.".htm'>上页</a>】【<a href='".$next.".htm'>下页</a>】【<a href='".$pages.".htm'>末页</a>】";
		}
	
	
	?></td>
  </tr>
</table>
</body>
</html>
