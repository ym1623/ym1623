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

// 折叠分类列表(待做)


$(document).ready(function() {
  listBody();
});
$(window).resize(function(){
  listBody();
});

$(document).ready(function() {
  $('#category_id').change(function(){
	  $.post('<?php echo site_url('category')?>', $('#search-form').serialize(), function(data) {
	  $('#listTable tbody').empty();
	  $('.x-grid3-row',data).appendTo($('#listTable tbody'));
	  $('#listTable').alternateRowColors().eventRowColors();
	  });
  });
});

function delete_a(id)
{
	if (confirm('确定删除该分类吗？')){
   
	window.location.href= '<?php echo site_url('category/delete/id')?>'+'/'+id;
    }
}
//-->
</script>
</head>


<body  class="x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

  <!-- 当前菜单 -->
  <div id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div style="" id="crt-menu1" class="x-tab-strip-wrap">
  <ul id="crt-menu2" class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" id="">
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text">分类列表</span>
  </span>
  </em>
  </a>
  </li>
  <li id="ext-gen65" class="x-tab-edge"></li>
  <div id="ext-gen66" class="x-clear"></div>
  </ul>
  </div>
  </div>

  <!-- 菜单体 -->
  <div id="ext-gen59" class="x-panel-body x-tab-panel-bwrap border-bottom">
  <div id="menu-body1" class="x-tab-panel-body x-tab-panel-body-top" >
  <div id="menu-body2" class="x-panel x-panel-noborder" style="">
  <div id="ext-gen72" class="x-panel-bwrap">
  <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct" >
  <div id="menu-body3" class="x-panel x-border-panel x-grid-panel" style="left: 0px; top: 0px;">
  <div style="position: relative;" id="ext-gen74" class="x-panel-bwrap">

      <!-- 工具栏 -->
      <div id="tool" class="x-panel-tbar x-panel-tbar-noheader "><div id="" class="x-toolbar" style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><tr>
	
	  <td onClick="window.location.href='<?php echo site_url('category/add')?>'"><table style="width: hidden;" class="button x-btn-wrap x-btn x-btn-text-icon " border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	 <td class="x-btn-left"><i>&nbsp;</i></td>
	 <td class="x-btn-center" ><em ><button class="x-btn-text tb-addnew" type="button" >新增</button></em></td>
	 <td class="x-btn-right"><i></i></td>
	 </tr></tbody></table></td>

	  </tr></tbody></table></div></div>
	  <!-- /工具栏 -->

	   <!-- 搜索栏 -->
	  <div id="search" class="x-panel-bbar x-panel-body" style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" >
	  <div  class="x-toolbar x-small-editor" style=" padding:5px 0 2px 40px;overflow:;">
	  <form id="search-form" style="overflow:;">
		  <input name="search"  type="hidden" value="1" />
		  按顶级分类显示:
		  <select id="category_id" name='parent_id'style="width:130px;height:22px;" >
		  <option value='0'  >&nbsp;&nbsp;&nbsp;&nbsp;选择分类</option>
		  <?php foreach($category_not_leaf as $value) :  ?>
		  <option value='<?php echo $value['id'];  ?>'  <?php if($parent_selected == $value['id']) echo 'selected' ?> ><?php for($i=1;$i<=$value['level'];$i++){ echo '&nbsp;&nbsp;&nbsp;&nbsp;';} ?><?php echo $value['name'];  ?></option>
		  <?php endforeach; ?>
		  </select>
		 
	  </form>
	  </div></div>
	  <!-- /搜索栏 -->

	  <!-- 内容 -->
	  <div style="overflow:auto;border-left:0 solid #99bbe8;" id="content" class="x-panel-body border-top border-nobottom" >
	  <div class="list-div " id="listDiv" >
		<table cellpadding="3" cellspacing="0" id="listTable" >
		  <thead>
		  <tr class="x-grid3-header">		
			<th class="" >
			<div class="x-grid3-hd-inner">分类名称<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

            <th class="" >
			<div class="x-grid3-hd-inner">商品数<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="" >
			<div class="x-grid3-hd-inner">排序<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>
	    
			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">操作</div></th>	
		  </tr>
          </thead>
		  <tbody>
		  
		  </tbody>
		 </table>
		</div>
        </div>
        <!-- /内容 -->

  </div></div></div></div></div></div></div>
  <!-- /菜单体 -->

</div>
</body>
</html>
