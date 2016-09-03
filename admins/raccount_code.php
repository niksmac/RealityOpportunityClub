<?php 
include("../connect/session.php");
$mmbr_id=$_POST['mmbr_id'];
$noofentry=$_POST['noofentry'];
$ertert = $noofentry * 600;
$today = date("d-m-Y");  
mysql_query ("insert into rocroyaltyaccountdetail (mmbr_id, debits, credits, dates	, descriptn) values ('$mmbr_id',0,'$ertert','$today','Inv By - $mmbr_id' )");
mysql_query ("update rocroyaltycapitalsummary set credits=credits+'$ertert', balance=balance+'$ertert' where mmbr_id='ROC' ");

echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: Royalty Activation Success !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";

?>