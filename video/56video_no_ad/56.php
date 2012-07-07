<?php
$url=$_POST['url'];$id=str_replace(".html","",getenv('QUERY_STRING'));
$weburl=str_replace("index.php","","http://".getenv('SERVER_NAME').getenv('SCRIPT_NAME'));
if($id && strpos($id,"swf")){header("location:http://player.56.com/open_".$id);}
if($url){$nurl=explode('vid-',$url);$nurl=explode('.html',$nurl[1]);
if(!$nurl[0]){$nurl=explode('/v_',$url);$nurl=explode('.',$nurl[1]);}
if($nurl[0]){$id=base64_decode($nurl[0]);}}if($id){$swfurl="http://player.56.com/open_".$id.".swf";$weburl.="?".$id.".html";}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>56视频无广告播放方法</title>
<META NAME="Description" CONTENT="56视频,无广告视频,免广告,播放方法,视频,视频代码,视频地址,FLASH地址,网页代码">
<META NAME="Keywords" CONTENT="本站主要为了生成56视频无广告播放视频地址,为方便大家调用56视频同时生成视频代码,视频地址,FLASH地址,网页代码等方式.">
<style>.player {position: relative;text-align: left;width: 600px;padding-left:350px;}</style>
</head><body>
<div class="player">
<form action="" method="post">
输入56视频网址:<input name="url" type="text" value="<?=$url?>" size="50"/><input name="submit" type="submit" value="提交" />
</form>
<? if($id){?><embed src='<?=$swfurl?>' flashvars='ban_ad=on&ban_top_panel=on&ban_share_btn=on&ban_over_panel=on&auto_start=on&' type='application/x-shockwave-flash' allowFullScreen='true' width='680' height='510' allowNetworking='all' wmode='opaque' allowScriptAccess='always'></embed>
<? }?>
<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'url':'<?=$weburl?>'}">
    <a class="bds_qzone">QQ </a>
    <a class="bds_tsina">新浪</a>
    <a class="bds_tqq">腾讯</a>
    <a class="bds_renren">人人</a>
    <span class="bds_more">更多</span><a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=533431" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
google_ad_client = "ca-pub-2006512290696014";google_ad_slot = "6662313368";google_ad_width = 468;google_ad_height = 60;</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script><br>
<? if($id){?><div>
<p><label>视频地址 ：</label><span><input type="text" id="input_video_url" value="<?=$weburl?>" size="60"></span></p>
<p><label>FLASH地址：</label><span><input type="text" id="input_swf_html" value="<?=$swfurl?>" size="60"></span></p>
<p><label>网页代码 ：</label><span><input type="text" value="&lt;embed src='<?=$swfurl?>'  type='application/x-shockwave-flash' allowFullScreen='true' width='480' height='405' allowNetworking='all' allowScriptAccess='always'&gt;&lt;/embed&gt;" id="input_bbs" size="60"></span></p>
</div><? }?>
<p>使用方法:<br>
  1.打开56网找到您要调用的视频的网址,规则见第二条,找到后复制下来.<a href="http://www.56.com/?4.tbip.sinaapp.com/" rel="nofollow" target="_blank">点此打开56网</a>
<br><br>
2.在第一行输入框中输入56视频地址:<br>如http://www.56.com/w93/play_album-aid-123456_vid-abcddddd.html<br>或http://www.56.com/u94/v_abcddddd.html后点提交
<br><br>
3.复制生成的视频地址,FLASH地址,网页代码供您使用或调用.
<br><br>
4.分享已经生成的无广告视频地址
<br><br>
感谢支持:<a href="https://me.alipay.com/xiaogg" target="_blank">https://me.alipay.com/xiaogg</a> </p>
</div>
<!-- Baidu Button END -->
<div style="display:none"><script language="javascript" type="text/javascript" src="http://js.users.51.la/3729735.js"></script></div>
</body></html>