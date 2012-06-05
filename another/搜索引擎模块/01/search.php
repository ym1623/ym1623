<html>
<link rel="stylesheet" href="./css/style.css" />
<style type="text/css">
<!--
.STYLE13 {color: #FF3399}
.STYLE16 {color: #FF0000}
.STYLE20 {color: #0066FF}
.STYLE21 {color: #006600}
-->
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="96%" align="left">
	<?php require_once("top.php");?>
	</td>
  </tr>
</table>
<?php
include_once("splitword.php");
include_once("common/function.php");
if($_POST[submit]!=""){
$keyword=$_POST[keyword];
}
if($_POST[submit2]!=""){						//在查询结果中查找

	$h_keyword=$hide_keyword;			//获取原始的值	
	$keynew=$keyword;
	$h_keyword.=$keyword;				//获取老值+新值
 	$keyword=$h_keyword;				//将最新的值赋给keyword
}
$yuan=trim($keyword);
$tt= $yuan;

$str=gl($tt);

$sp = new SplitWord();
//放在需要开始计时的地方，计算整页放在开头
$time_start = getmicrotime();
$sp->SplitRMM($str);
$tt=$sp->SplitRMM($str);

?>
<?php
	require_once("common/db_mysql.class.php");
	$DB = new DB_MySQL;				//创建对象
	$str=array(" ","");				//定义一个数组
	$cc=str_replace($str,"",$tt);	//去掉字符串中的空格
	if(substr($cc,0,2)=="、"){
		$cc= substr($cc,2);			//去掉前面的“、”符号
	}
	if(substr($cc,-2,2)=="、"){
		$cc= substr($cc,0,-2);		//去掉后面的“、”符号
	}
	
	if(substr($cc,0,2)=="、" && substr($cc,-2,2)=="、"){
		$a= substr($cc,2);			//去掉前面的“、”符号
		$cc= substr($a,0,-2);		//去掉后面的“、”符号
	}
		$newstr = explode("、",$cc);			//应用explode()函数将字符串转换成数组
		if(count($newstr)==1){					//如果数组的元素个数为1个，则按单个条件进行查询
			 $sql = "select * from tb_info where title like '%".$newstr[0]."%' or content like '%".$newstr[0]."%'order by id desc ";
		}else{
			if($_POST[submit2]!=""){					//在查询结果中查找
				//二次查询分词
				$keynew=gl($keynew);			//过滤标点符号
				$sp1 = new SplitWord();
				$sp1->SplitRMM($keynew);
				$tc=$sp1->SplitRMM($keynew);
					$cc1=dunhao($tc);
					$newstr1 = explode("、",$cc1);		//应用explode()函数将字符串转换成数组
				/***************************************************************************************/
				//二次查找的算法
				$k_sql="select k_id from tb_temp";
				$info = $DB->fetch_one_array($k_sql);
				$kid=substr($info['k_id'],0,-1);				//去掉最后一个“@”
				$k_id=explode('@',$kid);						//将ID号转换成数组
				$sql = "select * from tb_info ";				//查询信息表中的数据
				while(list($name,$value)=each($k_id)){			//遍历数组
				   $a.="$value".",";
				}
				$a= substr($a,0,-1);							//去掉最后一个“,”符号
				//使用in关键字查询所有ID号对应的信息
				$sql .= " where id in(".$a.") ";				//指定多个条件值	
						
				$sql2=" and (";
				for($i=0;$i<count($newstr1);$i++){
					$sql0.=" title like '%".trim($newstr1[$i])."%'"." or";	
				}
				for($j=0;$j<count($newstr1);$j++){
					$sql1.=" content like '%".trim($newstr1[$j])."%'"." and";	
				}
				$sql1=substr($sql1,0,-3);						//去掉最后一个“and”
				$sql3=")";
				$sql.=$sql2.$sql0.$sql1.$sql3. " order by id desc";
			}
		
			else{
			//合并查询结果集
			for($i=0;$i<count($newstr);$i++){
				$sql0.=" title like '%".trim($newstr[$i])."%'"." or";	
			}
			for($j=0;$j<count($newstr);$j++){
				$sql1.=" content like '%".trim($newstr[$j])."%'"." or";	
			}
			$sql1=substr($sql1,0,-3);				//去掉最后一个“or”		
			$sql="select * from tb_info where".$sql0.$sql1." order by id desc";
			}
	}	
	
	if($_GET){
		//得到要提取的页码
		$page_num = $_GET['page_num']? $_GET['page_num']: 1;
	}
	else{
		//首次进入时,页码为1
		$page_num = 1;
	}
	//得到总记录数
	$DB->query($sql);
	$row_count_sum = $DB->get_rows();
	$row_count_sum;
	//每页记录数,可以使用默认值或者直接指定值
	$row_per_page = 6;
	//总页数
	$page_count = ceil($row_count_sum/$row_per_page);
	//判断是否为第一页或者最后一页
	$is_first = (1 == $page_num) ? 1 : 0;
	$is_last = ($page_num == $page_count) ? 1 : 0;
	//查询起始行位置
	$start_row = ($page_num-1) * $row_per_page;
	//为SQL语句添加limit子句
	$sql .= " limit $start_row,$row_per_page";
	//执行查询
	$DB->query($sql);
	$res = $DB->get_rows_array();
	//结果集行数
	$rows_count=count($res);
	$time_end = getmicrotime();				//结束计时
	$t0 = $time_end - $time_start;			//搜索计时
	?>
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e5ecf9  style="BORDER-RIGHT: #dddddd 1px solid; BORDER-TOP: #ffffff  1px solid; BORDER-LEFT: #ffffff 1px solid; BORDER-BOTTOM: #dddddd 1px solid">
  <tr>
    <td width="62%" border=1 >&nbsp;您查询的关键字是：<?php echo $keyword;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "分词:  "; foreach( $newstr as $link) { ?> <a href="so.php?keyword=<?php echo urlencode($link); ?>"><?php echo $link." ";} ?></a></td>
    <td width="22%" border=1 >快快搜，找到相关网页约『&nbsp;<font  color="#AA0066"><?php echo $row_count_sum;?></font>&nbsp;』篇</td>
    <td width="16%" border=1 ><?php echo "用时： $t0 秒";?></td>
  </tr>
</table>
<table width=100% height="600" border=0 cellspacing=0 cellpadding=0>
  <tr>
    <td valign="top"><br /><p>
        <?php
		for($i=0;$i<$rows_count;$i++){
			$id=$res[$i]['id'];			//ID号
			$title=$res[$i]['title'];	//标题
			$content = $res[$i]['content'];	//内容
		?>
      </p>
      <table width="831" border="0" cellpadding="0" cellspacing="0" style="margin-left:15px; margin-right:15px">
        <tr>
          <td width="831" height="23" class="alink">&nbsp;&nbsp;&nbsp;&nbsp;
		  <a href="lookinfo.php?id=<?php echo $id; ?>" target="_blank">
		  <?php
		 	for($n=0;$n<count($newstr);$n++){
				 $title= str_ireplace($newstr[$n],"<font color='#FF0000'>".$newstr[$n]."</font>",$title);
			}
		   echo chinesesubstr($title,0,80);
		   if(strlen($title)>80){ echo "...";}
		  ?>
		  </a></td>
        </tr>
        <tr >
          <td >&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
			for($k=0;$k<count($newstr);$k++){
				 $content= str_ireplace($newstr[$k],"<font color='#FF0000'>".$newstr[$k]."</font>",$content);
			}
			echo chinesesubstr($content,0,600);	  
			  if(strlen($content)>600){echo "...";} ?>
          </td>
        </tr>
      </table>
      <p>
        <?php
		$key0.=$id.'@';
		}
		$key00=$key0;
		 if($row_count_sum>0){
		/* 将查询的关键字存储在临时表中*/
		$ins="update tb_temp set k_id='".$key00."'";
		$DB->query($ins);
		}
		/* *************************  */
	  ?></p>
      <table width="100%" border="0">
        <tr>
          <td height="30">&nbsp;</td>
        </tr>
      </table>
	  <?php 
	  if($row_count_sum>0){
	  ?>
      <table width="850" border="0" cellpadding="2" cellspacing="1" bgcolor="#99CCCC" style="margin-left:15px; margin-right:15px">
        <tr height='26px' align="right">
          <th align="center" bgcolor="#E5ECF9">
            &nbsp;&nbsp; [分页浏览]</th>
        </tr>
        <tr height='26px'>
          <td align="center" bgcolor="#E5ECF9">
		  <?php
			if(!$is_first){
			?>
            <a href="./search.php?page_num=1&keyword=<?php echo $keyword;?>">第一页</a> <a href="./search.php?page_num=<?php echo ($page_num-1);?>&keyword=<?php echo $keyword;?>">上一页</a>
            <?php
			}
			else{
			?>
            第一页&nbsp;&nbsp;上一页
            <?php
			}
			if(!$is_last){
			?>
            <a href="./search.php?page_num=<?php echo ($page_num+1);?>&keyword=<?php echo $keyword;?>">下一页</a> <a href="./search.php?page_num=<?php echo $page_count;?>&keyword=<?php echo $keyword;?>">最后一页</a>
            <?php
			}
			else
			{
			?>
            下一页&nbsp;&nbsp;最后一页
            <?php
			}
			?>		  </td>
        </tr>
      </table>
		<?php
		}else{
		 $z_null="&nbsp;&nbsp;&nbsp;&nbsp;";
		 if($row_count_sum==0){echo  $z_null."抱歉，没有检索到与&nbsp;<font color='FF0000'>".$yuan."</font>&nbsp;相关的网页信息";
		 echo "<br><br><br>";
		 echo  $z_null."快快搜 建议您：<br>";
		 echo  $z_null."· 查看输入的文字是否有误<br>";
		 echo  $z_null."· 去掉可能不必要的字词，如： '的'、'呢'、'吗' 等<br>";
		}
		}
		?>
      </td>
  </tr>
</table>
<table width=100% border=0 cellspacing=0 cellpadding=0>
  <tr>
    <td height=30 align=center><font color="#7777CC">快快搜索</font> <a href=http://www.mrbccd.com><font color=#7777CC>&copy; 2008&nbsp;&nbsp;此内容系快快搜根据您的指令自动搜索的结果，不代表快快搜赞成被搜索网站的内容或立场</font></a>&nbsp;</td>
  </tr>
</table>
