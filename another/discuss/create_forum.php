<?php
require("config.inc.php");
require("header.inc.php");
?>
<h2>创建版块</h2>
<?php
if($_SESSION['username']==ADMIN_USER)
{
?>
<form action="add_forum.php" method="post" id="postComment">
  <table>
    <tr>
      <td>版块名称</td>
      <td>
  <input type="text" name="topic" id="topic" size="50"/>
  </td>
    </tr>
    <tr>
      <td>版块说明</td>
      <td>
  <textarea name="detail" rows="10" cols="50" id="detail">
  </textarea>
  </td>
    </tr>
  </table>
<br><br>
  <input type="submit" name="Submit" value="立即发布"/>
  <input type="reset" name="Submit2" value="清空"/>
</form>
<?php
}
include("footer.inc.php");
?>
