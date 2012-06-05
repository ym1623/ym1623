<?php
// 注意：使用组件上传，不可以使用 $_FILES["Filedata"]["type"] 来判断文件类型
mb_http_input("utf-8");
mb_http_output("utf-8");


$type=filekzm($_FILES["Filedata"]["name"]);
if ((($type == ".gif")
|| ($type == ".png")
|| ($type == ".jpeg")
|| ($type == ".jpg")
|| ($type == ".bmp"))
&& ($_FILES["Filedata"]["size"] < 99999999999999999999))
  {
  if ($_FILES["Filedata"]["error"] > 0)
    {
    echo "返回错误: " . $_FILES["Filedata"]["error"] . "<br />";
    }
  else
    {
    echo "上传的文件: " . $_FILES["Filedata"]["name"] . "<br />";
    echo "文件类型: " . $type . "<br />";
    echo "文件大小: " . ($_FILES["Filedata"]["size"] / 1024) . " Kb<br />";
    echo "临时文件: " . $_FILES["Filedata"]["tmp_name"] . "<br />";

    if (file_exists( $_FILES["Filedata"]["name"]))
      {
      echo $_FILES["Filedata"]["name"] . " already exists. ";
      }
    else
      {
		
 
      $file_name = "uploadimg/".time().rand(). $type;
      $_FILES["Filedata"]["name"] = time() . rand() . $type; 
      move_uploaded_file($_FILES["Filedata"]["tmp_name"],$file_name);
      echo "Stored in: " . $_FILES["Filedata"]["name"];
      }
    }
  }
else
  {
  echo "上传失败，请检查文件类型和文件大小是否符合标准<br />文件类型：".$type.'<br />文件大小:'.($_FILES["Filedata"]["size"] / 1024) . " Kb";
  }
  
function filekzm($a)
{
	$c=strrchr($a,'.');
	if($c)
	{
		return $c;
	}else{
		return '';
	}
}
?>

