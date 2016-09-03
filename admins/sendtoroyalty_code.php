<?php 
include("../connect/session.php");
$rebs =0;
$mmbr_id=$_POST['mmbr_id'];
$noofentry=$_POST['noofentry'];
$rebs=$_POST['rebs'];
$typ=$_POST['typ'];
$today = date("d-m-Y");  

for ($i=1; $i<=$noofentry;$i++)
{
	
	mysql_query ("insert into rocroyaltyaccountdetail (mmbr_id, debits, credits, dates	, descriptn) values ('$mmbr_id',150,0,'$today','Entry To Royalty' )");
	mysql_query ("update rocroyaltycapitalsummary set debits=debits+150, balance=balance-150 where mmbr_id='ROC' ");

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
mysql_query("insert into royalty (mmbr_id,lefts,rights, rocref, noofrebs,dates,levels,typ,reb_ref ) values('$mmbr_id', 0,0, '$pathsnew', '$rebs', '$today', '$levelsk', '$typ', 'F')");
}
}
else if ($rights==0) 
{
$levelsk	= $levels + 1;
$pathsnew = ($rocref * 2) + 1;
$er =mysql_query("update royalty set rights='$pathsnew' where rocref='$rocref' and rights=0");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights, rocref, noofrebs,dates,levels,typ,reb_ref ) values('$mmbr_id', 0,0, '$pathsnew', '$rebs', '$today', '$levelsk', '$typ', 'F')");
}
} 

$result = mysql_query("select MAX(levels) from royalty");
$data = mysql_fetch_array($result);
$runninglevel=$data[0];

$j=(pow (2, ($runninglevel - 3	) ) );


for ($h=1; $h<=$j; $h++)
{
 $node = (pow (2, $runninglevel) -1 ) +8 * $h; //echo " --<br>";
if ($pathsnew == $node)
{
	
 $frsttop = (int) ($node / 2);
 $scndtop = (int) ($frsttop / 2);
 $rebid = (int) ($scndtop / 2);
echo $pathsnew;echo " --<br>";
echo $rebid;
if (rocentry($rebid)){
rebirthme($rebid);
}
}
}
}//------------- loop ----------------

echo "<html><head><title>ROP Club :: Success</title><script>function update(){history.back(-1);}var refresh=setInterval('update()',0);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: Royalty entry Success !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
		
function rocentry($id)
{
	$today = date("d-m-Y"); 
	$qrysdh=mysql_query("select mmbr_id,noofrebs from royalty where rocref='$id' ");
	while($qrysh=mysql_fetch_array($qrysdh))
	{
 	$mmbr_id=$qrysh['mmbr_id'];
	$noofrebs=$qrysh['noofrebs'];
	}
	if ($mmbr_id == "ROC") 
	{
mysql_query ("insert into rocroyaltyaccountdetail (mmbr_id, debits, credits, dates	, descriptn) values ('ROC',0,1200,'$today','Rebirth Capital - $mmbr_id' )");
mysql_query ("update rocroyaltycapitalsummary set credits=credits+1200, balance=balance+1200 where mmbr_id='ROC' ");
	return false;
	}
	else if ($mmbr_id != "ROC" && $noofrebs == 0) 
	return false;
	else  
	return true;
	
}

function rebirthme($id)
{

$today = date("d-m-Y"); 

	mysql_query ("insert into rocroyaltyaccountdetail (mmbr_id, debits, credits, dates	, descriptn) values ('$mmbr_id',150,0,'$today','Entry To Royalty' )");
	mysql_query ("update rocroyaltycapitalsummary set debits=debits+150, balance=balance-150 where mmbr_id='ROC' ");
	
	

$qryh=mysql_query("select lefts,rights,rocref,levels from royalty where lefts=0 or rights=0 ");
while($qrysh=mysql_fetch_array($qryh))
{
 $lefts=$qrysh['lefts'];
 $rights=$qrysh['rights'];
 $rocref=$qrysh['rocref'];
 $levels=$qrysh['levels'];
break;
}

$qjhgjhryh=mysql_query("select noofrebs,mmbr_id from royalty where rocref='$id' ");
while($qryfgfgfgfgsh=mysql_fetch_array($qjhgjhryh))
{
$oldrebs=$qryfgfgfgfgsh['noofrebs'];
$mmbr_id=$qryfgfgfgfgsh['mmbr_id'];
}

$noofrebs = $oldrebs - 1;

if ($lefts==0) 
{
$levelsk	= $levels + 1;
$pathsnew = $rocref * 2;
$new_reb_ref = $id."~".$pathsnew;
$reslt = mysql_query( "update royalty set lefts='$pathsnew' where rocref='$rocref' and lefts=0 ");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights, rocref, noofrebs,dates,levels,reb_ref ) values('$mmbr_id', 0,0, '$pathsnew', '$noofrebs', '$today', '$levelsk','$new_reb_ref')");
}
}
else if ($rights==0) 
{
$levelsk	= $levels + 1;
$pathsnew = ($rocref * 2) + 1;
$new_reb_ref = $id."~".$pathsnew;
$er =mysql_query("update royalty set rights='$pathsnew' where rocref='$rocref' and rights=0");
if (mysql_affected_rows() == true )
{
mysql_query("insert into royalty (mmbr_id,lefts,rights, rocref, noofrebs,dates,levels,reb_ref ) values('$mmbr_id', 0,0, '$pathsnew', '$noofrebs', '$today', '$levelsk','$new_reb_ref')");
}
}

mysql_query ("insert into memberaccdetail (MemberId, debits, credits, dates	, descriptn) values ('$mmbr_id',0,1000,'$today','Royalty Hit' )");
mysql_query ("update memberacc set credits=credits+1000, balance=balance+1000 where MemberId='$mmbr_id' ");
mysql_query ("insert into rocroyaltyaccountdetail (mmbr_id, debits, credits, dates	, descriptn) values ('$mmbr_id',0,200,'$today','Rebirth Capital - $mmbr_id' )");
mysql_query ("update rocroyaltycapitalsummary set credits=credits+200, balance=balance+200 where mmbr_id='ROC'");



}

?>