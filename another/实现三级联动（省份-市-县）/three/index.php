<?php 
	$conn=mysql_connect("localhost","root","xampp");
	mysql_select_db("area");
	mysql_query("set names utf8");
	$sql="select * from province";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		$province[]=$row;
	}
?>
<script src='jquery.js'></script>
<script>
	$(document).ready(function(){
		$("#province").change(function(){
			var provinceid=$(this).val();
			$("#citySpan").load("index_city.php?provinceid="+provinceid);
			$("#areaSpan").html("<select id=\"area\" name=\"area\"><option value=\"0\">请选则区</option></select>");
		});
	})
	function selectArea(){
		var cityid=$("#city").val();
		$("#areaSpan").load("index_area.php?cityid="+cityid);
	}
</script>

<select id="province" name="province">
<option value='0' >请选则省</option>
<?php 
	foreach($province as $k=>$v){
?>
<option value='<?php echo $v['provinceid']?>'><?php echo $v['province']?></option>
<?php 
	}
?>
</select>
<span id="citySpan">
	<select id="city" name="city">
		<option value="0">请选则市</option>
	</select>
</span>
<span id="areaSpan">
	<select id="area" name="area">
		<option value="0">请选则区</option>
	</select>
</span>
<br/>
<input type="button" value="good" onclick="get()">
<script>
function get(){
var g=document.getElementById("province").value;
alert(g);
}

</script>