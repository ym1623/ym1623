<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>仿新浪上传用户头像-CMSPHP.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="screen">
html,body {
	height: 100%;
	background-color: #ffffff;
}

#flashContent {
	width: 100%;
	height: 100%;
}
</style>
</head>

<body>
<div id="altContent"></div>
<div><input type="button"
	onclick="swfobject.getObjectById('FaustCplus').jscall_updateAvatar();"
	value="JS Call Upload" /></div>
<div id="avatar_priview"></div>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="http://images1.jyimg.com/w4/register/j/swfobject.js"></script>
<script type="text/javascript">

			function uploadevent(status){
			     status += '';
				 switch(status){

					case '1':
						alert('upload succeed!');
						var time = new Date().getTime();
					
						 $.ajax({
							url: "<?=$base_url;?>index.php/cmsphp/show",
							success: function(result){
								//alert(result);
							 	var msg=result.split("#");
								document.getElementById('avatar_priview').innerHTML = "Avatar Priview: <img src='"+msg[0]+"?" + time + "'/> <br/> Source Image: <img src='"+msg[1]+"?" + time + "'/>";
							}
						});
					
					break;

					case '2':
						if(confirm('js call upload')){
							return 1;
						}else{
							return 0;
						}
					break;

					case '-1':
						alert('cancel!');
						window.location.href = "#";
					break;
					case '-2':
						alert('upload failed!');
						window.location.href = "#";
					break;

					default:
						alert(typeof(status) + ' ' + status);
				} 
			}

			var flashvars = {
			  "jsfunc":"uploadevent",
			  "imgUrl":"http://i3.sinaimg.cn/lx/news/p/2009/0717/U2075P8T1D890333F914DT20090717103223.jpg",
			  "pid":"75642723",
			  "uploadSrc":true,
			  "showBrow":true,
			  "showCame":true,
			  "uploadUrl":"<?=$base_url;?>index.php/cmsphp/saveavater?action=uploadavatar"
			};

			var params = {
				menu: "false",
				scale: "noScale",
				allowFullscreen: "true",
				allowScriptAccess: "always",
				wmode:"transparent",
				bgcolor: "#FFFFFF"
			};

			var attributes = {
				id:"FaustCplus"
			};

			swfobject.embedSWF("../js/FaustCplus/FaustCplus.swf", "altContent", "650", "500", "9.0.0", "expressInstall.swf", flashvars, params, attributes);

		</script>

</body>
</html>
