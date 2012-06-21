<div class="o_show" >
<h1>收货人信息&nbsp;<a id="lbtnConsigneeWrite" href="javascript:void(0)" onclick="showForm_consignee(this)">[修改]</a></h1>
<div class="middle">
<table><tbody>
  <tr><td style="width: 80px;" align="right">收货人姓名：</td><td id="consignee"><?php echo $consignee ?></td></tr>
  <tr><td align="right">省　　份：</td><td id="province"><?php echo $province ?></td></tr>
  <tr><td align="right">地　　址：</td><td id="address"><?php echo $address ?></td></tr>
  <tr><td align="right">邮　　编：</td><td id="postcode"><?php echo $postcode ?></td></tr>
  <tr><td align="right">固定电话：</td><td id="phone"><?php echo $phone ?></td></tr>
  <tr><td align="right">手机号码：</td><td id="mobile"><?php echo $mobile ?></td></tr>
  <tr><td align="right">电子邮件：</td><td  id="email"><?php echo $email ?></td></tr>
</tbody></table>
</div>
<input   type="hidden" name="province_id" value="<?php echo $province_id ?>">
<input   type="hidden" name="city_id" value="<?php echo $city_id ?>">
<input   type="hidden" name="district_id" value="<?php echo $district_id ?>">
<input   type="hidden" name="consignee" value="<?php echo $consignee ?>">
<input   type="hidden" name="address" value="<?php echo $address ?>">
<input   type="hidden" name="postcode" value="<?php echo $postcode ?>">
<input   type="hidden" name="phone" value="<?php echo $phone ?>">
<input   type="hidden" name="mobile" value="<?php echo $mobile ?>">
<input   type="hidden" name="email" value="<?php echo $email ?>">
</div>
