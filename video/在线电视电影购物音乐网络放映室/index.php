<?php header("content-Type: text/html; charset=utf-8");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="高清网络电视,体育直播,在线电影,奇艺高清电影,音乐电台,MTV在线观看,湖南卫视,网上电视机,淘宝购物">
<meta name="description" content="爱看网提供在线视频,在线音乐,mtv观看,高清电影,电视直播,音乐电台,无需插件,无需播放器,在线就能看,给你不一样的体验。">
<link rel="shortcut icon" href="favicon.ico" >
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>爱看网 - 体验不一般在线视听享受</title>
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
    <?php include("ym/header.php");?>
  </div>
</div>
<div>
  <div align="center">
    <?php include("tv/c/pptv.htm"); ?>
  </div>
</div>
<div>
  <div align="center">
    <?php include("ym/footer.php");?>
  </div>
</div>

</html>