<?php 
include('index.tpl');

function getTitle()
{
$usrid=$_GET['id'];
$rocuname = $_SESSION['uname'];
$qry=mysql_query("select Name from members where MemberID='$usrid'");
while($qrys=mysql_fetch_array($qry))
{
$Name=$qrys['Name'];
}
echo 'Welcome To ROC '.$Name;
}

function ShowContent($rocuname)
{
?>
<link href="../css/user.css" rel="stylesheet" type="text/css" />
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" background="img/welcome159.gif" style="background-repeat:no-repeat; background-position:right;" class="ropcontents">
  <tr>
    <td width="10">&nbsp;</td>
    <td width="101">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="426">&nbsp;</td>
  </tr>
  <?php 
$usrid=$_GET['id'];
$qry=mysql_query("select MemberID,Name,Password,RefID from members where MemberID='$usrid' ");
while($qrys=mysql_fetch_array($qry))
{
$mmbr_id=$qrys['MemberID'];
$name=$qrys['Name'];
$RefID=$qrys['RefID'];
$ret="NOT ACTIVE";
if ($act_status==1)
$ret="ACTIVE";
$mmbr_pass=$qrys['Password'];
}

$qwertyk=mysql_query("select P_ParentID from childstatus where ParentID='$mmbr_id' ");
while($huibchk=mysql_fetch_array($qwertyk))
{ 
$P_ParentID=$huibchk['P_ParentID'];
}
?>
  <tr>
    <td>&nbsp;</td>
    <td><strong>ROC ID</strong></td>
    <td >:</td>
    <td><?php echo $mmbr_id; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Name</strong></td>
    <td >:</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Referred By</strong></td>
    <td >:</td>
    <td><?php echo $RefID; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Placed Under</strong></td>
    <td >:</td>
    <td><?php echo $P_ParentID; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Status</strong></td>
    <td >:</td>
    <td>NOT ACTIVE</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" class="orangetext"><strong>LOGIN DETAILS</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Username</strong></td>
    <td >:</td>
    <td><?php echo $mmbr_id; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Password</strong></td>
    <td >:</td>
    <td><?php echo $mmbr_pass; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><span class="orangetext">*</span> Please Note the login details for future use.<br />
      &nbsp;&nbsp; Alternatively we will send you a SMS regarding your login information to the given mobile number.</td>
  </tr>
</table>
<?php 
}

?>