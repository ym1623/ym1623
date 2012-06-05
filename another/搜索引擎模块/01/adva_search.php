<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<link href="./css/style.css" rel="stylesheet" />
<title>高级搜索</title>
<style type="text/css">
<!--
.htb {	MARGIN-BOTTOM: 5px
}
#ft {	CLEAR: both; BACKGROUND: #e6e6e6; LINE-HEIGHT: 20px; TEXT-ALIGN: center
}
#ft {	FONT-SIZE: 12px; COLOR: #77c; FONT-FAMILY: Arial; WHITE-SPACE: nowrap
}
#ft {	FONT-SIZE: 12px; COLOR: #77c; FONT-FAMILY: Arial; WHITE-SPACE: nowrap
}
-->
</style>
</head>
<script language="JavaScript">
<!--
function check_form(f1){
		if(f1.q1.value==""&&f1.q2.value==""&&f1.q3.value==""&&f1.q4.value==""){
			alert("请输入查询条件！");f1.q1.focus();return false;
		}
}
//-->
</script>
<body>
<table class="htb" cellspacing="0" cellpadding="0" width="100%" align="center"  border="0">
  <tbody>
    <tr valign="center">
      <td style="PADDING-LEFT: 8px; WIDTH: 37px"><img height="137" src="images/kuaikuaisou.gif"  width="216" border="0" /></td>
      <td style="FONT-FAMILY: Arial">&nbsp;&nbsp;&nbsp;</td>
      <td valign="center" width="100%"><table style="MARGIN-TOP: 15px" height="20" cellspacing="0" cellpadding="0"  width="100%" border="0">
        <tbody>
          <tr bgcolor="#d9e1f7">
            <td align="left"><b>&nbsp;高级搜索</b></td>
            <td align="right"><font face="arial,sans-serif"><a 
            href="">快快搜首页</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
<form action="gs.php" name="f1" target="_self" id="f1" style="MARGIN: 0px">
  <table cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
    <tbody>
      <tr>
        <td><table cellspacing="0" cellpadding="0" width="100%" border="0">
          <tbody>
            <tr bgcolor="#eeeeee">
              <td><table cellspacing="0" cellpadding="2" width="98%" align="center">
                <tbody>
                  <tr>
                    <td valign="top" width="18%"><br />
                      <b>搜索结果</b></td>
                    <td width="85%"><table cellspacing="0" cellpadding="2" width="100%">
                      <tbody>
                        <tr>
                          <td width="17%">包含以下<b>全部</b>的关键词</td>
                          <td width="39%"><input maxlength="100" size="50" name="q1" onMouseOver="this.focus()" onFocus="this.select()"/></td>
                          <td valign="top" width="44%" rowspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="17%">包含以下的<b>完整关键词</b></td>
                          <td width="39%"><input maxlength="100" size="50" name="q2" onMouseOver="this.focus()" onFocus="this.select()"/></td>
                        </tr>
                        <tr>
                          <td width="17%">包含以下<b>任意一个</b>关键词</td>
                          <td width="39%"><input maxlength="100" size="50" name="q3" onMouseOver="this.focus()" onFocus="this.select()"/></td>
                        </tr>
                        <tr>
                          <td width="17%"><b>不包括</b>以下关键词</td>
                          <td width="39%"><input maxlength="100" size="50" name="q4" onMouseOver="this.focus()" onFocus="this.select()"/></td>
                        </tr>
                        <tr>
                          <td width="17%">&nbsp;</td>
                          <td width="39%"><input name="g_submit" type="submit" class="btn" id="g_submit" value="搜一下" onClick="return check_form(f1);"/>
                            &nbsp;
                            <input name="submit2" type="reset" class="btn" value="清空内容" /></td>
                        </tr>						
                      </tbody>
                    </table></td>
                  </tr>
                </tbody>
              </table></td>
            </tr>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
</form>
<table style="MARGIN-TOP: 15px" height="20" cellspacing="0" cellpadding="0" width="100%" border="0">
</table>
<br/>
<div id="ft">&copy;2008<font color="#7777CC">&nbsp;&nbsp;此内容系快快搜根据您的指令自动搜索的结果，不代表快快搜赞成被搜索网站的内容或立场</font></div>
</body>
</html>
