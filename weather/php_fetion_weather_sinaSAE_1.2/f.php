<?php
/**************************************************************************/
/******************* 飞信通知天气预报_sina_SAE版******************************/ 
/*************************** 2012-5-2 *************************************/
/**************************作者：xiaogg*************************************/ 
/***************************版本：1.2***************************************/
/***************************QQ:756663992***********************************/
/*********************http://www.xiaogg.org********************************/
header("content-Type: text/html; charset=utf-8");
require 'lib/config.php';
require 'lib/PHPFetion.php';
extract($_GET);extract($_POST);
if($u=="1"){//根据空间配置不同如果出现乱码请修改此处或在url上加上参数&u=1
$msg=iconv("gbk","UTF-8",$msg);
}
if($phone && $pwd && $msg){
if(!$to)$to=$phone;
$fetion = new PHPFetion($phone, $pwd);	// 手机号、飞信密码
if($fetion->send($to, $msg)=="success")// 接收人手机号、飞信内容
{$re="发送成功";}else{$re="发送失败,请重试!";}
}else{$re="请根据提示添上以下内容后点发送";}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php飞信api接口|城市天气预报免费获取|版本1.2<?=$_GET['msg']?></title>
</head>

<body><form action="" method="post" name="form">
<table width="500" border="1" align="center">
  <tr>
    <td colspan="2" align="center" bgcolor="#CCCCCC">飞信API</td>
  </tr>
  <? if($re){?>
  <tr>
    <td colspan="2"><?=$re;?>&nbsp;</td>
    </tr><? }?>
  <tr>
    <td width="92">手 机 号:</td>
    <td width="392"><input type="text" name="phone" id="phone" value="<?=$phone?>" /></td>
  </tr>
  <tr>
    <td width="92">飞信密码</td>
    <td width="392"><input type="password" name="pwd" id="pwd" value="<?=$pwd?>" /></td>
    </tr>
    <tr> 
    <td width="92">发 送 到:</td>
    <td width="392"><input type="text" name="to" id="to" value="<?=$to?>" />手机号或飞信号</td>
    </tr>
    <tr> 
      <td width="92">发送内容:</td>
      <td width="392"><textarea name="msg" cols="50" rows="3" id="msg"><?php echo $_POST['msg']?$_POST['msg']:$_GET['msg'];?></textarea></td>
    </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="发送" /><br><br><script type="text/javascript">
google_ad_client = "ca-pub-2006512290696014";
google_ad_slot = "9161070889";
google_ad_width = 728;
google_ad_height = 90;
</script>
  <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></td>
    </tr>
  <?php if($postcity){?>
  <tr>
    <td colspan="2">获取最新天气预报:<a href="?city=<?=urlencode($postcity)?>" target="_blank" title="<?=$postcity?>今日天气预报"><?=$postcity?></a></td>
  </tr>
  <tr>
    <td colspan="2">发送到手机上:<a href="f.php" target="_blank" title="飞信接口">飞信接口</a></td>
    </tr><? }?>
</table></form>
<form action="" method="post" name="form">
<table width="500" border="1" align="center">
  <tr>
    <td colspan="2" bgcolor="#CCCCCC">使用帮助</td>
  </tr>
  <tr>
    <td colspan="2">API调用:f.php?phone=xxxxxx&amp;pwd=xxx&amp;to=xxxx&amp;msg=xxxx</td>
  </tr>
  <tr>
    <td colspan="2">以上接口参数详细说明</td>
    </tr>
  <tr>
    <td>phone</td>
    <td>手机号</td>
  </tr>
  <tr>
    <td>pwd</td>
    <td>飞信密码</td>
  </tr>
  <tr>
    <td>to</td>
    <td>发送给谁(手机号或飞信号)</td>
  </tr>
  <tr>
    <td>msg</td>
    <td>飞信内容</td>
  </tr>
  <tr>
    <td width="70">u</td>
    <td width="414">备用参数:当发送内容为乱码时 在最后加上&amp;u=1</td>
    </tr>
    <tr>
    <td width="70">分享</td>
    <td width="414"><!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
        <a class="bds_qzone"></a>
        <a class="bds_tsina"></a>
        <a class="bds_tqq"></a>
        <a class="bds_renren"></a>
        <span class="bds_more">更多</span>
		<a class="shareCount"></a>
    </div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=533431" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
</script>
<!-- Baidu Button END --></td>
    </tr>
</table></form>
<?php echo TONGJI;?>
</body>
</html>