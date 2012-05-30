<?php 
function zhuanhuan() { 
  $urlodd=explode('//',$_GET["url"],2);//把链接分成2段，//前面是第一段，后面的是第二段 
  $head=strtolower($urlodd[0]);//PHP对大小写敏感，先统一转换成小写，不然 出现HtTp:或者ThUNDER:这种怪异的写法不好处理 
  $behind=$urlodd[1]; 
  if($head=="thunder:"){ 
    $url=substr(base64_decode($behind), 2, -2);//base64解密，去掉前面的AA和后面ZZ 
  }elseif($head=="flashget:"){ 
    $url1=explode('&',$behind,2); 
    $url=substr(base64_decode($url1[0]), 10, -10);//base64解密，去掉前面后的[FLASHGET] 
  }elseif($head=="qqdl:"){ 
    $url=base64_decode($behind);//base64解密 
  }elseif($head=="http:"||$head=="ftp:"||$head=="mms:"||$head=="rtsp:"||$head=="https:"){ 
    $url=$_GET["url"];//常规地址仅支持http,https,ftp,mms,rtsp传输协议，其他地貌似很少，像XX网盘实际上也是基于base64，但是有的解密了也下载不了 
  }else{
    echo "本页面暂时不支持此协议";
  } 
  return $url; 
} 
if($_GET["url"]!=NULL){ 
  $url=zhuanhuan($_GET["url"]); 
  $url_thunder="thunder://".base64_encode("AA".$url."ZZ");//base64加密，下面的2也一样 
  $url_flashget="Flashget://".base64_encode("[FLASHGET]".$url."[FLASHGET]")."&aiyh"; 
  $url_qqdl="qqdl://".base64_encode($url);
} 
?> 
<form action='生成迅雷快车旋风链接.php' method='GET'>
请输入普通链接或者迅雷,快车，旋风链地址: 
<input type=text name="url" size="80"> 
<input type=submit value="转换"> 
</form> 
<p>实际地址：<a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a> 
<p>迅雷链：<a href="<?php echo $url_thunder;?>" target="_blank"><?php echo $url_thunder;?></a> 
<p>快车链：<a href="<?php echo $url_flashget;?>" target="_blank"><?php echo $url_flashget;?></a> 
<p>旋风链：<a href="<?php echo $url_qqdl;?>" target="_blank"><?php echo $url_qqdl;?></a>