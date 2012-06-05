<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb3212" />
<title>cms</title>
<style type="text/css">
.pagination { margin: 5px auto; font-family:Arial; }
.pagination ul{ background-color: white; height: 24px; margin: 0; padding: 0; }
.pagination li          { border:0; margin:0 2px 0 0; padding:0; font-size:12px; list-style:none; /* savers */ float:left; }
.pagination a           { border: solid 1px #579cbf;  font-weight:bold; }
.pagination .off,
.pagination .last-off,
.pagination .first-off,
.pagination .active-off,
.pagination .previous-off,
.pagination .next-off   { border:solid 1px #dedede; color:#888888; display:block; float:left; font-weight:bold; padding:3px 5px; }
.pagination .active     { background:#065569; color:#ffffff; font-weight:bold; display:block; float:left; padding:3px 5px; border: solid 1px #065569; }
.pagination a:link, 
.pagination a:visited   { color:#065569; display:block; float:left; padding:3px 5px; text-decoration:none; border: solid 1px #579cbf; }
.pagination a:hover     { border:solid 1px #065569; }
.pagination input{ line-height: 20px; width: 50px; height: 21px; margin-left: 8px; border: solid 1px #579cbf; }
</style>
<script type="text/javascript"> 
function postpagination(page){
  self.location='?page='+page;
}
</script>
</head>
<body>
<br />
<br />
<br />
<div></div>

<?php
//分页类
class cms_pagination{
	private $url="x.php";//这个不用,留着扩展的.
	private $first="First";//首页
	private $previous="Previous";//上一页
	private $next="Next";//下一页
	private $last="Last";//尾页
	private $pagesize=30;//分页
	private $rows="10";//记录数
	private $number="5";//数码
	private $page="1";//当前页
	private $str;
	private $tag;
	function __construct($str,$tag){
		$this->str=$str;
		$this->tag=$tag;
	}
	function __set($n,$v){
		$this->$n=$v;
	}
	function str(){
		$totalpages=ceil( $this->rows/$this->pagesize );
		$page=$this->page;
		if($page>$totalpages){
			$page=$totalpages;
		}
		$pagination= '<div class="pagination">'."\r\n";
		$pagination=$pagination.'<ul>'."\r\n";
		$pagination=$pagination.'<li class="off">' . $this->pagesize . ' / ' . $this->rows . '</li>'."\r\n";
		if ($page==1){
			$pagination=$pagination.'<li class="first-off">&laquo; '. $this->first .'</li>'."\r\n";
			$pagination=$pagination.'<li class="first"><a href="javascript:postpagination(\'1\');" onclick="return postpagination(\'1\');">&laquo; '. $this->first .'</a></li>'."\r\n";
			$pagination=$pagination.'<li class="previous-off">&lsaquo; '. $this->previous .'</li>'."\r\n";
			$pagination=$pagination.'<li class="off">1</li>'."\r\n";
		}else{
			$pagination=$pagination.'<li class="first"><a href="javascript:postpagination(\'1\');" onclick="return postpagination(\'1\');">&laquo; '. $this->first .'</a></li>'."\r\n";
			$pagination=$pagination.'<li class="previous"><a href="javascript:postpagination(\''. ($page-1) .'\');" onclick="return postpagination(\''. ($page-1) .'\');">&lsaquo; '. $this->previous .'</a></li>'."\r\n";
			$pagination=$pagination.'<li class="first"><a href="javascript:postpagination(\'1\');" onclick="return postpagination(\'1\');">1</a></li>'."\r\n";
		}
		$pagination=$pagination.'<li class="off">&laquo;</li>'."\r\n";
		if ($totalpages<=5){
			$t=5-$totalpages;
			for($i=1;$i<=$totalpages;$i++){
				if($page==$i){
					$pagination=$pagination.'<li class="active">'.$i.'</li>'."\r\n";
				}else{
					$pagination=$pagination.'<li><a href="javascript:postpagination(\''.$i.'\');" onclick="return postpagination(\''.$i.'\');">'.$i.'</a></li>'."\r\n";
				}
			}
			if($t>=1){
				for($i=$totalpages+1;$i<6;$i++){
					$pagination=$pagination.'<li class="active-off">'.$i.'</li>'."\r\n";
				}
			}
		}
		if ($totalpages>5){
			$t_s=$page-2;
			$t_e=$page+2;
			if($t_s<=0){
				$t_s=1;
				$t_e=$t_s+4;
			}
			if($t_e>=$totalpages){
				$t_e=$totalpages;
				$t_s=$t_e-4;
			}
			for($i=$t_s;$i<=$t_e;$i++){
				if($page==$i){
					$pagination=$pagination.'<li class="active">'.$i.'</li>'."\r\n";
				}else{
					$pagination=$pagination.'<li><a href="javascript:postpagination(\''.$i.'\');" onclick="return postpagination(\''.$i.'\');">'.$i.'</a></li>'."\r\n";
				}
			}
		}
		$pagination=$pagination.'<li class="off">&raquo;</li>'."\r\n";
		if ($page==$totalpages){
			$pagination=$pagination.'<li class="off">'.$totalpages.'</li>'."\r\n";
			$pagination=$pagination.'<li class="next-off">'. $this->next .' &rsaquo;</li>'."\r\n";
			//$pagination=$pagination.'<li class="last-off">'. $this->last .' &raquo;</li>'."\r\n";
			$pagination=$pagination.'<li class="last"><a href="javascript:postpagination(\''. $totalpages .'\');" onclick="return postpagination(\''. $totalpages .'\');">'. $this->last .' &raquo;</a></li>'."\r\n";
		}else{
			$pagination=$pagination.'<li class="last"><a href="javascript:postpagination(\''. $totalpages .'\');" onclick="return postpagination(\''. $totalpages .'\');">'.$totalpages.'</a></li>'."\r\n";
			$pagination=$pagination.'<li class="next"><a href="javascript:postpagination(\''. ($page+1) .'\');" onclick="return postpagination(\''. ($page+1) .'\');">'. $this->next .' &rsaquo;</a></li>'."\r\n";
			$pagination=$pagination.'<li class="last"><a href="javascript:postpagination(\''. $totalpages .'\');" onclick="return postpagination(\''. $totalpages .'\');">'. $this->last .' &raquo;</a></li>'."\r\n";
		}
		$pagination=$pagination.'<li><input type="text" name="go" id="go" value="" size="20" /></li>'."\r\n";
		$pagination=$pagination.'<li><a href="javascript:postpagination(document.getElementById(\'go\').value);" onclick="return postpagination(document.getElementById(\'go\').value);">Go</a></li>'."\r\n";
		$pagination=$pagination.'</ul>'."\r\n";
		$pagination=$pagination.'</div>'."\r\n";
		return $pagination;
	}
}
?>
<?php

$page=isset($_GET['page'])?$_GET['page']:'1';preg_replace('|[^0-9]|is','',$page);//GET读取当前页数
if($page=='' or $page<=0){$page=1;}//当前页数最小为1

//下面是使用方法(中文)
echo '例:总数12345,每页10个数据';
$rows=12345;//总记录数
$str = 'Hello!';
$pagination=new cms_pagination($str,'pagination');
$pagination->pagesize=5;//每页10个,自己定义
$pagination->rows=$rows;
$pagination->page=$page;
$pagination->first="首页";
$pagination->previous="上一页";
$pagination->next="下一页";
$pagination->last="尾页";
$str=$pagination->str();//读出结果
echo $str;

/*
//下面是英文分页
echo '例:总数1222,每页13个数据';
$rows=1222;//总数1222
$bar2=new cms_pagination($str,'pagination');
$bar2->pagesize=13;//每页13个数据
$bar2->rows=$rows;
$bar2->page=$page;
$str2=$bar2->str();
echo $str2;


//下面是英文分页
echo '例:总数84,每页15个数据';
$rows=84;
$bar2=new cms_pagination($str,'pagination');
$bar2->pagesize=15;
$bar2->rows=$rows;
$bar2->page=$page;
echo $bar2->str();
*/
?>
</body>
</html>