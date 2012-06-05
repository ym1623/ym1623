<?php
require("config.inc.php");
$fid=$_GET['fid'];
$sql="select * from forum_user where username='$fid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

if(!$row)
{
	ExitMessage("用户不存在","index.php");
}

$sql="select * from forum_topic where name='$fid'";
$count_q=mysql_query($sql);
$num_count_q=mysql_num_rows($count_q);

$sql="select * from forum_reply where reply_name='$fid'";
$count_a=mysql_query($sql);
$num_count_a=mysql_num_rows($count_a);
//$num_count=$num_count_a+$count_q;
?>

<?php
include("header.inc.php");
?>

  <h2>查看<b><?php echo $row['username'];?></b></h2>

<?php
$mail=$row['email'];
$mail=str_replace("@","符号",$mail);
$mail=str_replace(".","点",$mail);
?>
<fieldset>
<legend>个人资料</legend>
<br>
  <table>
    <tr>
      <td><strong>真实姓名</strong></td>
      <td><?php echo $row['realname'];?></td>
    </tr>
    <tr>
      <td><strong>电子邮箱</strong></td>
      <td><?php echo $mail;?></td>
    </tr>
    <tr>
      <td><strong>发帖数量</strong></td>
      <td><?php echo $num_count_q;?></td>
    </tr>
    
     <tr>
      <td><strong>回帖数量</strong></td>
      <td><?php echo $num_count_a;?></td>
    </tr> 
  
  </table>
  <br>
  <input type="button" value="返回首页" onClick="location.href='index.php'"/>
</fieldset>
<?php
include("footer.inc.php");
?>
