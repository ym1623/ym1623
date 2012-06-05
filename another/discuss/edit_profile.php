<?php
require("config.inc.php");
$id=$_SESSION['username'];
if(!$id)
{
	ExitMessage("请<b>登录</b>后在执行","logon_forum.php");
}
?>
<?php
include("header.inc.php");
?>
<h2>编辑个人资料</h2>
<?php
$sql="select * from forum_user where username='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<fieldset>
<legend>个人资料</legend>

  <form action="update_profile.php" enctype="multipart/form-data" method="post" name="upform">

  <table>
    <tr>
      <td>登录用户:</td>
      <td><b><?php echo $row['username'];?></b></td>
    </tr>
    <tr>
      <td>更改密码:</td>
      <td>
  <input type="password" name="password"/>
  密码为空将不被更新
  </td>
    </tr>
    <tr>
      <td>电子邮箱:</td>
      <td>
  <input type="text" name="email" value="<?php echo $row['email'];?>"/>
  </td>
    </tr>
        <tr>
      <td>QQ号:</td>
      <td>
  <input type="text" name="qq" value="<?php echo $row['qq'];?>"/>
  </td>
    </tr>
        <tr>
      <td>个性签名：</td>
      <td>
  <input type="text" name="realname" value="<?php echo $row['realname'];?>" size="50"/>
  </td>
    </tr>
    
   	  <td> 上传头像：</td>
	  <td><input name="upfile" type="file" class="text" id="upfile" size="50"/>文件大小小于1M</td> 
      
  </table>
<br/><br/>
  <input type="submit" name="submit" id="submits" value="更新个人资料" />

  </form>
</fieldset>
<?php
include("footer.inc.php");
?>
