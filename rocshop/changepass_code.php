<?php 
include("sessioncode.php");
$usrid=$_POST['usrid'];
$oldpass=$_POST['oldpass'];
$pass2=$_POST['pass2'];
$qry=mysql_query("select store_id from stores where store_id='$usrid' and pass='$oldpass' ");
$ertewer=mysql_num_rows($qry);

if ($ertewer > 0)
{
mysql_query("update stores set pass='$pass2' where store_id='$usrid'");

echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(1);}var refresh=setInterval('update()',2500);</script></head><body onload=refresh><div align=center><center>
      <br /><br /><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td><table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Password Changed Successfully  !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
	  mysql_close($rocconnect);
}
else 
{
echo "<html><head><title>ROP Club :: Error</title><script>function update(){history.back(1);}var refresh=setInterval('update()',2500);</script></head><body onload=refresh><div align=center><center>
           <br /><br /><br /><br /><br /><br /><br /><br /> <table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td><table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Error: Password Cannot be changed !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}
?>