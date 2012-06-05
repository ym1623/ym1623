<?php
	$conn=mysql_connect("localhost","root","xampp");
	mysql_select_db("area");
	mysql_query("set names utf8");
	$sql="select * from city where fatherid=".$_GET['provinceid'];
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		$city[]=$row;
	}
?>
<select id="city" name="city" onchange="selectArea()">
	<option value="0">请选则市</option>
	<?php 
		foreach($city as $k=>$v){
	?>
		<option value='<?php echo $v['cityid']?>'><?php echo $v['city']?></option>
	<?php 
		}
	?>
</select>