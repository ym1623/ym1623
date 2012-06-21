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

//窗口大小调整
$(document).ready(function() {
  editBody();
});
$(window).resize(function(){
  editBody();
});


$(document).ready(function() {

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

//-->
</script>
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

	<td><span class="ytb-sep"></span></td>

	<td id="saveEdit"><table class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><button class="x-btn-text tb-renew" type="button">保存并继续编辑</button></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td><span class="ytb-sep"></span></td>

	<td id="reset"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-resume" type="button">重置</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>

	<td><span class="ytb-sep"></span></td>

	<td onClick="window.location.href='<?php echo site_url('payment')?>'"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-owner" type="button">列表</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>
    	

	</tr></tbody></table></div></div>
  <!-- /工具栏 -->

  <!-- 表单 -->
	<div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " >

	 <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px;">
	 <div class="x-panel-bwrap">
	 <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
	 <div class="bottomLine">
	 <font class="lineTitle" color="dimgray">基本信息</font>
	 </div>
	 </div>
	 </div>
	 </div>

	 <div class="x-panel x-form-label-left ">
	 <div class="x-panel-bwrap form-padding"> 
	 <form style="padding: 5px 5px 0pt; " class=" x-form" method="post" action="<?php echo site_url('payment/save')?>" name="form" > 
	 <input name="re_edit" id="re_edit" type="hidden" value="0" >
	 <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />

	 <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label">支付方式名称:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required" size="20" name="name" id="name" type="text" value="<?php echo $editing['name']?>"  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>
	 
	 <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label">支付方式描述:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		<textarea rows="8" cols="80" name="desc" class=" x-form-field "  ><?php echo $editing['desc']?></textarea>
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label">支付手续费:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		 <input style="width: 222px;" class="x-form-text x-form-field " size="20" name="fee" id="fee" type="text" value="<?php echo $editing['fee']?>"  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label">到账时间:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		 <input style="width: 222px;" class="x-form-text x-form-field " size="20" name="charge_date" id="charge_date" type="text" value="<?php echo $editing['charge_date']?>"  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>
     <?php if($pay_config){ ?>
	 <?php foreach($pay_config as $value): ?>
     <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label"><?php echo $value['label'] ?>:</label>
		  <div class="x-form-element" style="padding-left: 80px;">
			 <?php if ($value['type'] == "text") { ?>
			   <input name="cfg_value[]" type="text" value="<?php echo $value['value'] ?>" size="40" style="width: 222px;" class="x-form-text x-form-field " size="20"   />
			 <?php }elseif ($value['type'] == "textarea") {?>
			   <textarea name="cfg_value[]" cols="80" rows="5"  ><?php echo $value['value'] ?></textarea>
			 <?php }elseif ($value['type'] == "select")  {?>
			   <select name="cfg_value[]" style="width:230px;height:22px;">
				 <?php if($editing['code'] == 'alipay') {?>
				   <option  value=0  <?php if($value['value']==0) echo "selected" ?> >标准双接口</option>
				   <option  value=1  <?php if($value['value']==1) echo "selected" ?> >使用担保交易接口</option>
				   <option  value=2  <?php if($value['value']==2) echo "selected" ?> >使用即时到帐交易接口</option>
				 <?php  }?>
			   </select>
			 <?php } ?>
		  </div>
		<div class="x-form-clear-left"></div>
     </div>
	 <input name="cfg_name[]" type="hidden" value="<?php echo $value['name'] ?>" />
     <input name="cfg_type[]" type="hidden" value="<?php echo $value['type'] ?>" />
	 <?php endforeach ; ?>
	 <?php } ?>
   

	 <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label">支持货到付款?:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		 <select name='is_cod'  style="width:230px;height:22px;">
		  <option value='0'   >不</option>
		  <option value='1' <?php  if($editing['is_cod']) echo 'selected'?> >是</option>
		  </select>
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <div class="x-form-item" >
		<label style="width: 90px;color:dimgray;" class="x-form-item-label">支持在线支付?:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		 <select name='is_online'  style="width:230px;height:22px;">
		  <option value='0'   >不</option>
		  <option value='1' <?php  if($editing['is_online']) echo 'selected=selected'?> >是</option>
		  </select>
		</div>
		<div class="x-form-clear-left"></div>
	 </div>
	
	 </form>
	 </div>
	 </div>
	</div>	
  <!-- /表单 -->

</div>
</body>
</html>