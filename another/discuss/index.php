<?php
require("config.inc.php");
include("header.inc.php");
$sql="SELECT * FROM `forum_forum` order by id desc";
$result=mysql_query($sql);
?>
<br><br>
  <table width="100%" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#cccccc">
    <tr bgcolor="#E6E6E6">
      <td width="60%" align="center"><strong>论坛版块</strong></td>
      <td width="8%" align="center"><strong>帖子</strong></td>
      <td width="8%" align="center"><strong>回复</strong></td>
      <td width="24%" align="center"><strong>日期</strong></td>
    </tr>
<?php 
while($row=mysql_fetch_array($result)){
?>
   <tr bgcolor="#FFFFFF">
    <td>
    <img src="images/3.gif"><a href="main_forum.php?fid=<?php echo $row['id'];?>"><?php echo $row['topic'];?></a>
    <br>&nbsp&nbsp&nbsp<a><?php echo $row['detail'];?></a>
	</td>
	<td align="center">
	<?php
	echo $row['post'];
	?>
	</td>
	</td>
	<td align="center">
	<?php
	echo $row['reply'];
	?>
	</td>
	</td>
	<td align="center">
	<?php
	echo $row['datetime'];
	?>
	</td>
	</tr>
	<?php
	}
	?>
	<tr>    
	<?php if($_SESSION['username']==ADMIN_USER){ ?>
	<td colspan="5" align="right" bgcolor="#E6E6E6">
    <input type="button" onClick="location.href='create_forum.php'" value="创建新版块"/>
  	</td>
    <?php } ?>
	</tr>
  </table>

  <h3>标志</h3>
<p>
<img src="images/1.gif" alt="sticky" border="0" align="absmiddle">置顶的帖子<br>
<img src="images/2.gif" alt="locked" border="0" align="absmiddle">锁定的帖子<br>
<?php
$sql="select count(*) from forum_user";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$total_user=$row[0];
?>
共有<b><?php echo $total_user;?></b>位用户注册</p>
<?php
include("footer.inc.php");
?>