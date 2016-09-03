<?php 
include("../connect/session.php");
$today = date("d-m-Y");  
$mmbr_id="ROC";
$rocroyal=$_POST['rocroyal'];
$rebs=0;
$finamt = $rocroyal * 150;

mysql_query ("update rocroyaltycapitalsummary set debits=debits+'$finamt', balance=balance-'$finamt' where mmbr_id='ROC' ");
mysql_query ("insert into rocroyaltyaccountdetail (mmbr_id, debits, credits, dates	, descriptn) values ('ROC','$finamt',0,'$today','ROC To Royalty' )");

for ($i=1; $i<=$rocroyal;$i++)
{
	
		
$qryh=mysql_query("select * from royalty where lefts=0 or rights=0 ");
while($qrysh=mysql_fetch_array($qryh))
{
 $indref=$qrysh['mmbr_id'];
 $lefts=$qrysh['lefts'];
 $rights=$qrysh['rights'];
 $rocref=$qrysh['rocref'];
 $levels=$qrysh['levels'];
break;
}


if ($lefts==0) 
{
$levelsk	= $levels + 1;
$pathsnew = $rocref * 2;
$reslt = mysql_query( "update royalty set lefts='$pathsnew' where rocref='$rocref' and lefts=0 ");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights, rocref, noofrebs,dates,levels,reb_ref,typ ) values('$mmbr_id', 0,0, '$pathsnew', '$rebs', '$today', '$levelsk',0,0)");
}

}
else if ($rights==0) 
{
	$levelsk	= $levels + 1;
$pathsnew = ($rocref * 2) + 1;
$er =mysql_query("update royalty set rights='$pathsnew' where rocref='$rocref' and rights=0");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights, rocref, noofrebs,dates,levels,reb_ref,typ ) values('$mmbr_id', 0,0, '$pathsnew', '$rebs', '$today', '$levelsk',0,0)");
}
} 

}//------------- loop ----------------

echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: Royalty entry Success !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";


?>