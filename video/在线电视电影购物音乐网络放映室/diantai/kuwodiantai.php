<?php header("content-Type: text/html; charset=utf-8");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="酷我电台,网络电视,直播电视,电影,电台,淘宝购物,爱看网">
<meta name="description" content="酷我电台,网络直播电视,视听享受,苹果播放器,直播电视,电影,MTV,直播电台,淘宝购物,爱看网。">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>在线视听 - 酷我电台 - 爱看网</title></title>
<style>
<!--

html,body,ul,li {margin:0; padding:0; font-family:"微软雅黑"; font-size:12px; }
ul,li {list-style-type:none;}
.clear {clear:both;}
#nav_out {background:url(img/nav_l.png) 0 0 no-repeat; line-height:70px; margin:1px auto; width:1000px;}
#nav_in { background:url(img/nav_r.png) 100% 0 no-repeat; margin:0 0 0 12px;}
#nav {height:70px; background:url(img/nav_c.png) 0 50% repeat-x; margin:0 22px 0 0;}
#nav li {float:left;}
#nav li a {display:block; text-decoration:none; color:#333333; text-decoration:none;}
#nav li a:hover {background:url(img/li_l.png) 0 0 no-repeat;}
#nav li a span {padding:0 12px 0 0; margin:0 0 0 12px; display:block;}
#nav li a:hover span {background:url(img/li_r.png) 100% 0 no-repeat; color:#D9D9D9;}
p {width:1000px; margin:1px auto; line-height:200%; text-transform:capitalize; text-align:center; color:skyblue;}
.current {background:url(img/li_l.png) 0 0 no-repeat;}/*鼠标点击时变换背景，方便JS获取样式*/
.current span{background:url(img/li_r.png) 100% 0 no-repeat;color:#D9D9D9;}  /*鼠标点击时变换背景，方便JS获取样式*/
.STYLE8 {
	font-size: 12px;
	font-weight: bold;
	color: #999999;
}
.STYLE9 {
	color: #999999;
	font-weight: bold;
}
.STYLE12 {font-size: 12px}
.STYLE13 {
	color: #CCCCCC;
	font-family: "黑体", "楷体_GB2312";
}
.STYLE14 {
	font-family: "黑体";
	font-weight: bold;
}

-->
</style>
</head>
<body>
<script language="javascript">
	function getBg(num){
		for(var id = 0;id<=8;id++)
		{
			if(id==num)
			{
				document.getElementById("mynav"+id).className="current";
			}
			else
			{
				document.getElementById("mynav"+id).className="";
			}
		}
</script>
<div>
  <div align="center">
    <?php include("header.php");?>
  </div>
</div>
<div>
  <div align="center">
    <?php include("c/kuwodiantai.htm"); ?>
  </div>
</div>
<div>
  <div align="center">
    <?php include("../ym/footer.php");?>
  </div>
</div>

</html>
