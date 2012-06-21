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

  $('#name').focus();
  
  var reAdd = function(){
    window.location.href= "<?php echo site_url('order/edit')?>";
  }


  $('#save').click(function() {//新增
    if (beforeSubmit()){
	  $('form').submit();
    }
  });

 
});

$(document).ready(function() {
  editBody();
});
$(window).resize(function(){
  editBody();
});
//-->
</script>
</head>

<body  class="x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

  <!-- 当前菜单 -->
  <div id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div class="x-tab-strip-wrap">
  <ul class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" >
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text"><?php echo $header_text; ?></span>
  </span>
  </em>
  </a>
  </li>
  <li class="x-tab-edge"></li>
  <div class="x-clear"></div>
  </ul>
  </div>
  </div>

  <!-- 工具栏 -->
  <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div class="x-toolbar "><table cellspacing="0"><tbody><tr>
	
	<td id="save"><table class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-save" type="button">保存</button></em></td>
	<td class="x-btn-right"><i>&nbsp;</i></td>
	</tr></tbody></table></td>	

	<td id="reset"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-resume" type="button">重置</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>

	</tr></tbody></table></div></div>
  <!-- /工具栏 -->

  <!-- 表单 -->
	<div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " style="overflow:auto">

	 <div style=""  class="x-panel x-form-label-left ">
	 <div class="x-panel-bwrap form-padding"> 
	 <form class=" x-form" method="post" action="<?php echo site_url('order/save')?>"  id="form" enctype="multipart/form-data"> 
	 <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />
     <div class="order-wrap" >

	   <div class="box" style="height:100px">
	     <h3>订单 # <?php echo $editing['order_sn']; ?></h3>
		 <dl><dt>下单日期</dt><dd><?php echo $editing['place_at']; ?></dd></dl>
		 <dl><dt>订单状态</dt><dd><?php
            switch ($editing['status']){
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
			?></dd></dl>		 
       </div>

	   <div class="box" style="height:100px">
	     <h3>顾客信息</h3>		 
		 <dl><dt>顾客姓名</dt><dd><?php echo $editing['customer']['name']; ?></dd></dl>
		 <dl><dt>邮箱</dt><dd><?php echo $editing['customer']['email']; ?></dd></dl>
		 </dl>
       </div>

	   <div class="box" style="height:180px">
         <h3>支付&配送方式</h3>
		 <dl><dt>支付方式</dt><dd><?php echo $editing['payment']['name']; ?></dd></dl>
		 <dl>  <dt>配送方式</dt><dd><?php echo $editing['shipping']['name']; ?></dd></dl>
		 <dl>  <dt>发货时间</dt><dd></dd></dl>
		 <dl>  <dt>查询电话</dt><dd></dd></dl>
		 <dl> <dt>查询网址</dt><dd></dd></dl>
       </div>

	   <div class="box" style="height:180px">
	     <h3>送货地址</h3>
		 <dl><dt>收货人</dt><dd><?php echo $editing['delivery']['consignee']; ?></dd></dl>
		 <dl><dt>地区</dt><dd><?php echo $editing['delivery']['district']; ?></dd></dl>
		 <dl><dt>详细地址</dt><dd><?php echo $editing['delivery']['address']; ?></dd></dl>
		 <dl><dt>手机</dt><dd><?php echo $editing['delivery']['contact_mobile']; ?></dd></dl>
		 <dl><dt>电话</dt><dd><?php echo $editing['delivery']['contact_phone']; ?></dd></dl>
	   </div>

	   <div class="p-box" style="height:auto">
	     <h3>购物清单</h3>
		 <div class="list-div" >
		 <table cellpadding="3" cellspacing="0" width="100%">
			 <thead>
			 <tr class="x-grid3-header">
				<th class="sort-numeric " >
				<div class="x-grid3-hd-inner ">商品名称<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

				<th class="sort-numeric" >
				<div class="x-grid3-hd-inner">价格<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

				<th class="sort-alpha">
				<div class="x-grid3-hd-inner">数量<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

				<th class="sort-alpha">
				<div class="x-grid3-hd-inner">小记<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >
			 </tr>
			 </thead>

			 <tbody>
			 <?php foreach($editing['order_items'] as $item): ?>
			 <tr class="x-grid3-row " >
				<td><div class="x-grid3-cell-inner "><?php echo $item['product_name'] ?></div></td>
				<td><div class="x-grid3-cell-inner ">¥ <?php echo $item['price'] ?></div></td>
				<td><div class="x-grid3-cell-inner "><?php echo $item['quantity'] ?></div></td>
				<td><div class="x-grid3-cell-inner ">¥ <?php echo $item['price']*$item['quantity'] ?></div></td>
             </tr>
			 <?php endforeach; ?>
			 </tbody>
	     </table>
		 </div>
	   </div>

	   <!--<div class="box" style="height:auto">
	     <h3>业务记录（待做）</h3>
	   </div>-->

	   <div class="box" style="height:70px">
	     <h3>修改状态</h3>
		 <dl>
		   <dt>新状态</dt>
		   <dd><select name='status' >
			  <option value='1' <?php if($editing['status'] == 1) echo 'selected';?> >未确认</option>
			  <option value='2' <?php if($editing['status'] == 2) echo 'selected';?> >已确认</option>
			  <option value='3' <?php if($editing['status'] == 3) echo 'selected';?> >已付款</option>
			  <option value='4' <?php if($editing['status'] == 4) echo 'selected';?> >确认付款</option>
			  <option value='5' <?php if($editing['status'] == 5) echo 'selected';?> >确认货到已付款</option>
			  <option value='6' <?php if($editing['status'] == 6) echo 'selected';?> >已发货</option>
			  <option value='7' <?php if($editing['status'] == 7) echo 'selected';?> >收货并确认</option>
			  <option value='8' <?php if($editing['status'] == 8) echo 'selected';?> >收货并付款</option>
			  <option value='9' <?php if($editing['status'] == 9) echo 'selected';?> >订单完成</option>
			  <option value='10' <?php if($editing['status'] == 10) echo 'selected';?> >已取消</option>
			  <option value='11' <?php if($editing['status'] == 11) echo 'selected';?> >已退款</option>
			  <option value='12' <?php if($editing['status'] == 12) echo 'selected';?> >已退货</option>
		   </select></dd>
		 </dl>
	   </div>

	   <div class="box count" style="height:180px">
	     <h3>订单总计</h3>
		 <dl><dt>小记</dt><dd>¥ <?php echo $editing['total_product_price']; ?></dd></dl>
		 <dl><dt>配送费用</dt><dd>¥ <?php echo $editing['auto_freight_fee']; ?></dd></dl>
		 <dl><dt>总计</dt><dd>¥ <?php echo $editing['total_price']; ?></dd></dl>
		 <dl><dt>已付款</dt><dd></dd></dl>
		 <dl><dt>已退款</dt><dd></dd></dl>
	   </div>
	   
	 </div>

	 
	 </form>
	 </div>
	 </div>
	</div>	
  <!-- /表单 -->

</div>
</body>
</html>


