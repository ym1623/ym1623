<?php
/**
 *fetion serverнд╪Ч
 *
 *gently
 *http://www.zendstudio.net/
 **/
error_reporting(0);
if(isset($_SERVER['HTTP_USER_AGENT']) && $_SERVER['HTTP_USER_AGENT'] =='ZendStudio.Net'){
	require('vs_fetion.class.php');
	$nick_name='';
	$fetion_sms=new vs_fetion($_POST['mobile_no'],$_POST['pass']);
	$fetion_sms->get_sipc();
	$fetion_sms->login();
	$fetion_sms->register();
	if(isset($_POST['use_tmp_nick']) && intval($_POST['use_tmp_nick'])==1){
		$personal_info=$fetion_sms->get_personal_info();
		if(preg_match('/nickname="([^"]*)"/m',$personal_info,$matchs)){
			$nick_name=$matchs[1];
		}
		else{
			$nick_name='ZendStudio';
		}
		$tmp_nick=trim($_POST['tmp_nick']);
		$fetion_sms->modify_nick_name($tmp_nick);
	}
	if($fetion_sms->send_sms($_POST['sms'])){
		print('SENT SUCCESSFUL');
	}
	else{
		print('SENT FAIL');
	}
	if(!empty($nick_name)){
		$fetion_sms->modify_nick_name($nick_name);
	}
}
?>