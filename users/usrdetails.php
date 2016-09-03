<?php 
$jfj=mysql_query("select Name from members where MemberID='$rocuname' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$nameofcust=$sdfsdfa['Name'];
}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="redtext">
  <tr>
    <td width="22">&nbsp;</td>
    <td align="right" class="redtext">You're Logged In as :&nbsp;<?php echo $nameofcust; ?>&nbsp;-&nbsp;<?php echo $rocuname; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="middle"><script language="JavaScript" src="js/timer.js" type="text/javascript"></script></td>
  </tr>
</table>
