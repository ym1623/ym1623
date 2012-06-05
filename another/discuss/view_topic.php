<?php
require("config.inc.php");
require("function.php");
include("header.inc.php");
extract($_GET, EXTR_SKIP);
extract($_POST, EXTR_SKIP);

$sql3="select * from forum_forum where id='$fid'";
$result3=mysql_query($sql3);
$row3=mysql_fetch_array($result3);

$sql="select * from forum_topic where fid='$fid' and tid='$tid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<br>
	<table id="state">
		<tr>
			<td id="state_c">
				<a href='index.php'>unooo音响</a> >> <a href='main_forum.php?fid=<?php echo $fid;?>'><?php echo $row3['topic'];?></a> >> <a href='view_topic.php?fid=<?php echo $fid;?>&tid=<?php echo $row['tid'];?>'><?php echo $row['topic'];?></a>
			</td>
		</tr>
	</table>
<br>

<table width="100%">
	<tr>
		<td align="left">
<?php
$url	="?fid=$fid&tid=$tid";
!isset($page) && $page = 1;
$pagesize=EACH_PAGE;
$start = ($page-1)*$pagesize;

$sql4="select * from forum_reply as a, forum_user as b where a.reply_name=b.username and a.tid in ($tid) ORDER BY rid LIMIT $start,$pagesize";
$result4=mysql_query($sql4);
$num_rows=mysql_num_rows($result4);

$topic_list_handel	=	mysql_query("select * from `forum_reply` where fid='$fid' and tid='$tid' ORDER BY rid DESC");
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
	&nbsp; 
	<a href='create_reply3.php?fid=<?php echo $fid;?>&tid=<?php echo $tid;?>'><img src="./images/reply.gif"></a>
	</td>
  </tr>
</table>
<br>
<?php
$sql="select * from forum_topic where fid='$fid' and tid='$tid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql2="select * from forum_user where username='$row[name]'";
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);

if(!$result)
{
	ExitMessage("该贴不存在","main_forum.php");
}


$locked=$row['locked'];
$sticky=$row['sticky'];
?>

<?php if($page==1){ ?>
<table border=0 cellSpacing=1 cellPadding=3 width="100%" bgColor=#cccccc align=center>
 <tbody>
   <tr>
     <td bgColor=#ffffff vAlign=top rowSpan=3 width=180>
   <table border=0 cellSpacing=0 cellPadding=4 width="100%">
    <tbody>
      <tr>
<?php
 if($row2['path']){  
	?>
     <td width="17%" align=middle><img border=0 alt="" src="<?php echo $row2['path'];?>">
    
     <?php
	}else{
?>
   
     <td width="17%" align=middle><img border=0 alt="" src="images/none.gif">
<?php
	}
?>      
        
        </td>
      </tr>
    </tbody>
  </table>

     <p>
     &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/user.gif"><a href="view_profile.php?fid=<?php echo $row['name'];?>">&nbsp;&nbsp;<?php echo $row['name'];?></a>
     <br>      
     &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><img border=0 alt=邮件 src="images/mail.gif">&nbsp;&nbsp;<?php echo $row['email'];?></a>


     </p>

   </td>
   <td bgColor=#ffffff>

  <table width="100%">
    <tbody>
      <tr>
         <td width="50%" align="left">
         <img alt="" src="images/pubsave.gif">&nbsp;&nbsp;<a><?php echo $row['topic'];?></a>
	     </td> 
       
       <td width="50%" align="right"> 
         <img alt="" src="images/time.gif" width=16 height=16>&nbsp;楼主&nbsp;<?php echo $row['name'];?>发表于: <?php echo $row['datetime'];?>
<?php
if($_SESSION['username']==$row['name'])
{
?>
         &nbsp;&nbsp;&nbsp;<a href="create_topic2.php<?php echo $url;?>">编辑</a>
<?php
	}
?>        
       </td>
      </tr>
    </tbody>
</table>
  <tr>
    <td style="LINE-HEIGHT: 20px; VERTICAL-ALIGN: top" bgColor=#ffffff height=100>
<?php echo $row['detail'];?>
    </td>
  </tr>

  <tr>
    <td bgColor=#ffffff height=20>


<?php 
$query = mysql_query("select * from forum_attachment where tid='$tid'");
while($attach=mysql_fetch_array($query)){ 
    $extension  = getFileSuffix($attach[filename]);
    if($extension == 'zip' || $extension == 'rar'){
               $ur =   'http://localhost/bbs/'.$attach[filepath];
               $filename= $attach[filename];

              echo  '<img src="images/zip.gif"><a href="'.$ur.'">'.$filename.'</a>&nbsp;&nbsp;&nbsp;';
       } 
}          	
?>
      

   
   </td>
  </tr>
</tbody>
</table>
<?php } ?>

<?php


