<?php
session_start();
include ("lib/function_lib.php");
include ("connect/connect.php");
//echo $_SESSION['secretword'];

    if (empty($_SESSION['secretword']) || trim(strtolower($_POST['captcha'])) != $_SESSION['secretword']) 
	{
				echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Error !!</title>  <link href='css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-1);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='errormsg' > <div><strong>Error Found </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";
    } 
	else 
	{
				$ropid=$_POST['ropid'];
				$qtype=$_POST['qtype'];
				$po=$_POST['po'];
				$dstrct=$_POST['dstrct'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$name=$_POST['name'];
				$message=$_POST['message'];	
				$mailto="info@ropclub.in, support@ropclub.com";
				$mailfrom = "www.ropclub.com : ";
				$http_referrer = getenv( "HTTP_REFERER" );
				
				$messageproper = "<table width='75%' border='0' cellspacing='0' cellpadding='4'>
				<tr>
				<td colspan='3' align='center' valign='middle' bgcolor='#009966'>-------------------- Mail From : <font color='#222d45'>$email</font> --------------------</td>
				</tr>
				<tr>
				<td width='25%' align='left' valign='top'>Name </td>
				<td width='2%' align='left' valign='top'>:</td>
				<td align='left' valign='top'>$name</td>
				</tr>
				<tr>
				<td align='left' valign='top'>ROC ID</td>
				<td align='left' valign='top'>:</td>
				<td align='left' valign='top'>$ropid</td>
				</tr>
				<tr>
				<td width='25%' align='left' valign='top'>E-mail</td>
				<td width='2%' align='left' valign='top'>:</td>
				<td align='left' valign='top'><a href='mailto:$email'>$email</a></td>
				</tr>
				<tr>
				<td width='25%' align='left' valign='top'>Phone</td>
				<td width='2%' align='left' valign='top'>:</td>
				<td align='left' valign='top'>$phone</td>
				</tr>
				<tr>
				<td align='left' valign='top'>District</td>
				<td align='left' valign='top'>:</td>
				<td align='left' valign='top'>$dstrct</td>
				</tr>
				<tr>
				<td width='25%' align='left' valign='top'>Post Office</td>
				<td width='2%' align='left' valign='top'>:</td>
				<td align='left' valign='top'>$po</td>
				</tr>
				<tr>
				<td colspan='3' align='center' valign='middle' bgcolor='#009966'>-------------------- $name : Says<font color='#222d45'>&nbsp;</font> --------------------</td>
				</tr>
				<tr>
				<td colspan='3' align='left' valign='top'><div align='justify' style='margin:10px;'>$message</div></td>
				</tr>
				<tr>
				<td height='5' colspan='3' align='left' valign='top' bgcolor='#990000'></td>
				</tr>
				</table>";
				
				$from= 'someone@example.com' ;
				$headers = "From: " . "$name" . "<" . "$from" . ">\n";
				$headers .= "User-Agent: Mail/1.0.0\n";
				$headers .= "MIME-Version: 1.0\n";
				$headers .= "X-Sender: <" . "$mailto" . ">\n";
				$headers .= "Return-Path: <" . "$mailto" . ">\n";
				$headers .= "Error-To: <" . "$mailto" . ">\n";
				$headers .= "Content-Type: text/html;charset=utf-8\n";
				$headers .= "Content-Transfer-Encoding: 8bit\n";
				$headers .= "X-Priority: 3 (Normal)\n";
				$headers .= "Importance: Normal\n";
				// if(mail($mailto, $subject, $messageproper,"MIME-Version: 1.0\n"."Content-type: text/html; charset=iso-8859-1"))
				
				if ($name != "")
				$erewr = mail($mailto, $qtype, $messageproper,$headers);
				
				if($erewr)
				{
				echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Succes !!</title>  <link href='css/screen.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-1);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='successmsg' > <div><strong>Operation Success </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";
				}
}
?>

