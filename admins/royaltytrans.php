<?php 
include("../connect/session.php");
$actn=$_POST['actn'];
$amt=$_POST['amt'];
if ($actn == "+")
{
mysql_query("insert into  rocroyaltyaccountdetail (mmbr_id, debits,credits, dates,descriptn) values ('$id', 0, '$amt', '$today','Deposit') ");
mysql_query("update rocroyaltycapitalsummary  set credits=credits+'$amt',balance=balance+'$amt' where mmbr_id='ROC'");
}
else if ($actn == "-")
{
mysql_query("insert into  rocroyaltyaccountdetail (mmbr_id, debits,credits, dates,descr) values ('$id', '$amt', , '$today','Withdraw') ");
mysql_query("update rocroyaltycapitalsummary  set debits=debits+'$amt',balance=balance-'$amt' where mmbr_id='ROC'");
}
echo "<html><head><title>ROP Club :: Success</title><script>function update(){window.location='royaltyaccount.php?acc';}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td><table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: Requested action Performed !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript:history.go(-3); text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
?>