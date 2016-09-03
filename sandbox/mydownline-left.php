<?php 
session_start();
include("../connect/connect.php");
if (isset ($_GET['sr']))
{
$fld = $_GET['sr'];
$_SESSION['fld']=$fld;
}
$newcnt = 1;
?>
<table width="60%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle"><h1>LEFT DOWNLINE</h1></td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
</table>
<table width="60%" border="1" align="center" cellpadding="6" class="sortable" cellspacing="0" >
  <thead>
  <tr>
    <th width="20" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>No</strong></th>
    <th width="68" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Member ID</strong></th>
    <th width="174" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Name</strong></th>
    <th width="82" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Mobile</strong></th>
  </tr>
  </thead>
   <tbody>
<?php 
$unametr=$_SESSION['dwnline'];
$qwerty=mysql_query("select LChildID from childstatus where ParentID='$unametr' ");
while($huibc=mysql_fetch_array($qwerty))
{ 
$LChildID=$huibc['LChildID'];
}
mychilds($LChildID);
showme($LChildID);

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

function showme($usrid)
{
$fld=$_SESSION['fld'];

if ($fld == '')
$qwertrtrty=mysql_query("select MemberID,Name,Mobile from members where MemberID='$usrid' ");
else 
$qwertrtrty=mysql_query("select MemberID,Name,Mobile from members where MemberID='$usrid' and ActStatus='$fld'  ");

while($huibch=mysql_fetch_array($qwertrtrty))
{ 
$MemberIDa=$huibch['MemberID'];
$Namea=$huibch['Name'];
$Mobile=$huibch['Mobile'];

global $newcnt;
?>
<tr>
    <td align='left' valign='middle' class='ropcontents'><?php echo $newcnt; ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $MemberIDa; ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $Namea;  ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $Mobile; ?></td>
</tr>
<?php
$newcnt++;
}
}
?>
</tbody>
</table>
