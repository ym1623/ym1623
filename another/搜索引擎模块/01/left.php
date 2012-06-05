<?php 
$keyword =$_GET['keyword']; 
$xm=$_GET['xm'];
$keyword2=urlEncode($keyword); 
$keyword3=strtolower($keyword2); 
if($keyword =="") 
{echo "你没有输入条件啊！！"; 
exit;} 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link  href="./css/style.css" rel="stylesheet" type="text/css">
<style>
body  {text-align: left;}
.t1{ color: #FFFF00;font-family: Webdings;} 
.t2{ color: #9999FF;font-family: Webdings;} 
.parent{width:100%; height: 20; letter-spacing: 2; vertical-align: 0; font-weight: bold; background-color: #66CCFF; border-bottom-style: solid; border-bottom-width: 1}
</style>
<base target="cjss">
</head>
<BODY>
<?php print <<<EOT
<script>if(top==self)top.location="main.php?keyword=$keyword";</script>
<form action="main.php" method="get" target="_top">
        <table border="0" cellpadding="2" cellspacing="0" bgcolor="#47AFF" width="100%">
      <tr>
        <td width="100%" align="center"><a href="./" target="_top"><img  src="images/kuaikuaisou.gif" border="0" width="120" height="68"></a><br>
          <br>&nbsp;<input name="keyword" value="$keyword" size="15" >
		  </td>
      </tr>
      <tr>
        <td width="100%"  height="35" align="center">
           &nbsp;<input type="submit" value="极速搜索" class="btn">
        </td>
      </tr> </FORM>
	  
  </table>&nbsp;
<!--网页标题-->
<div class='parent' ><font class="t1">8</font>&nbsp;网页</div>
<!--下面是常用的大型搜索引擎-->
<div style="width: 134; height: 128;">&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://www.baidu.com/s?tn=aiyat&ct=&lm=&z=&rn=&_sv=1&word=$keyword2">百度</a>
<br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://www.google.com/search?hl=zh-CN&newwindow=1&q=$keyword2">GOOGLE</a>
<br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://cnweb.search.live.com/results.aspx?q=$keyword2&page=searchresults&FORM=MSNH&where1=&mkt=zh-cn">MSN中国</a>
<br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://page.zhongsou.com/p?aid=E0200000000&k=tlei&w=$keyword2">中搜</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://www.sogou.com/websearch/corp/search.jsp?query=$keyword2&searchtype=1&pid=aiyatx&class=1&cpc=SOGOU">搜狗</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://www.tianwang.com/cgi-bin/tw?word=$keyword2&range=0&cd=03&submit.x=14&submit.y=7">天网</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://iask.sina.com.cn/search_engine/search_knowledge_engine.php?key=$keyword2&classid=0&title=PHP&gjss=0&x=27&y=13">爱问</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://search.union.yahoo.com.cn/click/search.htm?fw=union&m=82676&b=1003&p=1009&a=2001&name=$keyword2">雅虎</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://www.17so.com/so?q=$keyword2">一起搜</a>
</div>
<!--音乐歌词-->
<div class='parent'><font  class="t1">8</font>&nbsp;音乐歌词</div>
<!--下面是常用的歌词网站-->
<div style="width: 114; height: 140">&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://music.qq.com/portal_v2/static/search_result.html?search_input=$keyword2&search_bt.x=33&search_bt.y=11">QQ音乐</a><br> &nbsp;<font class="t2">4</font>&nbsp;
<a href="http://mp3.baidu.com/m?tn=baidump3&ct=134217728&lm=-1&z=&rn=&_sv=4&word=$keyword2&_si.x=15&_si.y=9">百度MP3</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://music.yahoo.com.cn/search?p=$keyword2&pid=82676_1006&needbid=&ei=GBK&source=3721_union">雅虎MP3</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://mp3.zhongsou.com/m?w=$keyword2&ty=&lg=">中搜 MP3</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://d.sogou.com/music?query=$keyword2&searchtype=4&pid=aiyatx&class=1&cpc=SOGOU">搜狗MP3</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://m.iask.com/g?k=$keyword2&ss=all">爱问MP3</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://mp3.baidu.com/m?f=ms&tn=baidump3lyric&ct=150994944&lf=1&rn=10&word=$keyword2&lm=-1">百度歌词 </a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://music.yahoo.com.cn/lyric.html?pid=82676_1006&p=$keyword2&button=$keyword2&button=%B8%E8%B4%CA%CB%D1%CB% F7&mimetype=all&source=ysearch_music_result_topsearch">雅虎歌词</a>
</div>
<!--电影网站-->
<div class='parent'><font  class="t1">8</font>&nbsp;电影</div>
<!--下面是常用的电影网站-->
<div class='child'  style="width: 116; height: 58">&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://movie.baidu.com/srh.php?tn=baidux&word=$keyword2">百度影视</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://video.search.yahoo.com/search/video?p=$keyword2&toggle=1&ei=GBK">雅虎 Video</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://v.iask.com/v?k=$keyword2">爱问视频</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://file.tianwang.com/cgi-bin/search?word=$keyword2&FType=3&submit.x=31&submit.y=12">天网影视</a>
</div>
<!--软件源码-->
<div class='parent'><font  class="t1">8</font>&nbsp;软件源码&nbsp;</div>
<!--下面是常用的软件源码网站-->
<div class='child' style="width: 131; height: 88">&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://search2.onlinedown.net/search.asp?keyword=$keyword2">华军软件园</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://www.skycn.com/search.php?offset=0&ss_name=$keyword2">天空软件</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://down.chinaz.com/query.asp?action=title&keyword=$keyword2&page=1">中国站长站</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://dlc.pconline.com.cn/search.jsp?keyword=$keyword2">太平洋软件</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://soft.sogou.com/software.so?query=$keyword2&amp;class=4">搜狗下载</a></div>
<!--论坛网站-->
<div  class='parent'><a name="bbs"></a><font  class="t1">8</font>&nbsp;论坛</div>
<!--下面是一些大型的论坛-->
<div  class='child'  style="width: 130; height: 70">&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://post.baidu.com/f?kw=$keyword2">百度贴吧</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://search.bbs.sina.com.cn/search/search?gid=3&bbsid=19&t=keyword&q=$keyword2">新浪说吧</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://search.chinabbs.com/cgi-bin/search?content=$keyword2&type=title">Chinabbs</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://bbs.zhongsou.com/b?w=$keyword2&dt=1&webid=tlei&aid=B0100006149">中搜论坛</a></div>
<!--新闻网站-->
<div class='parent'><font  class="t1">8</font>&nbsp;新闻</div>
<!--下面是一些知名的新闻网站-->
<div class='child'  style="width: 131; height: 120">&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://news.baidu.com/ns?tn=news&ct=201326592&lm=-1&z=0&rn=&_sv=2&word=$keyword2&_si.x=12&_si.y=5">百度新闻</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://xinwen.yahoo.com.cn/search?p=$keyword2&pid=82676_1006&needbid=&ei=GBK&source=3721_union">雅虎新闻</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://iask.com/n?k=$keyword2">新浪新闻</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://news.sogou.com/news?query=$keyword2&searchtype=5&pid=aiyatx&class=1&cpc=SOGOU">搜狗新闻</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://search.xinhuanet.com/search/searchnews.jsp?sw=$keyword2">新华网新闻</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://news.zhongsou.com/zsnews.cgi?word=$keyword2&hcsource=&selectact=&class1=">中搜新闻</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://news.google.com/news?hl=zh-CN&ned=cn&ie=UTF-8&q=$keyword2">GOOGLE新闻</a></div>
<!--图片资源网站-->
<div class='parent'><font class="t1">8</font>&nbsp;图片</div>
<div id='KB8Child' class='child' style="width: 157; height:  22">&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://image.baidu.com/i?tn=baiduimage&ct=201326592&lm=- 1&z=0&rn=&_sv=6&word=$keyword2&_si.x=15&_si.y=11">百度图片</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://image.yahoo.com.cn/search?p=$keyword2&pid=82676_1006&needbid=&ei=GBK&source=3721_union">雅虎图片</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://images.google.com/images?q=$keyword2&amp;hl=zh-CN">Google图片</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://img.zhongsou.com/i?w=$keyword2&amp;t=&amp;l=">中搜图片</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a  href="http://image.sogou.com/imgsearch.jsp?keyword=$keyword2&amp;sogouhome="> 搜狗图片</a><br>&nbsp;<font class="t2">4</font>&nbsp;
<a href="http://p.iask.com/p?k=$keyword2">爱问图片</a>  </div>  
</BODY>  
</HTML> 
<!--
EOT;
?>-->
