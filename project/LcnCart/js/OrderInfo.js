var isConOpen=true;
var isPayTypeAndShipTypeOpen=false;


function clearSubmitError(obj)
{
   if(obj.parentNode.childNodes.length>0){
   if(obj.parentNode.lastChild.name=='errorInfo')
   {
     obj.parentNode.removeChild(obj.parentNode.lastChild);
   }
   }
}


//----------------------------收货人信息-------------------------------------

var label_consignee;
//显示地址信息表单
function showForm_consignee(obj)
{
   var isConOpen=true;
   label_consignee=g("part_consignee").innerHTML;
   showWaitInfo('正在读取收货人信息，请等待！',obj);
   $.ajax({ 
		 url:base_url+"index.php/order/write_consignee", 		 
		 type: 'POST',
		 data:{
		 'consignee': $('#consignee').text(),
		 'province_id': $('input[name="province_id"]').val(),
		 'city_id': $('input[name="city_id"]').val(),
		 'district_id': $('input[name="district_id"]').val(),
		 'email': $('#email').text(),
		 'phone': $('#phone').text(),
		 'mobile': $('#mobile').text(),
		 'address': $('#address').text(),
		 'postcode': $('#postcode').text()
		 },
         dataType: 'html',
         success: function(data){
		   clearWaitInfo();
		   $('#part_consignee .o_show').remove();
		   $('#part_consignee').append(data);
		 }
	 });	  
}

//保存收货人信息时的检查
function check_con()
{
   var res=true;
   if(!check_addressName()){res=false;}
   if(!check_con_area()){res=false;}
   if(!check_address()){res=false;}
   if(!check_postcode()){res=false;}
   if(!check_phoneAndMob()){res=false;}
   if(!check_phone()){res=false;}
   if(!check_message()){res=false;}
   if(!check_email()){res=false;}
   
   return res;
}
//检查收货人姓名
function check_addressName()
{  
   removeAlert('addressName_empty');
   removeAlert('addressName_ff');
   
   var pNode=g('consignee_addressName').parentNode;
   if(isEmpty('consignee_addressName')){showAlert('收货人姓名不能为空！',pNode,'addressName_empty');return false;}
   if(!is_forbid(g('consignee_addressName').value)){showAlert(ffAlertTxt,pNode,'addressName_ff');return false;}
   return true;
}
//检查省市区
function check_con_area()
{
   removeAlert('area_check');
   if(g('district_id').value=='-22')
   {
      showAlert('地区信息不完整！',g('consignee_arae').parentNode,'area_check')
      return false;
   }
   return true;
}
//检查收货人地址
function check_address()
{  
   removeAlert('address_empty');
   removeAlert('address_ff');
   
   var pNode=g('consignee_address').parentNode;
   if(isEmpty('consignee_address')){showAlert('收货地址不能为空！',pNode,'address_empty');return false;}
   if(!is_forbid(g('consignee_address').value)){showAlert(ffAlertTxt,pNode,'address_ff');return false;}
   return true;
}
//检查邮政编码
function check_postcode()
{  
   removeAlert('postcode_ff');
   if(g('consignee_postcode').value!=''){
   var pNode=g('consignee_postcode').parentNode;
   var myReg=/(^\s*)\d{6}(\s*$)/;
   if(!myReg.test(g('consignee_postcode').value)){showAlert('邮编格式不正确',pNode,'postcode_ff');return false;}
   }
   return true;
}
//检查联系电话
function check_phone()
{  
   removeAlert('phone_ff');
   
   var pNode=g('consignee_phone').parentNode;
   //var myReg=/((\d+)|^((\d+)|(\d+)-(\d+)|(\d+)-(\d+)-(\d+)-(\d+))$)/;
   //if(!isEmpty('consignee_phone') && !myReg.test(g('consignee_phone').value)){showAlert('固定电话格式不正确',pNode,'phone_ff');return false;}
    //if(!isEmpty('consignee_phone') && !myReg.test(g('consignee_phone').value)){showAlert('固定电话格式不正确',pNode,'phone_ff');return false;}
   return true;
}
//检查手机号
function check_message()
{  
   removeAlert('message_ff');
   if(g('consignee_message').value!=''){
   var pNode=g('consignee_message').parentNode;
   var myReg=/(^\s*)(((\(\d{3}\))|(\d{3}\-))?13\d{9}|1\d{10})(\s*$)/;
   if(!myReg.test(g('consignee_message').value)){showAlert('手机号格式不正确',pNode,'message_ff');return false;}
   }
   return true;
}
//检查电话和手机是否都填写了
function check_phoneAndMob()
{
   removeAlert('phone_empty');
   var pNode=g('consignee_phone').parentNode;
   if(isEmpty('consignee_phone') && isEmpty('consignee_message')){showAlert('固定电话和手机号码请至少填写一项！',pNode,'phone_empty');return false;}
   return true;
}
//检查Email
function check_email()
{  
   var iSign='email';
   removeAlert(iSign+'_ff');
   if(g('consignee_'+iSign).value!=''){
   var pNode=g('consignee_'+iSign).parentNode;
   var myReg=/(^\s*)\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*(\s*$)/;
   if(!myReg.test(g('consignee_'+iSign).value)){showAlert('电子邮件格式不正确',pNode,iSign+'_ff');return false;}
   }
   return true;
}
//保存地址信息
var consigneeIsSave = false;
var district_id;
function savePart_consignee(obj)
{
   clearSubmitError(obj);
   if(check_con())
   {
	   isConOpen=false;
	   consigneeIsSave = true;
	   district_id = $('#district_id option:selected').val();
	   consignee_show();
	   pay_and_ship_edit();
   }
}
//关闭地址信息
function close_consignee(obj)
{
  if (consigneeIsSave){isConOpen=false;}
  if(label_consignee==null)
  {
     showWaitInfo('正在关闭收货人信息，请等待！',obj);
     consignee_show();
  }else{
   g("part_consignee").innerHTML=label_consignee;
  }
}

