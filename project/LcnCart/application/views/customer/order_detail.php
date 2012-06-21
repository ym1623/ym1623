<?php $this->load->view('_header') ?>

<div class="w">
  <div id="Position" class="margin_b6"><a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;<a href="<?php echo site_url('customer')?>">用户中心</a>&nbsp;&gt;&nbsp;<a href="<?php echo site_url('customer/order')?>">订单中心</a>&nbsp;&gt;&nbsp;订单：<?php echo $order['order_sn']; ?></div>

  <div class="m" id="orderstate">
    <div class="mt">
	  <strong>订单号：<?php echo $order['order_sn']; ?>&nbsp;&nbsp;&nbsp;&nbsp;状态：<span class="ftx14"><?php 
        switch ($order['status']){
			case 1 : ;
			case 2 : echo '等待付款';break;
			case 3 : echo '已经付款';break;
			case 4 : ;
			case 5 : ;
			case 6 : ;
			case 7 : ;
			case 8 : ;			
			case 9 : echo '订单完成';break;
			case 10 : ;
			case 11 : ;
			case 12 : echo '已取消';break;
		}
      ?></span>&nbsp;&nbsp;</strong>
	</div>
  </div>

  <!--<div id="process" class="section4">
    <div class="node fore ready"><ul><li class="tx1">&nbsp;</li><li class="tx2">提交订单</li><li class="tx3"><?php echo $order['place_at']; ?></li></ul></div>
    <div class="proce ready"><ul><li class="tx1">&nbsp;</li></ul></div>
    <div class="node ready"><ul><li class="tx1">&nbsp;</li><li class="tx2">等待付款</li><li class="tx3">&nbsp;</li></ul></div>
    <div class="proce ready"><ul><li class="tx1">&nbsp;</li></ul></div>
    <div class="node ready"><ul><li class="tx1">&nbsp;</li><li class="tx2">商品出库</li><li class="tx3">&nbsp;</li></ul></div>
    <div class="proce ready"><ul><li class="tx1">&nbsp;</li></ul></div>
    <div class="node ready"><ul><li class="tx1">&nbsp;</li><li class="tx2">等待收货</li><li class="tx3">&nbsp;</li></ul></div>		
    <div class="proce wait"><ul><li class="tx1">&nbsp;</li></ul></div>
	<div class="node wait"><ul><li class="tx1">&nbsp;</li><li class="tx2">完成</li><li class="tx3">&nbsp;</li></ul></div>
  </div>-->

  <div class="m" id="orderinfo">
    <div class="mt"><strong>订单信息</strong></div>
    <div class="mc">
      <dl class="fore">
        <dt>收货人信息</dt>
        <dd><ul>
			<li>收&nbsp;货&nbsp;人：<?php echo $delivery['consignee']; ?></li>
			<li>地&nbsp;&nbsp;&nbsp;&nbsp;址：<?php echo $delivery['address']; ?></li>
			<li>固定电话：<?php echo $delivery['contact_phone']; ?></li>
			<li>手机号码：<?php echo $delivery['contact_mobile']; ?></li>
			<li>电子邮件：<?php echo $customer['email']; ?></li>
        </ul></dd>
      </dl>
      <dl>
        <dt>支付及配送方式</dt>
        <dd><ul>
		  <li>支付方式：<?php echo $payment['name']; ?></li>
          <li>运&nbsp;&nbsp;&nbsp;&nbsp;费：￥<?php echo $order['auto_freight_fee']; ?></li>
        </ul></dd>
      </dl>
      <dl>
        <dt>商品清单</dt>
        <dd class="p-list">
          <table cellpadding="0" cellspacing="0" width="100%"><tbody>
		  <tr>
            <th width="20%"> 商品编号 </th>
            <th width="40%"> 商品名称 </th>
            <th width="20%"> 商品价格 </th>            
            <th width="20%">  商品数量 </th>
          </tr>
		  <?php foreach($order_items as $item): ?>
          <tr>
		    <td><?php echo $item['product_id']; ?></td>
            <td><div class="fl flk13"><a target="_blank" href="<?php echo site_url('product/single/product_id/'.$item['product_id'])?>"><?php echo $item['product_name']; ?></a></div></td>
            <td><span class="ftx04"><?php echo $item['price']; ?></span></td>           
			<td><?php echo $item['quantity']; ?></td>
		  </tr>
		  <?php endforeach; ?>
		  </tbody></table>
        </dd>
      </dl>
      <span class="clr"></span>
    </div>
    <!--付款信息-->
    <div class="total">
      <ul>
        <li><span>商品总金额：</span>￥<?php echo $order['total_product_price']; ?></li>
        <li><span>+ 运费：</span>￥<?php echo $order['auto_freight_fee']; ?></li>            
      </ul>
      <span class="clr">ad</span>
      <div class="extra">订单支付金额：<span class="ftx04"><b>￥<?php echo $order['total_price']; ?></b></span></div>
    </div>
  </div>
  <?php if(in_array($order['status'],array(1,2,10,11,12))){  echo $pay_online; } ?>
</div>

<?php $this->load->view('_footer') ?>