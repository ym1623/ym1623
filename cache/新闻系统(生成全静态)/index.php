<?php
require("config/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title><link rel="stylesheet" type="text/css" href="/css/css.css">
</head>

<body>
<?php
$sql="select * from type";
$result=mysql_query($sql);

?>
<table width="660" height="370" border="0" align="center" bgcolor="#EBEBEB">
  <tr>
    <td width="238">&nbsp;</td>
    <td width="412" align="left" valign="top"><table width="100%" border="0">
      <tr>
	  <?php 
	  $i=1;
	  while($rows=mysql_fetch_assoc($result)){?>
        <td><table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#6699FF">
          <tr>
            <td bgcolor="#FFFFFF"><?php echo $rows['type'];?></td>
          </tr>
		  <?php
		  $sql2="select * from news where type='$rows[type]' order by id desc limit 0,5";
		  $result2=mysql_query($sql2);
		  
		  while($rows2=mysql_fetch_assoc($result2)){
		  ?>
          <tr>
            <td bgcolor="#FFFFFF"><a href="/newslist/<?php echo $rows['entype'];?>/list/<?php echo $rows2['newsfile'];?>"><?php echo $rows2['title'];?></a></td>
          </tr>
          <?php }?>
		  <tr>
            <td align="right" bgcolor="#FFFFFF"><a href="/newslist/<?php echo $rows['entype'];?>/1.htm">更多..</a></td>
          </tr>
        </table></td>
		<?php 
		if($i % 1==0){
		echo "</tr>";
		}
		$i++;
		}?>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
