<?php

	/**
	 * 下载文件载类
	 *
	 * @author：黄乐
	 * @version：1.0
	 * @lastupdate：2010-8-11
	 *
	 */

/**
 +----------------------------------------------------------------------
    使用实例：
 +----------------------------------------------------------------------
	$download = new download();
	if(!$download->download_files($_GET['download_filename'])){
		echo $download->Errors;
	}
 +----------------------------------------------------------------------
    上述仅为逻辑演示,本类可灵活使用
 +----------------------------------------------------------------------
 */

	class download{

		/*
		 * 存放下载文件的文件夹
		 * @private integer
		 */
		private $upload_file_folder = 'upload/';

		/**
		 * 错误信息
		 * @private String
		 */
		public $Errors;

		/**
		 * 下载文件
		 *
		 * @access public
		 * @parameter string $download_filename  下载文件的名称
		 * @return void
		 */
		public function download_files($download_filename){
			//不存在指定的$_GET[]值时退出下载
			if(empty($download_filename)){
				$this->Errors = '非法操作！';
				return false;
			}
			$filename = $download_filename; //获取下载文件的名称
			//检测要下载的文件是否存在
			if(!file_exists($this->upload_file_folder . $filename)){
				$this->Errors = '很抱歉，您需要下载的文件不存在！';
				return false;
			}
			$file_size = filesize($this->upload_file_folder . $filename); //获取文件的大小
			Header("Content-type: application/octet-stream"); //设置要下载的文件类型
			Header("Accept-Ranges: bytes"); //支持断点下载
			Header("Accept-Length: ".filesize($file_size)); //设置下载的文件大小
			Header("Content-Disposition: attachment; filename=" . $filename); //设置要下载文件的文件名
			$fp = fopen($this->upload_file_folder . $filename,"r");
			$reading_byte_size = 1024; //每次循环读取字节的大小
		    $current_position = 0; //当前文件指针的位置
		    /*提示：下载文件太大，需要循环输出数据*/
		    while(!feof($fp) && $file_size - $current_position > $reading_byte_size)
		    {
		        $output = fread($fp,$reading_byte_size);
		        echo $output;
		        $current_position += $reading_byte_size;
		    }
		    $output = fread($fp,$file_size - $current_position);
		    echo $output;
		    fclose($fp);
		    return true;
		}
	}

?>







