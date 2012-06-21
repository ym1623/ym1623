<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
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

function delete_a(id)
{
	if (confirm('确定删除该品牌吗？')){
   
	window.location.href= '<?php echo site_url('brand/delete/id')?>'+'/'+id;
    }
}
 //--> 
</script>

</head>

<body class=" x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel ext-ie'" style="left: 5px; top: 0px; ">

 <div id="crt-menu" class="x-tab-panel-header x-unselectable">
 <div  id="crt-menu1" class="x-tab-strip-wrap">
 <ul id="crt-menu2" class="x-tab-strip x-tab-strip-top">
 <li class="x-tab-strip-active" >
 <a class="x-tab-right" href="#" onClick="return false;">
 <em class="x-tab-left">
 <span style="width: 130px;" class="x-tab-strip-inner">
 <span class="x-tab-strip-text">品牌列表</span>
 </span>
 </em>
 </a>
 </li>
 <li class="x-tab-edge"></li>
 <div class="x-clear"></div>
 </ul>
 </div>
 </div>
 
 <!-- 菜单体 -->
 <div class="x-tab-panel-bwrap border-bottom x-panel-body">
 <div id="menu-body1" class="x-tab-panel-body x-tab-panel-body-top" >
 <div id="menu-body2" class="x-panel x-panel-noborder" >
 <div class="x-panel-bwrap">
 <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct" >
 <div id="menu-body3" class="x-panel x-border-panel x-grid-panel" style="left: 0px; top: 0px;">
 <div style="position: relative;" class="x-panel-bwrap">

   <!-- 工具栏 -->
   <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div class="x-toolbar " style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><tr>
	
	 <td onClick="window.location.href='<?php echo site_url('brand/add')?>'"><table style="width: hidden;" class="button x-btn-wrap x-btn x-btn-text-icon " border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	 <td class="x-btn-left"><i>&nbsp;</i></td>
	 <td class="x-btn-center" ><em ><button class="x-btn-text tb-addnew" type="button" >新增</button></em></td>
	 <td class="x-btn-right"><i></i></td>
	 </tr></tbody></table></td>

	 </tr></tbody></table></div></div>
	 <!-- /工具栏 -->

	 <!-- 内容 -->
	 <div style="overflow:auto;border-left:0 solid #99bbe8;" id="content" class="x-panel-body border-top   
	 border-nobottom" >
	 <div class="list-div" id="listDiv" >
		<table cellpadding="3" cellspacing="0" id="listTable" >
		 <thead>
		  <tr class="x-grid3-header">
			<th class="sort-numeric ">
			<div class="x-grid3-hd-inner ">ID<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

            <th class=" ">
			<div class="x-grid3-hd-inner ">logo</div></th>

			<th class="sort-alpha" >
			<div class="x-grid3-hd-inner ">品牌名称<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="sort-alpha"  >
			<div class="x-grid3-hd-inner ">品牌别名<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="sort-alpha"  >
			<div class="x-grid3-hd-inner ">排序<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="sort-alpha"  >
			<div class="x-grid3-hd-inner ">官方网址<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>
		
			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">操作</div></th>
		  </tr>
		 </thead>

         <tbody>
		 <?php foreach ($brands as $value){ ?>
		 <tr class="x-grid3-row ">
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img onerror="this.src='<?php echo base_url()?>images/none_150.gif'" src="<?php echo base_url().UPLOADS.$value['logo']  ;?>" width="138" height="46"/></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['byname'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['sort_order'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['website'] ?></div></td>
			<td ><div class="x-grid3-cell-inner ">
			 <a href='<?php echo site_url('brand/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			  <a href='#' onclick="delete_a('<?php echo $value['id'];?>')" style="text-decoration:none" alt='删除' title='删除'>
			 <img src="<?php echo base_url()?>images/icon_drop.gif" border="0" width="16" height="16">
			 </a>
			</div></td>
		 </tr>
		 <?php } ?>
		</tbody>
		</table>
	</div>
	<!-- 分页显示 -->
	<?php
	$data['total_pages'] = $total_pages;
	$data['page_first'] = $page_first;
	$data['page_prev'] = $page_prev;
	$data['total_pages'] = $total_pages;
	$data['page'] = $page;
	$data['page_next'] = $page_next;
	$data['page_last'] = $page_last;
	$data['show_start'] = $show_start;
	$data['show_end'] = $show_end;
	$data['total_rows'] = $total_rows;
	$this->load->view('widget/pagination', $data)
	?>
	<!-- /分页显示 -->
    </div>
    <!-- /内容 -->
	  
 </div></div></div></div></div></div></div>
 <!-- /菜单体 -->

</div>
</body>
</html>



