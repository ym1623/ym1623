<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/main.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/admin.js"></script>

<script language="JavaScript"> 
<!--
$(document).ready(function() {
  listBody();
});
$(window).resize(function(){
  listBody();
});

 //--> 
</script>
</head>
<body  class="x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

  <!-- 当前菜单 -->
  <div  id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div style="" id="crt-menu1" class="x-tab-strip-wrap">
  <ul id="crt-menu2" class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" >
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text">支付列表</span>
  </span>
  </em>
  </a>
  </li>
  <li  class="x-tab-edge"></li>
  <div  class="x-clear"></div>
  </ul>
  </div>
  </div>

  <!-- 菜单体 -->
  <div  class="x-tab-panel-bwrap border-bottom x-panel-body">
  <div id="menu-body1" class="x-tab-panel-body x-tab-panel-body-top" >
  <div id="menu-body2" class="x-panel x-panel-noborder" style="">
  <div  class="x-panel-bwrap">
  <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct" >
  <div id="menu-body3" class="x-panel x-border-panel x-grid-panel" style="left: 0px; top: 0px;">
  <div style="position: relative;"  class="x-panel-bwrap">

      <!-- 工具栏 -->
      <div id="tool" class="x-panel-tbar x-panel-tbar-noheader "><div  class="x-toolbar" style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><tr>		  
	  </tr></tbody></table></div></div>
	  <!-- /工具栏 -->


	 <!-- 内容 -->
	 <div style="border-left:0 solid #99bbe8;overflow:auto;" id="content" class="x-panel-body border-top   
	 border-nobottom" >
	 <div class="list-div" id="listDiv" >
		<table cellpadding="3" cellspacing="0" id="listTable" >
		 <thead>
		 <tr class="x-grid3-header">
			<th>
			<div class="x-grid3-hd-inner ">名称<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th>
			<div class="x-grid3-hd-inner">描述<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th>
			<div class="x-grid3-hd-inner">到账时间<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th>
			<div class="x-grid3-hd-inner">版本<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>
		
			<th>
			<div class="x-grid3-hd-inner">费用</div></th>

			<th>
			<div class="x-grid3-hd-inner">排序</div></th>

			<th>
			<div class="x-grid3-hd-inner">已安装?</div></th>

			<th>
			<div class="x-grid3-hd-inner">操作</div></th>
		 </tr>
		 </thead>
         <tbody>
		 <?php foreach ($payments as $value){ ?>
		 <tr class="x-grid3-row ">
			<td><div class="x-grid3-cell-inner "><?php echo $value['name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo  str_replace ("\r\n","<br/>",$value['desc']) ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['charge_date'] ?></div></td>
			<td><div class="x-grid3-cell-inner ">待定</div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['fee'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['order'] ?></div></td>
            <td><div class="x-grid3-cell-inner ">
			  <a href='<?php echo site_url('payment')?>' style="text-decoration:none"  ><img src="<?php echo base_url()?>images/<?php echo ($value['enabled']?'yes.gif':'no.gif'); ?>" ></a>
			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			<?php if ($value['enabled']){?>
			 <a href='<?php echo site_url('payment/uninstall/id/'.$value['id'])?>' style="text-decoration:none" alt='卸载' title='卸载'>
			卸载
			 </a>&nbsp;&nbsp;
			 <a href='<?php echo site_url('payment/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>
			 <?php }else{ ?>
			 <a href="<?php echo site_url('payment/install/id/'.$value['id']); ?>"  style="text-decoration:none" >
			 安装
			 </a>
			 <?php  }?>
			</div></td>
		 </tr>
		 <?php } ?>
		</tbody></table>
		</div>
    </div>
    <!-- /内容 -->
	  
 </div></div></div></div></div></div></div>
 <!-- /菜单体 -->
 
</div>
</body>
</html>

