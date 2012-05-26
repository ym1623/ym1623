<?
/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */

/* Please link us.. http://chevereto.com/ */
require('engine.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo LANG;?>" lang="<?php echo LANG;?>">
<head>

<meta name="generator" content="Chevereto <?php echo SC_VERSION;?>" /><!-- LET IT BIT! -->

<title><? echo $titulo.' '.APP_NAME;?> - <?php echo TAG_LINE;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="<?php echo LANG;?>" />
<link href="<?php echo URL_SCRIPT;?>estilo.css" rel="stylesheet" type="text/css" />

<meta name="description" content="<?php echo DESCRIPTION;?>"/>
<meta name="keywords" content="<?php echo KEYWORDS; ?>"/>
<meta name="robots" content="index,follow"/>

<link rel="shortcut icon" href="<?php echo PATH_SCRIPT;?>favicon.ico" type="image/x-icon" />

<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?php echo PATH_SCRIPT;?>js/pngfix.js"></script>
<![endif]-->

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1");</script>
<script type="text/javascript" src="<?php echo PATH_SCRIPT;?>js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="<?php echo PATH_SCRIPT;?>js/jquery_support.js"></script>

<script type="text/javascript">
// <![CDATA[
$(document).ready(function(){
<? if ($spit==true) { ?>error();<? } ?>
<? if ($modo==1 || $modo=='rr') { ?>upload();<? } ?>
<? if ($modo==3) { ?>process();<? } ?>
<? if ($modo==2) { ?>viewer();<? } ?>
<? if ($modo==2 || $modo==3) { ?>social();<? } ?>
<? if ($cut_url==true && $cut_url_user==true && $modo==1) { ?>pref();<? } ?>
});
// ]]>
</script>

</head>

<body>

<div id="top">
	<div id="logo">
	  <a href="<?php echo URL_SCRIPT;?>"><img src="<?php echo PATH_SCRIPT;?>site-img/logo.png" alt="<?php echo APP_NAME;?>" /></a>
    </div>
    <div id="tagline"><?php echo TAG_LINE;?></div><div id="limite">JPG PNG BMP GIF <span>Max.<?php echo $max_mb;?>Mb</span></div>
</div>

<? if ($spit==true) { ?>
<h1 id="error"><span><?php echo $errormsg?></span></h1>
<? } ?>

<? if ($modo==1) { ?>
<div id="contenido">

<div id="selector_up">
	<div id="tab_container"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>>
    	<div class="btn_local"><a class="local" id="linklocal" style="display: none;"></a></div>
        <div class="btn_remoto"><a class="remota" id="linkremota"></a></div>
    </div>
<? if ($cut_url==true && $cut_url_user==true) { ?><div id="preferencias"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><a id="pclosed"><span><?php echo TXT_PREFERENCES;?></span></a><a id="popen" style="display:none;"><span><?php echo TXT_PREFERENCES;?></span></a></div><? } ?> 
</div> <!-- selector -->
	
	<form id="form_up" enctype="multipart/form-data" action="<?php echo PATH_SCRIPT;?>" method="post">
    <input type="hidden" name="postkey" id="postkey" value="<?php echo $postkey;?>" />

	<? if ($cut_url==true && $cut_url_user==true) { ?>
	<div id="pref-panel" style="display: none;"><div id="cajon-pref"><p id="prefurl"><input name="" type="checkbox" id="cortarurl" value="" <? if(isset($_COOKIE['prefurl'])) { ?>checked="checked"<? } ?> /><label for="cortarurl"> <?php echo TXT_TINYURL;?></label></p><div id="save"><a id="savepref" /><?php echo TXT_CLOSE_PREF;?></a></div></div></div>  
    <? } ?>

    <div id="contenedorupload">
        <div id="subir_local">
            <h2 id="chooselocal"><?php echo TXT_LOCAL;?></h2>
            <div class="inputs"><input name="fileup" type="file" size="60" id="localUP" onclick="javascript:document.getElementById('remotaUP').value = '';"/></div>
        </div>
        <div id="subir_remota" style="display: none;">
            <h2 id="chooseremota"><?php echo TXT_REMOTE;?></h2>
            <div class="inputs"><input name="remota" size="60" id="remotaUP" onclick="javascript:document.getElementById('localUP').value = '';"/></div>
        </div>
    </div>
	    
    <div id="redimensionar">
    	<div id="redimensionar_cajatitulo">
            <div id="redimensionar_titulo">
                <div id="boton_redimensionar"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><span><a id="rclosed"></a><a id="ropen" style="display: none;"></a></span></div>
                <div id="red_mensaje"><span id="red1"><?php echo RESIZE_DSC;?></span><span id="red2" style="display: none;"></span></div>
            </div>
        </div>        
        <div id="redimensionar-borde" style="display: none;">
        	<div id="cajonred">
                <div id="ancho_deseado"><?php echo RESIZE_WIDTH;?> <span><?php echo RESIZE_PIXELS;?></span></div>
                <input name="resize" id="resize"/>
                <div id="kepp"><?php echo RESIZE_KEEP;?></div>
            </div>
        </div>
    </div>
    
    <div id="boton_subir">
    	<input type="image" src="<?php echo PATH_SCRIPT;?>site-img/btn_subir<? if (isset($lang)) { echo '_'.$lang; } ?>.gif" id="subir"/>
    	<div id="enviando" style="display: none;"><span id="momentito"><?php echo TXT_UPLOADING;?></span></div>
    </div>
    
	</form>

<? } ?>
<? if ($modo=='rr') { ?>
<!-- SUBIR -->

    <div id="imagenfull"><img src="<?php echo $urlrez?>" alt="<?php echo $urlrez?>" /></div>
    
    <form enctype="multipart/form-data" action="<?php echo PATH_SCRIPT;?>" method="post">
	
	<? if ($cut_url==true && $cut_url_user==true) { ?>
	<div id="pref-panel" style="display: none;"><div id="cajon-pref"><p id="prefurl"><input name="" type="checkbox" id="cortarurl" value="" <? if(isset($_COOKIE['prefurl'])) { ?>checked="checked"<? } ?> /><label for="cortarurl"> <?php echo TXT_TINYURL;?></label></p><div id="save"><a id="savepref" /><?php echo TXT_CLOSE_PREF;?></a></div></div></div>  
    <? } ?>
    
	<div id="contenedorupload">
        <div id="subir_remota">
            <h2 id="chooseremota"><?php echo TXT_REMOTE_RR;?></h2>
            <div class="inputs"><input value="<?php echo $urlrez?>" name="remota" size="60" id="remotaUP" onclick="javascript:document.getElementById('localUP').value = '';"/></div>
        </div>
    </div>
	
	<div id="redimensionar">
    	<div id="redimensionar_cajatitulo">
            <div id="redimensionar_titulo">
                <div id="boton_redimensionar"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><span><a id="rclosed"></a><a id="ropen" style="display: none;"></a></span></div>
                <div id="red_mensaje"><span id="red1"><?php echo RESIZE_DSC;?></span><span id="red2" style="display: none;"></span></div>
            </div>
        </div>        
        <div id="redimensionar-borde" style="display: none;">
        	<div id="cajonred">
                <div id="ancho_deseado"><?php echo RESIZE_WIDTH;?> <span><?php echo RESIZE_PIXELS;?></span></div>
                <input name="resize" id="resize"/>
                <div id="kepp"><?php echo RESIZE_KEEP;?></div>
            </div>
        </div>
    </div>
    
    <div id="boton_subir">
    	<input type="image" src="/site-img/btn_subir<? if (isset($lang)) { echo '_'.$lang; } ?>.gif" id="subir"/>
    	<div id="enviando" style="display: none;"><span id="momentito"><?php echo TXT_UPLOADING;?></span></div>
    </div>
     
    </form>
<!-- contenido --><? } // MODO RR ?>
<? if ($modo==4) { ?>
<div id="subiste-viendo"><h1><?php echo TXT_TEMP_SAVE;?></h1></div>

	<form enctype="multipart/form-data" action="<?php echo PATH_SCRIPT;?>" method="post">
    <input name="remota" type="hidden" value="<?php echo $URLrdn?>" />
	<div id="redimensionar_cajatitulo" class="denuevo">
        <div id="redimensionar_titulo"><div id="boton_redimensionar"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><span><a id="ropen"></a></span></div>
        <div id="red_mensaje"><span id="red1"><?php echo RESIZE_DSC;?></span><span id="red2" style="display: none;"></span></div>
        </div>
    </div>
    <div id="redimensionar">
        <div id="redimensionar-borde">
            <div id="cajonred">
                <div id="ancho_deseado"><?php echo RESIZE_WIDTH;?> <span><?php echo RESIZE_PIXELS;?></span></div>
                <input name="resize" id="resize"/>
                <div id="kepp"><?php echo RESIZE_KEEP;?></div>
            </div> 
		    <div id="boton_redo">
                <input type="image" src="site-img/btn_reintentar<? if (isset($lang)) { echo '_'.$lang; } ?>.gif" id="redo" />
                <div id="enviando" style="display: none;"><span id="momentito"><?php echo TXT_REZ_AGAIN;?></span></div>
            </div>
        </div>
    </div>
    </form>
    
    <div id="share">   
     	<h2><?php echo TXT_TEMP_PLACE;?></h2>
        <div class="ctninput"><div class="codex">URL:</div><div class="inputshare"><input id="CTEMP" value="<?php echo $URLrdn;?>" /></div></div>
    </div>
<? } // IF 4 ?>
<? if ($modo==5) { ?>
<div id="contenido-statico">
<h1 id="titular"><?php echo $h1?></h1>
<? if ($page=='400' || $page=='401' || $page=='403' || $page=='404' || $page=='500' || $page=='up' || $page=='up/temp' || $page=='up/working' || $page=='images'|| $page=='generico') { ?>
	<p align="center">
    <?php echo $explained?>
    </p>
<? } 
} ?>

<? if ($modo==2 || $modo==3) { // EL IF 2-3
	if (isset($v)) { 
		$quehace = TXT_SEEING;
	} else {
		if ($red==1) {
			$retxt = ' '.TXT_AND_RESIZE;
		}
		$quehace = TXT_DID.$retxt;
	}
	$mensaje = $quehace.' <a href="'.PATH_SCRIPT.DIR_IM.$folhost.$name.'">'.$name.'</a> ('.$tamano_kb.' KB - '.$ancho.'x'.$alto.'px)'.$colita;

?>
<div id="subiste-viendo"><h1><?php echo $mensaje?></h1></div>

<div id="contenido">
	<div id="tools"><div id="fullsize"<? if ($ancho<=900) { echo ' style="display: none; "'; }?>><a href="<?php echo PATH_SCRIPT.DIR_IM.$folhost.$name?>" title="<?php echo $ancho?>x<?php echo $alto?>"><?php echo FULL_SIZE;?></a></div><div id="sharethis"><a id="sharing"><?php echo SHARE;?></a><a id="sharing-close" style="display: none;"><?php echo SHARE;?></a></div></div>
    <div id="imagen"><a href="<?php echo PATH_SCRIPT.DIR_IM.$folhost.$name?>"><img src="<?php echo PATH_SCRIPT.DIR_IM.$folhost.$name?>" alt="" <? if ($ancho>=900) { echo 'width="900" '; } ?>/></a></div>
    
    <div id="share" <? if (isset($v) && $v!=='rec.php') { ?>style="display: none;"<? } ?>>
    
        <div id="mostrar_mas_enlaceview">
            <h2 id="mev"><?php echo SHARE_THUMB_VIEWER;?></h2>
            <div class="ctninput">
                <div class="codex">HTML:</div><div class="inputshare">
                <input tabindex="1" value="&lt;a href=&quot;<?php echo $URLvim?>&quot;&gt;&lt;img src=&quot;<?php echo $URLthm?>&quot; border=&quot;0&quot;&gt;&lt;/a&gt;" onclick="this.focus();this.select();" />
                </div>
            </div>
            <div class="ctninput">
                <div class="codex"><?php echo SHARE_FORUMS;?>:</div><div class="inputshare">
                <input tabindex="2" value="[url=<?php echo $URLvim?>][img]<?php echo $URLthm?>[/img][/url]" onclick="this.focus();this.select();" />
                </div>
            </div>
        </div>
        
        <div id="mostrar_directa">
            <h2 id="md"><?php echo SHARE_DIRECT;?></h2>
            <div class="ctninput">
                <div class="codex"><a href="<?php echo $URLvim?>" target="_blank"><?php echo SHARE_VIEWER;?>:</a></div>
                <div class="inputshare"><input tabindex="3" value="<?php echo $URLvim?>" onclick="this.focus();this.select();" /></div>
            </div>
            <div class="ctninput">
                <div class="codex"><?php echo SHARE_FORUMS;?>:</div>
                <div class="inputshare"><input tabindex="4" value="[img]<?php echo $URLimg?>[/img]" onclick="this.focus();this.select();" /></div>
            </div>
            <div class="ctninput">
                <div class="codex"><a href="<?php echo $URLimg?>" target="_blank">URL:</a></div>
                <div class="inputshare"><input tabindex="5"value="<?php echo $URLimg?>" onclick="this.focus();this.select();" /></div>
            </div>
            <? if (isset($ShortURL) && !empty($ShortURL)) { ?>
            <div class="ctninput">
                <div class="codex"><a href="<?php echo $ShortURL?>" target="_blank"><?php echo $tiny_service;?>:</a></div>
                <div class="inputshare"><input id="tinyurl" tabindex="6" value="<?php echo $ShortURL?>" onclick="this.focus();this.select();" /></div>
            </div>
            <? } ?>
        </div>
        
		<div id="mostrar_social">
        <h2 id="mes"><?php echo SHARE_SOCIAL;?></h2>
        <div class="ctninput-social">
        	<div class="codex"><?php echo SHARE_NETWORKS;?>:</div>
            <a href="http://del.icio.us/post?url=<?php echo $URLshr?>" id="delicious" target="_blank"></a>
			<a href="http://www.facebook.com/share.php?u=<?php echo $URLshr?>" id="facebook" target="_blank"></a>
            <a href="http://www.google.com/bookmarks/mark?op=edit&amp;bkmk=<?php echo $URLshr?>" id="google" target="_blank"></a>
            <a href="http://www.tumblr.com/share?v=3&amp;u=<?php echo $eu_img?>" id="tumblr" target="_blank"></a>
            <a href="http://twitter.com/home?status=viendo%20<? echo cortar_url($URLshr); ?>" id="twitter" target="_blank"></a>
            <a href="http://vi.sualize.us/post/?popup=1&amp;address=<?php echo $eu_img?>&amp;referenceURL=<?php echo URL_SCRIPT;?>" id="visualizeus" target="_blank"></a>
            <div id="quecosa">
                <span id="d-delicious" style="display: none;">del.icio.us</span>
                <span id="d-facebook" style="display: none;">facebook</span>
                <span id="d-google" style="display: none;">Google Bookmarks</span>
                <span id="d-tumblr" style="display: none;">tumblr</span>
                <span id="d-twitter" style="display: none;"><?php echo SHARE_TWITTER;?></span>
                <span id="d-visualizeus" style="display: none;">vi.sualize.us</span>
            </div>
        </div>
        </div>
    </div>
<? } ?><div align="center"><script type="text/javascript">
google_ad_client = "ca-pub-2006512290696014";google_ad_slot = "6662313368";google_ad_width = 468;google_ad_height = 60;</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- Baidu Button BEGIN -->
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
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script></div>
<!-- Baidu Button END -->
</div> <!-- contenido -->

<div id="foot"><div class="foot-d2"><?php echo APP_NAME;?> <a href="http://img.share.lc">img.share.lc</a> <a href="http://xiaogg.ctdisk.com/u/349707/437278">源码下载</a></div></div>
<div style="display:none"><script language="javascript" type="text/javascript" src="http://js.users.51.la/3729735.js"></script></div></body>
</html>