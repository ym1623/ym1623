<?php
/**************************************************************************/
/******************* 飞信通知天气预报_sina_SAE版******************************/ 
/*************************** 2012-5-2 *************************************/
/**************************作者：xiaogg*************************************/ 
/***************************版本：1.2***************************************/
/***************************QQ:756663992***********************************/
/*********************http://www.xiaogg.org********************************/
header("content-Type: text/html; charset=utf-8");
require 'lib/function.php';
require 'lib/config.php';
extract($_GET);
if($_GET['city']){echo getweather($_GET);}else{
$postcity=$_POST['city']?trim($_POST['city']):COMMON_CITY;
$postdata=$_POST?$_POST:array('city'=>$postcity,'day'=>'3','o[]'=>'2','type'=>'1');
$data=getweather($postdata);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$postcity?>城市天气预报免费获取|全国城市天气|版本1.2</title>
<meta name="keywords" content="php天气,中国天气网,php飞信,phpFetion,城市天气预报,天气预报,自动天气预报,每日天气,天气短信,自动天气短信" />
<meta name="description" content="<?php echo urlencode(str_replace("<br>",'',$data));?>" />
</head>

<body><br>
<form action="" method="post" name="form">
<table width="800" border="1" align="center">
  <tr>
    <td colspan="2" bgcolor="#CCCCCC">请输入城市名获取天气预报 版本1.2  <a href="1_0/">版本1.0入口</a></td>
  </tr>
  <tr>
    <td width="174" align="center"><input type="submit" name="submit" id="submit" value="查询" /></td>
    <td width="610"><input type="text" name="city" id="city" value="<?=$postcity?>" /></td>
    </tr>
  <tr>
    <td>获取几天的天气预报</td>
    <td><input type="radio" name="day" id="day" value="1" />1天<input type="radio" name="day" id="day" value="2" />2天<input name="day" type="radio" id="day" value="3" checked="checked" />3天<input type="radio" name="day" id="day" value="4" />4天<input type="radio" name="day" id="day" value="5" />5天<input type="radio" name="day" id="day" value="6" />6天</td>
  </tr>
  <tr>
    <td>气温显示</td>
    <td><input name="temp" type="radio" id="day2" value="1" checked="checked" /> ℃<input type="radio" name="temp" id="day2" value="2" /> ℉</td>
  </tr>
  <tr>
    <td>其它选项</td>
    <td>
    <label><input name="o[]" type="checkbox" id="o" value="1" checked="checked" />风力风向</label> 
    <label><input type="checkbox" name="o[]" value="2" id="o" />紫外线指数</label>
    <label><input type="checkbox" name="o[]" value="3" id="o" />穿衣指数</label>
    <label><input type="checkbox" name="o[]" value="4" id="o2" />洗车指数</label>
    <label><input type="checkbox" name="o[]" value="5" id="o2" />旅游指数</label>
    <label><br><input type="checkbox" name="o[]" value="6" id="o2" />舒适度指数</label>
    <label><input type="checkbox" name="o[]" value="7" id="o2" />晨练指数</label>
    <label><input type="checkbox" name="o[]" value="8" id="o2" />晾晒指数</label>
    <label><input type="checkbox" name="o[]" value="9" id="o2" />息斯敏过敏气象指数</label>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="type" type="radio" id="day3" value="1" checked="checked" />
天气预报
  <input type="radio" name="type" id="day3" value="0" />
短信天气</td>
  </tr>
  <tr>
    <td>天气情况</td>
    <td><?=$data;?></td>
  </tr>
  <?php if($postcity){?>
  <tr>
    <td colspan="2">获取最新天气预报:<a href="?city=<?=urlencode($postcity)?>&day=3&o[]=2" target="_blank" title="<?=$postcity?>今日天气预报"><?=$postcity?></a></td>
  </tr>
  <tr>
    <td colspan="2">发送到手机上:<a href="f.php?msg=<?php echo urlencode(str_replace("<br>",'',$data));?>" target="_blank" title="飞信接口">飞信接口</a></td>
    </tr><? }?>
</table></form>
<div align="center"><br><script type="text/javascript">
google_ad_client = "ca-pub-2006512290696014";
google_ad_slot = "9161070889";
google_ad_width = 728;
google_ad_height = 90;
</script>
  <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script><br><table border="1" align="center">
  <tr>
    <td bgcolor="#CCCCCC">按城市名称获取天气预报</td>
  </tr>
  <tr>
    <td>[主要目的配合定时发送天所预报,测试是否能够获取当时天气预报]</td>
  </tr>
  <tr>
    <td>说明</td>
    </tr>
  <tr>
    <td>1.在查询后面的文本框中输入您要查询的城市名称[不要带市/县等]</td>
    </tr>
  <tr>
    <td>2.点击查询将可以获取今日天气.[今日缓存数据]</td>
    </tr>
  <tr>
    <td>3.获取最新点击下面 [获取最新天气预报]</td>
    </tr>
  <tr>
    <td>4.可以通过下面的飞信接口发送到手机上</td>
  </tr> <tr>
    <td>5.可根据自己需要订制天气预报内容,详细参数见readme.txt</td>
  </tr>
  <tr>
    <td>详细说明文档:<a href="http://3.ibtf.sinaapp.com/readme.txt" target="_blank">http://3.ibtf.sinaapp.com/readme.txt</a></td>
  </tr>
  <tr>
    <td>官方主页:<a href="http://3.ibtf.sinaapp.com/" target="_blank">http://3.ibtf.sinaapp.com/</a></td>
    </tr>
  <tr>
    <td>版本更新:<a href="http://xiaogg.ctdisk.com/u/349707/437278" target="_blank">http://xiaogg.ctdisk.com/u/349707/437278</a></td>
    </tr>
    <tr>
    <td><!-- 将此标记放在您希望显示like按钮的位置 -->
<div class="bdlikebutton"></div>

<!-- 将此代码放在适当的位置，建议在body结束前 -->
<script id="bdlike_shell"></script>
<script>
var bdShare_config = {
	"type":"large",
	"color":"blue",
	"uid":"533431",
	"share":"yes"
};
document.getElementById("bdlike_shell").src="http://bdimg.share.baidu.com/static/js/like_shell.js?t=" + new Date().getHours();
</script><!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;uid=533431" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END --></td>
    </tr>
</table></div>
<?php }echo TONGJI;?>
</body>
</html>