<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title><?php echo $title; ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/shoppingcart.css"/>

<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-plugins-vs1-20090707.js.js"></script>

</head>
<body>
<div class="Wrap_cart">

  <div id="Top1_order_step3" class="Header_cart">
    <div class="Logo"><a href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>images/logo.gif"></a></div>
	<ul class="Order_cart" id="Order_cart_S3">
	  <li class="step1 s1complete">1.我的购物车</li>
	  <li class="step2 s2complete">2.填写核对订单信息</li>
	  <li class="step3">3.成功提交订单</li>
	</ul>
  </div>

  <div class="List_cart marginb10">
    <h2><strong></strong></h2>
    <div class="cart_table">
      <div class="tip_1"><p>订单已提交，请尽快付款！</p></div>
      <div class="tip_5"><p>您的订单号：<strong><a href="<?php echo site_url('customer/order_detail/index/'.$order_id)?>" target="_blank"><?php echo $order_sn;?></a></strong>&nbsp;&nbsp;&nbsp;&nbsp;应付金额：<strong><?php echo $total_price;?></strong> 元&nbsp;&nbsp;&nbsp;&nbsp;支付方式：<?php echo $payment_name;?>&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
    </div><!-- cart_table -->
	<div class="round"><div class="lround"></div><div class="rround"></div></div>
  </div><!-- List_cart -->

</div>
<?php echo $pay_online;?>
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