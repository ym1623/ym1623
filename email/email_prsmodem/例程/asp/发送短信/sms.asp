<%@ CodePage=65001%>
<% Option Explicit %>
<object runat="server" progid="XunsaiSMSMMS.SmsProtocolGsm" id="objGsm"> </object>
<object runat="server" progid="XunsaiSMSMMS.SmsMessage" id="objMessage"> </object>
<object runat="server" progid="XunsaiSMSMMS.SmsConstants" id="objConstants"> </object>

<html>
<head>
<title>SMS via GSM - ASP Sample</title>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<style>
   .clbody {  
   font-size:9pt;
   font-weight:normal;
}
.clfooter {   
   font-size:7pt;
   font-weight:normal;
}
h1, .h1 {
   width:100%;
  font-size:18px;
   font-weight:bold;
}
hr, .hr {
   color:#b0b0b0;
}
</style>
</head>

<body class="clbody">
<h1>SMS via GSM - ASP Sample</h1>
<div style="WIDTH:700px">
ASP演示程序
<br>
xssmsmms.dll<br>
</div>
<hr size="1">


<%
	Dim numLastError, strLastError, strReply
	Dim numDeviceCount
	
	numLastError = 0
	strLastError = ""
	strReply     = ""
	
	If( Request( "CTL_SEND" ) <> "" ) Then
	
		objMessage.Clear()
		objMessage.Recipient = Request( "CTL_RECIPIENT" )
		If( Request ( "CTL_UNICODE" ) <> "" ) Then
			objMessage.Format = objConstants.asMESSAGEFORMAT_UNICODE
		End If
		objMessage.Data = Request( "CTL_MESSAGE" )
		
		objGsm.Clear()
		objGsm.Device = Request( "CTL_DEVICES" )
		
		If( Request( "CTL_SPEED" ) = "Default" ) Then
			objGsm.DeviceSpeed = 0
		Else
			objGsm.DeviceSpeed = Request( "CTL_SPEED" )
		End If
		
		
		If( Request ( "CTL_PINCODE" ) <> "" ) Then
		    objGsm.EnterPin( Request ( "CTL_PINCODE" ) )
		End If
		
		If( objGsm.LastError = 0 ) Then
		    objGsm.Send( objMessage )
		End If
		
		numLastError =  objGsm.LastError
		strLastError =  objGsm.GetErrorDescription( numLastError )  
	
	End If
%>


<form action="sms.asp" method="post">
<table class ="clbody" width="700">

   <% Dim arrDevices( 24 ), arrSpeed( 24 ), i, j 
      numDeviceCount = objGsm.GetDeviceCount()
      For i = 0 To numDeviceCount - 1
         arrDevices(i) = objGsm.GetDevice(i)
      Next
      For j = 1 To 8
         arrDevices(i+j-1) = "COM" & j
      Next
      arrDevices(i+j-1) = ""

      arrSpeed(0) = "Default"
      arrSpeed(1) = "1200"
      arrSpeed(2) = "2400"
      arrSpeed(3) = "4800"
      arrSpeed(4) = "9600"
      arrSpeed(5) = "19200"
      arrSpeed(6) = "38400"
      arrSpeed(7) = "57600"
      arrSpeed(8) = "115200"
      arrSpeed(9) = ""
   %>

   <tr>
       <td valign="top" width="110">Device:</td>
       <td valign="top" width="590">
          <select name="CTL_DEVICES" style="width: 250px">
          <% i = 0 %>
          <% While arrDevices(i) <> "" %>
             <% If( Request( "CTL_DEVICES" ) = arrDevices(i) ) Then %>
                  <option value="<%=arrDevices(i)%>" selected><%=arrDevices(i)%></option>
             <% Else %>
                  <option value="<%=arrDevices(i)%>"><%=arrDevices(i)%></option>
             <% End If %>
             <% i = i + 1 %>
          <% WEnd %>
          </select>
        </td>
   </tr>

   <tr>
       <td valign="top">Speed:</td>
       <td valign="top">
          <select name="CTL_SPEED" style="width: 250px">
          <% i = 0 %>
          <% While arrSpeed(i) <> "" %>
             <% If( Request( "CTL_SPEED" ) = arrSpeed(i) ) Then %>
                  <option value="<%=arrSpeed(i)%>" selected><%=arrSpeed(i)%></option>
             <% Else %>
                  <option value="<%=arrSpeed(i)%>"><%=arrSpeed(i)%></option>
             <% End If %>
             <% i = i + 1 %>
          <% WEnd %>
          </select>
          (COM1, COM2, etc.)
        </td>
   </tr>

   <tr>
      <td valign="top">Pincode:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_PINCODE" value=<% If Request( "CTL_PINCODE" ) = "" Then %>""<% Else %><% = Request( "CTL_PINCODE" ) %><% End If %>> (not required)</td>
   </tr>
   <tr>
      <td valign="top">Recipient:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_RECIPIENT" value=<% If Request( "CTL_RECIPIENT" ) = "" Then %>"+86"<% Else %><% = Request( "CTL_RECIPIENT" ) %><% End If %>>        </td>
   </tr>
   <tr>
      <td valign="top">Message:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_MESSAGE" value=<% If Request( "CTL_MESSAGE" ) = "" Then %>"[Message]"<% Else %><% = Request( "CTL_MESSAGE" ) %><% End If %>></td>
   </tr>
   <tr>
      <td valign="top">Unicode:</td>
      <% If( Request( "CTL_UNICODE" ) <> "" ) Then %>
           <td valign="top"><input  type="checkbox" name="CTL_UNICODE" value="uni" checked>&nbsp;Unicode</td>
      <% Else %>
           <td valign="top"><input  type="checkbox" name="CTL_UNICODE" value="uni">&nbsp;Unicode</td>
      <% End If %>
   </tr>
   <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top"><input size="25" type="submit" value="Send" name="CTL_SEND" style="height: 23px; width: 250px"></td>
   </tr>
   <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
   </tr>
      <tr>
      <td valign="top">Result code:</td>
      <td valign="top"><% = numLastError %>: <% = strLastError %></td>
   </tr>
      
</table>
<br>
<br>
</form>

<hr size="1">
<div class="clfooter">www.xunsai.com
  
  <br>
</div>

</body>
</html>
