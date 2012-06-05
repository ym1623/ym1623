<?php
!function_exists('adminmsg') && exit('Forbidden');

@set_time_limit(0);
if(!$a_type)$a_type='bakout';
$basename="$admin_file?adminjob=bakup&a_type=$a_type";

if($a_type=='bakout'){
	if(empty($action)){
		require_once(R_P."admin/table.php");
		include PrintEot('bakup');exit;
	} else{
		
		$bak="#\n# qhdinfo bakfile\n#Time: ".get_date($timestamp,'Y-m-d H:i')."\n# Type: \n# qhdinfo: http://www.qhdinfo.com\n# --------------------------------------------------------\n\n\n";
		$db->query("SET SQL_QUOTE_SHOW_CREATE = 0");

		$start = intval($start);
		!$tabledb && !$tablesel && adminmsg('operate_error');
		!$tabledb && $tabledb=explode("|",$tablesel);
		!$step && $sizelimit/=2;
		$bakupdata=bakupdata($tabledb,$start);
		if(!$step){
			!$tabledb && adminmsg('operate_error');
			$tablesel=implode("|",$tabledb);
			$step=1;
			$start=0;
			$pre='pw_'.get_date($timestamp,'md').'_'.num_rand(10).'_';
			$bakuptable=bakuptable($tabledb);
		}
		$f_num=ceil($step/2);
		$filename=$pre.$f_num.'.sql';
		$step++;
		$writedata=$bakuptable ? $bakuptable.$bakupdata : $bakupdata;

		$t_name=$tabledb[$tableid-1];  $c_n=$startfrom;
		if($stop==1){
			$files=$step-1;

			trim($writedata) && writeover(D_P.'data/'.$filename,$bak.$writedata,'ab');
			adminmsg('bakup_step',"$basename&action=$action&start=$startfrom&tableid=$tableid&sizelimit=$sizelimit&step=$step&pre=$pre&tablesel=$tablesel&rows=$rows",1);
		} else{
			trim($writedata) && writeover(D_P.'data/'.$filename,$bak.$writedata,'ab');
			if($step>1){
				for($i=1;$i<=$f_num;$i++){
					$bakfile.='<a href="data/'.$pre.$i.'.sql">'.$pre.$i.'.sql</a><br>';
				}
			}
			adminmsg('bakup_out');
		}
	}
} elseif($a_type=='bakin'){

	if(empty($action)){
		$filedb=array();
		$handle=opendir(D_P.'data');
		while($file = readdir($handle)){
			if((!$PW || eregi("^pw_",$file) || eregi("^$PW",$file)) && eregi("\.sql$",$file)){
				$strlen=eregi("^$PW",$file) ? 16 + strlen($PW) : 19;
				$fp=fopen(D_P."data/$file",'rb');
				$bakinfo=fread($fp,200);
				fclose($fp);
				$detail=explode("\n",$bakinfo);
				$bk['name']=$file;
				$bk['version']=substr($detail[2],10);
				$bk['time']=substr($detail[3],8);
				$bk['pre']=substr($file,0,$strlen);
				$bk['num']=substr($file,$strlen,strrpos($file,'.')-$strlen);
				$filedb[]=$bk;
			}
		}
		include PrintEot('bakup');exit;
	} elseif($action=='bakincheck'){
		include PrintEot('bakup');exit;
	} elseif($action=='bakin'){
		if(!$count){
			$count=0;
			$handle=opendir(D_P.'data');
			while($file = readdir($handle)){
				if(eregi("^$pre",$file) && eregi("\.sql$",$file)){
					$count++;
				}
			}
		}
		!$step && $step=1;
		/*
		$sql=readover(D_P.'data/'.$pre.$step.'.sql');
		bakindata($sql);
		*/
		bakindata(D_P.'data/'.$pre.$step.'.sql');
		$i=$step;
		$step++;
		if($count > 1 && $step <= $count){
			adminmsg('bakup_in',"$basename&action=bakin&step=$step&count=$count&pre=$pre",1);
		}
		 
		adminmsg('operate_success');
	} elseif($action=='del'){
		if(!$delfile)adminmsg('operate_error');
		foreach($delfile as $key => $value){
			if(eregi("\.sql$",$value)){
				P_unlink(D_P."data/$value");
			}
		}
		adminmsg('operate_success');
	}
}
function num_rand($lenth){
	mt_srand((double)microtime() * 1000000);
	for($i=0;$i<$lenth;$i++){
		$randval.= mt_rand(0,9);
	}
	$randval=substr(md5($randval),mt_rand(0,32-$lenth),$lenth);
	return $randval;
}

function bakupdata($tabledb,$start=0){
	global $db,$sizelimit,$tableid,$startfrom,$stop,$rows;
	$tableid=$tableid?$tableid-1:0;
	$stop=0;
	$t_count=count($tabledb);
	for($i=$tableid;$i<$t_count;$i++){
	    if(!$rows){
		$ts=$db->get_one("SHOW TABLE STATUS LIKE '$tabledb[$i]'");
		$rows=$ts['Rows'];
        }    
		$limitadd="LIMIT $start,100000";
		$query = $db->query("SELECT * FROM $tabledb[$i] $limitadd");
		$num_F = mysql_num_fields($query);

		while ($datadb = mysql_fetch_row($query)){
			$start++;
			$bakupdata .= "INSERT INTO $tabledb[$i] VALUES("."'".mysql_escape_string($datadb[0])."'";
			$tempdb='';
			for($j=1;$j<$num_F;$j++){
				$tempdb.=",'".mysql_escape_string($datadb[$j])."'";
			}
			$bakupdata .=$tempdb. ");\n";
			if($sizelimit && strlen($bakupdata)>$sizelimit*1000){
				break;
			}
		}
		$db->free_result($query);

		if($start>=$rows){
			$start=0;
			$rows=0;
		}

		$bakupdata .="\n";
		if($sizelimit && strlen($bakupdata)>$sizelimit*1000){
			$start==0 && $i++;
			$stop=1;
			break;
		}
		$start=0;
	}
	if($stop==1){
		$i++;
		$tableid=$i;
		$startfrom=$start;
		$start=0;
	}
	return $bakupdata;
}

function bakuptable($tabledb){
	global $db;
	foreach($tabledb as $key=>$table){
		$creattable.= "DROP TABLE IF EXISTS $table;\n";
		$CreatTable = $db->get_one("SHOW CREATE TABLE $table");
		$CreatTable['Create Table']=str_replace($CreatTable['Table'],$table,$CreatTable['Create Table']);
		$creattable.=$CreatTable['Create Table'].";\n\n";
	}
	return $creattable;
}

function bakindata($filename) {
	global $db,$charset;
	$sql=file($filename);
	$query='';
	$num=0;
	foreach($sql as $key => $value){
		$value=trim($value);
		if(!$value || $value[0]=='#') continue;
		if(eregi("\;$",$value)){
			$query.=$value;
			if(eregi("^CREATE",$query)){
				$extra = substr(strrchr($query,')'),1);
				$query = str_replace($extra,'',$query);
				if($db->server_info() > '4.1'){
					$extra = $charset ? "ENGINE=MyISAM DEFAULT CHARSET=$charset;" : "ENGINE=MyISAM;";
				}else{
					$extra = "TYPE=MyISAM;";
				}
				$query .= $extra;
			}elseif(eregi("^INSERT",$query)){
				$query='REPLACE '.substr($query,6);
			}
			$db->query($query);
			$query='';
		} else{
			$query.=$value;
		}

	}
}
?>