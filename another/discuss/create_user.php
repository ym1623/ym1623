<?php
require("config.inc.php");
require("header.inc.php");
?>
<h2>注册新用户</h2>
<fieldset>
  <form action="add_user.php" method="post">
<table>
<tr>
<td>用户名:</td>
<td>
  <input type="text" name="username" />
  </td>
</tr>
<tr>
<td>密码:</td>
<td>
  <input type="password" name="password" />
  </td>
</tr>
<td>E-Mail:</td>
<td>
  <input type="text" name="email" />
  </td>
</tr>
<td>QQ号:</td>
<td>
  <input type="text" name="qq" />
  </td>
</tr>
<td>真实姓名:</td>
<td>
  <input type="text" name="realname" />
  </td>
</tr>
</table>
  <input type="submit" name="Submit" value="提交注册" class="button"/>
  <input type="reset" name="Submit2" value="清空" class="button"/>
  </form>
</fieldset>
<?php
include("footer.inc.php");
?>
