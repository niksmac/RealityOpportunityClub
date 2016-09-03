<?php 
function getchilds($parent)
{
$lefts='NA';$rights='NA';
$ssdgfs=mysql_query("select lefts,rights from royalty where rocref='$parent' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$lefts =$tyiyui['lefts'];
$rights =$tyiyui['rights'];
}
return compact('lefts', 'rights');
}




function showlink($newid)
{
$pnode=$_GET['id'];
if  ($pnode == $newid)
$myvar = "<img src='img/me.JPG' alt='Myself ' border='0' />";
else if ($newid !='NA')
{
$ssdgfs=mysql_query("select mmbr_id from royalty where rocref='$newid' ");
while($tyiyui=mysql_fetch_array($ssdgfs)){
$mmbr_idk =$tyiyui['mmbr_id'];}
if ($mmbr_idk == "ROC")
$myvar = "<img src='img/roc-logo-smal.png' alt='ROC ' border='0' />";
else if ($mmbr_idk == 0)
$myvar = "<img src='img/green-fade.JPG' border='0' />";
else
$myvar = "<img src='img/green.jpg' alt='$newid'  width='48' height='56' border='0' />";
}
else 
$myvar = "<img src='img/green-fade.JPG' width='48' height='56' border='0' />";
return $myvar;
}



function shownames($mmbrid)
{
$Name = "";
$ssdgfs=mysql_query("select mmbr_id from royalty where rocref='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_idk =$tyiyui['mmbr_id'];
}
if (mysql_num_rows ($ssdgfs) == 0)
return  "";
else
{
$ssdgfsgf=mysql_query("select Name from members where MemberID='$mmbr_idk' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$Name =$tyivyfui['Name'];
}
return $Name;
}
}




function showid($mmbrid)
{
$noms ="NA";
$ssdgfs=mysql_query("select mmbr_id from royalty where rocref='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_idk =$tyiyui['mmbr_id'];
}
if (mysql_num_rows ($ssdgfs) == 0)
return $noms;
else 
return $mmbr_idk;
}


function getpath($parent)
{
$ssdgfs=mysql_query("select rocref from royalty where mmbr_id='$parent' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$paths =$tyiyui['rocref'];
}
return $paths;
}



function lastidonlevel($runninglevel)
{
$ssdgfs=mysql_query("select rocref from royalty where levels='$runninglevel' and id=(select max(id) from royalty) ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_id =$tyiyui['rocref'];
}
return $mmbr_id;
}



function getmylevel($mmbrid)
{
$ssdgfs=mysql_query("select levels from royalty where rocref='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mylevel =$tyiyui['levels'];
}
return $mylevel;
}



function getmylevelonmid($mmbrid)
{
$ssdgfs=mysql_query("select MemberID from members where MemberID='$mmbrid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$MemberID =$tyiyui['MemberID'];
}
return $MemberID;
}



function getparentid($runninglevel)
{
$ssdgfs=mysql_query("select mmbr_id from royalty where levels='$runninglevel' and id=(select max(id) from royalty) ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$mmbr_id =$tyiyui['mmbr_id'];
}
return $mmbr_id;
}




function pickparent($myid,$myvar)
{
	for ($i=1; $i<=$myvar; $i++)
	{
		$myid = $myid / 2;
		$myid = (int) $myid;
	}
return $myid;
}




function findlastrebirth($pid)
{
	$ssdgfs=mysql_query("select rocref from royalty where reb_ref REGEXP '^$pid' ");
	while($tyiyui=mysql_fetch_array($ssdgfs))
	{
		$rocref =$tyiyui['rocref'];
	}
	
	if (mysql_num_rows ($ssdgfs) == 0)
	return $pid;
	else
	return $rocref;
}



function getreqfield($id,$fld)
{
	$qry = "select ".$fld." from members where MemberID ='$id'";
	$ssdgfs=mysql_query($qry);
	while($tyiyui=mysql_fetch_array($ssdgfs))
	{
		$fldout =$tyiyui[$fld];
	}
	
	return $fldout;
}


?>
