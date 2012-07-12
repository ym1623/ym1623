<?php

	/**
	 * 数据库备份程序
	 *
	 * @author：黄乐
	 * @version：1.0
	 * @lastupdate：2010-7-19
	 *
	 */

	class msg{

		/**
		 * 提示信息
		 */
		public function show_msg($msg = '', $url = '', $addurl = ''){
			$m = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
			<title>powered by 黄乐</title>
			<style type="text/css">
			body{ margin:0px; padding:0px;}
			table{ border: 1px solid #EDEFF3;border-collapse:collapse; margin-top:200px;}
			td{ font:normal 12px/17px Arial;padding:7px;}
			a{ color:#000;}
			#r{ background:#F2F2F2; border:1px solid #666; padding:3px 7px 3px 7px; text-decoration:none;}
			#back{ background:#ffb62b; border:1px solid #666; padding:3px 7px 3px 7px; text-decoration:none; margin-top:10px; display:block; width:80px; color:white; font-weight:bold }
			</style>
			</head>

			<body>
			  <table width="20%" align="center">
			        <tbody>
			            <tr><td style="font-weight:bold; background:#DAEDF5">提示信息</td></tr>
			            <tr>
			            	<td style="padding:30px;"><b>
			            '.$msg.'
					        </b>&nbsp;<a id="r" href="'.$addurl.'">确定</a><br /><a id="back" href="'.$url.'">返回继续操作</a></td>
			            </tr>
			        </tbody>
			  </table>
			</body>
			</html>';
			echo $m;
			exit();
		}

		/**
		 * 取得文件名
		 */
		public function get_fn($fn){
			if(is_array($fn)){
				foreach($fn as $val){
					$filename .= '<a href="data/' . $val . '">' . $val . '</a>' . "<br />";
				}
				return $filename;
			}else{
				return $filename = '<a href="data/' . $fn . '">' . $fn . '</a>';
			}
		}
	}

?>


