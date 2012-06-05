<?php 
$keyword =$_GET['keyword']; 
$keyword2=urlEncode($keyword); 
$xm=$_GET['xm'];

if($keyword==""){
	echo "对不起，您没有输入关键字！！<p><a href=\"javascript:history.back(1)\">点此返回</a></p>";
}

switch ($xm) {
   case  "baidu":
	   $murl="http://www.baidu.com/s?wd=$keyword2";break;
   case "google":
		$murl="http://www.google.com/search?hl=zh-CN&q=$keyword2";break;
   case  "msn":
      	$murl="http://cnweb.search.live.com/results.aspx?q=$keyword2&go=&form=QBRE";break;
   case  "zhongsou":
		 $murl="http://p.zhongsou.com/p?w=$keyword2";break;
   case  "sogou":
		 $murl="http://www.sogou.com/web?query=$keyword2";break;
   case  "tianw":
		 $murl="http://www.tianwang.com/cgi-bin/tw?cdtype=GB&word=$keyword2";break;
   case  "iask":
         $murl="http://www.iask.com/w?k=$keyword2&pid=33933&fromlianmeng=lianmeng";break;
   case  "yahoo":
		 $murl="http://search.cn.yahoo.com/search?ei=gbk&fr=fp-tab-web-ycn&meta=vl%3Dlang_zh-CN%26vl%3Dlang_zh-TW&pid=ysearch&source=ysearch_www_hp_button&p=$keyword2";  break;
   case  "17sou":
     	$murl="http://www.17so.com/so?q=$keyword2";break; 
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>快快搜----<?php echo $keyword;?></title>
<style type="text/css">.navPoint {COLOR: white; CURSOR: hand; FONT-FAMILY: Webdings; FONT-SIZE: 9pt}</style>
</head>
<body style="MARGIN: 0px" scroll=no oncontextmenu="return false;" onclick="HideMenu();"><script>
function switchSysBar(){		//设置打开或关闭切换栏
if (switchPoint.innerText==3){
switchPoint.innerText=4
document.all("frmTitle").style.display="none"
}else{
switchPoint.innerText=3
document.all("frmTitle").style.display=""
}}
</script>
<table border="0" cellPadding="0" cellSpacing="0" height="100%" width="100%">
  <tr>
    <td align="middle" noWrap vAlign="center" id="frmTitle"><iframe frameborder="0"  src="left.php?keyword=<?php echo $keyword;?>" style="HEIGHT: 100%; VISIBILITY: inherit; WIDTH: 150px; Z-INDEX: 2"> </iframe></td>
    <td style="WIDTH: 9pt" class=division>
    <table border="0" cellPadding="0" cellSpacing="0" height="100%" bgcolor="#47AFF">
      <tr>
        <td style="HEIGHT: 100%" onClick="switchSysBar()">
        <font style="FONT-SIZE: 9pt; CURSOR: default; COLOR: #ffffff">
        <br>
        <span class="navPoint" id="switchPoint" title="关闭/打开左栏">4</span><br>
        <br>
        屏幕切换 </font></td>
      </tr>
    </table>    </td>
    <td style="WIDTH: 100%"><iframe frameBorder="0" id="main" name="cjss" scrolling="yes" src="<?php echo $murl;?>" style="HEIGHT: 100%; VISIBILITY: inherit; WIDTH: 100%; Z-INDEX: 1">
    </iframe></td>
  </tr>
</table>
<script>
if(window.screen.width<'1024'){		//如果屏蔽的宽度小于1024像素，那么调用自定义函数
	switchSysBar();
}
</script>
</body>
</html>
