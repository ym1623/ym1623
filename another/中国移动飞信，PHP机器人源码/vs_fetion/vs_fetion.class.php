<?php
/**
 *fetion class核心文件(fsock版)
 *
 *gently
 *http://www.zendstudio.net/
 **/
class vs_fetion{
	private $mobile_no='';
	private $password='';
	private $login_received='';
	private $sock_handle=NULL;
	private $I=0;
	private $sipc_ip='';//各地手机服务器不同
	private $sipc_port='8080';
	var $domain='fetion.com.cn';
	var $login_keys=array();
	var $c_ver='3.1.0480';//client version
	function __construct($mobile_no,$password){
		$this->mobile_no=$mobile_no;
		$this->password=$password;
	}
	
	//获得系统信息
	function get_sipc(){
		$sid='';
		if(preg_match('/[0-9]{11}/m',$this->mobile_no)){
			$sid="mobile-no=\"{$this->mobile_no}\"";
		}
		else{
			$sid="sid=\"{$this->mobile_no}\"";
		}
		$data='<config><user '.$sid.' /><client type="PC" version="'.$this->c_ver.'" platform="W5.1" /><servers version="0" /><service-no version="0" /><parameters version="0" /><hints version="0" /><http-applications version="0" /><client-config version="0" /></config>';
		$data_len=strlen($data);
		$fp=@fsockopen('nav.fetion.com.cn',80,$errno,$errstr,90);
		if(!$fp){
			$this->error('Get sipc Failed.');
		}
		else{
			$headers=<<<eot
POST /nav/getsystemconfig.aspx HTTP/1.0
User-Agent: IIC2.0/pc 3.1.0480
Accept-Encoding: deflate, gzip
Host: nav.fetion.com.cn:80
Content-Length: {$data_len}

{$data}
eot;
			fwrite($fp,$headers);
			$received=fread($fp,1024);
			fclose($fp);
			if(preg_match('/<sipc\-proxy>([^<>]+)<\/sipc\-proxy/',$received,$matchs)){
				list($this->sipc_ip,$this->sipc_port)=explode(':',$matchs[1]);
			}
			else{
				$this->error('Pregmatch sipc received info Failed.');
			}
		}
	}
	
	//向SSI服务器登录
	function login(){
		$fp=@fsockopen('ssl://nav.fetion.com.cn',443,$errno,$errstr,90);
		if(!$fp){
			$this->error("fsockopen error,".$errstr.":({$errno})");
		}
		else{
			if(preg_match('/[0-9]{11}/m',$this->mobile_no)){
				$sid="mobileno={$this->mobile_no}";
			}
			else{
				$sid="sid={$this->mobile_no}";
			}
			$headers="GET /ssiportal/SSIAppSignIn.aspx?{$sid}&pwd={$this->password} HTTP/1.1\r\n";
			$headers.="Host: nav.fetion.com.cn\r\n";
			$headers.="Connection: Close\r\n\r\n";
			flock($fp,LOCK_EX);
			@fwrite($fp,$headers);
			$this->login_received=fread($fp,1024);
			flock($fp,LOCK_UN);
			fclose($fp);
			$this->get_login_keys();
		}
	}

	//向服务器注册
	function register(){
		$this->sock_handle=fsockopen($this->sipc_ip,$this->sipc_port,$errno,$errstr,90);
		if(!$this->sock_handle){
			$this->error('Create fsocket Failed,'.$errstr.'('.$errno.')');
		}
		else{
			$this->I++;
			$send_data=<<<eot
R fetion.com.cn SIP-C/2.0
F: {$this->login_keys['sid']}
I: {$this->I}
Q: 1 R
L: 251

<args><device type="PC" version="0" client-version="{$this->c_ver}" /><caps value="fetion-im;im-session;temp-group" /><events value="contact;permission;system-message" /><user-info attributes="all" /><presence><basic value="400" desc="" /></presence></args>
eot;
			$received=$this->SIPP($send_data);
			if(preg_match('/nonce="(.+)"/',$received,$matchs)){
				$nonce=$matchs[1];
			}
			else{
				$this->error('No received nonce.');				
			}
			$cnonce=$this->cnonce_maker();
			$response=$this->calc_response($this->login_keys['sid'],$this->domain,$this->password,$nonce,$cnonce);
			$send_data=<<<eot
R fetion.com.cn SIP-C/2.0
F: {$this->login_keys['sid']}
I: {$this->I}
Q: 1 R
L: 251
A: Digest response="{$response}",cnonce="{$cnonce}"

<args><device type="PC" version="0" client-version="{$this->c_ver}" /><caps value="fetion-im;im-session;temp-group" /><events value="contact;permission;system-message" /><user-info attributes="all" /><presence><basic value="400" desc="" /></presence></args>
eot;
			$received=$this->SIPP($send_data);
			if(!preg_match('/200 OK/',$received)){
				$r_array=explode("\r\n",$received);
				$this->error('register failed.code('.$r_array[0].')');
			}
			//preg_match('/<custom\-config version="[0-9]+">([^<>]+)<\/custom\-config>/',$received,$matchs);
			return true;
		}
	}
	
