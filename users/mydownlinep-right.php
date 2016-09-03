<table width="95%" border="1" align="center" cellpadding="5" cellspacing="0" style="background-color:White;border-color:Green;border-width:1px;border-collapse:collapse; margin-bottom:100px;">
  <tr>
    <td colspan="7" align="center" valign="middle" bgcolor="#DEF4DD" class="headorngsml"><h2>RIGHT PRIMARY DOWNLINE</h2></td>
  </tr>
  <tr>
    <td width="19" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><u><strong>No</strong></u></h4></td>
    <td width="44" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><u><strong>ROC ID</strong></u></h4></td>
    <td width="72" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><u><strong>Primary ID</strong></u></h4></td>
    <td width="36" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><u>Level</u></h4></td>
    <td width="226" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><u><strong>Name</strong></u></h4></td>
    <td width="40" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><u><strong>Points</strong></u></h4></td>
    <td width="127" align="left" valign="middle" bgcolor="#DEF4DD" ><h4><strong><u>Points</u></strong></h4></td>
  </tr>
<?php 
include("../connect/session.php");
unset($_SESSION['count']);
$_SESSION['count']=1;
$uname=$_SESSION['uname'];


$qwerrtty=mysql_query("select primaryid,level from primarytree where memid='$uname' ");
while($husibc=mysql_fetch_array($qwerrtty))
{ 
$primaryid=$husibc['primaryid'];
$tlevel=$husibc['level'];
break;
}

$qwerrtty=mysql_query("select rightid from primarytree where primaryid='$primaryid' ");
while($husibc=mysql_fetch_array($qwerrtty))
{ 
$rightid=$husibc['rightid'];
}

mychilds($rightid);

function mychilds($unamek)
{	
$qwerty=mysql_query("select leftid,rightid from primarytree where primaryid='$unamek' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$leftid=$huibc['leftid'];
$rightid=$huibc['rightid'];
if ($leftid != 0){
mychilds($leftid);
showme($leftid);
}
if ($rightid != 0){
mychilds($rightid);
showme($rightid);
}
}
}



function showme($usrid)
{
$qwerrtty=mysql_query("select memid,kittype,level from primarytree where primaryid='$usrid' ");
while($husibc=mysql_fetch_array($qwerrtty))
{ 
	$memid=$husibc['memid'];
	$kittype=$husibc['kittype'];
	$level=$husibc['level'];
	showmee($memid,$kittype,$usrid,$level);
	break;
}

}


showme($rightid);



function showmee($usrid,$kittype,$pid,$level)
{

$puyv=mysql_query("select incentive from primarytreekit where ident = '$kittype' ");
while($hreed=mysql_fetch_array($puyv))
{ 
$kitname=$hreed['incentive'];
}
$count=$_SESSION['count']++;
$qwerty=mysql_query("select MemberID,Name from members where MemberID='$usrid' ");
while($huibch=mysql_fetch_array($qwerty))
{ 
$MemberIDa=$huibch['MemberID'];
$Namea=$huibch['Name'];

$qwerty=mysql_query("select l_count,r_count from primaryacc where pid='$pid' ");
while($huibch=mysql_fetch_array($qwerty))
{ 
$l_count=$huibch['l_count'];
$r_count=$huibch['r_count'];
}
global $tlevel;
$usrlevel = $level - $tlevel ;
?>
<tr>
    <td align='left' valign='middle' class='ropcontents'><?php echo $count; ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $MemberIDa; ?>  &nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $ppid = "P".$pid; ?>&nbsp;<a href="primaryplantre.php?id=<?php echo $ppid; ?>" class="mores" title="View Tree">[+]</a></td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $usrlevel; ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $Namea;  ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $kittype; ?>&nbsp; </td>
    <td align='center' valign='middle' class='ropcontents'>
    <table width="125" border="1" cellpadding="2" cellspacing="0" bordercolor="#66CC33" style="border-collapse:collapse;">
      <tr>
        <td width="23"  align="center" valign="middle">L&nbsp;</td>
        <td width="26"  align="center" valign="middle"><?php echo $l_count; ?>&nbsp;</td>
        <td width="25"  align="center" valign="middle">R&nbsp;</td>
        <td width="25"  align="center" valign="middle"><?php echo $r_count; ?>&nbsp;</td>
      </tr>    
    </table>    </td>
</tr>
<?php
}
}
?>
</table>
