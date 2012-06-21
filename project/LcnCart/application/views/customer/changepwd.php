<?php $this->load->view('_header') ?>

<script type="text/javascript">
$(function(){
  
 $('#txtOldPwd').blur(function() {
   if ($('#txtOldPwd').val() == ''){
     $('#rfvOldPwd').show();
   }else{
	 $('#rfvOldPwd').hide();
     $('#txtNewPwd').blur(function() {
       if ($('#txtNewPwd').val() == ''){
         $('#rfvNewPwd').show();
       }else{
		 $('#rfvNewPwd').hide();
         $('#txtConfimPwd').blur(function() {
           if ($('#txtConfimPwd').val() != $('#txtNewPwd').val()){
             $('#cvConfimPwd').show();
		   }else{
             $('#cvConfimPwd').hide();
		   }
		 });
	   }
	 });
   }
 });
  
  $('#form1').submit(function() {
    var pass = true;
	$(':input').next('span').hide();

    if ($('#txtOldPwd').val() == ''){
      $('#rfvOldPwd').show();
	  pass = false;
    }else{ pass = true;}

	if ($('#txtNewPwd').val() == ''){
      $('#rfvNewPwd').show();
	  pass = false;
    }else{ pass = true;}
    
	if ($('#txtNewPwd').val() != '' && $('#txtConfimPwd').val() != $('#txtNewPwd').val()){
      $('#cvConfimPwd').show();
	  pass = false;	
    }

	return pass;
  });
    
});  

var msg = '<?php echo $error_msg; ?>';
$(document).ready(function() {
	if (msg != 0){
		switch (msg){
			case 'pw_error' : $('#lblMsg').empty().text('旧密码错误').show();break;
			
			default : break;
		}
	}	
});
</script>

<form name="form1" method="post" action="<?php echo site_url('customer/changepwd/save')?>" onsubmit="" id="form1">
<div class="Main">

  <div id="Position" class="margin_b6"><a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;用户中心&nbsp;&gt;&nbsp;修改密码</div>
  
  <?php
  $this->load->view('customer/_left');
  ?> 

   <div class="right1">
     <table class="table_a"><tbody>
	   <tr><th colspan="2" align="left"><strong>修改密码</strong></th></tr>

       <tr><td align="center" width="10%">旧密码：</td><td><input name="txtOldPwd" maxlength="16" id="txtOldPwd" type="password"><span id="rfvOldPwd" style="color: Red; display: none;">* 请输入旧密码</span><span id="lblMsg" style="color: Red;"></span></td></tr>

       <tr><td align="center" width="10%">新密码：</td><td><input name="txtNewPwd" maxlength="16" id="txtNewPwd" type="password"><span id="rfvNewPwd" style="color: Red; display: none;">* 请输入新密码</span></td></tr>

       <tr><td align="center" width="10%">确认密码：</td><td><input name="txtConfimPwd" maxlength="16" id="txtConfimPwd" type="password"><span id="cvConfimPwd" style="color:Red; display: none;">* 确认密码不匹配</span></td></tr>

       <tr><td colspan="2" class="align_Center"><input name="btnSubmit" value="修改密码"  id="btnSubmit" type="submit"><input name="btnCancel" value="取消" id="btnCancel" type="submit"></td></tr>
     </tbody></table>
   </div>

</div>
</form>
<?php $this->load->view('_footer') ?>