	//获取个人信息
	function get_personal_info(){
		$this->I++;
		$send_data=<<<eot
S {$this->domain} SIP-C/2.0
F: {$this->login_keys['sid']}
I: {$this->I} 
Q: 1 S
N: GetPersonalInfo
L: 155

<args><personal attributes="all" /><services version="" attributes="all" /><config version="0" attributes="all" /><mobile-device attributes="all" /></args>
eot;
		return $this->SIPP($send_data);
	}
	
	//修改昵称
	function modify_nick_name($nickname){
		$nickname=trim($nickname);
		$this->I++;
		$body_str='<args><personal nickname="'.$nickname.'" /></args>';
		$L=strlen($body_str);
		$send_data=<<<eot
S fetion.com.cn SIP-C/2.0
F: {$this->login_keys['sid']}
I: {$this->I}
Q: 1 S
N: SetPersonalInfo
L: {$L}

{$body_str}
eot;
		return $this->SIPP($send_data);
	}
	
	//发送短信
	function send_sms($msg){
		$msg=strip_tags($msg);
		if(empty($msg)){
			return false;
		}
		else{
			$msg_len=strlen($msg);
			if(!$this->sock_handle){
				return false;
			}
			elseif($msg_len >180){//短信超过180字符
				$this->error('SMS too long.');
			}
			else{
				$this->I++;
				$send_data=<<<eot
M fetion.com.cn SIP-C/2.0
F: {$this->login_keys['sid']}
I: {$this->I}
Q: 7 M
T: {$this->login_keys['uri']}
N: SendSMS
C: text/plain
K: SaveHistory
L: {$msg_len}

{$msg}
eot;
				$ret=$this->SIPP($send_data);
				return true;
			}
		}
	}
	
	//SIPP会话
	function SIPP($data){
		if(empty($data)){
			return false;
		}
		else{
			fwrite($this->sock_handle,$data);
			$ret='';
			//while($tmp_read=socket_read($this->sock_handle,2)){
				$tmp_read=fread($this->sock_handle,20480);//这里设置一个超大值，来保证数据全部被读取
				$ret.=$tmp_read;
			//}
		}
			return $ret;
	}
	
	//解密压缩数据
	function decode_fetion_data($data){
		if(empty($data)){
			return '';
		}
		else{
			$dcode_data=base64_decode($data);
			file_put_contents('tmp.gz.txt',$dcode_data);
			$dcode_data=implode('',gzfile('tmp.gz.txt'));
			unlink('tmp.gz.txt');
			return $dcode_data;
		}
	}
	
	//计算response
	function calc_response($sid, $domain, $password, $nonce, $cnonce) {
		if(empty($sid) || empty($domain) || empty($password) || empty($nonce) || empty($cnonce))
		$this->error("error when calculating response digest");
		$key = md5("{$sid}:{$domain}:{$password}", true);
		$h1 = strtoupper(md5("{$key}:{$nonce}:{$cnonce}"));
		$h2 = strtoupper(md5("REGISTER:{$sid}"));
		$response = strtoupper(md5("{$h1}:{$nonce}:{$h2}"));
		return $response;
	}
	
	//随机产生cnonce
	function cnonce_maker() {
		return sprintf("%04X%04X%04X%04X%04X%04X%04X%04X",
		rand() & 0xFFFF, rand() & 0xFFFF, rand() & 0xFFFF,
		rand() & 0xFFFF, rand() & 0xFFFF, rand() & 0xFFFF,
		rand() & 0xFFFF, rand() & 0xFFFF);
	}
	
	function get_login_keys(){
		if(empty($this->login_received)){
			return false;
		}
		$data=explode("\r\n",$this->login_received);
		$this->login_keys['ssic']=str_replace(array('Set-Cookie: ','; path=/'),array('',''),$data[6]);
		$xml_data=array_pop($data);
		
		$xml_obj=new SimpleXMLElement($xml_data);
		$attr=$xml_obj->attributes();
		if($attr['status-code']!=200){
			$this->error("Login Failed!status-code:(".$attr['status-code'].")");
		}
		$user_attr=$xml_obj->user->attributes();
		$this->login_keys['uri']=$user_attr['uri'];
		$this->login_keys['user_status']=$user_attr['user-status'];
		if(preg_match('/sip\:([0-9]+)@/',$user_attr['uri'],$matchs)){
			$this->login_keys['sid']=$matchs[1];
		}
		else{
			$this->error('Get sid Failed.');
		}
	}
	
	
	function error($msg){
		exit("<b>VS_FETION ERROR:</b><br />".$msg);
	}
}
?>