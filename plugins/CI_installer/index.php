<?php
	$lang = trim($_POST['lang']);
	if(!empty($lang)){
		
		include_once 'language/'.$lang.'/'.$lang.'.php';
		
	}else{
		$languang = 'language/zh-CN/zh-CN.php';
		include_once $languang;
		
	}

	$CONFIGPATH = '/application/config/database.php';
	$SQLPATH	= 'sql/install.sql';
	$PATH = dirname(dirname(strtr(__FILE__,'\\','/')));

	$task 		= trim($_POST['task']);
	$from 		= trim($_POST['from']);
	
	//生成数据库配置文件

	$str_host 	= trim($_POST['dbhost']);
	$str_user 	= trim($_POST['dbuser']);
	$str_pwd	= trim($_POST['dbpwd']);
	$str_db 	= trim($_POST['dbname']);
	$str_type	= trim($_POST['dbtype']);
	
	$str_config = array(
	'str_host' 	=> '$db[\'default\'][\'hostname\'] =',
	'str_user'	=> '$db[\'default\'][\'username\'] =',
	'str_pwd' 	=> '$db[\'default\'][\'password\'] =',
	'str_db'	=> '$db[\'default\'][\'database\'] =',
	'str_type'	=> '$db[\'default\'][\'dbdriver\'] ='
	);
	$str_config_base = array(
	'1'		=>	'str_host',
	'2'		=>	'str_user',
	'3'		=>	'str_pwd',
	'4'		=>	'str_db',
	'5'		=>	'str_type'
	);
	$str_db_base = array(
	'1'		=>	$str_host,
	'2'		=>	$str_user,
	'3'		=>	$str_pwd,
	'4'		=>	$str_db,
	'5'		=>	$str_type
	);
	$new_array_use = array();

$host_host	= trim($_POST['host']);
$host_user	= trim($_POST['user']);
$host_pwd	= trim($_POST['pwd']);
$host_db	= trim($_POST['db']);


if(!empty($host_host) && !empty($host_user) && !empty($host_pwd)){
	if(!@mysql_connect($host_host,$host_user,$host_pwd)) {
		echo 'false';
		exit;
	}else{
		if(!@mysql_select_db($host_db)) {
			$create = FALSE;
		}else{
			$create = TRUE;
		}
		
			//读取安装sql
			$installSQL=$SQLPATH;
			$file_sql = openfile($installSQL);
			if(empty($file_sql)){
				
				echo 'empty'; exit;
			}
			
			//如果数据库不存在，创建数据库
			if(!@mysql_select_db($host_db)&&!$create){
				$database=addslashes($host_db);
				if(version_compare(mysql_get_server_info(), '4.1.0', '>=')){
					$DATABASESQL="DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
				}
				mysql_query("CREATE DATABASE `$database` ".$DATABASESQL);
				@mysql_select_db($database);
			}
			
				mysql_query("set names utf8"); 
				runquery($file_sql);
				
	}
}



	$dbconfigfile=$PATH.$CONFIGPATH;
	$flag = '';
//var_dump($_POST);	
if($task=='finish' && $from=='db'){
		
			
			$str_config_lenth = count($str_config);
			$new_array_config = array();
			
			$fp_config = fopen($dbconfigfile,'r'); //以二进制追加方式打开文件,没文件就创建 
			$new_file = '';
			while(!feof($fp_config)){
				$line = fgets($fp_config);
				for($intj = 1; $intj<=$str_config_lenth; $intj++){
					$baseb = $str_config_base[$intj];
					$new_base = $str_db_base[$intj];
					$occur = strpos($line, $str_config[$baseb]);
					
					if($occur !== false){ 
						$result = $line;
						$new_array_config[$baseb] = $str_config[$baseb]."'".$new_base."';".PHP_EOL;
						$line = str_replace($result, $new_array_config[$baseb], $line);
						
						break;
					}
					
				}
					$new_file .= $line;
			}
			
			$fp_new_config = fopen($dbconfigfile, wb);
			fwrite($fp_new_config, $new_file); //插入第一条记录 
			fclose($fp_config); //关闭文件 
			fclose($fp_new_config);
			
			
	}	


function openfile($filename,$method="rb"){
	if($handle=@fopen($filename,$method)){
		flock($handle,LOCK_SH);
		$filedata=@fread($handle,filesize($filename));
		fclose($handle);
	}
	return $filedata;
}
  function do_hash($string, $salt = NULL)
    {
    	
		if(null === $salt)
		{
		    $salt = substr(md5(uniqid(rand(), true)), 0, 9);
		}
		else
		{
			$salt = substr($salt, 0, 9);
		}
 		
    	return $salt . sha1($salt . $string);
    }

