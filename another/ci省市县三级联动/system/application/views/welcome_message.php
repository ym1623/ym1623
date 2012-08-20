<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>ajax三级联动</title>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script><!-- 载入jquery库 -->
</head>

<?php 

$data['province_selected'] = $province_selected;
$data['city_selected'] = $city_selected;
$data['district_selected'] = $district_selected;

$this->load->view('widget/district_select', $data);

?>

</html>
