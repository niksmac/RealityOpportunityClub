<?php 


function rightBvSum($rocuname)
{
$_SESSION['bv'] = 0;

$unametr=$rocuname;

$qwerty=mysql_query("select RChildID from childstatus where ParentID='$unametr' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$RChildID=$huibc['RChildID'];
}
mychilds($RChildID);
showme($RChildID);
echo $_SESSION['bv'];
}


function showme($usrid)
{
$sumbvs = bvsum($usrid); $mybvsum = $sumbvs + 0; totalSideBv($mybvsum);
}

function totalSideBv($bv)
{
$_SESSION['bv'] += $bv;
}

function bvsum($usrid)
{
$fgh=mysql_query("select bv from bvafterclose where memberid='$usrid' ");
while($tyuty=mysql_fetch_array($fgh)) { 
$lastbvv = $tyuty['bv'];
}
return $lastbvv;
}
function mychilds($uname)
{
	
$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
$RChildID=$huibc['RChildID'];

if ($LChildID != 0){
mychilds($LChildID);
showme($LChildID);
}

if ($RChildID != 0){
mychilds($RChildID);
showme($RChildID);
}
}

}

?>