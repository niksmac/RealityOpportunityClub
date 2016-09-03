<?php 
include("../connect/session.php");
$store=$_POST['store'];
$cat_id=$_POST['cat_id'];
$brandname=$_POST['brandname'];
$items=$_POST['items'];
$qty=$_POST['qty'];
$qry=mysql_query("select * from itemsnew where cat_id='$cat_id' and brandname='$brandname'");
while($qrys=mysql_fetch_array($qry))
{
$quantity=$qrys['quantity'];
$prdct_id=$qrys['prdct_id'];
}
$cur_stk=$quantity-$qty;
if ($cur_stk >= 0 )
{
$mnths=date('F', mktime(0,0,0,date('m'),1));
$dates=date("d-m-Y");
mysql_query("insert into issueddetails(store, cat_id, brandname, items, qty, mnth,dates) values ('$store','$cat_id','$brandname', '$items','$qty','$mnths','$dates')");
mysql_query("update itemsnew set quantity='$cur_stk' where cat_id='$cat_id' and brandname='$brandname'" );

mysql_query("insert into storestock (store_id, itm_id, qty, dates) values ('$store','$prdct_id','$qty', '$dates')");

echo "<html><head><title>UCP :: Success</title><script>function update(){history.go(-1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center>
      <table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: Product issued successfully !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font>
    <a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}
else if ($cur_stk < 0 )
{
echo "<html><head><title>UCP :: Error</title><script>function update(){history.go(-1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center>
      <table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Error: Invalid Operation !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font>
    <a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}
?>