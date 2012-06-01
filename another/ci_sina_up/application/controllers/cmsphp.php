<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmsphp extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper ( array ('form', 'url', 'cookie','email') );
	}

	public function index(){
		$data['base_url']=$this->config->item('base_url');
		$this->load->view('cmsphp',$data);
	}

	//上传图片
	public function saveavater(){
		$base_url=$this->config->item('base_url');
		$user_id  = rand(1000,9999);	//用户ID可以从Session里获取
		$rs = array();
		switch($_GET['action']){
			//上传临时图片
			case 'uploadtmp':
				$file = 'uploadtmp.jpg';
				@move_uploaded_file($_FILES['Filedata']['tmp_name'], $file);
				$rs['status'] = 1;
				$rs['url'] =$base_url. '/uploads/' . $file;
				//file_put_contents("D:\\sina1.txt",$rs['url'],FILE_APPEND);
				break;
				//上传切头像
			case 'uploadavatar':
				$input = file_get_contents('php://input');
				$data = explode('--------------------', $input);
				//设置上传目录
				$upload_dir = 'user_avatar';
				$dir = UploadPath($upload_dir,$user_id);
				//小图
				$file_name_s=$dir.'/'.$user_id.'_s.jpg';
				//大图
				$file_name=$dir.'/'.$user_id.'.jpg';

				//生成你要的文件路径和名字开始
				@file_put_contents($file_name_s, $data[0]);
				@file_put_contents($file_name, $data[1]);
				//生成你要的文件路径和名字结束
				//写到数据库
				$pic_path = $upload_dir.'/'.date("Y",time()).'/'.date("m",time()).'/'.$user_id.'/'.$user_id.'.jpg';
				//写入成功了$rs['status'] = 1;
				//演示用
				$this->session->set_userdata('pic_path', $pic_path);
				//返回状态
				$rs['status'] = 1;

				break;
			default:
				$rs['status'] = -1;
		}

		print json_encode($rs);
	}
	//预览
	public function show(){
		$base_url=$this->config->item('base_url');
		$pic_path= $this->session->userdata('pic_path');
		$pic_path_s=get_thumb_pic($pic_path,s);
		$image_url  = $base_url.'uploads/'.$pic_path;
		$image_url_s= $base_url.'uploads/'.$pic_path_s;
		echo $image_url_s.'#'.$image_url;
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */