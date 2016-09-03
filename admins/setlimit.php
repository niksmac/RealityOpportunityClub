<STYLE TYPE='text/css' MEDIA='screen, projection'>
<!--
  @import url(http://www.ropclub.com/ropclub.css);
.style1 {color: #1A1A1A}
body {
	background-color: #DBDBDB;
}
-->
</STYLE>
<?php 
include("../connect/session.php"); 
$stor = $_GET['mid'];
$crd = $_GET['crd'];

$qrdy=mysql_query("select crval,crlimit from stor_credit_sum where stor_id = '$stor'");
while($qrydds=mysql_fetch_array($qrdy))
{
$crval=$qrydds['crval'];
$crlimit=$qrydds['crlimit'];
}

?>
<link href="colours.css" rel="stylesheet" type="text/css" />
<form id="form1" name="form1" method="post" action="setcreditlimt_code.php?stid=<?php echo $stor; ?>" target="_parent">
  <table width="300" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td width="121">&nbsp;</td>
      <td width="13">&nbsp;</td>
      <td width="148">&nbsp;</td>
    </tr>
    <tr>
      <td>Credit Available</td>
      <td><strong>:</strong></td>
      <td><?php echo $crd; ?></td>
    </tr>
    <tr>
      <td>Limit</td>
      <td><strong>:</strong></td>
      <td><input name="cred_limit" type="text" id="cred_limit" value="<?php echo $crlimit; ?>" size="10" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
