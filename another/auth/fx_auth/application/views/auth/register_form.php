<?php
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?=form_open($this->uri->uri_string()) ?>
<table>
	<?php if ($use_username) { ?>
	<tr>
		<td><label for="username">Username</label></td>
		<td><input type="text" name="username" value="" id="username"  /></td>
		<td style="color: red;">
		<?=form_error('username'); ?>
		<?php echo isset($errors['username'])?$errors['username']:''; ?>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td><label for="email">Email Address</label></td>
		<td><input type="text" name="email" value="" id="email" /></td>
		<td style="color: red;">
		<?=form_error('email'); ?>
		<?php echo isset($errors['email'])?$errors['email']:''; ?>
		</td>
	</tr>
	<tr>
		<td><label for="password">Password</label></td>
		<td><input type="password" name="password" value="" id="password" /></td>
		<td style="color: red;"><?=form_error('password') ?></td>
	</tr>
	<tr>
		<td><label for="confirm_password">Confirm Password</label></td>
		<td><input type="password" name="confirm_password" value="" id="confirm_password" /></td>
		<td style="color: red;"><?=form_error('confirm_password') ?></td>
	</tr>

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?=form_error('recaptcha_response_field') ?></td>
		<?=$recaptcha_html ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?=$captcha_html ?>
		</td>
	</tr>
	<tr>
		<td><label for="captcha">Confirmation Code</label></td>
		<td><input type="text" name="captcha" value="" id="captcha" maxlength="8"  /></td>
		<td style="color: red;"><?=form_error('captcha') ?></td>
	</tr>
	<?php }
	} ?>
</table>
<input type="submit" name="register" value="Register"  />
<?=form_close() ?>