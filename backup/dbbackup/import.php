<?php

	/**
	 * 数据库备份程序
	 *
	 * @author：黄乐
	 * @version：1.0
	 * @lastupdate：2010-7-19
	 *
	 */

	include("config/config.php");
	include("includes/dbbackup.class.php");
	include("includes/msg.class.php");
	$dbbackup = new dbbackup($dbhost, $dbuser, $dbpwd, $dbname);
	$msg = new msg();

	$bakfile = $dbbackup->get_backup();					//获取备份文件
	if($_GET['fn']){
		if($dbbackup->import($_GET['fn'])){				//导入数据
			$str = "恭喜您<br>备份数据已经成功导入！";					//提示信息
			$msg->show_msg($str,'import.php','export.php');			//提示导入成功
		}
	}
	//删除备份文件
	if($_POST['sub']){
		echo $dbbackup->del($_POST['choice'])? $msg->show_msg("恭喜您<br>备份文件已删除成功!",'import.php','export.php') : $msg->show_msg("删除失败!",'import.php','import.php');
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>powered by 黄乐</title>
<style type="text/css">
body{ margin:0px; padding:0px;}
table{ border: 1px solid #EDEFF3;border-collapse:collapse; margin-bottom:50px;}
td{ font:normal 12px/17px Arial;padding:7px;}
.selected{background:#FEF1DA;}
.bg{ background: #F2F7F9;}
a{ color:#000;}
</style>
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
		$('tbody tr td input').click(function() {
            if ($(this).parent().parent().hasClass('selected')) {
                 $(this).parent().parent()
                    .removeClass('selected')
                    //.find(':checkbox').attr('checked',false);
            }else{
                $(this).parent().parent()
                    .addClass('selected')
                    //.find(':checkbox').attr('checked',true);
            }
        });
        // 如果复选框默认情况下是选择的，则高色.
        // $('table :checkbox:checked').parent().parent().addClass('selected');
        //简化:
        $('table :checkbox:checked').parents("tr").addClass('selected');
        //$('tbody>tr:has(:checked)').addClass('selected');

		//全选反选
		$("#CheckAll").toggle(function(){
			$(":checkbox").attr('checked',true);
			$(".t").addClass('selected');
		},function(){
			$(":checkbox").attr('checked',false);
			$(".t").removeClass('selected');
		});

		//鼠标滑过表格背景切换颜色
		$('.hover').hover(function(){
			$(this).find("td").addClass('bg');
		},function(){
			$(this).find("td").removeClass('bg');
		})
});

//判断是否选择了操作对象
function Sub(form){
	var j = 0;
	for(var i=0; i<form.elements.length; i++){
		if(form.elements[i].name == "choice[]"){
			if(form.elements[i].checked){
				j++;
			}
		}
	}
	if(j == 0){
		alert("请选择操作对象！");
		return false;
	}else{
		//确认是否要删除备份
		var r = confirm("此功能不可恢复,您确认要删除选中的备份文件吗？");
		return r == true ? true : false;
	}
}

//确认是否要导入数据
function Confirm(){
	var r = confirm("备份恢复功能将覆盖原来的数据,您确认要导入备份数据吗？");
	return r == true ? true : false;
}
</script>
</head>

<body>
<form name="myform" method="post" action="">
  <table width="90%" align="center">
        <tbody>
            <tr><td style="font-weight:bold; background:#DAEDF5;">操作菜单</td></tr>
            <tr><td><a href="export.php">备份数据</a> <a href="import.php">还原数据</a></td></tr>
        </tbody>
  </table>

  <table width="90%" align="center">
        <tbody>
            <tr><td style="font-weight:bold; background:#DAEDF5">提示信息</td></tr>
            <tr>
            	<td style="padding:30px;">
            	本功能在恢复备份数据的同时,将覆盖原有数据,请确定是否需要恢复,以免造成数据损失。<br /><br />
				如果一个备份文件有多个分卷，您只需任选一个备份文件导入，程序会自动导入其他分卷
		        </td>
            </tr>
        </tbody>
  </table>

  <table width="90%" align="center" style="margin-bottom:25px;">
        <tbody>
            <tr><td colspan="6" style="font-weight:bold; background:#DAEDF5;">备份文件</td></tr>
            <tr>
            	<td width="5%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">ID</td>
                <td width="25%" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">文件名</td>
                <td width="15%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">备份时间</td>
                <td width="15%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">卷号</td>
                <td width="20%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">导入</td>
                <td width="10%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">删</td>
            </tr>
            <?php
				$i = 1;
				foreach($bakfile as $tb){
			?>
            <tr class="hover">
            	<td class="t" width="5%" align="center" style="border-bottom:1px solid #EDEFF3" ><?php echo $i; $i++; ?></td>
            	<td class="t" width="25%" style="border-bottom:1px solid #EDEFF3" ><?php echo $tb; ?></td>

                <td class="t" width="15%" align="center" style="border-bottom:1px solid #EDEFF3" >
                <?php
                	//取得备份时间
			  		if(!preg_match("/_part/", $tb)){
						$str = explode(".", $tb);
						$time = substr($str[0],-10);
						//设置用在脚本中所有日期/时间函数的默认时区。
						Date_default_timezone_set("PRC");//
						echo date("Y-m-d h:i",$time);
			  		}else{
			  			//分卷
			  			$str = explode("_part", $tb);
						$time = substr($str[0],-10);
						//设置用在脚本中所有日期/时间函数的默认时区。
						Date_default_timezone_set("PRC");//
						echo date("Y-m-d h:i",$time);
			  		}
                ?>
                </td>

                <td class="t" width="15%" align="center" style="border-bottom:1px solid #EDEFF3" >
                <?php
			  		//取分卷号
			  		if(!preg_match("/_part/", $tb)){
			  			echo "1";
			  		}else{
			  			$str = explode(".", $tb);
						echo substr($str[0],-1);
			  		}
		  		?>
                </td>

                <td class="t" width="20%" align="center" style="border-bottom:1px solid #EDEFF3" ><a href="?fn=<?php echo $tb; ?>" onclick="return Confirm()">导入</a></td>
                <td class="t" width="10%" align="center" style="border-bottom:1px solid #EDEFF3" ><input type="checkbox" name="choice[]" value="<?php echo $tb; ?>" /></td>
            </tr>
            <?php
				}
			?>
        </tbody>
    </table>

    <table width="90%" align="center" style="border:none">
        <tbody>
            <tr align="center">
            	<td colspan="3" bgcolor="#FFFFFF" style="padding:0px;">
            	<input type="button" name="checkall" value="全选" style="width:75px; height:28px; background:#F2F2F2; border:1px solid #333; font-weight:bold; color: #666; cursor:pointer;" id="CheckAll" />
            	<input type="submit" name="sub" value="删除备份" style="width:75px; height:28px; background:#ffb62b; border:1px solid #333; font-weight:bold; color:#FFF; cursor:pointer;" onclick="return Sub(this.form)" />
            	</td>
            </tr>
        </tbody>
  	</table>
</form>
</body>
</html>
