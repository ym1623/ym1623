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

//
$(document).ready(function() {
  $('#password_auto').click(function(){ 
	  if (this.checked) { 
	    $('#password').val('').attr('disabled',true);
	  }else{
         $('#password').attr('disabled',false);
	  }
  });
})




//-->
</script>
</head>
<body class="x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

    <!-- 当前菜单 -->
    <div style="-moz-user-select: none; " id="crt-menu" class="x-tab-panel-header x-unselectable">
    <div class="x-tab-strip-wrap">
    <ul  class="x-tab-strip x-tab-strip-top">
    <li class="x-tab-strip-active" >
    <a class="x-tab-right" href="#" onClick="return false;">
    <em class="x-tab-left">
    <span style="width: 130px;" class="x-tab-strip-inner">
    <span class="x-tab-strip-text"><?php echo $header_text; ?></span>
    </span>
    </em>
    </a>
    </li>
    <li  class="x-tab-edge"></li>
    <div  class="x-clear"></div>
    </ul>
    </div>
    </div>

    <!-- 工具栏 -->
    <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div  class="x-toolbar "><table cellspacing="0"><tbody><tr>
	
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

  <!-- 表单 -->
  <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " >

    <div  class="x-panel x-panel-noborder" style="padding: 10px 10px 0px;">
    <div  class="x-panel-bwrap">
    <div  class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
    <div class="bottomLine">
    <font class="lineTitle" color="dimgray">基本信息</font>
    </div>
    </div>
    </div>
    </div>

    <div style=""  class="x-panel x-form-label-left ">
    <div  class="x-panel-bwrap form-padding"> 
    <form style="padding: 5px 5px 0pt; " class=" x-form" method="post" action="<?php echo site_url('customer/save')?>"  id="form"> 
    <input  id="re_edit" name="re_edit" type="hidden" value="0" >
    <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />

    <div class="x-form-item" >
      <label  style="width: 75px;color:dimgray;" class="x-form-item-label">姓名:</label>
      <div class="x-form-element"  style="padding-left: 80px;">
      <input style="width: 222px;" class="x-form-text x-form-field x-form-required" size="20"  name="name" id="name" type="text" value="<?php echo $editing['name']?>" >
      </div>
      <div class="x-form-clear-left"></div>
    </div>

    <div class="x-form-item" >
      <label  style="width: 75px;color:dimgray;" class="x-form-item-label">E-MAIL:</label>
      <div class="x-form-element"  style="padding-left: 80px;">
        <input style="width: 222px;" class="x-form-text x-form-field x-form-bg-invalid" size="20"  name="email" id="email" type="text" value="<?php echo $editing['email']?>" ">
      </div>
      <div class="x-form-clear-left"></div>
    </div>

    <div class="x-form-item" >
	  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">生日:</label>
	  <div class="x-form-element"  style="padding-left: 80px;">
	  <input name="dob" id="dob" type="text"  size="12" value='<?php echo $editing['dob']?>'  class="x-form-text x-form-field " readonly="readonly" />
	  <input name="selbtn" type="button"  id="selbtn" onclick="return showCalendar('dob', '%Y-%m-%d', false, false, 'selbtn');" value="选择" class="button"   />
	  </div>
	  <div class="x-form-clear-left"></div>
    </div>

    <div class="x-form-item" >
	  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">发欢迎邮件:</label>
	  <div class="x-form-element"  style="padding-left: 80px;">
	  <input type="checkbox" class=" x-form-field x-form-text" id="is_sendemail"  name="is_sendemail" value="1" class="x-form-text x-form-field "  <?php if($editing['is_sendemail'])echo "checked='checked'" ;?> />
	  </div>
	  <div class="x-form-clear-left"></div>
    </div>

    <div class="x-form-item" >
      <label  style="width: 75px;color:dimgray;" class="x-form-item-label">密码:</label>
      <div class="x-form-element"  style="padding-left: 80px;">
        <input style="width: 222px;" class="x-form-text x-form-field x-form-bg-invalid" size="20" id="password" name="password"  type="password" value="" ><br/><br/>或<br/><br/>自动生成密码 <input type="checkbox" class=" x-form-field " id="password_auto" name="password_auto" value="1" class="x-form-text x-form-field " " <?php if($editing['password_auto'])echo "checked='checked'" ;?> />
      </div>
      <div class="x-form-clear-left"></div>
    </div>
 
    </form>
    </div>
    </div>

  </div>

</div>
</body>
</html>
