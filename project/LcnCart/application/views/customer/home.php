<?php $this->load->view('_header') ?>
<div class="Main">

  <div id="Position" class="margin_b6"><a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;用户中心&nbsp;&gt;&nbsp;控制面板</div>
  <?php
  $this->load->view('customer/_left');
  $this->load->view('customer/_right');
  ?> 
  <div class="middle">

    <div class="Welcome">
	  <span class="float_Right">您上一次登录时间：<?php echo $this->session->userdata('user_last_login');  ?></span>您好，<?php echo $customer['name']; ?>。欢迎您回来！
	</div>

	<!--<div class="User_Info">
	<table width="100%"><tbody>
	  <tr><td width="33%">您目前的级别(待)：<em class="blue">注册用户</em></td><td colspan="2">消费成功后自动升级为铁牌会员(待)</td></tr>
      <tr><td width="33%">帐户积分(待)：<strong class="red">0</strong></td><td colspan="2">完成订单：0(待)</td></tr>
	  <tr><td width="33%">帐户余额(待)：<strong class="red">￥0.00</strong>元</td><td width="34%">一年内消费额：￥0.00元(待)</td><td>&nbsp;&nbsp;总消费额：￥0.00元(待)</td></tr>
	</tbody></table>用户信息(待)
	</div> 

	<div class="User_Tip">消息提示(待)：
	  <a href=""><em>1</em>条公告</a>&nbsp;&nbsp;
	  <a href=""><em>0</em>条未读短消息</a>&nbsp;&nbsp;
	  <a href=""><em>0</em>个投诉回复</a>&nbsp;&nbsp;
	  <a href=""><em>0</em>个待处理订单</a>
    </div>
	
	<h3>订单列表(待)</h3>
	<div class="Tip_Buy">
	  <table class="Table" border="1" bordercolor="#aaccee" width="100%"><tbody>
	    <tr><th>订单编号</th><th>下单时间</th><th>收货人</th><th>支付方式</th><th>订单状态</th><th>操作</th></tr>
		<tr><td colspan="6" style="text-align: right;"><a href="">更多订单&gt;&gt;</a></td></tr>
	  </tbody></table>
	</div>

	<div id="Products"></div>  
	
	<h3>也许您会对下列商品感兴趣(待)</h3>
	<div class="Product_List_S3" id="fov"><ul>
	  <?php for ($i=0;$i<6;$i++){?>
	  <li><dl><dt><a href=""><img onerror="ERRORimg(this)" src="<?php echo base_url()?>images/product/8b380121-6b8f-4f8c-a8dd-34a10738ca8f.jpg" alt="乐扣乐扣冷水杯HAP728"></a></dt><dd class="p_Name"><a href="">乐扣乐扣冷水杯HAP728</a></dd><dd class="p_Price">京东价：<strong>￥12.00</strong></dd></dl></li>
	  <?php }?>
    </ul></div>-->
  </div><!-- /middle -->

</div>
<?php $this->load->view('_footer') ?>