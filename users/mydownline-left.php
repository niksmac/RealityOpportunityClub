<script src="js/sorttable.js"></script><?php 
include("../connect/session.php");
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
  <tr>
    <td align="center" valign="middle"><label class="reset"><input type="button" onclick="javascript:showside('idval_div','L',1)" value="Active Only" /> </label></td>
    <td align="center" valign="middle"><label class="reset"><input type="button" onclick="javascript:showside('idval_div','L',0)" value="Non Active Only" /></label></td>
    <td align="center" valign="middle"><label class="reset"><input type="button" onclick="javascript:showside('idval_div','L','')" value="Complete" /></label></td>
  </tr>
</table>
<table width="95%" border="1" align="center" cellpadding="6" class="sortable" cellspacing="0" >
  <thead>
  <tr>
    <th width="20" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>No</strong></th>
    <th width="68" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Member ID</strong></th>
    <th width="174" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Name</strong></th>
    <th width="54" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Placed Under</strong></th>
    <th width="16" align="left" valign="middle" bgcolor="#DEF4DD" >&nbsp;</th>
    <th width="82" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>BV cm</strong></th>
    <th width="82" align="left" valign="middle" bgcolor="#DEF4DD" ><strong>Status</strong></th>
  </tr>
  </thead>
   <tbody>
<?php 
$unametr=$_SESSION['uname'];
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
$qwertrtrty=mysql_query("select MemberID,Name,ActStatus from members where MemberID='$usrid' ");
else 
$qwertrtrty=mysql_query("select MemberID,Name,ActStatus from members where MemberID='$usrid' and ActStatus='$fld'  ");

while($huibch=mysql_fetch_array($qwertrtrty))
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

$fgh=mysql_query("select net_payable,tds_val,ser_charge from closings_last where mmbr_id='$MemberIDa' ");
while($tyuty=mysql_fetch_array($fgh))
{ 
$net_payable=$tyuty['net_payable']+$tyuty['tds_val']+$tyuty['ser_charge'];
}
global $newcnt;
?>
<tr>
    <td align='left' valign='middle' class='ropcontents'><?php echo $newcnt; ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $MemberIDa; ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $Namea;  ?>&nbsp;</td>
    <td align='left' valign='middle' class='ropcontents'><?php echo $P_ParentID; ?>&nbsp; </td>
    <td align='left' valign='middle' class='ropcontents'><a href="roc-bin-genealogy.php?id=<?php echo decbin($MemberIDa); ?>"><img src="img/expand.gif" alt="Expand Tree" width="16" height="16" border="0" /></a></td>
    <td align='left' valign='middle' class='ropcontents'><?php $sumbvs = bvsum($MemberIDa); echo $mybvsum = $sumbvs + 0; ?></td>
    <td align='left' valign='middle' class='ropcontents'><?php echo getStatsk($MemberIDa); ?></td>
</tr>
<?php
$newcnt++;
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
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(function() {
		$("table")
			.tablesorter({widthFixed: true, widgets: ['zebra']})
			.tablesorterPager({container: $("#pager")});
	});
</script>