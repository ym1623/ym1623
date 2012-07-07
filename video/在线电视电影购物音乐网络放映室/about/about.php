<?php header("content-Type: text/html; charset=utf-8");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="关于本站,网络电视,直播电视,电影,电台,淘宝购物,爱看网">
<meta name="description" content="网络直播电视,视听享受,苹果播放器,直播电视,电影,音乐,MTV,直播电台,淘宝购物,爱看网。">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>联系我们</title>
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
.STYLE12 {font-size: 12px}
.STYLE14 {
	font-family: "黑体";
	font-weight: bold;
}
.STYLE17 {
	color: #000000;
	font-size: 14;
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
<div id="nav_out">
	<div id="nav_in">
		<div id="nav">
    		<ul>
           	  <li><a href="http://tv.1x.net/" target="_blank" class="current" id="mynav0" onclick="javascript:getBg(0)"><span class="STYLE1 STYLE12"><strong>- 视听导航 -</strong></span></a></li>
       		  <li><a href="../tv/" onclick="javascript:getBg(4)" id="mynav4"><span class="STYLE1"><strong>网络电视</strong></span></a></li>
           	  <li><a href="../gaoqing/" onclick="javascript:getBg(1)" id="mynav1"><span class="STYLE1"><strong>高清电视</strong></span></a></li>
           	  <li><a href="../dianying/" onclick="javascript:getBg(4)" id="mynav4"><span class="STYLE1"><strong>电&nbsp;影</strong></span></a></li>
           	  <li><a href="../mtv/" onclick="javascript:getBg(3)" id="mynav3"><span class="STYLE1 STYLE14">M T V</span></a></li>
           	  <li><a href="../yinyue/" onclick="javascript:getBg(4)" id="mynav4"><span class="STYLE1"><strong>音&nbsp;乐</strong></span></a></li>
           	  <li><a href="../diantai/" onclick="javascript:getBg(5)" id="mynav5"><span class="STYLE1"><strong>电&nbsp;台</strong></span></a></li>
           	  <li><a href="../diangou/" onclick="javascript:getBg(4)" id="mynav4"><span class="STYLE1"><strong>淘宝购物</strong></span></a></li>
			  <li><a href="../sosou/" onclick="javascript:getBg(4)" id="mynav4"><span class="STYLE1"><strong>全能搜索</strong></span></a></li>
           	  <div class="clear"></div>
        	</ul>
	  </div>
  </div>
</div>
<div>
  <table width="986" height="260" border="0" align="center">
    <tr>
      <td><p class="STYLE17">本站是一款集众多优秀网络播放器于一体的视听平台</p>
        <p class="STYLE17">本站的页面采用独特的播放器风格，显得精致诱人</p>
        <p class="STYLE17">我们的目标就是要通过自己的创意和努力，为广大网友提供了一个优秀的视听平台!</p>
		<p class="STYLE17">我们的内容有淘宝购物,酒店预订,百度影音电影,电视直播,音乐,MTV,电台,全能搜索于一身!</p>      </td>
    </tr>
  </table>
</div>
<div>
  <div align="center">
    <?php include("../ym/footer.php");?>
  </div>
</div>

</html>
