<?php
require("config.inc.php");
require("header.inc.php");
extract($_GET, EXTR_SKIP);
$sql="select * from forum_forum where id='$fid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!$result){
	ExitMessage("该贴不存在","main_forum.php");
}

?>

<br>
    <table id="state">
		<tr>
			<td id="state_c">
				<a href='index.php'>我的论坛</a> >> <a href='main_forum.php?fid=<?php echo $fid;?>'><?php echo $row['topic'];?></a> >> <a>发表/编辑 主题</a>
			</td>
		</tr>
	</table>
<br><br>
<?php
if(!$_SESSION['username'])
{
?>
 <fieldset>
<legend>未注册用户</legend>
<p>对不起，请<a href="create_user.php">注册</a>新用户,
或者<a href="logon_forum.php">登陆</a>.
</p>
</fieldset>
<?php
}else{
	?>
  <h3>发言注意事项</h3>
<ul>
<li>所有项目都要填写</li>
<li>请不要透露你的安全信息等</li>
</ul>

<?php 
//$sql2="select * from forum_topic where tid in (select max(tid) from forum_topic)";
//$result2=mysql_query($sql2);
//$row2=mysql_fetch_row($result2);
//$logid=$row2[0]+1;
//$sql="insert into `forum_topic`(tid,fid)" . "values('$logid','$fid')";
//$result2=mysql_query($sql);

$sql="select * from forum_attachment where blogid in (select max(blogid) from forum_attachment)";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$logid=$row[2]+1;
//echo $logid;
?>
<form action="add_topic.php" method="post" enctype="multipart/form-data">

  <input type="hidden" name="fid" value="<?php echo $fid;?>"/>
  <input type="hidden" name="logid" value="<?php echo $logid;?>"/>
  <table>
    <tr>
      <td>话题</td>
      <td>
  <input type="text" name="topic" id="topic" size="50"/>
  </td>
    </tr>
    
      <tr>
      <td>正文</td>
      <td>
      
<a href="javascript: displayToggle('FrameUpload', 0);" class="thickbox">附件管理</a><span id="asmsg">
<input type="hidden" name="as_logid" id="as_logid" value="-1"></span><br />
<div id="FrameUpload" style="display: none;"><iframe width="720" height="160" frameborder="0" src="attachment.php?action=selectFile&logid=<?php echo $logid;?>"></iframe></div>
<textarea id="detail" name="detail" cols="100" rows="8" style="width:720px; height:400px;"></textarea>
<script>loadEditor('detail');</script>

  
      </td>
    </tr>
</table>
<?php
if($_SESSION['username']==ADMIN_USER)
{
?>
<br>
<br>将帖子置顶<input type="checkbox" name="sticky" value="on"/>
<br>
<br>将帖子锁定<input type="checkbox" name="locked" value="on"/>
<?php
}
?>
<br><br>
  <input type="submit" name="Submit" value="立即发布"/>
  <input type="reset" name="Submit2" value="清空"/>    
</form><br>
 <?php
}
include("footer.inc.php");
?>
