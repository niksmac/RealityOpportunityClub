<?php 
include("../connect/session.php");

$singemail=$_POST['singemail'];
$multemail=$_POST['multemail'];
$subject=$_POST['subject'];
echo $msgpost=$_POST['msgpost'];
$chkfull=$_POST['chkfull'];






/*$mailfrom = "someone@example.com";


if ($chkfull == 1)
{
	$qryfh=mysql_query("select Email from members");
	while($qryshf=mysql_fetch_array($qryfh))
	{
	$Email=$qryshf['Email'];
	sendemail($mailfrom, $subject, $Email,$msgpost );
	}
	echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: All mails Sent Successfully  !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
		
}
else
{
	sendemail($mailfrom, $subject, $multemail,$msgpost );
	echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: All mails Sent Successfully !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}

mysql_close($rocconnect); 

function sendemail($frm, $subject, $mailto, $msg)
{
			$http_referrer = getenv( "HTTP_REFERER" );			
			$headers = "MIME-Version: 1.0\n";
			$headers .= "From:Reality Opportunity Club" . "<" . "$frm" . ">\n";
			$headers .= "User-Agent: Mail/1.0.0\n";
			$headers .= "X-Sender: <" . "$frm" . ">\n";
			$headers .= "Return-Path: <" . "$frm" . ">\n";
			$headers .= "Error-To: <" . "$frm" . ">\n";
			$headers .= "Content-Type: text/html;charset=utf-8\n";
			$headers .= "Content-Transfer-Encoding: 8bit\n";
			$headers .= "X-Priority: 3 (Normal)\n";
			$headers .= "Importance: Normal\n";
			mail($mailto, $subject, $msg,$headers);
}
*/
?>