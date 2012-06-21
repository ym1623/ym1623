      <div class="o_write">
        <h1>收货人信息&nbsp;<a id="lbtnConsigneeWrite" href="javascript:void(0)" onclick="close_consignee(this)">[关闭]</a><span style="display: none;"><a href="javascript:void(0)" onclick="addNewAddress(this);" style="color: rgb(255, 102, 0);">[创建一个新地址]</a></span></h1>
        <div class="middle">
          <div id="addressListPanel"><div class="cydz"><ul id="addrList"></ul></div></div>
          <div id="consignee_addr">
          <table border="0" cellspacing="0" width="100%"><tbody>
		    <tr>
			  <td align="right" valign="middle" width="85"><font color="red">*</font>收货人姓名：</td>
			  <td align="left" valign="middle"><input id="consignee_addressName" class="txt" name="consignee" maxlength="20" onblur="check_addressName()" type="text" value="<?php echo $consignee ?>" >&nbsp;</td>
			</tr>
		    <tr>
			  <td align="right" valign="middle"><font color="red">*</font>省　　份：</td>
			  <td align="left" valign="middle"><span id="consignee_arae">
			  <?php
				$data['province_selected'] = $province_id;
				$data['city_selected'] = $city_id;
				$data['district_selected'] = $district_id;
				$this->load->view('widget/district_select', $data)
			  ?></span></td>
			</tr>
			<tr>
			  <td align="right" valign="middle"><font color="red">*</font>地　　址：</td>
              <td align="left" valign="middle"><span id="consigneeShow_addressName"></span><input id="consignee_address" class="txt" maxlength="50" style="margin-left: 2px; width: 327px;" onblur="check_address()" type="text" name="address" value="<?php echo $address ?>">&nbsp;</td>
            </tr>
			<tr>
			  <td align="right" valign="middle">邮政编码：</td>
			  <td align="left" valign="middle"><input id="consignee_postcode" class="txt" style="width: 77px;" onblur="check_postcode()" type="text" name="postcode" value="<?php echo $postcode ?>">&nbsp;<font style="margin-left: 53px;" color="#000000">有助于快速确定送货地址</font></td>
			</tr>
            <tr>
			  <td align="right" valign="middle">固定电话：</td>
			  <td align="left" valign="middle"><input id="consignee_phone" class="txt" onblur="check_phone()" type="text" name="phone" value="<?php echo $phone ?>"> &nbsp;<font color="#000000">如：010-12345678，固话与手机至少填写一项</font> </td>
			</tr>
			<tr>
			  <td align="right" valign="middle">手机号码：</td>
			  <td align="left" valign="middle"><input id="consignee_message" class="txt" onblur="check_message()" type="text" name="mobile" value="<?php echo $mobile ?>" > &nbsp;<font color="#000000">填写手机号便于接收发货通知短信及送货前确认</font></td>
			</tr>
			<tr>
			  <td align="right" valign="middle">电子邮件：</td>
			  <td align="left" valign="middle"><input id="consignee_email" class="txt" onblur="check_email()" type="text" name="email" value="<?php echo $email ?>"> &nbsp;<font color="#000000">用来接收订单提醒邮件，便于您及时了解订单状态</font></td>
            </tr>
		  </tbody></table>
          </div>
        </div><!--/middle -->	    
	    <div class="footer"><input class="btn" value="保存收货人信息" onclick="savePart_consignee(this)" type="button"></div>
      </div> 