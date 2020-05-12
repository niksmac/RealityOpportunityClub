<?php 

include("session.php");

$frm = 'postmaster@ropclub.com';
$subject = 'Hello';
$mailto = 'someone@example.com';

$msg = '<br /><br /><br /><table width="95%" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#669933" style="border-collapse:collapse;">
  <tr>
    <td colspan="2"  align="left" valign="top" bgcolor="#669933"><h3><font color="#FFFFFF">Reality Opportunity Club</font></h3>
      <h5><font color="#FFFFFF">Product Order</font></h5></td>
  </tr>
  <tr>
    <td width="13%" align="left" valign="top" ><font size="2" face="Tahoma">Booking Number </font></td>
    <td width="87%" align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Product Code </font></td>
    <td align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Product Name </font></td>
    <td align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Product Qty. </font></td>
    <td align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Shop</font></td>
    <td align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Billing Address</font></td>
    <td align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" ><font size="2" face="Tahoma">Click <a href="http://www.ropclub.com/olsupplier/">HERE</a> to Login</font></td>
  </tr>
  
</table>
 ';



sendemail($frm, $subject, $mailto,$msg );


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

?>