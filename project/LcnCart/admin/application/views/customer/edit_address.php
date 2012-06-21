<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/calendar.php"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/admin.js"></script>
<script language="JavaScript"> 
<!--
//窗口大小调整
$(document).ready(function() {
  editBody();
});
$(window).resize(function(){
  editBody();
});

$(document).ready(function() {

  $('#name').focus();

  var ID = "<?php echo $editing['id']?>";

  $('#save').click(function() {//新增
    if (beforeSubmit()){
	  $('form').submit();
    }
  });

  $('#saveEdit').click(function() {//新增并继续编辑
	if (beforeSubmit()){
      $('#re_edit').val('1');   
	  $('form').submit();
	}
  });
});

function delete_address(id,obj)
{
	if (confirm('确定把该地址吗？')){
		$.ajax({
		  url: '<?php echo site_url('customer/delete_address/address')?>'+'/'+id,
		  type: 'GET',
		  dataType: 'html',
		  success: function(data){
			$(obj).parents('tr:first').remove();
		  }
		});
    }
}

function set_default(id,c_id)
{
	$.ajax({
	  url: '<?php echo site_url('customer/set_default/address')?>'+'/'+id+'/id/'+c_id,
	  type: 'GET',
	  dataType: 'html',
	  success: function(data){
		//
	  }
	});
}

//-->
</script>

