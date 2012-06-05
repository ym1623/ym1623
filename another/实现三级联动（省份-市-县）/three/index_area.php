<?php
	$conn=mysql_connect("localhost","root","xampp");
	mysql_select_db("area");
	mysql_query("set names utf8");
	$sql="select * from area where fatherid=".$_GET['cityid'];
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		$city[]=$row;
	}
?>
<select id="area" name="area">
	<option value="0">请选则区</option>
	<?php 
		foreach($city as $k=>$v){
	?>
		<option value='<?php echo $v['areaid']?>'><?php echo $v['area']?></option>
	<?php 
		}
	?>
</select>