//生成地址
function consignee_show()
{
  $.ajax({ 
	 url:base_url+"index.php/order/show_consignee", 
	 data:{
	 'consignee': $('input[name="consignee"]').val(),
	 'province_id': $('#province_id option:selected').val(),
	 'city_id': $('#city_id option:selected').val(),
	 'district_id': $('#district_id option:selected').val(),
	 'email': $('input[name="email"]').val(),
	 'phone': $('input[name="phone"]').val(),
	 'mobile': $('input[name="mobile"]').val(),
	 'address': $('input[name="address"]').val(),
	 'postcode': $('input[name="postcode"]').val()
	 },
	 type: 'POST',
	 dataType: 'html',
	 success: function(data){
	   clearWaitInfo();
	   $('#part_consignee .o_write').remove();
	   $('#part_consignee').append(data);
	 }
});
}


//----------------------------支付方式及配送方式--------------------

//显示支付方式和配送方式表单
var label_payTypeAndShipType;
function showForm_payTypeAndShipType(obj)
{

   label_payTypeAndShipType = g("part_payTypeAndShipType").innerHTML;
   showWaitInfo('正在读取支付方式及配送方式信息，请等待！',obj);
   $.ajax({ 
	 url:base_url+"index.php/order/write_pay_and_ship", 
	 data:{
	 'district_id': district_id,
	 'payment_id': $('#payment_id').val(),
	 'shipping_id': $('#shipping_id').val()
	 },
	 type: 'POST',
	 dataType: 'html',
	 success: function(data){
	   clearWaitInfo();
	   if (consigneeIsSave){
		 $('#part_payTypeAndShipType .o_show').remove();
		 $('#part_payTypeAndShipType .o_write').remove();
	     $('#part_payTypeAndShipType').append(data);
	   }else{
		 alert('请先保存收货人信息');	     
	   }
	 }
  });  
}

//关闭支配方式
function close_payTypeAndShipType(obj)
{
  showWaitInfo('正在关闭表单，请等待！',obj);
  if(label_payTypeAndShipType==null)
  { 
	 if (check_PayTypeAndShip()){
	     part_payTypeAndShipType_show();
	 }else{
		 clearWaitInfo();
         alert('请选择支付方式和配送方式');
	 }
  }else{
	 g("part_payTypeAndShipType").innerHTML=label_payTypeAndShipType;
  }
}


//显示支配不可编辑

function part_payTypeAndShipType_show()
{
	isPayTypeAndShipTypeOpen = false;
    $.ajax({ 
		 url:base_url+"index.php/order/show_pay_and_ship", 		 
		 type: 'POST',
		 data:{
		 'payment_id': $('input[name="payment_id"]:checked').val(),
		 'shipping_id': $('input[name="shipping_id"]:checked').val(),
		 'shipping_fee':$('input[name="shipping_id"]:checked').parent().parent().find('.shipping_fee').text()
		 },
         dataType: 'html',
         success: function(data){
		   clearWaitInfo();
		   $('#part_payTypeAndShipType .o_write').remove();
		   $('#part_payTypeAndShipType .o_show').remove();
		   $('#part_payTypeAndShipType').append(data);
		   var shipping_fee = parseFloat($('input[name="shipping_fee"]').val()).toFixed(2);
		   $('#shipping_fee').text(shipping_fee);
		   var total_fee = (parseFloat($('#product_fee').text())+parseFloat($('#shipping_fee').text())).toFixed(2);
		   $('#total_fee').text(total_fee);		   
		 }
	 });
}


