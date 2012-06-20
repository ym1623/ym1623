using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page 
{
    protected void Page_Load(object sender, EventArgs e)
    {
        //---------------------------------------------------------------------------------------------
        //组件设置a.MD5File为2，3时 的实例代码

        if (Request.QueryString["access2008_cmd"]!=null && Request.QueryString["access2008_cmd"] == "2")//服务器提交MD5验证后的文件信息进行验证
        {
          //  Request.QueryString["access2008_File_name"];    //文件名
          //  Request.QueryString["access2008_File_size"];    //文件大小，单位字节
          //  Request.QueryString["access2008_File_type"];    //文件类型 例如.gif .png
          //  Request.QueryString["access2008_File_md5"];     //文件的MD5签名

            Response.Write("0");//返回命令  0 = 开始上传文件， 2 = 不上传文件，前台直接显示上传完成
            Response.End();
        }
        else if (Request.QueryString["access2008_cmd"] != null && Request.QueryString["access2008_cmd"] == "3") //服务器提交文件信息进行验证
        {
            //  Request.QueryString["access2008_File_name"];    //文件名
            //  Request.QueryString["access2008_File_size"];    //文件大小，单位字节
            //  Request.QueryString["access2008_File_type"];    //文件类型 例如.gif .png

            Response.Write("1");//返回命令 0 = 开始上传文件,1 = 提交MD5验证后的文件信息进行验证, 2 = 不上传文件，前台直接显示上传完成
            Response.End();
        }
        //---------------------------------------------------------------------------------------------

        if (Request.Files["Filedata"] != null)//判断是否有文件上传上来
        {
            SaveImages("File/");
            //其他表单数据接收

            if (Request.QueryString["access2008_File_md5"] != null)
            {
                Response.Write("<br/>");
                Response.Write("MD5效验" + Request.QueryString["access2008_File_md5"]);
            }
            Response.Write("<br/>");
            Response.Write("你选择的是<font color='#ff0000'>" + Request.Form["select"] + "</font>--<font color='#0000ff'>" + Request.Form["select2"] + "</font>");
            Response.End();
        }

       
    }
    /// <summary>
    /// 保存文件
    /// </summary>
    /// <param name="url">保存路径,填写相对路径</param>
    /// <returns></returns>
    private void SaveImages(string url)
    {
        ///'遍历File表单元素
        HttpFileCollection files = HttpContext.Current.Request.Files;

        ///'检查文件扩展名字
        //HttpPostedFile postedFile = files[iFile];
        HttpPostedFile postedFile = Request.Files["Filedata"]; //得到要上传文件
        string fileName, fileExtension, filesize;
        fileName = System.IO.Path.GetFileName(postedFile.FileName.ToString()); //得到文件名
        filesize = System.IO.Path.GetFileName(postedFile.ContentLength.ToString()); //得到文件大小
        if (fileName != "")
        {
            fileExtension = System.IO.Path.GetExtension(fileName);//'获取扩展名


            //注意：可能要修改你的文件夹的匿名写入权限。
            postedFile.SaveAs(System.Web.HttpContext.Current.Request.MapPath(url) + fileName);
        }

        Response.Write(fileName + "上传成功");
        

    }

}
