<?php $this->load->view('_header') ?>


<div class="Main clearfix">

  <div id="Position" class="margin_b6"><a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;用户中心&nbsp;&gt;&nbsp;订单中心</div>
  
  <?php
  $this->load->view('customer/_left');
  ?> 
  <div class="right">
    <div class="tb-1 flk13">
	<div class="Pagination"><?php echo $pagination; ?></div>
	<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
	<tr>
	  <th width="12%">订单编号</th>
	  <th width="30%">订单商品</th>
	  <th width="10%">收货人</th>
	  <th width="12%">订单金额</th>
	  <th width="10%">下单时间</th>
	  <th width="12%">订单状态</th>
	  <th width="14%">操作</th>
	</tr>
	<?php foreach($orders as $order): ?>
    <tr>
	  <td><a href="<?php echo site_url('customer/order_detail/index/'.$order['id'])?>"><?php echo $order['order_sn']; ?></a></td>
      <td align="left"><div class="img-list">
	  <?php foreach($order['items'] as $item): ?>
		  <a href="<?php echo site_url('product/single/product_id/'.$item['product_id'])?>" target="_blank">
		  <img onerror="this.src='<?php echo base_url()?>images/none_50.gif'"  src="<?php echo base_url().UPLOADS.$item['image']['image_name'].'_50'.$item['image']['file_ext']  ;?>"title="">	  
		  </a>
	  <?php endforeach;  ?>  
	 	  
	  </div></td>
      <td><div class="ftx26"><?php echo $order['delivery']['consignee']; ?></div></td>
      <td><div class="ftx26">￥<?php echo $order['total_price']; ?></div></td>
      <td><?php echo $order['place_at']; ?></td>
      <td class="status"><strong class="ftx02 order-statu">
      <?php 
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
      ?>
      </strong></td>
      <td class="ftx13 order-doi"><?php if(in_array($order['status'],array(1,2,10,11,12))){ ?><div class="btn-text"><?php echo $order['pay_online'];?></div><?php } ?><a href="<?php echo site_url('customer/order_detail/index/'.$order['id'])?>">查看</a></td>
    </tr>
	<?php endforeach;  ?>
	<tr>
	  <td style="height: 30px;" colspan="7">
	  <div class="ar">
		等待付款订单数：<strong class="ftx04"><?php echo $wait_pay; ?></strong>&nbsp;&nbsp;
		未完成的订单数：<strong class="ftx04"><?php echo $unfinish; ?></strong>&nbsp;&nbsp;
		已完成的订单数：<strong class="ftx04"><?php echo $finished; ?></strong>&nbsp;&nbsp;
		已取消订单数：<strong class="ftx04"><?php echo $cancel; ?></strong>&nbsp;&nbsp;
		订单总数：<strong class="ftx04"><?php echo $total; ?></strong>&nbsp;&nbsp;
	  </div>
	  </td>
	</tr>
    </tbody>
	</table>
    </div>
  </div>


</div>

<?php $this->load->view('_footer') ?>