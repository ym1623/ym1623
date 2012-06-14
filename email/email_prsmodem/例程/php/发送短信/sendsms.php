<?
	$_objSmsProtocolGsm = new Com("Xunsaismsmms.SmsProtocolGsm");

	if( $_GET["CTL_SEND"] != "" ){
    
		//create the nessecairy com objects
		$objMessage   = new Com ("Xunsaismsmms.SmsMessage");
		$objConstants = new Com ("Xunsaismsmms.SmsConstants");
		
		//get the submitted information
		$device       = $_GET["CTL_DEVICES"];
		$speed        = $_GET["CTL_SPEED"];		
		$recipient    = $_GET["CTL_RECIPIENT"];
		$message      = $_GET["CTL_MESSAGE"];
		$unicode      = $_GET["CTL_UNICODE"];
		
		
		//configure a logfile
		$_objSmsProtocolGsm->Logfile = "C:\SMSLog.txt";
		
		//Clear the messageobject first
		$objMessage->Clear();
		
		//fill in the recipient
		if( $recipient == "" ) die("No recipient address filled in."); 
		$objMessage->Recipient = $recipient;
		
		//fill in the messageformat
		if( $unicode != "" ) $objMessage->Format = $objConstants->asMESSAGEFORMAT_UNICODE_MULTIPART;
		
		//fill in the message body
		$objMessage->Data = $message;
		
		//clear the gsm object
		$_objSmsProtocolGsm->Clear();
		
		//fill in the devicename
		$_objSmsProtocolGsm->Device = $device;
		
		//fill in the devicespeed
		if( $speed == "Default" ) $_objSmsProtocolGsm->DeviceSpeed = 0;
		if( $speed != "Default" ) $_objSmsProtocolGsm->DeviceSpeed = $speed;
		
		//fill in the pincode
		if( $pincode != "" ) $_objSmsProtocolGsm->EnterPin( $pincode );
		
		//send the message
		if( $_objSmsProtocolGsm->LastError == 0 ){
        	$_objSmsProtocolGsm->Send( $objMessage );
		}
		
		//get the results
		$LastError        = $_objSmsProtocolGsm->LastError;
		$ErrorDescription = $_objSmsProtocolGsm->GetErrorDescription( $LastError );
	}
?>

<?
//******************************************************************************
/* This function returns an array which contains all possible baudrates of
                                                                   your modem */
function getSpeeds(){
	$arrSpeed[0] = "Default";
	$arrSpeed[1] = "1200";
	$arrSpeed[2] = "2400";
	$arrSpeed[3] = "4800";
	$arrSpeed[4] = "9600";
	$arrSpeed[5] = "19200";
	$arrSpeed[6] = "38400";
	$arrSpeed[7] = "57600";
	$arrSpeed[8] = "115200";
			
	return $arrSpeed;
}
?>

<?
//******************************************************************************
// This function returns an array which contains all connected devices
function getDevices(){
	global $_objSmsProtocolGsm;
	$intDevices = $_objSmsProtocolGsm->GetDeviceCount();
	$arrDevices[0] = "No devices detected";
	for( $i = 0; $i < $intDevices; $i++ ){
		$arrDevices[$i] = $_objSmsProtocolGsm->GetDevice($i);
	}
				 
	return $arrDevices;
}
?>

<html>
<head>
<title>Send SMS - PHP Sample</title>

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
<h1>Send SMS - PHP Sample</h1>
<hr size="1">


<form>
<table class ="clbody" width="700">
   <tr>
       <td valign="top" width="110">Device:</td>
       <td valign="top" width="590">
          <select name="CTL_DEVICES" style="width: 250px">
             <?
                foreach( getDevices() as $device ){
                   $currentDevice = $_GET['CTL_DEVICES'];
                   if( $currentDevice == $device ) $selected = " SELECTED";
                   if( $currentDevice != $device ) $selected = "";

                   echo "<option value='" . $device . "'>" . 
                                            $device . "</option>\n";
                }
             ?>
          </select>
       </td>
   </tr>
   <tr>
       <td valign="top">Speed:</td>
       <td valign="top">
          <select name="CTL_SPEED" style="width: 250px">
             <?
                foreach( getSpeeds() as $speed ){
								
                  $currentSpeed = $_GET['CTL_SPEED'];
                  if( $currentSpeed == $speed ) $selected = " SELECTED";
                  if( $currentSpeed != $speed ) $selected = "";
									
                  echo "<option value='" . $speed . "'" . $selected . ">" .
                                           $speed . "</option>\n";
                }
             ?>
          </select>
          
        </td>
   </tr>


   <tr>
      <td valign="top">Recipient:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_RECIPIENT" value="<? echo $_GET['CTL_RECIPIENT']; ?>"></td>
   </tr>
   <tr>
      <td valign="top">Message:</td>
      <td valign="top"><input style="width: 250px" type="text" name="CTL_MESSAGE" value="<? echo $_GET['CTL_MESSAGE']; ?>"></td>
   </tr>
   <tr>
      <td valign="top">Unicode:</td>
      <td valign="top">
         <?
            if( $_GET['CTL_UNICODE'] != "" ){
               echo '<input  type="checkbox" name="CTL_UNICODE" value="uni" checked>&nbsp;Unicode';
            }
            else{
               echo '<input  type="checkbox" name="CTL_UNICODE" value="uni">&nbsp;Unicode';
            }
         ?>
      </td>
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
      <td valign="top"><? echo $LastError . ": " . $ErrorDescription; ?></td>
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
