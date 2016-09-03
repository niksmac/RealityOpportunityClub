<?php session_start(); include("../connect/connect.php"); ?>
<table width="60%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#66CC00">
<thead >
  <tr>
    <th width="3%" bgcolor="#DEF4DD"><u><strong>No</strong></u></th>
    <th width="13%" bgcolor="#DEF4DD"><u><strong>ROC  ID</strong></u></th>
    <th width="17%" bgcolor="#DEF4DD"><u><strong>Name</strong></u></th>
    <th width="18%" bgcolor="#DEF4DD">Phone</th>
  </tr>
</thead >
<tbody>
<?php 
unset($_SESSION['count']);
$_SESSION['count']=1;

if (isset($_GET['kkk']))
{
$unametr=$_GET['kkk'];
$_SESSION['dwnline'] = $_GET['kkk'];
}


mychilds($unametr);
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
$count=$_SESSION['count']++;
$qwerty=mysql_query("select MemberID,Name,Mobile from members where MemberID='$usrid' ");
while($huibch=mysql_fetch_array($qwerty))
{ 
$MemberIDa=$huibch['MemberID'];
$Namea=$huibch['Name'];
$Mobile=$huibch['Mobile'];
?>
<tr>
    <td><?php echo $count; ?>&nbsp;</td>
    <td><?php echo $MemberIDa; ?>  &nbsp;</td>
    <td><?php echo $Namea;  ?>&nbsp;</td>
    <td><?php echo $Mobile; ?></td>
</tr>
<?php
$sumbvs == 0;
}
}
?>
</tbody>
</table>