if($num_rows)
{
	while($row=mysql_fetch_array($result4))
	{
?>
<table border=0 cellSpacing=1 cellPadding=3 width="100%" bgColor=#cccccc align=center>
<tbody>

     <tr>
     <td bgColor=#ffffff vAlign=top rowSpan=3 width=180>

  <table border=0 cellSpacing=0 cellPadding=4 width="100%">
    <tbody>
      <tr>
 
    <?php if($row['path']){ ?>       
        <td width="17%" align=middle><IMG border=0 alt="" src="<?php echo $row['path'];?>"> 
    <?php }else{ ?>
         <td width="17%" align=middle><IMG border=0 alt="" src="images/none.gif">
    <?php } ?>       
        
        </td>
      </tr>
    </tbody>
  </table>

     <p>  &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/user.gif"><a href="view_profile.php?fid=<?php echo $row['reply_name'];?>">&nbsp;&nbsp;<?php echo $row['reply_name'];?></a>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><img border=0 alt=邮件 src="images/mail.gif">&nbsp;&nbsp;<?php echo $row['reply_email'];?></a>


     </p>

   </td>
   <td bgColor=#ffffff>

  <table width="100%">
    <tbody>
      <tr>
         <td width="70%" align="left"><IMG alt="" src="images/time.gif" width=16 height=16>&nbsp;<font color=red><?php echo $row['rid'];?></font>&nbsp;楼发表于: <?php echo $row['reply_datetime'];?>
	     </td> 

       <td width="30%" align="right"> 
<?php
if($_SESSION['username']==$row['reply_name'])
{
?>        
         <a href="create_reply2.php<?php echo $url;?>&rid=<?php echo $row['rid'];?>">编辑</a>
<?php

}
?>      
       </td>
      </tr>
    </tbody>
  </table>

  <tr>
    <td style="LINE-HEIGHT: 20px; VERTICAL-ALIGN: top" bgColor=#ffffff height=160>  
<?php echo $row['reply_detail'];?>
  </td>
  </tr>
</tbody>
</table>

<?php
	}
}

mysql_query("UPDATE forum_topic set view=view+1 where tid='$tid'");
?>


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
		&nbsp; 
		<a href='create_reply3.php?fid=<?php echo $fid;?>&tid=<?php echo $tid;?>'><img src="./images/reply.gif"></a>
		</td>
	</tr>
	</table>
<br>

<fieldset>
<legend>快速回复帖子</legend>
<?php
if(!$_SESSION['username'])
{
	echo '<p>对不起，请<a href="create_user.php">注册</a>新用户,
或者<a href="logon_forum.php">登陆</a>.</p></fieldset>';

}else{
	if($locked==1)
	{
		echo '<p><strong>该贴已被锁定，不能回复</strong></p>';
	}else{
?>

  <form action="add_reply.php" method="post" id="reply" name="form1">
  <input type="hidden" name="fid" value="<?php echo $fid;?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid;?>"/>
  <table>
    <tr>
      <td valign="top">回帖<br>内容<br></td>
      <td>
  <textarea name="reply_detail" rows="10" cols="60">
  </textarea>
  </td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td><em>请不要HTML标签</em></td>
    </tr>
  </table>
  <br/>
  <input type="submit" name="submit" value="回复该贴"/>
  <input type="reset" name="Reset" value="清空"/>
  </form>
<?php
	}
?>
</fieldset><br>
<?php
if($_SESSION['username']==ADMIN_USER)
{
?>
<fieldset>
<legend>管理员操作</legend>
<?php if($locked==0){?>
  <form action="lock_topic.php" method="post" name="lock">
  <input type="hidden" name="fid" value="<?php echo $fid?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid?>"/>
  <input type="submit" name="Submit" value="锁定帖子"/>
将该贴锁定，其他用户不能回复
  </form>
  <?php
}else{
	?>
<form action="unlock_topic.php" method="post" name="unlock">
  <input type="hidden" name="fid" value="<?php echo $fid?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid?>"/>
  <input type="submit" name="Submit" value="解锁帖子"/>
解锁该贴，其他用户可以回复
  </form>
  <?php
}
  ?>
<?php
if($sticky==0){
?>
  <form action="stick_topic.php" method="post" name="stick">
  <input type="hidden" name="fid" value="<?php echo $fid?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid?>"/>
  <input type="submit" name="Submit" value="置顶帖子"/>
将该贴置于顶端
  </form>
  <?php
}else{
  ?>
    <form action="unstick_topic.php" method="post" name="unstick">
  <input type="hidden" name="fid" value="<?php echo $fid?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid?>"/>
  <input type="submit" name="Submit" value="取消置顶"/>
取消该贴置顶
  </form>
<?php
}
?>
  <form action="del_topic.php" method="post" name="delete">
  <input type="hidden" name="fid" value="<?php echo $fid?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid?>"/>
  <input type="submit" name="Submit" value="删除帖子"/>
删除该贴与回复内容
  </form>
  </fieldset>
  
<?php
	}
}
?>
<br>
<?php include("footer.inc.php");?>
