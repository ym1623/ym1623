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
require("common/function.php");
if($_GET){
$keyword=$_GET[keyword];
}
$newstr =urldecode(trim($_GET[keyword]));
//放在需要开始计时的地方，计算整页放在开头
$time_start = getmicrotime();
?>
<?php
	require_once("./common/db_mysql.class.php");
	$DB = new DB_MySQL;
	$sql = "select * from tb_info where title like '%".$newstr."%' or content like '%".$newstr."%'order by id desc ";
	$DB->query($sql);
	
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
	//查询结果后系统的当前时间
	$time_end = getmicrotime();
	$t0 = $time_end - $time_start;
	?>
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e5ecf9  style="BORDER-RIGHT: #dddddd 1px solid; BORDER-TOP: #ffffff  1px solid; BORDER-LEFT: #ffffff 1px solid; BORDER-BOTTOM: #dddddd 1px solid">
  <tr>
    <td width="62%" border=1 >&nbsp;您查询的关键字是：<?php echo $keyword;?></td>
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
		  <?php echo chinesesubstr(str_ireplace($newstr,"<font color='#FF0000'>".$newstr."</font>",$title),0,80);if(strlen($title)>80){ echo "...";}?>
		  </a></td>
        </tr>
        <tr >
          <td >&nbsp;&nbsp;&nbsp;&nbsp;
            <?php  echo chinesesubstr(str_ireplace($newstr,"<font color='#FF0000'>".$newstr."</font>",$content),0,500);	if(strlen($content)>500){echo "...";} ?>
          </td>
        </tr>
      </table>
      <p>
        <?php
		}
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
          <th align="center" bgcolor="#E5ECF9"><!--  分页显示控制链接 -->
            &nbsp;&nbsp; [分页浏览]</th>
        </tr>
        <tr height='26px'>
          <td align="center" bgcolor="#E5ECF9">
		  <?php
			if(!$is_first){
			?>
            <a href="./so.php?page_num=1&keyword=<?php echo $keyword;?>">第一页</a> <a href="./so.php?page_num=<?php echo ($page_num-1); ?>&keyword=<?php echo $keyword;?>">上一页</a>
            <?php
			}
			else{
			?>
            第一页&nbsp;&nbsp;上一页
            <?php
			}
			if(!$is_last){
			?>
            <a href="./so.php?page_num=<?php echo ($page_num+1); ?>&keyword=<?php echo $keyword;?>">下一页</a> <a href="./so.php?page_num=<?php echo $page_count; ?>&keyword=<?php echo $keyword;?>">最后一页</a>
            <?php
			}
			else
			{
			?>
            下一页&nbsp;&nbsp;最后一页
            <?php
			}
			?>
		  </td>
        </tr>
      </table>
		<?php
		 }else{
		 $z_null="&nbsp;&nbsp;&nbsp;&nbsp;";
		 if($row_count_sum==0){echo  $z_null."抱歉，没有检索到与&nbsp;<font color='FF0000'>".$newstr."</font>&nbsp;相关的网页信息";
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
