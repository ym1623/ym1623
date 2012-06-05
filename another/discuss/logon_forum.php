<?php
require("config.inc.php");
if($_POST['submit']){
$username=ClearSpecialChars($_POST['username']);
$password=md5($_POST['password']);

$sql="select * from forum_user where username='$username' and password='$password'";
$result=mysql_query($sql);
$num_rows=mysql_num_rows($result);

if($num_rows == 1){
	$row=mysql_fetch_assoc($result);
	$_SESSION['username']=$row['username'];
	header("Location:index.php");
}
else{

	ExitMessage("用户名或密码错误","logon_forum.php");
}
}else{
include("header.inc.php");
?>
<h2>用户登陆</h2>
<fieldset>
  <form action="" method="post">
  <table>
    <tr>
      <td>用户名:</td>
      <td>
  <input type="text" name="username"/>
  </td>
    </tr>
    <tr>
      <td>密码:</td>
      <td>
  <input type="password" name="password" />
  </td>
    </tr>
  </table>
  <input type="submit" name="submit" value="登陆" class="button"/>
  </form>
</fieldset>
<?php
}
include("footer.inc.php");
?>
