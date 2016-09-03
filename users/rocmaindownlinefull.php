<?php include('../connect/session.php'); ?>
<script src="js/sorttable.js"></script>
<table width="80%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#66CC00"  class="sortable">
<thead >
  <tr>
    <th width="3%" bgcolor="#DEF4DD"><u><strong>No</strong></u></th>
    <th width="13%" bgcolor="#DEF4DD"><u><strong>ROC  ID</strong></u></th>
    <th width="17%" bgcolor="#DEF4DD"><u><strong>Name</strong></u></th>
    <th width="9%" bgcolor="#DEF4DD"><u><strong>Placed Under</strong></u></th>
    <th width="3%" bgcolor="#DEF4DD">&nbsp;</th>
    <th width="13%" bgcolor="#DEF4DD"><strong>BV cm</strong></th>
    <th width="18%" bgcolor="#DEF4DD">Status</th>
  </tr>
</thead >
<tbody>
<?php 
unset($_SESSION['count']);
$_SESSION['count']=1;

if (isset($_GET['kkk']))
$unametr=$_GET['kkk'];
else 
$unametr=$_SESSION['uname'];


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
$qwerty=mysql_query("select MemberID,Name,ActStatus from members where MemberID='$usrid' ");
while($huibch=mysql_fetch_array($qwerty))
{ 
$MemberIDa=$huibch['MemberID'];
$Namea=$huibch['Name'];
$act_status=$huibch['ActStatus'];

if ($act_status==1)
{
$status="<font color='green'>ACTIVE</font>";
}
else if  ($act_status==0)
{
$status="<font color='red'>NOT ACTIVE</font>";
}

$qwertyk=mysql_query("select P_ParentID from childstatus where ParentID='$MemberIDa' ");
while($huibchk=mysql_fetch_array($qwertyk))
{ 
$P_ParentID=$huibchk['P_ParentID'];
}

$fgh=mysql_query("select net_payable from closings_last where mmbr_id='$MemberIDa' ");
while($tyuty=mysql_fetch_array($fgh))
{ 
$net_payable=$tyuty['net_payable'];
}
?>
<tr>
    <td><?php echo $count; ?>&nbsp;</td>
    <td><?php echo $MemberIDa; ?>  &nbsp;</td>
    <td><?php echo $Namea;  ?>&nbsp;</td>
    <td><?php echo $P_ParentID; ?>&nbsp; </td>
    <td><a href="roc-bin-genealogy.php?id=<?php echo decbin($MemberIDa); ?>"><img src="img/expand.gif" alt="Expand Tree" width="16" height="16" border="0" /></a></td>
    <td><?php $sumbvs = bvsum($MemberIDa); echo $mybvsum = $sumbvs + 0; ?></td>
    <td><?php echo getStatsk($MemberIDa); ?></td>
</tr>
<?php
$sumbvs == 0;
}
}
function bvsum ($usrid)
{

$fgh=mysql_query("select bv from bvafterclose where memberid='$usrid' ");
while($tyuty=mysql_fetch_array($fgh)) { 
$lastbvv =$tyuty['bv'];
}

return $lastbvv;
}

function getStatsk($usrid)
{
$qry=mysql_query("select ActStatus from members where MemberID='$usrid'");
while($qrys=mysql_fetch_array($qry))
{
$act_status=$qrys['ActStatus'];
}
if ($act_status==1)
$status= '<span class="activediv" title="Activated" > A </span>';
else 
$status='<span class="notactivediv" title="Not active" > NA </span>';


$ssdgfsgf = mysql_query("select MemberID from members where RefID = '$usrid' ");
$count = mysql_num_rows ($ssdgfsgf);
if ($count >= 2)
$resgtatt = '<span class="regularediv" title="Regularized"> R </span>';
else 
$resgtatt = '<span class="notregularediv" title="Not Regularized"> NR </span>';
	
		
		
return $resgtatt.$status;
}
?>
</tbody>
</table>



