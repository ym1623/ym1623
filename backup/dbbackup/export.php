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

	$tbs = $dbbackup->get_tb(); 									//获取数据库表集合
	if($_POST['sub']){
			$data = $dbbackup->get_backupdata($_POST['choice']);	//获取备份数据
			if($dbbackup->export($data)){							//导入数据
				$bakfn = $msg->get_fn($dbbackup->bakfn);			//取得备份文件名
				$str = "恭喜您<br>备份成功,备份文件保存在data目录下，" .		//提示信息
						"<br>备份文件为<br>".$bakfn;
				$msg->show_msg($str,'export.php','import.php');	//提示备份成功
			}
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
		}else{ return true;}
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
            	您可以根据自己的需要选择需要备份的数据库表,导出的数据文件可用"数据恢复"功能。<br /><br />
                为了数据安全,备份文件采用数据库名 + 时间戳命名保存,如果备份数据超过设定的大小,程序会自动采用分卷备份功能，请耐心等待直到程序提示全部备份完成。
		        </td>
            </tr>
        </tbody>
  </table>

  <table width="90%" align="center" style="margin-bottom:25px;">
        <tbody>
            <tr><td colspan="3" style="font-weight:bold; background:#DAEDF5;">数据库表</td></tr>
            <tr>
            	<td width="5%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">ID</td>
                <td width="85%" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">数据库表</td>
                <td width="10%" align="center" bgcolor="#ECFBFA" style="color:#090;border-bottom:1px solid #EDEFF3">选择</td>
            </tr>

            <?php
				$i = 1;
				foreach($tbs as $tb){
			?>
            <tr class="hover">
            	<td class="t" width="5%" align="center" style="border-bottom:1px solid #EDEFF3"><?php echo $i; $i++; ?></td>
                <td class="t" width="85%"style="border-bottom:1px solid #EDEFF3"><?php echo $tb; ?></td>
                <td class="t" width="10%" align="center" style="border-bottom:1px solid #EDEFF3"><input type="checkbox" name="choice[]" value="<?php echo $tb; ?>" /></td>
            </tr>
     		<?php
				}
			?>

            <tr><td colspan="3" style="font-weight:bold; background:#DAEDF5;">分卷备份</td></tr>
            <tr><td colspan="3">每个分卷文件长度默认为<b>2048</b>KB,自定义请手动更改dbbackup.php文件private $part属性</td></tr>
        </tbody>
    </table>

    <table width="90%" align="center" style="border:none">
        <tbody>
            <tr align="center">
            	<td colspan="3" bgcolor="#FFFFFF" style="padding:0px;">
            	<input type="button" name="checkall" value="全选" style="width:75px; height:28px; background:#F2F2F2; border:1px solid #333; font-weight:bold; color: #666; cursor:pointer;" id="CheckAll" />
            	<input type="submit" name="sub" value="备份" style="width:75px; height:28px; background:#ffb62b; border:1px solid #333; font-weight:bold; color:#FFF; cursor:pointer;" onclick="return Sub(this.form)" />
            	</td>
            </tr>
        </tbody>
  	</table>
</form>
</body>
</html>
