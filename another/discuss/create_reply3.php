<?php
require("config.inc.php");
require("header.inc.php");
extract($_GET, EXTR_SKIP);
$sql="select * from forum_forum where id='$fid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql2="select * from forum_reply where fid='$fid' and tid='$tid' and rid='$rid'";
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);

$sql3="select * from forum_topic where fid='$fid' and tid='$tid'";
$result3=mysql_query($sql3);
$row3=mysql_fetch_array($result3);

if(!$result)
{
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
  <h3>回复注意事项</h3>
<ul>
<li>所有项目都要填写</li>
<li>请不要透露你的安全信息等</li>
</ul>


<form action="add_reply3.php" method="post" id="postComment">

  <input type="hidden" name="fid" value="<?php echo $fid;?>"/>
  <input type="hidden" name="tid" value="<?php echo $tid;?>"/>

  
  <table>
    <tr>
      <td>回复</td>
      <td>
  <input type="text" name="topic" id="topic" size="50" value="<?php echo $row3['topic'];?>"/>
  </td>
    </tr>
    <tr>
      <td>正文</td>
      <td>

<textarea id="detail" name="detail" cols="100" rows="8" style="width:719px; height:400px;"></textarea>
<script>loadEditor('detail');</script>
  
</table>
  <input type="submit" name="Submit" id="submits" value="立即回复" onmouseover="instance.post();" />
  <input type="reset" name="Submit2" value="清空"/>    
</form><br>
<?php
}
include("footer.inc.php");
?>