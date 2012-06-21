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
  $('#attr_set_id').change(function(){
	  $.post('<?php echo site_url('attribute')?>', $('#search-form').serialize(), function(data) {
	  $('.x-grid3-row').remove();
	  $('#page').remove();
	  $('.x-grid3-row',data).appendTo($('#listTable tbody'));	  
	  $('#page',data).appendTo($('#content'));

	  pageStyle();
	  pageClick()
	  $('#listTable').alternateRowColors().eventRowColors();
	  });
  });
});

//列表窗口缩放效果
$(document).ready(function() {
  listBody();
});
$(window).resize(function(){
  listBody();
});

function delete_a(id)
{
	if (confirm('确定删除该属性吗？')){
   
	window.location.href= '<?php echo site_url('attribute/delete/id')?>'+'/'+id;
    }
}

 //--> 
</script>

</head>

<body id="body" class=" x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

  <div  id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div  id="crt-menu1" class="x-tab-strip-wrap">
  <ul id="crt-menu2" class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" >
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text">属性列表</span>
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
  <div id="menu-body2" class="x-panel x-panel-noborder" >
  <div  class="x-panel-bwrap">
  <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct" >
  <div id="menu-body3" class="x-panel x-border-panel x-grid-panel" style="left: 0px; top: 0px;">
  <div style="position: relative;"  class="x-panel-bwrap">

      <!-- 工具栏 -->
      <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div  class="x-toolbar " style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><tr>
	
	  <td  onClick="window.location.href='<?php echo site_url('attribute/edit')?>'"><table style="width: hidden;"  class="button x-btn-wrap x-btn x-btn-text-icon " border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	  <td class="x-btn-left"><i>&nbsp;</i></td>
	  <td class="x-btn-center" ><em ><button  class="x-btn-text tb-addnew" type="button" >新增</button></em></td>
	  <td class="x-btn-right"><i></i></td>
	  </tr></tbody></table></td>

	  </tr></tbody></table></div>

	  </div>
	  <!-- /工具栏 -->

	   <!-- 搜索栏 -->
	  <div id="search" class="x-panel-bbar x-panel-body" style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" >
	  <div  class="x-toolbar x-small-editor" style=" padding:5px 0 2px 40px;overflow:;">
	  <form id="search-form" style="overflow:;">
		  <input name="search"  type="hidden" value="1" />
		  <input  name="page"  type="hidden" value="<?php  echo $page;  ?>" />
		  按属性分组显示:
		  <select name='attr_set_id'style="height:22px;" id="attr_set_id">
		  <option value='0'  >所有属性分组</option>
		  <?php foreach($attr_sets as $value) :  ?>
		  <option value='<?php echo $value['id'];  ?>'  <?php if($attr_set_selected == $value['id']) echo 'selected' ?> ><?php echo $value['name'];  ?></option>
		  <?php endforeach; ?>
		  </select>
		 
	  </form>
	  </div></div>
	  <!-- /搜索栏 -->

	 <!-- 内容 -->
	 <div style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >

	    <div class="list-div " id="listDiv" style="margin-bottom:1px;overflow:auto;">
		<table cellpadding="3" cellspacing="0" id="listTable" >
		 <thead>
		 <tr class="x-grid3-header">
			<th>
			<div class="x-grid3-hd-inner ">ID<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th >
			<div class="x-grid3-hd-inner">属性名称<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th >
			<div class="x-grid3-hd-inner">属性分组<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th >
			<div class="x-grid3-hd-inner">属性类型<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th >
			<div class="x-grid3-hd-inner">可选值<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th >
			<div class="x-grid3-hd-inner">默认值<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>
		
			<th style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">操作</div></th>
		 </tr>
         </thead>

		 <tbody>
		 <?php foreach ($attributes as $value){ ?>
		 <tr class="x-grid3-row ">
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['attr_name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['attr_set_name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['attr_type_name'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo char_limit3($value['option_values'],15); ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['default_value'] ?></div></td>
			<td><div class="x-grid3-cell-inner ">		
			 <a href='<?php echo site_url('attribute/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			  <a href='#' onclick="delete_a('<?php echo $value['id'];?>')" style="text-decoration:none" alt='删除' title='删除'>
			 <img src="<?php echo base_url()?>images/icon_drop.gif" border="0" width="16" height="16">
			 </a>
			</div></td>
		 </tr>
		 <?php } ?>
		</tbody></table>
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

