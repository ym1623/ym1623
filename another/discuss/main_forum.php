<?php
require("config.inc.php");
include("header.inc.php");
extract($_GET, EXTR_SKIP);
$url	=	"?fid=".$fid;
!isset($page) && $page = 1;
$pagesize=EACH_PAGE;
$start = ($page-1)*$pagesize;

$sql="select * from `forum_topic` where fid='$fid' ORDER BY sticky DESC , datetime DESC LIMIT $start,$pagesize";
$result=mysql_query($sql);

$sql3="select * from forum_forum where id='$fid'";
$result3=mysql_query($sql3);
$row3=mysql_fetch_array($result3);
?>
<br>
<table id="state">
   <tr>
	<td id="state_c">
	<a href='index.php'>unooo音响</a> >> <a href='main_forum.php?fid=<?php echo $fid;?>'><?php echo $row3['topic'];?></a>
	</td>
   </tr>
</table>
<br>

<table width="100%">
  <tr>
   <td align="left">
<?php
$topic_list_handel	=	mysql_query("select * from `forum_topic` where fid='$fid' ORDER BY sticky DESC");
while($row=mysql_fetch_assoc($topic_list_handel))
{
	$topic_list[] = $row;
}

$allnum = count($topic_list);
$pagenum = ceil($allnum/$pagesize);
page($pagenum,$page,$url);
?>
   </td>
   <td align="right">
    <a href='create_topic.php?fid=<?php echo $fid;?>'><img src="./images/topic.gif"></a>
   </td>
  </tr>
</table>
<br>


<form action="del_topic.php" method="post" id="reply" name="form1">
<input type="hidden" name="fid" value="<?php echo $fid;?>"/>
<table width="100%" border="0" align="center"
  cellpadding="10" cellspacing="1" bgcolor="#cccccc">
    <tr bgcolor="#E6E6E6">
      <td width="56%" align="center"><strong>帖子</strong></td>
      <td width="8%" align="center"><strong>作者</strong></td>
      <td width="8%" align="center"><strong>回复</strong></td>
      <td width="8%" align="center"><strong>访问</strong></td>
      <td width="20%" align="center"><strong>日期</strong></td>
    </tr>
<?php
    while($row=mysql_fetch_array($result))
	{
    ?>

    <tr bgcolor="#FFFFFF">
    <td>
    <?php if($_SESSION['username']==ADMIN_USER){ ?>
    <input type="checkbox" name="tidarray[]" value="<?php echo $row['tid'];?>"onclick="postManage.show('postbatch','a_ajax_1')">
    <?php } ?>
    <?php if($row['sticky']==$row['locked']){ ?>
    
    <img src="images/pubsave.gif"><?php } 

    //如果是“置顶”或者“锁定”
	if($row['sticky']=="1")
	{
    ?><img src="images/1.gif" alt="置顶" border="0"><?php
	}
    if($row['locked']=="1")
	{
	?><img src="images/2.gif" alt="锁定" border="0"><?php
	}
	?>
	
	<a href="view_topic.php?fid=<?php echo $fid;?>&tid=<?php echo $row['tid'];?> "><?php echo $row['topic'];?></a>

    <?php if($row['filename']){ ?>	
	<img src="images/zip.gif">
    <?php } ?>	
	
	<td align="center">
	<?php echo $row['name'];?>
	</td>
	<td align="center">
	<?php echo $row['reply'];?>
	</td>
	</td>
	<td align="center">
	<?php echo $row['view'];?>
	</td>
	</td>
	<td align="center">
	<?php echo $row['datetime'];?>
	</td>
	</tr>
	<?php
	}
	?>
	<tr>

	<?php if($_SESSION['username']==ADMIN_USER){ ?>
	<td colspan="5" align="left" bgcolor="#E6E6E6">
<label class="fl"><input name="ajaxall" id="ajaxall" type="checkbox" value=""  onclick="postManage.checkall(this);"/>全选</label>

<input type="submit" value="删 除">
<input type="hidden" name="action" value='tidarray'>

  	</td>
    <?php } ?>
	</tr>
  </table>
  </form>
  
<br>



<table width="100%">
	<tr>
		<td align="left">
<?php
page($pagenum,$page,$url);
?>
   </td>
   <td align="right">
	<a href='create_topic.php?fid=<?php echo $fid;?>'><img src="./images/topic.gif"></a>
   </td>
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