<style type="text/css">
.cus-style dl{clear:both;height:30px;line-height:23px;margin-top:7px;}
.cus-style dl dt{float:left;display:block;width:55px;color:royalblue;}
.cus-style dl dd{float:left}
.x-form-item .mark{padding-left:10px;color:#8d613a}
</style>

</head>
<body  class="x-border-layout-ct" style="position: relative;" >
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

  <!-- 当前菜单 -->
  <div id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div class="x-tab-strip-wrap">
  <ul class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" >
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text">顾客地址(顾客ID:<?php echo $customer['id']?>)</span>
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

	<td><span class="ytb-sep"></span></td>

	<td id="saveEdit"><table class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><button class="x-btn-text tb-renew" type="button">保存并继续编辑</button></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td><span class="ytb-sep"></span></td>

	<td id="reset"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-resume" type="button">重置</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>

	<td><span  class="ytb-sep"></span></td>

	<td  onClick="window.location.href='<?php echo site_url('customer')?>'"><table   class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button  class="x-btn-text tb-owner" type="button">列表</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>

  </tr></tbody></table></div></div>
  <!-- /工具栏 -->

    

  <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " style="overflow:auto;">
    <!-- 地址簿 -->
    <div style="padding:2px;"><span style="font:bold 13px Arial, Helvetica, sans-serif;background:#f1f1f1">地址簿</span><?php if(!$addresses)echo '(暂无)' ?></div>
    <div class="list-div " id="listDiv" >
    <table cellpadding="3" cellspacing="0" id="listTable" >		  	
	<?php if($addresses){?>
	<thead>
	  <tr class="x-grid3-header">	
		 <th >
		 <div class="x-grid3-hd-inner">设置默认<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

		 <th >
		 <div class="x-grid3-hd-inner">地址简称<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>
	
		 <th style="border-right:0 solid #99bbe8;">
		 <div class="x-grid3-hd-inner">收货人</div></th>

		 <th style="border-right:0 solid #99bbe8;">
		 <div class="x-grid3-hd-inner">手机</div></th>

		 <th style="border-right:0 solid #99bbe8;">
		 <div class="x-grid3-hd-inner">固定电话</div></th>

		 <th style="border-right:0 solid #99bbe8;">
		 <div class="x-grid3-hd-inner">详细地址</div></th>

		 <th style="border-right:0 solid #99bbe8;">
		 <div class="x-grid3-hd-inner">邮政编码</div></th>

		 <th style="border-right:0 solid #99bbe8;">
		 <div class="x-grid3-hd-inner">操作</div></th>
	  </tr>
	</thead>
	<tbody>
	<?php  foreach ($addresses as $value){ ?>
	  <tr class="x-grid3-row ">
		<td><div class="x-grid3-cell-inner "><input type="radio" name="is_defaulted" value="<?php $value['id'];?>" <?php if($value['is_default']) echo 'checked'?> onclick="set_default('<?php echo $value['id']?>','<?php echo $customer['id'];?>')" /></div></td>
		<td><div class="x-grid3-cell-inner "><?php echo $value['address_name'] ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['consignee'] ?></div></td>
		<td><div class="x-grid3-cell-inner "><?php echo $value['mobile'] ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['phone'] ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['address'] ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['postcode'] ?></div></td>
		
		<td ><div class="x-grid3-cell-inner ">			 
		 <a href='<?php echo site_url('customer/edit_address/id/'.$customer['id'].'/address/'.$value['id'])?>'>修改</a>&nbsp;&nbsp;
		 <a href='#' onclick="delete_address('<?php echo $value['id']?>',this)">删除</a>		 
		</div></td>
	  </tr>
	 <?php  } ?>
	 </tbody>
	 <?php  }?>
       </table>
      </div>
      <!-- /地址簿 -->
	  <form  class=" x-form" method="post" action="<?php echo site_url('customer/save_address')?>"id="form">
	  <input name="re_edit" id="re_edit" type="hidden" value="0" >
	  <input name="customer_id" id="customer_id" type="hidden" value="<?php echo $customer['id']?>" />
	  <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />	 	 
      
      <div style="float:left;width:550px;"><!-- 左 -->
	      <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px ;">
		  <div class="x-panel-bwrap">
		  <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
		  <div class="bottomLine">
		  <font class="lineTitle" color="dimgray"><?php echo $header_text ?></font>
		  <?php if($editing['id']) {?>
		  <span> <a href='<?php echo site_url('customer/edit_address/id/'.$customer['id'])?>' style="text-decoration:none;padding-left:100px" >新增</a></span>
		  <?php  }?>
		  </div>
		  </div>
		  </div>
		  </div>
		  <div  class="x-panel x-form-label-left ">
		  <div class="x-panel-bwrap form-padding">	  
			<div class="x-form-item" >
			<label style="width: 60px;color:dimgray;" class="x-form-item-label">地址简称:</label>
			<div class="x-form-element" style="padding-left: 20px;">
			<input style="width: 180px;" class="x-form-text x-form-field x-form-required" size="20" id="address_name" name="address_name" type="text" value="<?php echo $editing['address_name']?>"   /><span class="mark">简单易记的地址名称，比如“家”，“我的公司”等</span>
			</div><div class="x-form-clear-left"></div></div>

			<div class="x-form-item" >
			<label style="width: 60px;color:dimgray;" class="x-form-item-label">收货人:</label>
			<div class="x-form-element" style="padding-left: 20px;">
			<input style="width: 180px;" class="x-form-text x-form-field x-form-required" size="20" id="consignee" name="consignee" type="text" value="<?php echo $editing['consignee']?>"   />
			</div><div class="x-form-clear-left"></div></div>

		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">手机:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input style="width: 180px;" class="x-form-text x-form-field " size="20" name="mobile" type="text" value="<?php echo $editing['mobile']?>"   /><span class="mark">发货后，预计到货的时间(免费短信形式)</span>
		   </div><div class="x-form-clear-left"></div></div>

		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">联系电话:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input style="width: 180px;" class="x-form-text x-form-field x-form-required" size="20" id="phone" name="phone" type="text" value="<?php echo $editing['phone']?>"   />
		   </div><div class="x-form-clear-left"></div></div>
		   
		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">发票抬头:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input style="width: 180px;" class="x-form-text x-form-field " size="20" name="invoice_head" type="text" value="<?php echo $editing['invoice_head']?>"   />
		   </div><div class="x-form-clear-left"></div></div>

		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">所在地区:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <?php
			$data['province_selected'] = $editing['province_id'];
			$data['city_selected'] = $editing['city_id'];
			$data['district_selected'] = $editing['district_id'];
			$this->load->view('widget/district_select', $data)
		   ?>
		   </div><div class="x-form-clear-left"></div></div>

		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">详细地址:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input style="width: 240px;" class="x-form-text x-form-field x-form-required" size="20" id="address" name="address" type="text" value="<?php echo $editing['address']?>"   />
		   <span class="mark">请务必填写该项</span>
		   </div><div class="x-form-clear-left"></div></div>
		
		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">邮编:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input style="width: 180px;" class="x-form-text x-form-field x-form-required" size="20" id="postcode" name="postcode" type="text" value="<?php echo $editing['postcode']?>"   />
		   <span class="mark">请准确必填写邮编</span>
		   </div><div class="x-form-clear-left"></div></div>

		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">传真:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input style="width: 180px;" class="x-form-text x-form-field " size="20" name="fax" type="text" value="<?php echo $editing['fax']?>"   />
		   </div><div class="x-form-clear-left"></div></div>

		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label">配送备注:</label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <textarea rows="4" cols="60" name="remark" class=" x-form-field "   ><?php echo $editing['remark']; ?></textarea>
		   </div><div class="x-form-clear-left"></div></div>
		 
		   <div class="x-form-item" >
		   <label style="width: 60px;color:dimgray;" class="x-form-item-label"></label>
		   <div class="x-form-element" style="padding-left: 20px;">
		   <input type="checkbox" name="is_default" value="1" <?php if($editing['is_default']) echo 'checked'?>/>设定此地址为默认收获地址
		   </div><div class="x-form-clear-left"></div></div>
		   </div>
		   </div>
	   </div><!-- /左 -->
	 
       <div style="float:right;" ><!-- 右 -->
		   <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px ;">
		   <div class="x-panel-bwrap">
		   <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
		   <div class="bottomLine">
		   <font class="lineTitle" color="dimgray">顾客信息</font>
		   </div></div></div></div>
		   <div class="x-panel x-form-label-left cus-style">
		   <div class="x-panel-bwrap form-padding"> 
		   <dl>
		   <dt>ID:</dt><dd><?php echo $customer['id'] ?></dd></dl>
		   <dl><dt>姓名:</dt><dd><?php echo $customer['name'] ?></dd></dl>
		   <dl><dt>邮箱:</dt><dd><?php echo $customer['email'] ?></dd></dl>
		   <dl><dt>生日:</dt><dd><?php echo $customer['dob'] ?></dd></dl>
		   <dl><dt>注册时间:</dt><dd><?php echo $customer['registry_at'] ?></dd></dl>
		   <dl><dt>激活:</dt><dd><?php echo ($customer['is_active']?'是':'否'); ?></dd></dl>
		   <dl><dt>锁定:</dt> <dd><?php echo ($customer['is_lock']?'是':'否'); ?></dd></dl>
		   </div>
		   </div>
       </div><!-- /右 -->
       </form>
   </div>
 
</div>
</body>
</html>

