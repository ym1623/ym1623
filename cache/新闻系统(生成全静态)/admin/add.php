<?php
require("../config/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title><link rel="stylesheet" type="text/css" href="../css/css.css">
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="550" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#6699FF">
    <tr>
      <th colspan="2" bgcolor="#FFFFFF">添加新闻：</th>
    </tr>
    <tr>
      <td width="175" align="right" bgcolor="#FFFFFF">新闻类别：</td>
      <td width="352" bgcolor="#FFFFFF"><select name="type" id="type">
	  <?php 
	  $sqlType = mysql_query("SELECT * FROM `type`");
	  while($rows = mysql_fetch_array($sqlType)){?>
	  <option value="<?php echo $rows['type'];?>"><?php echo $rows['type'];?></option>
      <?php }?>
	  </select>      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">新闻作者：</td>
      <td bgcolor="#FFFFFF"><input name="editor" type="text" id="news_editor" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">新闻标题：</td>
      <td bgcolor="#FFFFFF"><input name="title" type="text" id="news_title" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">新闻来源：</td>
      <td bgcolor="#FFFFFF"><input name="source" type="text" id="news_source" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">新闻内容：</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF"><INPUT type="hidden" id="content" name="content" value="" \>
		<IFRAME ID="eWebEditor1" src="../ewebeditor/ewebeditor.htm?id=content&style=coolblue&originalfilename=myText1&savefilename=myText2&savepathfilename=myText3" frameborder="0" scrolling="no" width="550" height="350"></IFRAME></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">是否推荐：</td>
      <td bgcolor="#FFFFFF"><input type="radio" name="pass" value="是" />
        是
          <input name="pass" type="radio" value="否" checked="checked" />
      否</td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="添加" />
      &nbsp;
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['Submit'])){
$type = $_POST['type'];
$editor = $_POST['editor'];
$title = $_POST['title'];
$source = $_POST['source'];
$content = $_POST['content'];
$pass = $_POST['pass'];
$time = time();

$pathMoban = $_SERVER['DOCUMENT_ROOT'].'/admin/moban.htm';
$fp = fopen($pathMoban,'r');//以只读方式打开文件
$folder = fread($fp,filesize($pathMoban));//读取整个文件
$folder = str_replace('{-bigtype-}',$type,$folder);
$folder = str_replace('{-news_editor-}',$editor,$folder);
$folder = str_replace('{-news_title-}',$title,$folder);
$folder = str_replace('{-news_source-}',$source,$folder);
$folder = str_replace('{-news_contents-}',$content,$folder);
$folder = str_replace('{-news_time-}',date('Y-m-d H:i:s',$time),$folder);
$newsfile = time().'.htm';
$sql = mysql_query("SELECT * FROM `type` WHERE `type` = '$type'");
$row = mysql_fetch_array($sql);
$newsPath = $_SERVER['DOCUMENT_ROOT'].'/newslist/'.$row['entype'].'/list/'.time().'.htm';
$fp = fopen($newsPath,'w');
fwrite($fp,$folder);
$insertNews = mysql_query("INSERT INTO `news` (id,`type`,`editor`,`title`,`source`,`content`,`pass`,`newsfile`,`time`) VALUES (null,'$type','$editor','$title','$source','$content','$pass','$newsfile',$time)");
echo "<script>alert('添加成功')</script>";
}

?>