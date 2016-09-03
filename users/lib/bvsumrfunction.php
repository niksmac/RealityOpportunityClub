<?php 



function leftBvSum($rocuname)
{
$_SESSION['bvl'] = 0;

$unametr=$rocuname;

$qwerty=mysql_query("select LChildID from childstatus where ParentID='$unametr' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
}
mychildss($LChildID);
showmee($LChildID);
echo $_SESSION['bvl'];
}


function showmee($usrid)
{
$sumbvs = bvsumm($usrid); $mybvsumm = $sumbvs + 0; totalSideBvv($mybvsumm);
}

function totalSideBvv($bv)
{
$_SESSION['bvl'] += $bv;
}

function bvsumm($usrid)
{
$fgh=mysql_query("select bv from bvafterclose where memberid='$usrid' ");
while($tyuty=mysql_fetch_array($fgh)) { 
$lastbvv = $tyuty['bv'];
}
return $lastbvv;
}
function mychildss($uname)
{
	
$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
$RChildID=$huibc['RChildID'];

if ($LChildID != 0){
mychildss($LChildID);
showmee($LChildID);
}

if ($RChildID != 0){
mychildss($RChildID);
showmee($RChildID);
}
}

}

?>