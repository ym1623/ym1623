
<?

	$objMm1Protocol = new Com("Xunsaismsmms.MmsProtocolMm1");
	$objMessage = new Com("Xunsaismsmms.MmsMessage");
	$objSlide = new Com("Xunsaismsmms.MmsSlide");
	$objConstants = new Com("Xunsaismsmms.MmsConstants");
	
	$CTL_SERVER = "http://mmsc.monternet.com";
	$CTL_APN = "cmwap";
	$CTL_GATEWAY = "10.0.0.172";
	$CTL_ATTACHMENT = @"d:\a.gif";
	$CTL_MESSAGE = "This is a test message";
	
	
	$objMm1Protocol->LogFile = "C:\logfile.txt";

	if( $_POST["CTL_SEND"] != "" ){
	
		$CTL_SERVER = $_POST["CTL_SERVER"];
		$CTL_APN = $_POST["CTL_APN"];
		$CTL_GATEWAY = $_POST["CTL_GATEWAY"];
		$CTL_ATTACHMENT = $_POST["CTL_ATTACHMENT"];
		$CTL_MESSAGE = $_POST["CTL_MESSAGE"];
	
		$objSlide->Clear();
		$objSlide->AddText( $CTL_MESSAGE );
		$objSlide->AddAttachment( $CTL_ATTACHMENT , 0 );
		
		if( $objSlide->LastError == 0 ){
			$objMessage->Clear();
			$objMessage->AddRecipient( $_POST["CTL_RECIPIENT"], $objConstants->asMMS_RECIPIENT_TO );			
			$objMessage->Subject = $_POST["CTL_SUBJECT"];
			$objMessage->AddSlide( $objSlide );
			
			$objMm1Protocol->Clear();
   			$objMm1Protocol->Device = $_POST["CTL_DEVICES"];
			$objMm1Protocol->ProviderMMSC = $CTL_SERVER;
			$objMm1Protocol->ProviderAPN = $CTL_APN;
			$objMm1Protocol->ProviderWAPGateway = $CTL_GATEWAY;
		
			if( $_POST["CTL_PINCODE"] != "" ){
			    $objMm1Protocol->EnterPin( $_POST["CTL_PINCODE"] );
			}
		
			if( $objMm1Protocol->LastError == 0 ){
			    $objMm1Protocol->Connect();
			}

			if( $objMm1Protocol->LastError == 0 ){
			    $objMm1Protocol->Send( $objMessage );
			}
		
			$numLastError =  $objMm1Protocol->LastError;

		}
		else{
			$numLastError = $objSlide->LastError;
		}

		$strLastError =  $objMm1Protocol->GetErrorDescription( $numLastError );
		$strLastResponse = $objMm1Protocol->ProviderResponse;
	
		$objMm1Protocol->Disconnect();

	}	

	function getDevices(){
		global $objMm1Protocol;
		$intDevices = $objMm1Protocol->GetDeviceCount();
		$arrDevices[0] = "No devices detected";
		for( $i = 0; $i < $intDevices; $i++ ){
			$arrDevices[$i] = $objMm1Protocol->GetDevice($i);
		}

		return $arrDevices;
	}
?>





<html>
<head>
<title>Send MMS - PHP Sample</title>

<style>
   .clbody {
   font-family:Verdana, Arial, Helvetica, sans-serif;
   font-size:9pt;
   font-weight:normal;
}
.clfooter {
   font-family:Verdana;
   font-size:7pt;
   font-weight:normal;
}
h1, .h1 {
   width:100%;
   font-family:Verdana, Arial, Helvetica, sans-serif;
   font-size:18px;
   font-weight:bold;
}
hr, .hr {
   color:#b0b0b0;
}
</style>
</head>

<body class="clbody">
<h1>Send MMS - PHP Sample</h1>

<hr size="1">




<form method="post">
<table class ="clbody" width="700">
   <tr>
       <td valign="top" width="110">Device:</td>
       <td valign="top" width="590">
          <select name="CTL_DEVICES" style="width: 250px">
		<?
			foreach( getDevices() as $device ){
				echo "<option>" . $device . "</option>";
			}
		?>
          </select>
        </td>
   </tr>
	 
   
   <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
   </tr>
   <tr>
      <td valign="top">MMSC:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_SERVER" value="<? echo $CTL_SERVER; ?>"></td>  
   </tr> 
   <tr>
      <td valign="top">Gateway:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_GATEWAY" value="<? echo $CTL_GATEWAY; ?>"></td>  
   </tr>
   <tr>
      <td valign="top">APN:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_APN" value="<? echo $CTL_APN; ?>"></td>
   </tr>
   <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
   </tr>
   <tr>
      <td valign="top">Recipient:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_RECIPIENT" value="+86"></td>
   </tr>
  
   <tr>
      <td valign="top">Subject:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_SUBJECT" value="MMS"></td>  
   </tr>
   <tr>
      <td valign="top">Message:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_MESSAGE" value="<? echo $CTL_MESSAGE; ?>"></td>
   </tr>
   <tr>
      <td valign="top">Attachment:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_ATTACHMENT" value="<? echo str_replace('\\\\', '\\', $CTL_ATTACHMENT ); ?>"></td>
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
      <td valign="top">Result:</td>
      <td valign="top"><? echo $numLastError; ?>: <? echo $strLastError; ?></td>
   </tr>
   </tr>
      <tr>
      <td valign="top">Last Response:</td>
      <td valign="top"><? echo $strLastResponse; ?></td>
   </tr>
      
</table>
<br>
<br>
</form>

<hr size="1">
<div class="clfooter">
www.xunsai.com<br>

</div>

</body>
</html>