//生成支付配送编辑区
function pay_and_ship_edit()
{
  isPayTypeAndShipTypeOpen = true;
  $.ajax({ 
	 url:base_url+"index.php/order/write_pay_and_ship", 
	 data:{
	 'district_id': district_id,
	 'payment_id': $('input[name="payment_id"]').val(),
	 'shipping_id': $('input[name="shipping_id"]').val()
	 },
	 type: 'POST',
	 dataType: 'html',
	 success: function(data){
	   clearWaitInfo();
	   if (consigneeIsSave){
		 $('#part_payTypeAndShipType .o_show').remove();
		 $('#part_payTypeAndShipType .o_write').remove();
	     $('#part_payTypeAndShipType').append(data);
	   }else{
		 alert('请先保存收货人信息');	     
	   }
	 }
  });
}

//保存
function savePayTypeAndShipType(obj)
{
   clearSubmitError(obj);
   showWaitInfo('正在提交支付方式及配送方式信息，请等待。。。',obj);
   if (check_PayTypeAndShip()){
      part_payTypeAndShipType_show();
   }else{
	   clearWaitInfo();
	   alert('请选择支付方式和配送方式');
   }
}

//检查支付方式
function check_payment()
{  
   if ($('input[name="payment_id"]:checked').val() == undefined){
	   return false;
   }
   return true;
}

//检查配送方式
function check_shipping()
{  
   if ($('input[name="shipping_id"]:checked').val() == undefined){
	   return false;
   }
   return true;
}

//保存收货人信息时的检查
function check_PayTypeAndShip()
{
   var res=true;
   if(!check_payment()){res=false;}
   if(!check_shipping()){res=false;}      
   return res;
}


//-------------------------提交订单信息-----------------
function check_submit()
{
   var res=true;
   if(!check_submit_isClose())
   {
      res=false;
   }
   return res;
}
function check_submit_isClose()
{
   var errInfo="";
   //检查是否都关闭
   if(isConOpen){errInfo+="“收货人信息”";}
   if(isPayTypeAndShipTypeOpen){if(errInfo!=''){errInfo+=",";}errInfo+="“支付方式及配送方式”";}
   if(errInfo!="")
   {
      showAlert("请先保存"+errInfo,g("submit_error"),"")
      return false;
   }
   return true;
}

function submitOrder(obj)
{
  if(check_submit())
   {
	  $('form').submit();
   }
  
  /* var consignee = $('#consignee').text();
   var province =  $('#province').text();
   var address = $('#address').text();
   var postcode =$('#postcode').text();
   var phone =$('#phone').text();
   var mobile =$('#mobile').text();
   var email =$('#email').text();
   var province_id =$('input[name="province_id"]').val();
   var city_id =$('input[name="city_id"]').val();
   var district_id =$('input[name="district_id"]').val();
   var payment_id =$('#payment_id').val();
   var shipping_id =$('#shipping_id').val();
   var product_fee =$('#product_fee').text();
   var shipping_fee =$('#shipping_fee').text();

   g("submit_error").innerHTML='';
   if(check_submit())
   {
      showWaitInfo("正在提交订单，请等待！",g("submitWaitInfo"));
      g('submit_btn').style.display='none';
      $.ajax({ 
	    url:base_url+"index.php/order/save", 
	    data:{
		  'consignee': consignee,
		  'province': province,
		  'address': address,
		  'postcode': postcode,
		  'phone': phone,
		  'mobile': mobile,
		  'email': email,
		  'province_id': province_id,
		  'city_id': city_id,
		  'district_id': district_id,
		  'payment_id': payment_id,
		  'shipping_id': shipping_id,
		  'product_fee': product_fee,
		  'shipping_fee': shipping_fee
		 },
	    type: 'POST',
	    dataType: 'html',
	    success: function(data){
	      clearWaitInfo();
		  //location.href = base_url+'index.php/succeed/index/order_sn/'+data;
	    }
     });
   }*/
}