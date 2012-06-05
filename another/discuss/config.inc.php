<?php 
 session_start();
 
 define('DB_USER', "root");
 define('DB_PASSWORD', "xampp");
 define('DB_HOST', "localhost");
 define('DB_NAME', "bbs");
 define('ADMIN_USER', "admin");
 define('EACH_PAGE', 4);

$invalidchars = array(
 "'",
 ";",
 "=",
 "\\",
 "/"
 );

 $badwords=array(
 "fuck","shit","wanker","cunt","gay",
  "nigger","bastard","tosser","dipshit",
  "homosexual","nigga","gaylord","retard",
  "asshole","slut","prick","cock","pussy",
 "bitch","wanking","bollocks"
 );

function CheckEmail($email)
{
	$check = "/^[0-9a-zA-Z_-]+@[0-9a-zA-Z_-]+(\.[0-9a-zA-Z_-]+){0,3}$/";
	if(preg_match($check, $email))
	{
		return true;
	}
	else{
		return false;
	}
}

function ExitMessage($message, $url='')
{
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	echo '<p class="message">';
	echo $message;
	echo '<br>';
	if($url){
		echo '<a href="'.$url.'">返回</a>';
	}else{
		echo '<a href="#" onClick="window.history.go(-1);">返回</a>';
	}
	echo '</p>';
	exit;
}


function ClearSpecialChars($str)
{
	global $invalidchars;
	$str=trim($str);
	$str=str_replace($invalidchars,"",$str);
	return $str;
}


function FilterBadWords($str)
{
	global $badwords;
	$replacements=array("[ensored]","***");
	for($i=0;$i<sizeof($badwords);$i++)
	{
		srand((double)microtime()*1000000);
		$rand_key=(rand()%sizeof($replacements));
		$str=eregi_replace($badwords[$i],$replacements[$rand_key],$str);
	}
	return $str;
}


function page($pagenum,$page,$url){
if($pagenum != 0){
if($page != 1){
			echo "<a href=".$url."&page=1 title='首页'>首页</font>&nbsp;</a>";
			echo "<a href=".$url."&page=".($page-1)." title='上一页'>上一页</font>&nbsp;</a>";
		}
		//中间页数显示开始
			$min = 0;
			$max = 0;
			if($pagenum > 9){
				if($page<4){
					$min = 1;
					$max = 9;
				}else{
					if(($pagenum-$page+3)<9){
						$min = ($pagenum - 8);
						$max = $pagenum;
					}else{
						$min = ($page - 3);
						$max = ($page+5);
					}
				}
			}else{
				$min = 1;
				$max = $pagenum;
			}
			if($max!=1){
			   for($i=$min;$i <= $max;$i++)
				{
					if($page==$i){
						echo "&nbsp;<font color=red>[".$i."]</font>&nbsp;";
					}
					else{
						echo "&nbsp;<a href=".$url."&page=".$i.">[".($i)."]</a>&nbsp;";
					}
				}
			}
			
		//中间页数显示结束

		if($page != $pagenum){
			echo "&nbsp;<a href=".$url."&page=".($page+1)." title='下一页'>下一页</a>";
			echo "&nbsp;<a href=".$url."&page=".$pagenum." title='尾页'>尾页</font></a>";
		}

  }
}


$db=mysql_pconnect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$db)
{
die('<b>数据库连接失败！</b>');
	exit;
}
mysql_query("set names 'utf8'");
mysql_select_db(DB_NAME);
?>
