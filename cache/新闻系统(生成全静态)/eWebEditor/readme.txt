

第一步：复制eWebEditor文件夹到根目录
月

第二步：把下列代码放到添加页里

<textarea name="d_content" style="display:none;"></textarea>
<iframe ID="eWebEditor1" src="../ewebeditor/ewebeditor.htm?id=d_content&style=coolblue" frameborder="0" scrolling="no" width="550" HEIGHT="350"></iframe>

如果是修改直接把代码放在textarea中间,如:
<textarea name="d_content" style="display:none;"><%=rs("Content")%></textarea>
<iframe ID="eWebEditor1" src="../ewebeditor/ewebeditor.htm?id=d_content&style=coolblue" frameborder="0" scrolling="no" width="550" HEIGHT="350"></iframe>


注：iframe里的id要和多行文本框的名子相同 style是编辑器的样式
   eWebEditor/admin是管理后台，用户名、密码是admin
表单验证时用自带的接口函数：
<Script Language=JavaScript>

	// 表单提交客户端检测
	function doSubmit(){
		// getHTML()为eWebEditor自带的接口函数，功能为取编辑区的内容
		if (eWebEditor1.getHTML()==""){
			alert("新闻内容不能为空！");
			return false;
		}
		return true;
//		document.myform.submit();
	}
</Script>