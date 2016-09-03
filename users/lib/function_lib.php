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

$newidm = decbin ($newid);


if ($Gender == "Male")
$myvar = "<a href='$mylink?id=$newidm' title='ajax:getdetails.php?id=$newid'><img src='img/maleuser.jpg'  width='48'border='0' /></a>";
else if($Gender == "Female")
$myvar = "<a href='$mylink?id=$newidm' title='ajax:getdetails.php?id=$newid'><img src='img/femaleuser.jpg'  width='48' border='0' /></a>";
else if($Gender == "")
$myvar = "<a href='$mylink?id=$newidm' title='ajax:getdetails.php?id=$newid'><img src='img/maleuser.jpg'  width='48' border='0' /></a>";
}
else 
$myvar = "<img src='img/green-fade.JPG' width='48' border='0' />";


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


function convert_number($number) 
{ 
    $Gn = floor($number / 1000000);  /* Millions (giga) */ 
    $number -= $Gn * 1000000; 
    $kn = floor($number / 1000);     /* Thousands (kilo) */ 
    $number -= $kn * 1000; 
    $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
    $number -= $Hn * 100; 
    $Dn = floor($number / 10);       /* Tens (deca) */ 
    $n = $number % 10;               /* Ones */ 

    $res = ""; 

    if ($Gn) 
    { 
        $res .= convert_number($Gn) . " Million"; 
    } 

    if ($kn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($kn) . " Thousand"; 
    } 

    if ($Hn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($Hn) . " Hundred"; 
    } 

    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
        "Nineteen"); 
    $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
        "Seventy", "Eigthy", "Ninety"); 

    if ($Dn || $n) 
    { 
        if (!empty($res)) 
        { 
            $res .= " and "; 
        } 

        if ($Dn < 2) 
        { 
            $res .= $ones[$Dn * 10 + $n]; 
        } 
        else 
        { 
            $res .= $tens[$Dn]; 

            if ($n) 
            { 
                $res .= "-" . $ones[$n]; 
            } 
        } 
    } 

    if (empty($res)) 
    { 
        $res = "zero"; 
    } 

    return $res." Only"; 
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




?>
