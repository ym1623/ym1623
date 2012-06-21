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

function out_recycle(id)
{
	if (confirm('确定还原该订单吗？')){    
	  window.location.href= '<?php echo site_url('order/out_recycle/order')?>'+'/'+id;
    }
}

$(document).ready(function() {
  $('#search-action').click(function(){
   $.post('<?php echo site_url('order/recycle')?>', $('#search-form').serialize(), function(data) {
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
 <span class="x-tab-strip-text">回收站</span>
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

   <!-- 工具栏 
   <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div class="x-toolbar " style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><tr>
	
	
   </tr></tbody></table></div></div>
    /工具栏 -->

   <!-- 搜索栏 -->
   <div id="search" class="x-panel-bbar x-panel-body" style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" >
   <div  class="x-toolbar x-small-editor" style=" padding:2px 0 5px 20px;">
   <form id="search-form" style="overflow:;">
	  <input name="search"  type="hidden" value="1" />
	  <input id="search_page" name="page"  type="hidden" value="<?php  echo $page;  ?>" />
	  订单号 <input type="text" name="order_sn" size="20" class="x-form-text x-form-field"  value="<?php echo $order_sn; ?>" />&nbsp; &nbsp;
	  收货人 <input type="text" name="consignee" size="20" class="x-form-text x-form-field"  value="<?php echo $consignee ?>" />&nbsp; &nbsp;
	  订单状态 <select name='status'style="width:80px;height:22px;">
	  <option value='0'  >全部</option>
	  <option value='1'  >未确认</option>
	  <option value='2'  >已确认</option>
	  <option value='3'  >已付款</option>
	  <option value='4'  >确认付款</option>
	  <option value='5'  >确认货到已付款</option>
	  <option value='6'  >已发货</option>
	  <option value='7'  >收货并确认</option>
	  <option value='8'  >收货并付款</option>
	  <option value='9'  >订单完成</option>
	  <option value='10'  >已取消</option>
	  <option value='11'  >已退款</option>
	  <option value='12'  >已退货</option>
	  </select>&nbsp; &nbsp;
	  <button id="search-action" class="x-btn-text" type="button">搜索</button>
   </form>
   </div></div>
   <!-- /搜索栏 -->

   <!-- 内容 -->
   <div style="overflow:auto;border-left:0 solid #99bbe8;" id="content" class="x-panel-body border-top   
	 border-nobottom" >
     <div class="list-div" id="listDiv" >
		<table cellpadding="3" cellspacing="0" id="listTable" >
		 <thead>
		  <tr class="x-grid3-header">
			<th class="sort-numeric " >
			<div class="x-grid3-hd-inner ">ID<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="sort-numeric" >
			<div class="x-grid3-hd-inner">订单号<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="sort-alpha">
			<div class="x-grid3-hd-inner">下单时间<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="sort-alpha">
			<div class="x-grid3-hd-inner">收货人<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >
            
			<th class="sort-numeric">
			<div class="x-grid3-hd-inner">总金额<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th >
			<div class="x-grid3-hd-inner">订单状态<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >

			<th  >
			<div class="x-grid3-hd-inner">操作<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>		
		  </tr>
          </thead>

          <tbody>
		  <?php  foreach ($orders as $order): ?>
		  <tr class="x-grid3-row " >
			<td><div class="x-grid3-cell-inner "><?php echo $order['id'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['order_sn'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['place_at'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['consignee'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['total_price'] ?></div></td>
			<td><div class="x-grid3-cell-inner ">
			<?php
            switch ($order['status']){
			   case 1 : echo '未确认';break;
			   case 2 : echo '已确认';break;
			   case 3 : echo '已付款';break;
			   case 4 : echo '确认付款';break;
			   case 5 : echo '确认货到已付款';break;
			   case 6 : echo '已发货';break;
			   case 7 : echo '收货并确认';break;
			   case 8 : echo '收货并付款';break;
			   case 9 : echo '订单完成';break;
			   case 10 : echo '已取消';break;
			   case 11 : echo '已退款';break;
			   case 12 : echo '已退货';break;
		    } 		
			?>

			</div></td>
			<td ><div class="x-grid3-cell-inner ">			 
			 <a href='#' id="in_recycle" style="text-decoration:none"  title='还原' onclick="out_recycle('<?php echo $order['id']?>')">
			 <img src="<?php echo base_url()?>images/icon_output.gif" border="0" width="16" height="16" alt='还原'></a>&nbsp;&nbsp;
			 <!--<a href='<?php echo site_url('order/delete/id/'.$order['id'])?>'  style="text-decoration:none" alt='删除' title='删除'>
			 <img src="<?php echo base_url()?>images/icon_drop.gif" border="0" width="16" height="16">
			 </a>	-->
			</div></td>
		  </tr>
		  <?php  endforeach; ?>
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


