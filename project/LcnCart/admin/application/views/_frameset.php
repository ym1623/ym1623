<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>LcnCart 管理中心</title>
<script type="Text/Javascript" language="JavaScript">
<!--

if (window.top != window)
{
  window.top.location.href = document.location.href;
}


//-->
</script>
</head>

<frameset border="0" framespacing="0" rows="35,*" >

    <frame id="header-frame" scrolling="no" frameborder="no" name="header-frame" src="<?php echo site_url('frameset/top')?>" />

    <frameset id="frame-body" border="0" framespacing="0" cols="230, *" name="frame-body">
		<frame scrolling="no" frameborder="no" name="menu-frame" id="menu-frame" src="<?php echo site_url('frameset/menu/product')?>"/>
		<frame scrolling="no" frameborder="no" name="main-frame" id="main-frame" src="<?php echo site_url('product')?>"/>
    </frameset>

</frameset>

</html>