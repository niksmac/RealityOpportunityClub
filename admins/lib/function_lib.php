<?php 
function getchilds($parent)
{
$lefts='NA';$rights='NA';
$ssdgfs=mysql_query("select LChildID,RChildID from childstatus where ParentID='$parent' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$lefts =$tyiyui['LChildID'];
$rights =$tyiyui['RChildID'];
}
return compact('lefts', 'rights');
}

function showlink($newid)
{
$mylink = $_SERVER['PHP_SELF'];

if ($newid !=0)
{
$ssdgfs=mysql_query("select MemberID,Gender from members where MemberID='$newid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$MemberID =$tyiyui['MemberID'];
$Gender =$tyiyui['Gender'];
}
if ($Gender == "Male")
$myvar = "<a href='$mylink?id=$newid' title='ajax:getdetails.php?id=$newid'><img src='images/maleuser.jpg'  width='48'border='0' /></a>";
else if($Gender == "Female")
$myvar = "<a href='$mylink?id=$newid' title='ajax:getdetails.php?id=$newid'><img src='images/femaleuser.jpg'  width='48' border='0' /></a>";
else if($Gender == "")
$myvar = "<a href='$mylink?id=$newid' title='ajax:getdetails.php?id=$newid'><img src='images/maleuser.jpg'  width='48' border='0' /></a>";
}
else 
$myvar = "<img src='images/green-fade.JPG' width='48' border='0' />";


return $myvar;
}

function shownames($mmbrid)
{

$Name = "";
if ($mmbrid == 0)
return  "NA";
else
{
$ssdgfsgf=mysql_query("select Name from members where MemberID='$mmbrid' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$Name =$tyivyfui['Name'];
}
return $Name;
}

}

function showid($mmbrid)
{
return $mmbrid;
}


function getclosedates($mmbrid)
{
$ssdgfsgf=mysql_query("select close_date from closings where close_no='$mmbrid' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$close_date =$tyivyfui['close_date'];
}
return $close_date;
}


?>
