<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title><?php echo $title; ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common_002.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/shoppingcart.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/orderInfo.css"/>

<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/common.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script type="text/javascript" src="<?php echo base_url()?>js/OrderInfo.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/effects-20090707.js"></script>
</head>
<body>
<div style="z-index: 10000;"><div id="Container"></div></div>
<div class="Wrap_cart">

  <div id="Top1_order_step2" class="Header_cart">
    <div class="Logo"><a href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>images/logo.gif"></a></div>
    <ul class="Order_cart" id="Order_cart_S2">
	  <li class="step1 s1complete"><a href="<?php echo site_url('shopping_cart')?>" style="color: rgb(0, 0, 0);">1.我的购物车</a></li>
	  <li class="step2">2.填写核对订单信息</li>
	  <li class="step3">3.成功提交订单</li>
	</ul>
  </div>
  
  <form action="<?php echo site_url('order/save')?>" id="order_save" method="post">
  <div class="List_cart marginb10">
	<h2><strong>填写核对订单信息</strong></h2>
	<div class="cart_table">

	  <!--收货人地址开始-->
      <div id="part_consignee">
      <div class="o_write">
        <h1>收货人信息&nbsp;<a id="lbtnConsigneeWrite" href="javascript:void(0)" onclick="close_consignee(this)">[关闭]</a><span style="display: none;"><a href="javascript:void(0)" onclick="addNewAddress(this);" style="color: rgb(255, 102, 0);">[创建一个新地址]</a></span></h1>
        <div class="middle">
          <div id="addressListPanel"><div class="cydz"><ul id="addrList"></ul></div></div>
          <div id="consignee_addr">
          <table border="0" cellspacing="0" width="100%"><tbody>
		    <tr>
			  <td align="right" valign="middle" width="85"><font color="red">*</font>收货人姓名：</td>
			  <td align="left" valign="middle"><input id="consignee_addressName" class="txt" name="consignee" maxlength="20" onblur="check_addressName()" type="text" value="<?php echo $address['consignee'] ?>" >&nbsp;</td>
			</tr>
		    <tr>
			  <td align="right" valign="middle"><font color="red">*</font>省　　份：</td>
			  <td align="left" valign="middle"><span id="consignee_arae">
			  <?php
				$data['province_selected'] = $address['province_id'];
				$data['city_selected'] = $address['city_id'];
				$data['district_selected'] = $address['district_id'];
				$this->load->view('widget/district_select', $data)
			  ?></span></td>
			</tr>
			<tr>
			  <td align="right" valign="middle"><font color="red">*</font>地　　址：</td>
              <td align="left" valign="middle"><span id="consigneeShow_addressName"></span><input id="consignee_address" class="txt" maxlength="50" style="margin-left: 2px; width: 327px;" onblur="check_address()" type="text" name="address" value="<?php echo $address['address'] ?>">&nbsp;</td>
            </tr>
			<tr>
			  <td align="right" valign="middle">邮政编码：</td>
			  <td align="left" valign="middle"><input id="consignee_postcode" class="txt" style="width: 77px;" onblur="check_postcode()" type="text" name="postcode" value="<?php echo $address['postcode'] ?>">&nbsp;<font style="margin-left: 53px;" color="#000000">有助于快速确定送货地址</font></td>
			</tr>
            <tr>
			  <td align="right" valign="middle">固定电话：</td>
			  <td align="left" valign="middle"><input id="consignee_phone" class="txt" onblur="check_phone()" type="text" name="phone" value="<?php echo $address['phone'] ?>"> &nbsp;<font color="#000000">如：010-12345678，固话与手机至少填写一项</font> </td>
			</tr>
			<tr>
			  <td align="right" valign="middle">手机号码：</td>
			  <td align="left" valign="middle"><input id="consignee_message" class="txt" onblur="check_message()" type="text" name="mobile" value="<?php echo $address['mobile'] ?>" > &nbsp;<font color="#000000">填写手机号便于接收发货通知短信及送货前确认</font></td>
			</tr>
			<tr>
			  <td align="right" valign="middle">电子邮件：</td>
			  <td align="left" valign="middle"><input id="consignee_email" class="txt" onblur="check_email()" type="text" name="email" value="<?php echo $customer['email'] ?>"> &nbsp;<font color="#000000">用来接收订单提醒邮件，便于您及时了解订单状态</font></td>
            </tr>
		  </tbody></table>
          </div>
        </div><!--/middle -->	    
	    <div class="footer"><input class="btn" value="保存收货人信息" onclick="savePart_consignee(this)" type="button"></div>
      </div> 
      </div>
      <!--收货人地址结束-->

	  <!--支付方式及配送方式开始-->
      <div id="part_payTypeAndShipType">	  
	  <div class="o_show">
		<h1>支付及配送方式&nbsp;<a id="linkPayTypeShipType" href="javascript:void(0)" onclick="showForm_payTypeAndShipType(this);" style="">[修改]</a></h1>
		<div id="updateInfo_payType"></div>
		<div class="middle">
		<table style="width: 100%;"><tbody>
		<tr>
		  <td style="text-align: right; width: 80px;">支付方式：</td><td></td>
		</tr>
		<tr style="">
		  <td style="text-align: right;">配送方式：</td><td></td>
		</tr>
		<tr style="">
		  <td style="text-align: right;">运　　费：</td><td></td>
		</tr>		
		</tbody></table>
		</div>
		<div class="footer"></div>
	  </div>	
	  </div>
      <!--支付方式及配送方式结束-->

	  <!--发票信息开始
      <div id="part_invoice">
      <div class="o_show">
        <h1>发票信息&nbsp;<a href="javascript:void(0)" onclick="showForm_invoice(this)">[修改]</a></h1>
		<div class="middle">
        <table style="width: 100%; display: none;"><tbody>
		  <tr>
            <td style="text-align: right; width: 80px;">开取类型：</td><td>默认开取</td>
		  </tr>
        </tbody></table>
        <table style="width: 100%;">
          <tbody>
		  <tr>
		    <td style="text-align: right; width: 80px;">发票类型：</td><td>普通发票</td>
          </tr>
          <tr>
            <td style="text-align: right; width: 80px;">发票抬头：</td><td>个人 </td>
          </tr>
		  <tr>
		    <td style="text-align: right; width: 80px;">发票内容：</td><td>明细 </td>
          </tr>
        </tbody></table>
        </div>
        <div class="footer"></div>
      </div>
      </div>-->
      <!--发票信息结束-->

	  <!--备注信息开始
      <div id="part_remark">
	  <div class="o_show">
        <h1>订单备注&nbsp;<a href="javascript:void(0)" onclick="showForm_remark(this)">[修改]</a></h1>
        <div class="middle">
        <table style="width: 100%;"><tbody>
		  <tr>
		    <td style="text-align: left; padding-left: 20px;">暂无备注</td>
		  </tr>
        </tbody></table>
	    </div>
        <div class="footer"></div>
	  </div>
	  </div>-->
      <!--备注信息结束-->

      <!--Cart信息开始-->
      <div id="part_cart">
	  <div class="o_show">
        <h1><span style="margin-right: 700px;">商品清单</span><a href="<?php echo site_url('shopping_cart')?>" style="color: rgb(0, 112, 215);">返回修改购物车</a></h1>
		<div class="middle">
        <table class="Table" cellpadding="0" cellspacing="0" width="100%"><tbody>
		  <tr class="align_Center Thead">
            <td width="7%">商品编号</td>
            <td>商品名称</td>
            <td width="10%">京东价</td>
            <!--<td width="8%">返现</td>
            <td width="8%">赠送积分</td>
            <td width="9%">库存状态</td>-->
            <td width="9%">商品数量</td>
          </tr>
		  <?php foreach($this->cart->contents() as $items): ?>
          <tr class="align_Center">
            <td style="padding: 5px 0pt;"><?php echo $items['id']; ?></td>
            <td class="align_Center"><a target="_blank" href="<?php echo site_url('product/single/product_id/'.$items['id'])?>" onclick="this.blur();"><?php echo $items['name']; ?></a></td>
            <td><span class="price"><?php echo $items['price']; ?></span></td>
           <!-- <td></td>
            <td>0</td>
            <td>现货</td>-->
            <td><?php echo $items['qty']; ?></td>
		  </tr>
		  <?php endforeach; ?>
	    </tbody></table>
        </div>
        <div class="footer"></div>
      </div>
      </div>
      <!--Cart信息结束-->
      
	  <!--结算信息开始-->
      <div id="ware_info">
        <div style="background: none repeat scroll 0% 0% rgb(255, 255, 255); font-size: 14px; font-weight: bold; padding-left: 2px;">结算信息</div>
	    <h1></h1>
        <div class="middle">
          <!--订单信息-->
          <ul id="part_info">
            <li class="info1" style="padding-bottom: 5px;">商品金额：<span id="product_fee"><?php echo $this->cart->total(); ?></span> 元 + 运费：<span id="shipping_fee"></span>元<br>
		    </li>
			<li class="info2" style="width: 100%; overflow: hidden;">
			  <table style="width: 100%;" cellpadding="0" cellspacing="0">
			  <tbody><tr><td></td><td style="text-align: right; font-size: 15px;"><b>应付总额：<font color="red" id="total_fee"></font> 元</b></td></tr></tbody></table>
			</li>
          </ul>
          <!--订单信息结束-->
	    </div>
      </div>
	  <!--结算信息结束-->

	  <!--提交-->
      <div class="o_show submit"> 
        <div><span id="submitWaitInfo"></span></div>
        <div id="submit_error"></div>
        <div id="submit_btn"><input onclick="submitOrder(this);" style="margin-top: 2px; border: medium none; cursor: pointer; width: 160px; height: 53px; background: url(&quot;<?php echo base_url()?>images/submit.jpg&quot;) repeat scroll 0% 0% transparent;" type="button" > 
        </div>
      </div>
      <!--提交结束-->

	</div><!-- /cart_table -->
	<div class="round"><div class="lround"></div><div class="rround"></div></div>
  </div><!-- /List_car -->
  
</div>
</form>

<div class="Footer_Nav"> 
  <a target="_blank" href="">关于我们</a>|
  <a target="_blank" href="">联系我们</a>|
  <a target="_blank" href="">广告服务</a>|
  <a target="_blank" href="">人才招聘</a>|
  <a target="_blank" href="">XX社区</a>|
  <a target="_blank" href="">商品评价</a>|
  <a target="_blank" href="">友情链接</a>
</div>
<div class="Copyright"> 
    XX市公安局备案编号：XXXXXXXX&nbsp;&nbsp;<a href=""class="icp">XXXXXXXXX号</a><br> 
    Copyright&#169;2004-2010&nbsp;&nbsp;XXXXXX商城&nbsp;&nbsp;版权所有<br> 
</div> 
<div class="Footer_Link"> 
  <a href=""target="_blank"><img src="<?php echo base_url()?>images/f_icp.gif"alt="经营性网站备案中心"></a>
  <a href="" target="_blank"><img src="<?php echo base_url()?>images/f_cnnic.gif"
 alt="站点卫视"></a>
</div> 

</body>
</html>

