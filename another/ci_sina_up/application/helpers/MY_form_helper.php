<?php
//上传文件
function UploadPath($dir,$user_id='') {
	//判断创建新的目录
	define ( 'ROOT_PATH', str_replace ( 'application/helpers/MY_form_helper.php', '', str_replace ( '\\', '/', __FILE__ ) ) );
	$dir = ROOT_PATH . 'uploads/' . $dir . '/';
	$dir1 = date ( "Y", time () );
	$dir2 = date ( "m", time () );
	if (! file_exists ( $dir . $dir1 )) {
		@mkdir ( $dir . $dir1 . "/", 0777 );
	}
	if (! file_exists ( $dir . $dir1 . "/" . $dir2 )) {
		@mkdir ( $dir . $dir1 . "/" . $dir2 . "/", 0777 );
	}
	if($user_id){
		$dir3=$user_id;
		if (! file_exists ( $dir . $dir1 . "/" . $dir2 . "/" . $dir3 )) {
			@mkdir ( $dir . $dir1 . "/" . $dir2 . "/". $dir3 . "/", 0777 );
		}
		return $dir . '' . $dir1 . "/" . $dir2. "/" . $dir3;
	}else{
		//echo $dir.''.$dir1."/".$dir2; exit;
		return $dir . '' . $dir1 . "/" . $dir2;
	}

}

//缩略图路径调用
function get_thumb_pic($pic_id,$thumb) {
	$pic_id_1=explode(".",$pic_id);
	if($pic_id_1[0]){
		$pic_id_new=$pic_id_1[0].'_'.$thumb.'.'.$pic_id_1[1];
	}else{
		$pic_id_new = 'no_pic_50X50.jpg';
	}
	return $pic_id_new;
}