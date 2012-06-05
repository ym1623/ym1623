<link  href="./css/style.css" rel="stylesheet" />

<script language="javascript">
function check(){
	if(myform.keyword.value==""){
		alert("请输入查询关键字！");myform.keyword.focus();return false;
	}
	if((myform.keyword.value.length)>50){
		alert("请输入关键字过长，请简化在50个字符内！");myform.keyword.focus();return false;
	}
}
</script>
<title>最全最大的搜索引擎</title>
<form  name="myform"  method="post" action="search.php">
  <table width="954" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="222" rowspan="2"><img border=0 src="images/kuaikuaisou.gif" width="216"  height="137" /></td>
      <td width="380" align="center"><input  name="keyword" id="keyword" size="50" onMouseOver="this.focus()" onFocus="this.select()" value="<?php echo $keyword;?>"/>
      <input type="hidden" name="hide_keyword"  value="<?php echo $keyword;?>"/>      </td>
      <td width="352"><input  name="submit" type="submit" value="搜 索" class="btn" onclick="return check();" />
        <input  name="submit2" type="submit" value="结果中找" class="btn" onclick="return check();"/>      </td>
    </tr>
  </table>
</form>
