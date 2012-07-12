<?php

	/**
	 * 数据库备份程序
	 *
	 * @author：黄乐
	 * @version：1.0
	 * @lastupdate：2010-7-18
	 *
	 */


// +-----------------------------------------------------------
// | 备份原理：
// +-----------------------------------------------------------
// |默认备份文件大于2048K,则分卷备份
// |该类可以备份数据和导入数据
// |一个备份文件有多个分卷,只需任选一个导入,程序会自动导入其他分卷
// +-----------------------------------------------------------

/**
 +-----------------------------------------------------------------
 *  使用实例：
 +-----------------------------------------------------------------
 *  $dbbackup = new dbbackup("localhost", "root", "", "数据库名");
 +-----------------------------------------------------------------
 *  备份数据：
 *  $tbs = $dbbackup->get_tb()						获取数据库表集合
 *  $data = $dbbackup->get_backupdata($tbs); 		获取备份数据
 *  $dbbackup->export($data)						导入数据
 +-----------------------------------------------------------------
 *  导入数据：
 *  $bakfile = $dbbackup->get_backup();				获取备份文件
 *  $dbbackup->import(文件名)						导入数据
 +-----------------------------------------------------------------
 *  删除备份：
 *	$dbbackup->delfn(文件名)
 +-----------------------------------------------------------------
 *  上述仅为逻辑演示,本类可灵活使用
 +-----------------------------------------------------------------
 */


	class dbbackup{


		/**
		 * 数据库主机
		 *
		 * @private string
		 */
			private $db_host;

		/**
		 * 数据库用户名
		 *
		 * @private string
		 */
			private $db_user;

		/**
		 * 数据库密码
		 *
		 * @private string
		 */
			private $db_pwd;

		/**
		 * 数据库名
		 *
		 * @private string
		 */
			private $db_database;

		/**
		 * 数据库编码,GBK,UTF8,gb2312
		 *
		 * @private string
		 */
			private $coding;

		/**
		 * 数据库连接标识
		 *
		 * @private string
		 */
			private $conn;

		/**
		 * 文件夹路径（存放备份数据）
		 *
		 * @private string
		 */
			private $data_dir = 'data/';

		/**
		 * 分卷长度（单位KB）
		 *
		 * @private string
		 */
			private $part = 2048;

		/**
		 * 备份文件名
		 *
		 * @private string | array
		 */
			public $bakfn;


		/**
		 * 构造函数
		 *
		 * @access public
		 * @parameter string $db_host 		数据库主机
		 * @parameter string $db_user 		数据库用户名
		 * @parameter string $db_pwd  		数据库密码
		 * @parameter string $db_database   数据库名
		 * @parameter string $coding  		编码
		 * @return void
		 */
		public function __construct($db_host, $db_user, $db_pwd, $db_database, $coding = 'gb2312'){
			$this->init();
			$this->db_host = $db_host;
			$this->db_user = $db_user;
			$this->db_pwd =  $db_pwd;
			$this->db_database = $db_database;
			$this->coding = $coding;
			$this->connect();
			$this->part = $this->part * 1024; //设置分卷长度,单位为KB
			$this->cre_dir();  				  //创建文件夹
		}

		/**
		 * 初始化程序
		 *
		 * @access private
		 * @return void
		 */
		private function init(){
			set_time_limit(0);					//程序执行不限时
			error_reporting(E_ERROR | E_PARSE); //报错级别
		}

		/**
		 * 链接数据库
		 *
		 * @access private
		 * @return void
		 */
		private function connect(){
			$this->conn = @mysql_connect($this->db_host,$this->db_user,$this->db_pwd);
			if(!$this->conn){
				echo '<font color="red">错误提示：链接数据库失败！</font>';
				exit();
			}

			if(!@mysql_select_db($this->db_database, $this->conn)){
				echo '<font color="red">错误提示：打开数据库失败！</font>';
				exit();
			}

			if(!@mysql_query("SET NAMES $this->coding")){
				echo '错误提示：设置编码失败！';
			}
		}

		/**
		 * 创建文件夹
		 *
		 * @access private
		 * @return void
		 */
		private function cre_dir(){
			//文件夹不存在则创建
			if(!is_dir($this->data_dir)){
				mkdir($this->data_dir, 0777);
			}
		}

		/**
		 * 	获取数据库表集合
		 *
		 * @access public
		 * @return Array
		 */
		public function get_tb(){
			//查询表集合
			$tq = mysql_list_tables($this->db_database);
			while($tr = mysql_fetch_row($tq)){
				$arrtb[] = $tr[0];
			}
			return $arrtb; //返回表集合
		}

		/**
		 * 获取备份数据
		 *
		 * @access public
		 * @parameter string $db_host	表集合
		 * @return String or Array
		 */
		public function get_backupdata($arrtb){
			$backupdata = ''; //存储备份数据
			//获取备份数据
			foreach($arrtb as $tb){
				//获取表结构
				$query = mysql_query("SHOW CREATE TABLE $tb");
				$row = mysql_fetch_row($query);
				$backupdata .= "DROP TABLE IF EXISTS $tb;\n" . $row[1] . ";\n\n";
				//获取表数据
				$query = mysql_query("select * from $tb");
				$numfields = mysql_num_fields($query); //统计字段数
				//构造INSERT语句
				while($row = mysql_fetch_row($query)){
					$comma = ""; //存储逗号
					$backupdata .= "INSERT INTO $tb VALUES (";
					for($i=0; $i<$numfields; $i++){
											  	  //转义SQL语句中的特殊字符
						$backupdata .= $comma . "'" . mysql_escape_string($row[$i]) . "'";
						$comma = ",";
					}
					$backupdata .= ");\n";
					//备份数据大于 part值 则存入数组,分卷备份
					if(strlen($backupdata) > $this->part){
						$arrbackupdata[] = $backupdata;
						$backupdata = ''; //清空之前的sql
					}
				}
				$backupdata .= "\n"; // \n隔开每张表中的数据
			}
			//+
			//| 提示：
			//| 根据是否需要分卷备份,返回不同值
			//+
			if(is_array($arrbackupdata)){
				//将剩余数据加入数组
				array_push($arrbackupdata, $backupdata);
				return $arrbackupdata; //返回数组备份数据
			}
			return $backupdata; //返回备份数据
		}

		/**
		 * 将备份数据写入文件
		 *
		 * @access private
		 * @parameter string $data	数据
		 * @return Boolean
		 */
		private function wri_file($data){
			//数据为数组则分卷备份
			if(is_array($data)){
				$i = 1;
				foreach($data as $val){
					//写入数据
					$filename = $this->data_dir . $this->db_database . mktime() . "_part{$i}.sql"; //文件名
					if(!$fp = @fopen($filename, "w+")){ echo "在打开文件时遇到错误,备份失败!"; return false;}
					if(!@fwrite($fp, $val)){
						echo "在写入信息时遇到错误,备份失败!"; fclose($fp); //需关闭文件才能删除
						unlink($filename); //删除文件
						return false;}
					$this->bakfn[] = $this->db_database . mktime() . "_part{$i}.sql"; //备份成功则返回文件名数组
					$i++;
				}
			}else{ //单独备份
				$filename = $this->data_dir . $this->db_database . mktime() . ".sql";
				if(!$fp = @fopen($filename, "w+")){ echo "在打开文件时遇到错误,备份失败!"; return false;}
				if(!@fwrite($fp, $data)){
					echo "在写入信息时遇到错误,备份失败!"; fclose($fp);
					unlink($filename);
					return false;}
				$this->bakfn = $this->db_database . mktime() . ".sql"; //备份成功则返回文件名
			}
			fclose($fp);
			return true;
		}

		/**
		 * 备份数据
		 *
		 * @access public
		 * @parameter string $data	数据
		 * @return void
		 */
		public function export($data){
			return $this->wri_file($data); //写入数据
		}

		//+-------------
		//+-------------

		/**
		 * 获取所有备份文件
		 *
		 * @access public
		 * @return Array
		 */
		public function get_backup(){
			$backup = scandir($this->data_dir); //查询所有的备份文件
			for($i=0; $i<count($backup); $i++){
				if($backup[$i] != "." && $backup[$i] != ".."){
					$arrbackup[] = $backup[$i];
				}
			}
			return $arrbackup; //返回备份文件集合
		}

		/**
		 * 导入数据
		 * （一个备份文件有多个分卷，只需任选一个备份文件导入,程序会自动导入其他分卷 ）
		 *
		 * @access public
		 * @parameter string|array $filename	备份文件名
		 * @return Boolean
		 */
		public function import($filename){
			//传入文件名为分卷文件之一,则查找出所有分卷文件
			$Boolean = preg_match("/_part/",$filename); 		   //判断文件是否为分卷文件
			if($Boolean){
				$fn = explode("_part", $filename);				   //取分卷文件名
				$backup = scandir($this->data_dir);	    		   //查询所有的备份文件
				for($i=0; $i<count($backup); $i++){
					$part = preg_match("/{$fn[0]}/", $backup[$i]); //取得所有匹配的分卷文件
					if($part){
						$filenames[] = $backup[$i];
					}
				}
			}
			//存在文件数组则获取分卷数据,否则获取单个文件数据
			if(is_array($filenames)){
				foreach($filenames as $fn){
					$data .= file_get_contents($this->data_dir . $fn);  //获取数据
				}
			}else{
				$data = file_get_contents($this->data_dir . $filename);
			}
			//切割数据
			$data = str_replace("\r", "\n", $data);
			$regular = "/;\n/";
			$data = preg_split($regular,trim($data));
			//循环导入数据
			foreach($data as $val){
				mysql_query($val) or die('导入数据失败！' . mysql_error());
			}
			return true;
		}

		//+-------------
		//+-------------

		/**
		 * 删除备份文件
		 *
		 * @access public
		 * @parameter string $delfn	备份文件名
		 * @return void
		 */
		public function del($delfn){
			//删除多个备份文件
			if(is_array($delfn)){
				foreach($delfn as $fn){
					if(!unlink($this->data_dir.$fn)){ return false;}
				}
				return true;
			}
			//删除单个备份文件
			return unlink($this->data_dir.$delfn);
		}

	}

?>





