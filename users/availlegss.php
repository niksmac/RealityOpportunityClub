<link href="../css/user.css" rel="stylesheet" type="text/css" />
<?php 
include("../connect/session.php");
$uname=$_SESSION['uname'];

$con=$_GET['content'];
$nums=$_GET['nums'];

if (! ereg('^p',$con))
{
?>
<div class="errorinfodiv">&nbsp;&nbsp;Your entry not seems to be in a valid format <br />
&nbsp;&nbsp;Primary ID should be satrt with a 'P'</div>
<?php 
}

else
{
$ifxgd = substr($con,1);
$qryh=mysql_query("select memid from primarytree where primaryid = '$ifxgd' ");
$drfgd=mysql_num_rows($qryh);
while($qrysh=mysql_fetch_array($qryh))
{
$memid=$qrysh['memid'];
}

$jfj=mysql_query("select MemberID,Name from members where MemberID='$memid' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$nameofcust=$sdfsdfa['Name'];
}
?>
<div class="successinfodiv">
<table width="250" border="0" cellpadding="4" cellspacing="0" >
  <tr>
    <td width="60" align="left" valign="middle" scope="col">ROC ID</td>
    <td width="10" align="left" valign="middle"  scope="col"><strong>:</strong></td>
    <td width="156" align="left" valign="middle" scope="col"><?php echo $mmbr_id; ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" scope="col">Name</td>
    <td align="left" valign="middle"  scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo $nameofcust; ?></td>
  </tr>
</table>
</div>
<?php } ?>