<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title><?php echo $title; ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common_002.css"/>
<?php 
foreach ($css as $_css):
    echo $_css;
endforeach;
 ?>
 <script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/common.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script type="text/javascript" src="<?php echo base_url()?>js/ShoppingCart.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/effects-20090707.js"></script>
<script language="JavaScript">
$(document).ready(function() {
  //
});
</script>
</head>
<body>
<div style="z-index: 10000;"><div id="Container"></div></div>
<div id="myPin" style="display: none;"></div>
<div class="Wrap_cart">

  <div id="MiniToolBar">
  <ul>
    <li class="li1">
      <span style="">请<a href="<?php echo site_url('login')?>">登录</a>或<a href="<?php echo site_url('login')?>">注册</a></span>
	  <span style="display: none;">[<a href="">退出</a>]</span>
	</li>
	<li class="line">|</li>
	<li><a href="<?php echo site_url('home')?>" target="_blank">商城首页</a></li>
	<li class="line">|</li>
	<li><a href="" target="_blank">用户中心</a></li>
	<li class="line">|</li>
	<li><a href="" >帮助</a></li>
  </ul>
  </div>

  <div id="Top1_order_step1" class="Header_cart">
    <div class="Logo"><a href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>images/logo.gif"></a></div>
    <ul class="Order_cart" id="Order_cart_S1">
	  <li class="step1">1.我的购物车</li>
	  <li class="step2">2.填写核对订单信息</li>
	  <li class="step3">3.成功提交订单</li>
    </ul>
  </div>

  <div id="Top1_FeeInfo" class="mycart_tip"><img src="<?php echo base_url()?>images/cart_001.gif"></div>

  <!--免运费提示-->
  <div style="border: 1px solid rgb(216, 187, 129); background: none repeat scroll 0% 0% rgb(255, 247, 211); padding: 9px; margin-bottom: 5px;">
	<span id="freightTip"></span>
	<a  href="">免运费提示</a>
  </div>

  <div class="List_cart">
	<h2><strong>我挑选的商品</strong></h2>
	<div class="cart_table">
      <div id="productList">
      <table class="Table" id="CartTb" cellpadding="0" cellspacing="0" width="100%">
      <thead>
		<tr class="align_Center Thead">
          <td style="height: 30px;" width="7%">商品编号</td>
          <td>商品名称</td>
		  <td width="10%">本店价</td>
		  <td width="8%">返现</td>
		  <td width="8%">赠送积分</td>
		  <td width="9%">商品数量</td>
		  <td width="7%">删除商品</td>
		</tr>
	  </thead>
	  <tbody>
		<?php foreach($this->cart->contents() as $items): ?>
        <tr class="align_Center">
          <td style="padding: 5px 0pt;"><?php echo $items['id']; ?></td>
          <td class="align_Center"><span><a target="_blank" href="<?php echo site_url('product/single/product_id/'.$items['id'])?>" ><?php echo $items['name']; ?></a></span></td>
          <td><span class="price"><?php echo $items['price']; ?></span></td>
          <td></td>
          <td></td>
          <td>
		  <a href="#none" title="减一" onclick="changeBar('-','<?php echo $items['id']; ?>',this)" style="margin-right: 2px;"><img style="display: inline;" src="<?php echo base_url()?>images/bag_close.gif" border="none"></a>
		  <input name="rowid" value="<?php echo $items['rowid']; ?>" type="hidden"><input class="qty" name="txtChange<?php echo $items['id']; ?>" maxlength="4" style="width: 30px;" onkeydown="if(event.which == 13) this.blur(); " value="<?php echo $items['qty']; ?>"  onblur="changeProductCount('<?php echo $items['id']; ?>',this);" type="text" class="rowid" ><input name="hidChange[<?php echo $items['id']; ?>]" value="<?php echo $items['qty']; ?>" type="hidden"><a href="#none" title="加一" onclick="changeBar('+','<?php echo $items['id']; ?>',this)" style="margin-left: 2px;"><img style="display: inline;" src="<?php echo base_url()?>images/bag_open.gif" border="none"></a>
          </td>
		  <td><a href="#" id="" onclick="removeProduct('<?php echo $items['id']; ?>',this)">删除</a></td>
        </tr>		
		<?php endforeach; ?>
        <tr>
		  <td class="align_Right Tfoot" colspan="7" style="height: 30px;"><!--重量总计：44.80kg&nbsp;&nbsp;&nbsp;原始金额：￥39,690.00元 - 返现：￥0.00元<br>--><span style="font-size: 14px;"><b>商品总金额(不含运费)：<span class="price" id="cartBottom_price">￥<?php echo $this->cart->total(); ?></span>元</b></span></td>
		</tr>
      </tbody>
	  </table>
      </div>
	  <ul class="cart_op" style="margin-bottom: 0px;">
	    <li class="li2"><a href="#none" onclick="clearCart()">清空购物车</a></li>			
	    <li class="li3">
		  <div id="submit_info"></div>
		  <div id="submit_btn" style="text-align: right;">
	        <span style="font-size: 12px; color: rgb(153, 153, 153); margin-right: 3px;">回首页</span>
		    <a href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>images/btn_continue.jpg" style="margin-right: 17px;"></a>
		    <a href="<?php echo site_url('order')?>" ><img src="<?php echo base_url()?>images/gwc_10.jpg" id="gotoOrderInfo" onclick="runOrderInfo(this);" style="cursor: pointer; border: medium none;" alt="进入订单信息页"></a>	
		  </div>
		  <div style="padding-right: 9px; text-align: right; border: 1px solid rgb(255, 255, 255);" id="submit_error"></div>
		</li>
	  </ul>	 
	</div><!--/cart_table-->

    <div class="round"><div class="lround"></div><div class="rround"></div></div>

  </div><!--/List_cart-->

</div>
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