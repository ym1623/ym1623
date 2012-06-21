<?php $this->load->view('_header') ?>

<link href="<?php echo base_url()?>js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/calendar.php"></script>

<form name="form1" method="post" action="<?php echo site_url('customer/info/save')?>"  id="form1">
<div class="Main">

  <div id="Position" class="margin_b6"><a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;用户中心&nbsp;&gt;&nbsp;个人资料</div>
  
  <?php
  $this->load->view('customer/_left');
  ?> 

  <div class="right1">
    <table class="user_info_table table_a"><tbody>
	  <tr><th colspan="2" align="left"><strong>个人资料</strong></th></tr>

	  <tr><td align="center" width="13%">会员帐号：</td><td><span><span id="lblUserPin"><?php echo $customer['name']; ?></span></span></td></tr>

	  <tr><td align="center">收货人姓名：</td><td><input name="consignee" id="consignee" value="<?php echo $address['consignee']; ?>" type="text"></td></tr>
	  
	  <tr>
		<td align="center">会员生日：</td>
		<td>
		<input name="dob" type="text" id="dob" size="12" value='<?php echo $customer['dob']; ?>'  class="w130"  readonly="readonly" />
		<input name="selbtn" type="button" id="selbtn" onclick="return showCalendar('dob', '%Y-%m-%d', false, false, 'selbtn');" value="选择" class="button"   />
		</td>
	  </tr>

	  <tr>
		<td align="center">所属地区：</td>
		<td>
		  <?php
			$data['province_selected'] = $address['province_id'];
			$data['city_selected'] = $address['city_id'];
			$data['district_selected'] = $address['district_id'];
			$this->load->view('widget/district_select', $data)
		   ?>
	    </td>
	  </tr>
	
	  <tr>
		<td align="center">电子邮件：</td>
		<td><input name="txtEmail" value="<?php echo $customer['email']; ?>" id="txtEmail" type="text">&nbsp; （目前@hotmail、@live、@gmail邮箱无法收到购物提醒邮件和促销邮件）</td>
	  </tr>

	  <tr>
		<td style="height: 21px;" align="center">常用电话：</td>
		<td style="height: 21px;"><input name="txtTel" value="<?php echo $address['phone']; ?>" id="txtTel" type="text"><span id="rfvTel" style="color: Red; display: none;">* 请填写常用电话号码</span></td>
	  </tr>

	  <tr>
		<td align="center">手机短信：</td>
		<td><input name="txtMobile" value="<?php echo $address['mobile']; ?>" id="txtMobile" type="text"></td>
	  </tr>

	  <tr>
		<td align="center">&nbsp;</td>
		<td><span class="f_red">[手机号前不带0,填写本项目,您的订单发出后,商城会发送免费短信告诉您发货日期、货运单号和承运人,便于您及时接收货物。 ]</span></td>
	  </tr>

	  <tr>
		<td align="center">收货地址：</td>
		<td><input name="txtAddress" value="<?php echo $address['address']; ?>" id="txtAddress" class="w190" style="width: 400px;" type="text"><span id="rfvAddress" style="color: Red; display: none;">* 请填写收货地址</span></td>
	  </tr>

	  <tr>
		<td align="center">邮政编码：</td>
		<td><input name="txtZipCode" value="<?php echo $address['postcode']; ?>" id="txtZipCode" class="w70" type="text"><a href="http://www.ip168.com/Cha/Yzbm/" class="a_blue" target="_blank">  查询邮政编码</a><span id="rfvZipCode" style="color: Red; display: none;">* 请填写邮政编码</span></td>
	  </tr>

	  <tr>
		<td align="center">备注：</td>
		<td><textarea name="txtRemark" rows="2" cols="20" id="txtRemark"><?php echo $address['remark']; ?></textarea></td>
	  </tr>

	  <tr>
		<td colspan="2" align="center">
		  <input name="btnSubmit" value="确定"  id="btnSubmit" type="submit">
	  </tr>

	</tbody></table>    
  </div><!-- /right1 -->

</div>
</form>

<?php $this->load->view('_footer') ?>