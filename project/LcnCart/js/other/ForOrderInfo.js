var pageLinkUrl="";
var ajaxUrl="ajaxServer/ForOrderInfo.aspx";
var isConOpen=false;
var isPayTypeAndShipTypeOpen=false;
var isInvoiceOpen=false;
var isRemarkOpen=false;






var ffAlertTxt='您的输入含有非法字符，请检查！';
function checkSubmitError(bakValue,obj)
{
   if(bakValue!=null)
   {
      if(bakValue.indexOf('error_')==0)
      {
         var newd=document.createElement("span");
         newd.name='errorInfo';
         newd.style.cssText='color:red;';
         if(bakValue.length>6)
         {bakValue=bakValue.substr(6);}
         else{bakValue='程序发生了未知错误，请再次尝试！';}
         newd.innerHTML=bakValue;
         obj.appendChild(newd);
         return false;
      }
       return true;
   }
   return true;
}
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
var curCounty="";
var isShowUpdateInfo=false;

var label_consignee;
//显示地址信息表单
function showForm_consignee(obj)
{
   label_consignee=g("part_consignee").innerHTML;
   showWaitInfo('正在读取收货人信息，请等待！',obj);
   setAjax_getResAndRunCode("action=showForm_consignee","part_consignee","curCounty=g('consignee_arae').childNodes[2].value;isConOpen=true;");

}
var isAddAddress=0;
//添加常用地址
function addNewAddress(obj)
{
  clearSubmitError(obj); 
  if(check_con())
  {
     var x=getFormXmlBySign('consignee_');
     showWaitInfo('正在保存收货人信息至常用列表，请等待。。。',obj);
    setAjax("POST","action=addNewAddress",'<table>'+x+'<addressAll><![CDATA['+g('consigneeShow_addressName').innerHTML+g('consignee_address').value+']]></addressAll></table>',true,obj,'addressListPanel',null);
   }
}
//取消常用地址
function DelAddress(obj,id)
{
  setAjax("Get","action=DelAddress&id="+id,null,false,obj,'addressListPanel',null);
}
//选择常用地址
function changeConsignee(obj,addIndex)
{
   var addList=obj.parentNode.parentNode.parentNode.childNodes;
   for(var i=0;i<addList.length;i++)
   {
      addList[i].className='';
   }
   obj.parentNode.parentNode.className='xz';
   setAjax_getRes("action=changeConsignee&addIndex="+addIndex,"part_consignee");
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
   if(g('consignee_arae').childNodes[2].value=='-22')
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
function savePart_consignee(obj)
{
   clearSubmitError(obj);
   if(check_con())
   {
   var runCode="showOrderInfo();showForm_cart();showSplitInfo();";
   runCode+="isConOpen=false;";
   runCode+="var resList=backValue.split('@--@');";
   runCode+="g('part_consignee').innerHTML=resList[0];";
   //如果支配方式是编辑状态或是原来的支配方式不适合于新的收货人信息了，需重新刷支配方式
   runCode+="isAddAddress=0;";
   runCode+="if(!isPayTypeAndShipTypeOpen && resList[1]=='shipReShow'){showLabel_payTypeAndShipType();}";
   runCode+="if(isPayTypeAndShipTypeOpen || resList[1]=='shipError'){isShowUpdateInfo=true;showForm_payTypeAndShipType(g('linkPayTypeShipType'));}";
   var x=getFormXmlBySign('consignee_');
   showWaitInfo('正在提交收货人信息，请等待。。。',obj);
   var isHaveAddList=((g('addrList').innerHTML=='')?false:true);
   setAjax("POST","action=savePart_consignee&isAddAddress="+((!isHaveAddList)?1:isAddAddress),'<table>'+x+'<addressAll><![CDATA['+g('consigneeShow_addressName').innerHTML+g('consignee_address').value+']]></addressAll></table>',true,obj,null,runCode);
   }
}
//关闭地址信息
function close_consignee(obj)
{
  if(label_consignee==null)
  {
     showWaitInfo('正在关闭收货人信息，请等待！',obj);
     setAjax_getResAndRunCode("action=showLabel_consignee","part_consignee","isConOpen=false;");
  }else{
   g("part_consignee").innerHTML=label_consignee;
   isConOpen=false;
  }
}
//地区连动－省
function changeProvince(obj)
{
  
  //showWaitInfoOnInner('正在读取信息。。。',obj.parnetNode);
  setAjax_getResAndRunCode("action=changeArea_province&areaId="+obj.value,"consignee_arae","showAreaInfo()");
 
}
//地区连动－市
function changeCity(obj)
{
  var provinceId=obj.previousSibling.value;
  var cityId=obj.value;
  //showWaitInfoOnInner('正在读取信息。。。',obj.parentNode);
  setAjax_getResAndRunCode("action=changeArea_city&provinceId="+provinceId+"&cityId="+cityId,"consignee_arae","showAreaInfo()");
}

//地区连动－地区
function changeCounty(obj)
{  
   isChangeCounty=true;
   showAreaInfo();
}
function showAreaInfo()
{
    var _info='';
   var areaList=g('consignee_arae').childNodes;
  
   _info+=(areaList[0].value=='-22')?"":areaList[0].options[areaList[0].selectedIndex].text.replace('*','');
   _info+=(areaList[1].value=='-22')?"":areaList[1].options[areaList[1].selectedIndex].text.replace('*','');
   _info+=(areaList[2].value=='-22')?"":areaList[2].options[areaList[2].selectedIndex].text.replace('*','');
   g('consigneeShow_addressName').innerHTML=_info;
}



//----------------------------支付方式及配送方式--------------------

function setPayShipRadioDefault()
{
    setRadioDefaultItem('IdPaymentType','payType_IdPaymentType');
    setRadioDefaultItem('IdShipmentType','payType_IdShipmentType');
    setRadioDefaultItem('IdPickSite','payType_IdPickSite');
    setRadioDefaultItem('CODTime','payType_CODTime');
    setRadioDefaultItem('PaymentWay','payType_PaymentWay');
    setRadioDefaultItem('IdAgent','payType_IdAgent');
}
//显示支配不可编辑
function showLabel_payTypeAndShipType()
{
   setAjax_getResAndRunCode("action=showLabel_payTypeAndShipType","part_payTypeAndShipType","isPayTypeAndShipTypeOpen=false;");
}
//显示支付方式和配送方式表单
function showForm_payTypeAndShipType(obj)
{
   showWaitInfo('正在读取支付方式及配送方式信息，请等待！',obj);
   var runCode="isPayTypeAndShipTypeOpen=true;";
   runCode+="setPayShipRadioDefault();";
   runCode+="if(isShowUpdateInfo){";
//   runCode+="isShowUpdateInfo=false;";
   runCode+="g('updateInfo_payType').innerHTML=\"<span class='payTypeChangeAlert'>由于您更改了收货人信息，请重新填写支付方式和配送方式！</span>\";";
   runCode+="}";
   runCode+="setPayRemarkShow();";
   setAjax_getResAndRunCode("action=showForm_payTypeAndShipType","part_payTypeAndShipType",runCode);
}
//关闭支配方式
function close_payTypeAndShipType(obj)
{
  showWaitInfo('正在关闭表单，请等待！',obj);
  isShowUpdateInfo=false;
  showLabel_payTypeAndShipType();
}
//选择支付方式
function changePayType(payType)
{
   g('payType_IdPaymentType').value=payType;
   showWaitInfoOnInner('正在加载配送方式信息，请等待。。。',g('part_shipType'));
   
   var runCode="setPayShipRadioDefault();";
   runCode+="if(isShowUpdateInfo){";
   runCode+="isShowUpdateInfo=false;";
   runCode+="savePayTypeAndShipTypeOnHidden()";
   runCode+="}";
   setAjax_getResAndRunCode("action=changePayType&payType="+payType,"part_shipType",runCode);
   
   setPayRemarkShow();
}
//选择配送方式
function changeShipType(shipType)
{
  g('payType_IdShipmentType').value=shipType;
  
  if(g('CodTimeUpdatePanel')!=null){
      if(shipType==ShipType_general)//如果是普通快递，则要弹出时间选项
      {
         g('CodTimeUpdatePanel').style.display='';
      }else{
        g('CodTimeUpdatePanel').style.display='none';
      }
  }
}
//保存
function savePayTypeAndShipType(obj)
{
   clearSubmitError(obj);
   var x=getFormXmlBySign('payType_');
   showWaitInfo('正在提交支付方式及配送方式信息，请等待。。。',obj);
   setAjax("POST","action=savePayTypeAndShipType",'<table>'+x+'</table>',true,obj,'part_payTypeAndShipType','isPayTypeAndShipTypeOpen=false;isShowUpdateInfo=false;showOrderInfo();');
}
//隐式的保存支付和配送方式
function savePayTypeAndShipTypeOnHidden()
{
   var x=getFormXmlBySign('payType_');
   setAjax("POST","action=savePayTypeAndShipTypeOnHidden",'<table>'+x+'</table>',true,null,null,null);
}
//选择送货日期
function selCodDate(obj)
{
  try{
      var selTxt=obj.options[obj.selectedIndex].text;
      if(selTxt.indexOf('日')>-1 || selTxt.indexOf('六')>-1)
      {
         g('CODTime3').click();
      }else{
         g('CODTime1').click();
      }
  }catch(e){}
}

function setPayRemarkShow()
{
   var pays=document.getElementsByName('IdPaymentType');
   for(var i=0;i<pays.length;i++)
   {
      var o=g('payRemark_'+pays[i].value);
      if(o==null)continue;
      if(pays[i].checked)
      {
         o.style.display='';
      }else{o.style.display='none';}
   }
}

//----------------------------发票---------------------------
var label_invoice;
function showForm_invoice(obj)
{
  label_invoice=g("part_invoice").innerHTML;
  showWaitInfo('正在读取发票信息，请等待！',obj);
  var radioList="setRadioDefaultItem('invoince_type','invoice_InvoiceType');";
  radioList+="setRadioDefaultItem('invoince_pttt','invoice_InvoiceTitle');";
  radioList+="setRadioDefaultItem('invoince_content','invoice_Invoice_Content')";
 setAjax_getResAndRunCode("action=showForm_invoice","part_invoice","isInvoiceOpen=true;"+radioList);
}
function close_invoice(obj)
{
   g("part_invoice").innerHTML=label_invoice;
   isInvoiceOpen=false;
}
//选择发票类型
function invoince_setType(selValue)
{
    g('invoice_InvoiceType').value=selValue;
   if(selValue==1){
   setDisplay('invoice_ivc_Tr','none');
   setDisplay('invoice_titleTr','');
   }
   if(selValue==2){
   setDisplay('invoice_ivc_Tr','');
   setDisplay('invoice_titleTr','none');
   }
   invoince_setContentShow(selValue);
}
//显示发票内容区域
function invoince_setContentShow(invType)
{
  setAjax_getResAndRunCode('action=invoince_setContentShow&typeId='+invType,'invoince_contentPanel',"setRadioDefaultItem('invoince_content','invoice_Invoice_Content');");
}
//选择发票抬头
function invoince_setPttt(selValue)
{
   g('invoice_InvoiceTitle').value=selValue;
   if(selValue==InvHeader_personal){
   setDisplay('invoice_unitNameTr','none');
   }
   if(selValue==InvHeader_company){
   setDisplay('invoice_unitNameTr','');
   }
}
//选择发票内容
function invoince_setContent(selValue)
{
   g('invoice_Invoice_Content').value=selValue;
}
//保存发票时的检查
function check_invoice()
{
   if(g('invoice_InvoicePutType').value!='0')return true;//即时开取验证
   if(g('invoice_InvoiceType').value==InvType_general)
   {
      //普通发票
      if(g('invoice_InvoiceTitle').value==InvHeader_company)
      {
         //选择了单位
          return check_invoice_unit();
       }
       else
      {
         return true;
      }
      
   }
   if(g('invoice_InvoiceType').value==InvType_vat)
   {
      var res=true;
      if(!check_Ivc_TitName()){res=false;}
      if(!check_NsrCode()){res=false;}
      if(!check_InvoiceAddress()){res=false;}
      if(!check_InvoicePhone()){res=false;}
      if(!check_InvoiceBank()){res=false;}
      if(!check_InvoiceBankCode()){res=false;}
      return res;
   }
}
//普票时的单位名称
function check_invoice_unit()
{
   removeAlert('Invoice_UnitEmpty');
   removeAlert('Invoice_UnitFf');
  var pNode=g('invoice_Unit_TitName').parentNode;
  if(isEmpty('invoice_Unit_TitName')){showAlert('单位名称不能为空！',pNode,'Invoice_UnitEmpty');return false;}
  if(!is_forbid(g('invoice_Unit_TitName').value)){showAlert(ffAlertTxt,pNode,'Invoice_UnitFf');return false;}
  return true;
}
//增票的单位名称
function check_Ivc_TitName()
{
   removeAlert('Invoice_TitNameEmpty');
  removeAlert('Invoice_TitNameFf');
  var pNode=g('invoice_Ivc_TitName').parentNode;
  if(isEmpty('invoice_Ivc_TitName')){showAlert('单位名称不能为空！',pNode,'Invoice_TitNameEmpty');return false;}
  if(!is_forbid(g('invoice_Ivc_TitName').value)){showAlert(ffAlertTxt,pNode,'Invoice_TitNameFf');return false;}
  return true;
}
//增票的纳税人标识
function check_NsrCode()
{
  removeAlert('Invoice_NsrCodeEmpty');
  removeAlert('Invoice_NsrCodeFf');
  var pNode=g('invoice_Ivc_NsrCode').parentNode;
  if(isEmpty('invoice_Ivc_NsrCode')){showAlert('纳税人识别号不能为空！',pNode,'Invoice_NsrCodeEmpty');return false;}
  if(!is_forbid(g('invoice_Ivc_NsrCode').value)){showAlert(ffAlertTxt,pNode,'Invoice_NsrCodeFf');return false;}
  return true;
}
//增票的注册地址
function check_InvoiceAddress()
{
  removeAlert('Invoice_addressEmpty');
  removeAlert('Invoice_addressFf');
  var pNode=g('invoice_Ivc_Address').parentNode;
  if(isEmpty('invoice_Ivc_Address')){showAlert('注册地址不能为空！',pNode,'Invoice_addressEmpty');return false;}
  if(!is_forbid(g('invoice_Ivc_Address').value)){showAlert(ffAlertTxt,pNode,'Invoice_addressFf');return false;}
  return true;
}
//增票的注册电话
function check_InvoicePhone()
{
  removeAlert('Invoice_PhoneEmpty');
  removeAlert('Invoice_PhoneFf');
  var pNode=g('invoice_Ivc_Phone').parentNode;
  if(isEmpty('invoice_Ivc_Phone')){showAlert('注册电话不能为空！',pNode,'Invoice_PhoneEmpty');return false;}
  if(!is_forbid(g('invoice_Ivc_Phone').value)){showAlert(ffAlertTxt,pNode,'Invoice_PhoneFf');return false;}
  return true;
}
//增票的开户银行
function check_InvoiceBank()
{
  removeAlert('Invoice_bankEmpty');
  removeAlert('Invoice_bankFf');
  var pNode=g('invoice__Ivc_Bank').parentNode;
  if(isEmpty('invoice__Ivc_Bank')){showAlert('开户银行不能为空！',pNode,'Invoice_bankEmpty');return false;}
  if(!is_forbid(g('invoice__Ivc_Bank').value)){showAlert(ffAlertTxt,pNode,'Invoice_bankFf');return false;}
  return true;
}
//增票的银行帐户
function check_InvoiceBankCode()
{
  removeAlert('Invoice_bankCodeEmpty');
  removeAlert('Invoice_bankCodeFf');
  var pNode=g('invoice_Ivc_BankCode').parentNode;
  if(isEmpty('invoice_Ivc_BankCode')){showAlert('银行帐户不能为空！',pNode,'Invoice_bankCodeEmpty');return false;}
  if(!is_forbid(g('invoice_Ivc_BankCode').value)){showAlert(ffAlertTxt,pNode,'Invoice_bankCodeFf');return false;}
  return true;
}
//保存发票
function savePart_invoice(obj)
{
   clearSubmitError(obj);
   if(check_invoice()){
   var x=getFormXmlBySign('invoice_');
   showWaitInfo('正在提交发票信息，请等待。。。',obj);
   setAjax("POST","action=savePart_invoice",'<table>'+x+'</table>',true,obj,'part_invoice','if(checkSubmitError(xmlHttp.responseText,curBtn.parentNode)){isInvoiceOpen=false;}');
   }
}

function InvoicePutTypeOnChange(obj){
  var putValue=obj.value;
  g('invoice_InvoicePutType').value=putValue;
  if(putValue=='0')g('tb_invoice').style.display='';
  else{g('tb_invoice').style.display='none';}
}
//选择常用地址
function changeInv(obj,index)
{
   
   var addList=obj.parentNode.parentNode.parentNode.childNodes;
   for(var i=0;i<addList.length;i++)
   {
      addList[i].className='';
   }
   var radioList="setRadioDefaultItem('invoince_type','invoice_InvoiceType');";
  radioList+="setRadioDefaultItem('invoince_pttt','invoice_InvoiceTitle');";
  radioList+="setRadioDefaultItem('invoince_content','invoice_Invoice_Content')";
  
  
   obj.parentNode.parentNode.className='xz';
   
   setAjax_getResAndRunCode("action=changeInv&index="+index,"part_invoice",radioList);
}
function AddInvoice(obj)
{
   clearSubmitError(obj);
   if(check_invoice()){
   var x=getFormXmlBySign('invoice_');
   showWaitInfo('正在提交发票信息，请等待。。。',obj);
   setAjax("POST","action=AddInvoice",'<table>'+x+'</table>',true,obj,'invoiceListPanel',null);
   }
}
function DelInv(obj,id)
{
   setAjax("Get","action=DelInv&id="+id,null,false,obj,'invoiceListPanel',null);
}


//----------------------------备注---------------------------
var label_remark;
function showForm_remark(obj)
{
   label_remark=g('part_remark').innerHTML;
   showWaitInfo('正在读取订单备注信息，请等待！',obj);
   setAjax_getResAndRunCode("action=showForm_remark","part_remark","isRemarkOpen=true");
}
function close_remark(obj)
{
   g('part_remark').innerHTML=label_remark;
   isRemarkOpen=false;
}
//保存备注
function savePart_remark(obj)
{
   clearSubmitError(obj);
   if(check_remark()){
   var x=getFormXmlBySign('remark_');
   showWaitInfo('正在提交订单备注信息，请等待。。。',obj);
   setAjax("POST","action=savePart_remark",'<table>'+x+'</table>',true,obj,'part_remark',"isRemarkOpen=false");
   }
}
function check_remark()
{
   removeAlert('remark_Ff');
  var pNode=g('remark_remark').parentNode;
  if(!is_forbid(g('remark_remark').value)){showAlert(ffAlertTxt,pNode,'remark_Ff');return false;}
  return true;
}





//----------------------------优惠券--------------------------
function showTicket()
{
   if(g('part_ticket').style.display=='none')
   {
       g('part_ticket').style.display='';
   }else{
       g('part_ticket').style.display='none';
   }
   setCouponStateShow();
}
function setCouponStateShow()
{
  if(g('part_ticket').style.display=='')
  {
     g('couponStateShow').innerHTML='-';
  }else{g('couponStateShow').innerHTML='+';}
}
//在操作券成功后执行的方法
function runInCouponOk()
{
   showLiPinKa();
}
//添加实体券
function addShiTiCoupon(obj)
{
     var couponKey=g('txtInputKey').value;
    if(couponKey==""){alert('请输入实体券密码！');return;}
    showWaitInfo('正在提交信息，请等待！',obj);
    setAjax_getResAndRunCode("action=addShiTiCoupon&key="+couponKey,"shitiList","runInCouponOk();g('txtInputKey').value='';showOrderInfo();if(selectedDong!=null){selectedDong.checked=false;selectedDong=null;setDianZiStyle();}");
}
//清空实体券
function clearShiTiCoupon(obj)
{
    showWaitInfo('正在清空实体券信息，请等待。。。',obj);
    setAjax_getResAndRunCode("action=clearShiTiCoupon","shitiList","runInCouponOk();showOrderInfo()");
}
//删除实体券
function removeShiTi(id,obj)
{
    showWaitInfo('正在删除实体券信息，请等待。。。',obj);
    setAjax_getResAndRunCode("action=removeShiTi&id="+id,"shitiList","runInCouponOk();showOrderInfo()");
}
//添加电子京券
function selectJing(obj,couponKey)
{
   var runCode="runInCouponOk();if(backValue=='ok'){";
   runCode+="showOrderInfo();";
   runCode+="}else{";
   runCode+="alert(backValue.substr(7));";
   runCode+="curBtn.checked=!curBtn.checked;";
   runCode+="}";
   runCode+="setDianZiStyle();";
   var actionStr=(!obj.checked)?"removeDianZiCoupon":"addDianZiCoupon";
   setAjax_runCodeAndBtn("action="+actionStr+"&key="+couponKey+"&cType=jing",obj,runCode);
}

var selectedDong;
//选择东券
function selectDong(obj,couponKey)
{
   var runCode="runInCouponOk();if(backValue=='ok'){";
   runCode+="showOrderInfo();";
   //清空实体券
   runCode+="g('shitiList').innerHTML='';";
   //清空电子京券
   runCode+="var sList=document.getElementsByName('jingCheckBox');";
   runCode+="for(var i=0;i<sList.length;i++)";
   runCode+="{sList[i].checked=false;}";
   
   runCode+="if(selectedDong==curBtn){curBtn.checked=false;selectedDong=null;}else{selectedDong=curBtn;}";
   runCode+="}else{";
   runCode+="alert(backValue.substr(7));";
   runCode+="if(selectedDong!=null){selectedDong.checked=true;}else{curBtn.checked=false;}";
   runCode+="}";
   runCode+="setDianZiStyle();";
   var actionStr=(selectedDong==obj)?"removeDianZiCoupon":"addDianZiCoupon";
   setAjax_runCodeAndBtn("action="+actionStr+"&key="+couponKey+"&cType=dong",obj,runCode);
}
function setDianZiStyle()
{
   var sList=document.getElementsByName('jingCheckBox');
   for(var i=0;i<sList.length;i++)
   {
      if(sList[i].checked){sList[i].parentNode.className='couponSelect';}
      else{sList[i].parentNode.className='couponNoSelect';}
   }
   sList=document.getElementsByName('rbtnlDong');
   for(var i=0;i<sList.length;i++)
   {   
      var idStr="CouponCancel_"+sList[i].id.substr(5);
      
      if(sList[i].checked){
        sList[i].parentNode.className='couponSelect';
         g(idStr).style.display='';
      }
      else{sList[i].parentNode.className='couponNoSelect';
      g(idStr).style.display='none';
      }
   }
}
//显示电子券信息
function showCouponInfo()
{
   if(g('coupon_discount')==null || g('price_coupon')==null)return;
   g('coupon_discount').innerHTML=g('price_coupon').innerHTML;
   var cList=document.getElementsByName('rbtnlDong');
   for(var i=0;i<cList.length;i++)
   {
     if(cList[i].checked)
     {
        g('coupon_count').innerHTML='1';
        return;
     }
   }
   var cCount=0;
   cList=document.getElementsByName('jingCheckBox');
   for(var i=0;i<cList.length;i++)
   {
     if(cList[i].checked)
     {
        cCount++;
     }
   }
   cList=document.getElementsByName('shitiCoupon');
   cCount+=cList.length;
   g('coupon_count').innerHTML=cCount;
   
}
//初始化东券选择
function setDongSelected()
{
   var dongList=document.getElementsByName('rbtnlDong');
   for(var i=0;i<dongList.length;i++)
   {
      if(dongList[i].checked){selectedDong=dongList[i];return;}
   }
}

//-------------------订单信息-------------------

function showOrderInfo()
{
   setAjax_getResAndRunCode("action=showOrderInfo","part_info","setCouponStateShow();showCouponInfo();");
}
function useBalance(obj)
{
   setAjax_getResAndRunCode("action=useBalance&isUsed="+((obj.checked)?"1":"0"),"part_info","setCouponStateShow();");
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
   if(isInvoiceOpen){if(errInfo!=''){errInfo+=",";}errInfo+="“发票信息”";}
   if(isRemarkOpen){if(errInfo!=''){errInfo+=",";}errInfo+="“订单备注”";}
   if(errInfo!="")
   {
      showAlert("请先保存"+errInfo,g("submit_error"),"")
      return false;
   }
   return true;
}
var isReSubmit=0;
var passWord='';
function submitOrder(obj)
{
   
   g("submit_error").innerHTML='';
   if(check_submit())
   {
      showWaitInfo("正在提交订单，请等待！",g("submitWaitInfo"));
      g('submit_btn').style.display='none';
      setAjax("GET","action=submitOrder&isReSubmit="+isReSubmit+"&passWord="+escape(passWord),null,false,obj,null,'setOrderSubmitRes(backValue);');
      passWord='';
   }
}
function closeSubmitTip()
{
 g('MessageW').parentNode.removeChild(g('MessageW'));
 g('backW').parentNode.removeChild(g('backW'));
}
function setOrderSubmitRes(bakValue)
{
   clearWaitInfo();
   g('submit_btn').style.display='';
   if(bakValue.indexOf('submitError_')==0)
   {
      var errStr=bakValue.substr(12);
      if(errStr=='djd')
      {
           var a=new SubmitAlert();
           a.title='尊敬的客户，您购买的商品中包含大家电产品';
           a.content="&nbsp;&nbsp;&nbsp;&nbsp;对于此类产品京东为您提供销售服务，我们保证产品型号的正确和包装完整；安装、调试、保修等行为则由厂家直接负责。收到货物后您可以直接拨打厂家售后服务电话预约安装、调试服务，不建议自行开箱安装。京东大家电包含具体品类及其他注意事项，请详见：<a href='http://www.360buy.com/help/helectronic.aspx' target='_blank'>购物指南-大家电。</a>";
           a.bottom="<a href='#none' id='Tip_apply' onclick=\"closeSubmitTip();isReSubmit=1;g('submit').click();\"><span>知道了，提交订单</span></a>";
           a.sender=g('submit');
           a.show();
           return;
      }else if(errStr=='noPassWord'){
           var a=new SubmitAlert();
           a.title='请输入登录密码';
           a.content="<div style='padding-bottom:8px;'>尊敬的客户，为了您帐号的安全着想，请再次输入您的登录密码！</div>&nbsp;&nbsp;&nbsp;&nbsp;请输入登录密码:<input type='password' id='submit_pass' onkeypress=\"var key=window.event?event.keyCode:event.which;if(key==13){SubmitOnPassword();}\" /></a>&nbsp;<span id='submitAlert_mess' style='color:red;'></span>";
           a.bottom="<a href='#none' id='Tip_apply' onclick=\"SubmitOnPassword();\"><span>提交订单</span></a>";
           a.sender=g('submit');
           a.show();
           g('submit_pass').focus();
           return;
      
      }else if(errStr=='passWordError'){
           var a=new SubmitAlert();
           a.title='请输入登录密码:';
           a.content="<div style='text-align:center;color:red;padding-bottom:8px;'>您输入的密码有误，请重新输入！</div>&nbsp;&nbsp;&nbsp;&nbsp;请输入登录密码:<input type='password' id='submit_pass' onkeypress=\"var key=window.event?event.keyCode:event.which;if(key==13){SubmitOnPassword();}\" /></a>&nbsp;<span id='submitAlert_mess' style='color:red;'></span>";
           a.bottom="<a href='#none' id='Tip_apply' onclick=\"SubmitOnPassword();\"><span>提交订单</span></a>";
           a.sender=g('submit');
           a.show();
           g('submit_pass').focus();
           return;
      }
      
      if(errStr=="priceChange"){showForm_cart();showOrderInfo();errStr="尊敬的用户，您订单中的商品促销时限已过，价格已恢复为原价，您将按原价购买该商品，请您确认并再次提交订单。";}
      showAlert(errStr,g("submit_error"),"");
   }
   if(bakValue.indexOf('url_')==0)
   {
      var urlStr=bakValue.substr(4);
      urlStr=urlStr.split('@@');
      g('submit_btn').innerHTML="<span class='submitSuccess'>"+urlStr[0]+"</span>";
      window.location=urlStr[1];
   }
   if(bakValue.indexOf('fun_')==0)
   {
  
      var funStr=bakValue.substr(4);
      eval(funStr);
   }
}
function SubmitOnPassword()
{
   if(g('submit_pass').value==''){g('submitAlert_mess').innerHTML='请输入密码！';return;}
   passWord=g('submit_pass').value;
   closeSubmitTip();
   g('submit').click();
}
function SubmitAlert(){
   this.title='';
   this.content='';
   this.bottom='';
   this.sender=null;
   this.show=function(){
        //背景
        var bWidth=parseInt(document.body.offsetWidth);
        var bHeight=parseInt(document.body.offsetHeight);
        var back=document.createElement("div");
        back.id="backW";
        var styleStr="top:0px;left:0px;background:#666;position:absolute;width:"+bWidth+"px;height:"+bHeight+"px;";
        styleStr+=(isIe)?"filter:alpha(opacity=40);":"opacity:0.4;";
        back.style.cssText=styleStr;
        document.body.appendChild(back);
        //提示
        var mesW=document.createElement("div");
        mesW.id="MessageW";
        mesW.innerHTML+="<div class='Tip_Title'><em><img src='skin/images/tip_close.jpg' class='Tip_Close' onclick=\"closeSubmitTip();\"/></em>"+this.title+"</div>";
        mesW.innerHTML+="<div class='Tip_Content'>"+this.content+"</div>";
        mesW.innerHTML+="<div class='Tip_Submit'>"+this.bottom+"</div>";
        var pos=new getPos(this.sender);
        var styleStr='position:absolute;width:400px;background:#fff;';
        styleStr+="top:"+(pos.Top-100)+"px;left:"+(pos.Left-220)+"px;";
        mesW.style.cssText=styleStr;
       document.body.appendChild(mesW);
   }
  
}



function showForm_cart()
{
  if(g('part_cart')==null)return;
   setAjax_getRes("action=showForm_cart",'part_cart');
}

var openSuitList="";
//控制套装显示
function setSuitShow(suitId)
{
   if(g('suit_'+suitId)==null){return;}
   if(g('suit_'+suitId).style.display=='none')
   {
      if(openSuitList.indexOf('{'+suitId+'}')<0)
      {
         openSuitList+='{'+suitId+'}';
      }
      g('suit_'+suitId).style.display='';
      g('suitA_'+suitId).innerHTML='[收起套装商品]';
      g('suitImg_'+suitId).src='skin/images/bag_close.gif';
   }else{
      openSuitList=openSuitList.replace('{'+suitId+'}','');
      g('suit_'+suitId).style.display='none';
      g('suitA_'+suitId).innerHTML='[查看套装商品]';
      g('suitImg_'+suitId).src='skin/images/bag_open.gif';
   }
}



//促销
var promObj=null;
var promTime=null;
function runTime()
{
   if(promObj==null){
      clearTimeout(promTime);alert(promObj.length);return;
   }
   if(promObj.json!=null){promObj=promObj.json;}
   for(var i=0;i<promObj.length;i++)
   {
      var tmpInt=parseInt(promObj[i].LeaveTime);
      if(tmpInt==0){g('PromSec_'+promObj[i].Id).innerHTML="[抢购结束]";continue;}
      promObj[i].LeaveTime=tmpInt-1;
      var ts=new TimeSpan(tmpInt);
      g('PromSec_'+promObj[i].Id).innerHTML=ts.hour+"小时"+ts.minute+"分"+ts.second+"秒";
   }
   
   promTime=setTimeout(runTime,1000);
}
function ShowPromoInfo()
{
   setAjax_runCode("action=ShowPromoInfo","ShowPromoInfo_callback(backValue)");
}
function ShowPromoInfo_callback(resHtml)
{
  clearTimeout(promTime);
  if(g('Promo_panel')!=null)
  {
     var pHtml=resHtml.split('@-@');
     if(pHtml.length==2){
       g('Promo_panel').innerHTML=pHtml[0];
       promObj=eval(pHtml[1]);
       
       runTime();
     }else{
        g('Promo_panel').innerHTML='';
     }
  }
}


//----------------------礼品卡--------------------------
function showLipinka()
{
   if(g('part_lipinka').style.display=='none')
   {
       g('part_lipinka').style.display='';
   }else{
       g('part_lipinka').style.display='none';
   }
   setLiPinKaStateShow();
}
function setLiPinKaStateShow()
{
  if(g('part_lipinka').style.display=='')
  {
     g('lipinkaStateShow').innerHTML='-';
  }else{g('lipinkaStateShow').innerHTML='+';}
}
//添加礼品卡
function addShiTiLiPinKa(obj,cType)
{
    var couponKey=g('txtInputLPKey').value;
    if(couponKey==""){alert('请输入礼品卡密码！');return;}
    showWaitInfo('正在提交信息，请等待！',obj);
    setAjax_runCode("action=addLiPinKa&key="+couponKey+"&cType="+cType+"&isBind=0","selectLiPinKa_callback(backValue);");

}
var curLiPinka=null;
function selectLiPinKa(obj,cType,id)
{
    curLiPinka=obj;
    if(obj.checked)
    {
       setAjax_runCode("action=addLiPinKa&key="+obj.value+"&cType="+cType+"&isBind=1","selectLiPinKa_callback(backValue)");

    }else{
       setAjax_runCode("action=delLiPinKa&cType="+cType+"&id="+id,"selectLiPinKa_callback(backValue)");
    }
    
}
function selectLiPinKa_callback(backValue)
{
   if(backValue=='ok'){showLiPinKa();showOrderInfo();}
   else{
       if(backValue.indexOf('lerror_')==0)
       {
          var errInfo=backValue.substr(7);
          alert(errInfo);
          if(curLiPinka!=null)curLiPinka.checked=!curLiPinka.checked;
       }
   }
   curLiPinka=null;
}
function showLiPinKa()
{
   setAjax_getRes("action=showLiPinKa","part_lipinka");
}



function showSplitInfo()
{
   if(g('Split_panel')==null)return;
   setAjax_getRes("action=showSplitInfo","Split_panel");
}

//---------------------贺卡--------------------
function Card_show(skuId,message,fun)
{
    if(message!='')alert(message);
    var cardTest=new Card();
    cardTest.Fun="ReBuildCard()";
    cardTest.Url=null;
    cardTest.Show();
    
}
function ReBuildCard(type)
{
  setAjax_runCode("action=ReBuildCard","showOrderInfo();showForm_cart();");
}

//---------------------以旧换新--------------------
function TradeIn_Apply(skuId)
{
   if(confirm('确认要申请以旧换新吗？'))
      setAjax_runCode("action=TradeIn_Apply&SkuId="+skuId,"TradeIn_Apply_Callback(backValue);");
}
function TradeIn_Apply_Callback(result)
{
   if(result=='NoLogin')
   {
      //登录
      if(confirm('此业务需登录后才能申请，现在去登录？'))
      {
           ToLogin();
      }
   }
   else if(result=='NoConfig')
   {
       alert('抱歉,此商品目前无法申请‘以旧换新’业务！');
   }
   else if(result=='ok')
   {
       alert('申请成功！您将享受到‘以旧换新’的优惠！');
      showOrderInfo();
      showForm_cart();
   }
}