function runquery($sql) {
	$ret = array();
	$num = 0;
	foreach(explode(";\r", trim($sql)) as $query) {
		
		$queries = explode("\n", trim($query));
		foreach($queries as $query) {
			$ret[$num] .= ($query[0] == '-'&&$query[1] == '-') ? '' : $query;
		}
		$num++;
	}
	
	unset($sql);
	foreach($ret as $query) {
		$query = trim($query);
		if($query) {
			if(substr($query, 0, 12) == 'CREATE TABLE') {
				preg_match("|CREATE TABLE `(.*)` \(|i",$query, $name);
				if(mysql_query(($query))){
				echo 'succeed';flush();
				}else{
				echo 'failed';flush();
				exit;
				}			
			}else{
				if(mysql_query(($query))){
				echo 'succeed';flush();
				}else{
				echo 'failed';flush();
				exit;
				}
			}
		}
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn" lang="zh-cn" dir="ltr" > 
	<head> 
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  <meta name="robots" content="index, follow" /> 
  <meta name="description" content="" /> 
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" /> 
  <title><?php  echo $ML['APPTITLE'];?></title> 
  
 
		<link href="template/css/template.css" rel="stylesheet" type="text/css" /> 
		
 		<script type="text/javascript" src="template/js/jquery-1.5.min.js"></script> 
 		<script type="text/javascript" src="language/<?php echo $lang;?>/<?php echo $lang;?>.js"></script> 
  		<script type="text/javascript" src="template/js/installation.js"></script> 

  		
	</head> 
	<body> 
		<div id="header1"> 
			<div id="header2"> 
				<div id="header3"> 
					<div id="version"><?php echo $ML['VERSION'];?></div> 
					<span><?php echo $ML['APPINSTALL'];?> </span> 
				</div> 
			</div> 
		</div> 
		<div id="content-box"> 
			<div id="content-pad"> 
	<div id="stepbar">

		<div class="t">

		<div class="t">

			<div class="t"></div>

		</div>

	</div>
	

	<div class="m">

			<h1><?php echo $ML['STEPS'];?></h1>
			<?php if ($task=='lang' || $task=='')$class_task="step-on";else $class_task="step-off"?>
			<div id="t_lang" class="<?php echo $class_task;?>" >

				1 : <?php echo $ML['LANG'];?>

			</div>

			<?php if ($task=='license')$class_task="step-on";else $class_task="step-off"?>
			<div id="t_license" class="<?php echo $class_task;?>" >

				2 : <?php echo $ML['LICENSE'];?>

			</div>

			<?php if ($task=='db')$class_task="step-on";else $class_task="step-off"?>
			<div id="t_db"  class="<?php echo $class_task;?>">

				3 : <?php echo $ML['DATABASE'];?>

			</div>

			
			<?php if ($task=='finish')$class_task="step-on";else $class_task="step-off"?>
			<div id="t_finish"  class="<?php echo $class_task;?>">

				4 : <?php echo $ML['FINISH'];?>

			</div>

		<div class="box"></div>

  	</div>

	<div class="b">

		<div class="b">

			<div class="b"></div>

		</div>

	</div>

  </div>

 
 
 
	<div id="warning"> 
	
		<div id="con_warning">
				
		</div>
			
		<noscript> 
			<div id="javascript-warning">
				<?php echo $ML['JAVASCRIPTWARNING']?>
			</div>
		</noscript> 
	</div> 
 

<script type="text/javascript" language="javascript">
function validateForm( frm, task, from, lang ) {
	if(from==='db' && task==='finish'){
		val = validate(from,task,lang);
	}else{
		val = true;
		}
	if(val!==false){
		
		submitForm( frm, task, from );
		}
	
}

</script>
<form action="index.php" method="post" name="adminForm" id="adminForm">

<?php if ($task=='lang' || $task=='')$display="";else $display="none"?>
<div id="task_lang" style="display:<?php echo $display;?>">
<div id="right">

	<div id="rightpad">

		<div id="step">

			<div class="t">

				<div class="t">

					<div class="t"></div>

				</div>

			</div>

			<div class="m">

 
				<div class="far-right">

					

							<div class="button1-left"><div class="next"><a onclick="validateForm('adminForm','license','lang');"  alt="<?php echo $ML['NEXT'];?>"><?php echo $ML['NEXT'];?></a>
							
							</div></div>

						

				</div>

				<span class="step"><?php echo $ML['CHOOSELANG'];?></span>



			</div>

			<div class="b">

				<div class="b">

					<div class="b"></div>

				</div>

			</div>

		</div>



		<div id="installer">

			<div class="t">

				<div class="t">

					<div class="t"></div>

				</div>

			</div>

			<div class="m">



				<h2><?php echo $ML['CHOOSELANG'];?></h2>

				<div class="install-text">

					<?php echo $ML['CHOOSELANGPLZ'];?>

				</div>

				<div class="install-body">

    			<div class="t">

            <div class="t">

              <div class="t"></div>

            </div>

          </div>

          <div class="m">

						<fieldset>

							<select name="lang" class="inputbox" size="10">

							
								<?php if($lang==='en-US'){
											$selected = "selected=\"selected\""; 
											$selec = "";
										}else{
											$selected = "";
											$selec = "selected=\"selected\""; 
										}
								?>
								<option value="en-US" <?php echo $selected;?> >en-US - English (US)</option>


								<option value="zh-CN"  <?php echo $selec;?>>zh-CN - 简体中文</option>

							

								

							

							</select>

						</fieldset>

					</div>

          <div class="b">

            <div class="b">

              <div class="b"></div>

            </div>

          </div>

					<div class="clr"></div>

				</div>

				<div class="clr"></div>

			</div>

      <div class="b">

        <div class="b">

          <div class="b"></div>

        </div>

      </div>

		</div>

	</div>

</div>

<div class="clr"></div>
</div>
<?php if ($task=='license')$display="";else $display="none"?>
<div id="task_license"  style="display: <?php echo $display;?>">

<div id="right">
	<div id="rightpad">
		<div id="step">
			<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>

		</div>
		<div class="m">
				<div class="far-right">
					
							<div class="button1-right"><div class="prev"><a onclick="validateForm('adminForm','lang','license');" alt="<?php echo $ML['PREVIOUS'];?>"><?php echo $ML['PREVIOUS'];?></a></div></div>
							<div class="button1-left"><div class="next"><a onclick="validateForm('adminForm','db','license');" alt="<?php echo $ML['NEXT'];?>"><?php echo $ML['NEXT'];?></a></div></div>
						
				</div>
				<span class="step"><?php echo $ML['LICENSE'];?></span>

			</div>
		<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
		</div>
	</div>

	<div id="installer">

			<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>
		</div>
		<div class="m">

				<h2><?php echo $ML['GPL'];?>:</h2>
				<iframe src="other/gpl.html" class="license" frameborder="0" marginwidth="25" scrolling="auto"></iframe>

				<div class="clr"></div>
		</div>
		<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
		</div>
		</div>

	</div>
</div>

<div class="clr"></div>
</div>
<?php if ($task=='db')$display="";else $display="none"?>
<div id="task_db" style="display: <?php echo $display;?>">
<div id="right">
	<div id="rightpad">
		<div id="step">
			<div class="t">
		<div class="t">
			<div class="t"></div>

		</div>
		</div>
		<div class="m">
				<div class="far-right">
					
							<div class="button1-right"><div class="prev"><a onclick="validateForm('adminForm','license','db');" alt="<?php echo $ML['PREVIOUS'];?>"><?php echo $ML['PREVIOUS'];?></a></div></div>
							<div class="button1-left"><div class="next"><a onclick="validateForm('adminForm','finish','db');" alt="<?php echo $ML['NEXT'];?>"><?php echo $ML['NEXT'];?></a></div></div>
						
				</div>
				<span class="step"><?php echo $ML["DATABASECONF"];?></span>

			</div>
		<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
		</div>
	</div>

	<div id="installer">

			<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>
		</div>
		<div class="m">

				<h2><?php echo $ML['CONNECTION'];?></h2>
				<div class="install-text">

					<p><?php echo $ML['INSTALLIT'];?></p>	
					<p><?php echo $ML['URHABIT'];?>  </p>
					
				<h2><?php echo $ML['BASICSETTING'];?></h2>
					<p><?php echo $ML['DBTYPEINTRO'];?></p>	
					<p><?php echo $ML['DBHOSTINTRO'];?></p>
					<p><?php echo $ML['DBACCOUNTINTRO'];?></p>

				</div>
				<div class="install-body">
				<div class="t">
			<div class="t">
				<div class="t"></div>
			</div>
			</div>
			<div class="m">
							<h3 class="title-smenu" title="Basic"><?php echo $ML['BASICSETTING'];?></h3>

							<div class="section-smenu">
								<table class="content2">
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="2">

										<label for="vars_dbtype">
											<?php echo $ML['DBTYPE'];?>
										</label>
										<br />
										<select id="vars_dbtype" name="dbtype" class="inputbox" size="1">
										<option value=""><?php echo $ML['DBCHOOSETYPE'];?></option>
										
											<option value="mysql" selected="true">mysql</option>
										
											<option value="mysqli" >mysqli</option>

										
										</select>
									</td>
									<td>
										<em>
										<?php echo $ML['DEFAULT'];?> <strong>MySQL</strong>
										</em>
									</td>
								</tr>

								<tr>
									<td colspan="2">
										<label for="vars_dbhostname">
											<span id="dbhostnamemsg"><?php echo $ML['DBHOST'];?></span>
										</label>
										<br />
										<input id="vars_dbhostname" class="inputbox validate required none dbhostnamemsg" type="text" name="dbhost" value="" />
									</td>

									<td>
										<em>
										<?php echo $ML['DEFAULT'];?><strong>localhost</strong> <?php echo $ML['DEFAULT'];?>
										</em>
									</td>
								</tr>
								<tr>
									<td colspan="2">

										<label for="vars_dbusername">
											<span id="dbusernamemsg"><?php echo $ML['DBUSER'];?></span>
										</label>
										<br />
										<input id="vars_dbusername" class="inputbox validate required none dbusernamemsg" type="text" name="dbuser" value="" />
									</td>
									<td>
										<em>

										<?php echo $ML['DBUSERDEF'];?> <strong>root</strong>,<?php echo $ML['DBUSERDESC'];?>
										</em>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<label for="vars_dbpassword">
											<?php echo $ML['DBPASSWORD'];?>
										</label>

										<br />
										<input id="vars_dbpassword" class="inputbox" type="password" name="dbpwd" value="" />
									</td>
									<td>
										<em>
										<?php echo $ML['DBPASSWORDDESC'];?>
										</em>
									</td>
								</tr>

								<tr>
									<td colspan="2">
										<label for="vars_dbname">
											<span id="dbnamemsg"><?php echo $ML['DBNAME'];?></span>
										</label>
										<br />
										<input id="vars_dbname" class="inputbox validate required none dbnamemsg" type="text" name="dbname" value="" />
									</td>

									<td>
										<em>
										<?php echo $ML['DBNAMEDESC'];?>
										</em>
									</td>
								</tr>
								</table>
								<br /><br />
							</div>

							
							
						<div class="clr"></div>
			</div>

			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
					<div class="clr"></div>
				</div>
		<div class="clr"></div>
		</div>

		<div class="b">
			<div class="b">
				<div class="b"></div>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="clr"></div>
</div>


<?php if ($task=='finish')$display="";else $display="none"?>
<div id="task_finish" style="display: <?php echo $display;?>">
<div id="right">
	<div id="rightpad">
	<div id="step">
			<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>

		</div>
		<div class="m">
				<div class="far-right">
					
							<div class="button1-left"><div class="site"><a onclick="window.location.href='../';" alt="Site"><?php echo $ML['SITE']?></a></div></div>
							<div class="button1-left"><div class="admin"><a onclick="window.location.href='../admin';" alt="Admin"><?php echo $ML['ADMIN']?></a></div></div>
						
				</div>
				<span class="step"><?php echo $ML['FINISH'];?></span>

			</div>
		<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
		</div>
	</div>

	<div id="installer">

			<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>
		</div>
		<div class="m">

				<h2><?php echo $ML['CONGRAT'];?></h2>
				<div class="install-text">

					<p><?php echo $ML['GOTOSITE'];?></p>
					<p><?php echo $ML['GOTOADMIN'];?></p>
					
					
				</div>
		<div class="install-body">
				<div class="t">
			<div class="t">
				<div class="t"></div>
			</div>

			</div>
			<div class="m">
						<fieldset>
							<table class="final-table">
								<tr>
								<td class="error" align="center">
									<?php echo $ML['REMEMBER'];?><br/>
									<?php echo $ML['DELETEINSTALL'];?><br />
									<br />
									<!--  （建议开发）-->
								</td>

								</tr>
								
								<tr>
								<td>&nbsp;</td>
								</tr>
								<tr>
								<td align="center" class="notice">

								
								</td>
								</tr>
								<tr>
								<td>&nbsp;</td>
								</tr>

								
							</table>
						</fieldset>
					</div>
			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
					<div class="clr"></div>

				</div>
				<div class="clr"></div>
		</div>
		<div class="b">
			<div class="b">
				<div class="b"></div>
			</div>
		</div>
		</div>

	</div>
</div>

<div class="clr"></div>

</div>
<input type="hidden" id="task" name="task" value="" />
<input type="hidden" id="from" name="from" value="" />
<input type="hidden" id="vars" name="vars" value="" />

</form>



 
			</div> 
		</div> 
		<div id="footer1"> 
			<div id="footer2"> 
				<div id="footer3"></div> 
			</div> 
		</div> 
		<div id="copyright"><p>&copy;2007-2010 <a href="#">CI Project</a>, All Rights Reserved. 
		Powered by <a title="" href="#">CI Project 0.x.x</a></p></div> 
	</body> 
</html> 
