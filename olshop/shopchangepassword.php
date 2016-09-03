<?php 
include ("home.tpl");
function showcontent()
{
$uname = $_SESSION['olshplogin'];
$qrtyh=mysql_query("select ownername,storename,address,pincode,credits,state,district,phone, store_id  from olshops where store_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
$state = $qraysjh['state'];
$district = $qraysjh['district'];
$phone = $qraysjh['phone'];
$store_id = $qraysjh['store_id'];
}
$qrtryh=mysql_query("select balamt  from olshops_acc  where olshopid='$uname' ");
while($qrsaahysjh=mysql_fetch_array($qrtryh))
{
$balamt =$qrsaahysjh['balamt'];
}
?>
<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td><h1>Change Password</h1></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="top"><?php if (isset($_GET['y'])) { ?><div class="okdiv" >Password Changed</div><?php } else if (isset($_GET['n'])) { ?><div class="notokdiv" >Password Cannot Be Changed</div><?php }?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><form id="form1" name="form1" method="post" action="changepassword_code.php">
      <table width="60%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td width="31%">Current Password</td>
          <td width="69%"><input type="text" name="oldpass" id="oldpass" /></td>
        </tr>
        <tr>
          <td>New Password</td>
          <td><input type="password" name="pass1" id="pass1" /></td>
        </tr>
        <tr>
          <td>Retype New Password</td>
          <td><input type="password" name="pass2" id="pass2" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label class="submit"><input type="submit" name="button" id="button" value="Submit" onclick="return validate()" /></label>
            <label class="reset"><input type="reset" name="button2" id="button2" value="Reset" /></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<?php } ?>
<script language="JavaScript" type="text/javascript">
function cancelorder(id)
{
if(confirm('Are you Sure to Cancel this Order?'))
window.location.href="cancelorder.php?id=" + id;
}
</script>