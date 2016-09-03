<?php 
include("../connect/olsession.php");

$prodid = $_POST['inputString'];
$prodqty = $_POST['prodqty'];
$rocid = $_POST['rocid'];
$linetotal = $_POST['linetotal'];
$orderno = $_POST['orderno'];
$memname = $_POST['memname'];
$memaddress = $_POST['memaddress'];
$memfon = $_POST['memfon'];
$bill_address = $memname. "<br>" .$memaddress. "<br>" ."PH:". $memfon;		
$qrtyh=mysql_query("select dist_price,supp_id,prod_name,roc_bp  from ol_products where prod_code = '$prodid'");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$dist_price =$qraysjh['dist_price'];
$supp_id =$qraysjh['supp_id'];
$prod_name =$qraysjh['prod_name'];
}
$qrgftyh=mysql_query("select balamt  from  olshops_acc where olshopid = '$uname'");
while($qraydsjh=mysql_fetch_array($qrgftyh))
{
$shpbalamt =$qraydsjh['balamt'];
}

$poiuyt=mysql_query("select address  from  olshops where store_id = '$supp_id'");
while($mmmmm=mysql_fetch_array($poiuyt))
{
$shpaddress = $mmmmm['address'];
}


$newcramt = $dist_price * $prodqty;
$shpnewbal = $shpbalamt - $newcramt;
if ($shpnewbal >= 0 ) 
{
mysql_query (" INSERT INTO ol_bills ( order_no, shopid, prodid,supp_id, prodqty, bill_amt, memid, bill_address, bill_date) VALUES ('$orderno', '$uname', '$prodid','$supp_id', '$prodqty', '$linetotal', '$rocid', '$bill_address', now() ) ");
mysql_query (" update olshops_acc set  balamt = balamt-$newcramt where olshopid = '$uname' ");
mysql_query (" update ol_products set  pro_stock = pro_stock-$prodqty where prod_code = '$prodid' ");
$particlr = $orderno.' - Product Order';
mysql_query (" INSERT INTO olshops_acc_det (stor_id, ac_date, particulars, debits) VALUES ('$uname', now(), '$particlr', '$newcramt') ");
mysql_query (" INSERT INTO olmaster_acc_det (stor_id, ac_date, particulars, credits) VALUES ('$uname', now(), '$particlr', '$newcramt') ");


$msg = '<br /><br /><br /><table width="95%" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#669933" style="border-collapse:collapse;">
  <tr>
    <td colspan="2"  align="left" valign="top" bgcolor="#669933"><h3><font color="#FFFFFF">Reality Opportunity Club</font></h3>
      <h5><font color="#FFFFFF">Product Order</font></h5></td>
  </tr>
  <tr>
    <td width="13%" align="left" valign="top" ><font size="2" face="Tahoma">Booking Number </font></td>
    <td width="87%" align="left" valign="top" >$orderno</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Product Code </font></td>
    <td align="left" valign="top" >$prodid</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Product Name </font></td>
    <td align="left" valign="top" >$prod_name</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Product Qty. </font></td>
    <td align="left" valign="top" >$prodqty</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Shop</font></td>
    <td align="left" valign="top" >$uname</td>
  </tr>
  <tr>
    <td align="left" valign="top" ><font size="2" face="Tahoma">Billing Address</font></td>
    <td align="left" valign="top" >$shpaddress</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" ><font size="2" face="Tahoma">Click <a href="http://www.ropclub.com/olsupplier/">HERE</a> to Login</font></td>
  </tr></table>';

$frm = 'postmaster@ropclub.com';
$subject = 'Product Order';
$mailto = 'nikhilmkumar@gmail.com, info@ropclub.com';

 
//sendemail($frm, $subject, $mailto,$msg );

//header('Location:'."olproductorder.php?s");
}
else 
{
//header('Location:'."olproductorder.php?f");
}


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