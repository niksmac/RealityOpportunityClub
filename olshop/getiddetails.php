<style type="text/css"> 
<!--
body{
 
background:none;
font-family:Tahoma;
font-size:9pt;
	
	}
-->
</style> 

<?php 
include("../connect/olsession.php"); 
$id=$_GET['sponserid'];
if (isValid ($id) )
{
$jfj=mysql_query("select MemberID,Name,Address,Mobile from members where MemberID='$id' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$nameofcust=$sdfsdfa['Name'];
$Mobile=$sdfsdfa['Mobile'];
$address=$sdfsdfa['Address'];
}
?>
<link href="css/olshop.css" rel="stylesheet" type="text/css" />
<div class="okdiv">
<table width="250" border="0" cellpadding="4" cellspacing="0" >
  <tr>
    <td colspan="3" align="left" valign="top"  >Make Changes if any</td>
    </tr>
  <tr>
    <td width="40" align="left" valign="top"  ><strong>Name</strong></td>
    <td width="5" align="left" valign="top"  ><strong>:</strong></td>
    <td width="194" align="left" valign="top"  >
    <input type="text" name="memname" id="memname" value="<?php echo $nameofcust; ?>" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"  ><strong>Address</strong></td>
    <td align="left" valign="top"  ><strong>:</strong></td>
    <td align="left" valign="top"  >
      <textarea name="memaddress" cols="15" rows="2" id="memaddress"><?php echo $address; ?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top"  ><strong>Mobile</strong></td>
    <td align="left" valign="top"  ><strong>:</strong></td>
    <td align="left" valign="top"  >
    <input type="text" name="memfon" id="memfon" value="<?php echo $Mobile; ?>" /></td>
  </tr>
</table>
</div>
<?php 
}
else 
{
?>
<div class="notokdiv">Invalid ROC ID !!! </div>
<?php } 

		function isValid($myid)
		{
			$jfdj=mysql_query("select MemberID from members where MemberID = '$myid' ");
			$erter = mysql_num_rows($jfdj);
			if ($erter == 1)
			return true;
			else
			return false;

		}?>