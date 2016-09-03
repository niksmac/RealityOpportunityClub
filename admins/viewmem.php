<?php 
include("../connect/session.php");
$mem_id = $_GET['mid'];
$qry=mysql_query("select MemberID,Name,RefID,ECNo,PanNo,Address,Phone,Mobile,Occupation,Password,Email,ActStatus,District,DOB from members where MemberID='$mem_id' ");
while($qrys=mysql_fetch_array($qry))
{

$MemberID=$qrys['MemberID'];
$ECNo=$qrys['ECNo'];
$PanNo=$qrys['PanNo'];
$RefID=$qrys['RefID'];
$Name=$qrys['Name'];
$Email=$qrys['Email'];
$Address=$qrys['Address'];
$Phone=$qrys['Phone'];
$Mobile=$qrys['Mobile'];
$Occupation=$qrys['Occupation'];
$Password=$qrys['Password'];
$ActStatus=$qrys['ActStatus'];
$District=$qrys['District'];
$DOB=$qrys['DOB'];
}
if ($ActStatus==1)
{
$status="ACTIVE";
}
else if  ($ActStatus==0)
{
$status="NOT ACTIVE";
}


$qry=mysql_query("select Name from members where MemberID='$RefID' ");
while($qrys=mysql_fetch_array($qry))
{
$RefName=$qrys['Name'];
}
?>


<STYLE TYPE='text/css' MEDIA='screen, projection'>
<!--
  @import url(http://www.ropclub.com/ropclub.css);
.style1 {color: #1A1A1A}
body {
	background-color: #DBDBDB;
}
-->
</STYLE>
<link href="colours.css" rel="stylesheet" type="text/css" />
<table width='300' border='0' cellpadding='5' cellspacing='0' bgcolor="#DBDBDB" class='ropcontents'>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'>&nbsp;</td>
    <td align="left" valign="top" class="Contents"><span class="style1"></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>Name</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td width='180' align="left" valign="top" class="Contents"><span class="style1"><?php echo $Name;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>ROC  ID</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $MemberID;  ?></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>Refered By</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $RefID." (".$RefName.")";  ?></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>Electral Card</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $ECNo;  ?></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>PAN No.</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $PanNo;  ?></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>Address</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $Address;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>District</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $District;  ?></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>Phone</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $Phone;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>Mobile</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $Mobile;  ?></span></td>
  </tr>
  <tr>
    <td width='1' align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td width='76' align="left" valign="top" class='Contents'><strong>Occupation</strong></td>
    <td width='3' align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $Occupation;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>DOB</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $DOB;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'>&nbsp;</td>
    <td align="left" valign="top" class="Contents"><span class="style1"></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>Username</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $MemberID;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>Password</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $Password;  ?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top" class='ContentBlue style1'>&nbsp;</td>
    <td align="left" valign="top" class='Contents'><strong>STATUS</strong></td>
    <td align="left" valign="top" class='Contents'><strong>:</strong></td>
    <td align="left" valign="top" class="Contents"><span class="style1"><?php echo $status; ?></span></td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle" class='ContentBlue'><A href="javascript: self.close ()"><img src="images/btn_close2_1b.gif" alt="Close Window" width="38" height="18" border="0" /></A>&nbsp;&nbsp;<a href="allocatehere1.php?id=<?php echo $MemberID;  ?>" target="_parent"><img src="images/edit.gif" width="38" height="18" border="0" /></a></td>
  </tr>
</table>
