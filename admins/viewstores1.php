<link href="colours.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deletestores.php?id=" + id;
}
</script>
<table width="650" border="1" cellpadding="4" cellspacing="1" bordercolor="#00CCFF" class="Contents">
<tr>
      <td width="31" height="40" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">Sl. No.</td>
    <td width="111" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold"><span class="ContentBold">Store Name</span></td>
    <td width="103" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">ID</td>
    <td width="84" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold"><span class="ContentBold">PIN Code</span></td>
    <td width="87" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold"><span class="ContentBold">Action</span></td>
    <td width="80" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">Credits</td>
    <td width="74" align="left" valign="middle" bgcolor="#BBF1FF" class="ContentBold">&nbsp;</td>
</tr>  
<?php 
$qry=mysql_query("select * from stores order by id asc");
$er=1;
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$store_id=$qrys['store_id'];

$crval = 0;$crlimit = 0;
$qrdy=mysql_query("select crval,crlimit from stor_credit_sum where stor_id = '$store_id'");
while($qrydds=mysql_fetch_array($qrdy))
{
$crval=$qrydds['crval'];
$crlimit=$qrydds['crlimit'];
}
?>

    <tr>
      <td align="left" valign="top"><?php echo $er; ?></td>
      <td align="left" valign="top"><?php echo $qrys['storename']; ?></td>
      <td align="left" valign="top"><?php echo $qrys['store_id']; ?></td>
      <td align="left" valign="top"><?php echo $qrys['pincode']; ?></td>
      <td align="left" valign="top"><a href="editstore.php?id=<?php echo $id; ?>&amp;st=1" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
      <td align="left" valign="top"><?php echo $crval; ?>&nbsp;(<?php echo $crlimit; ?>)<br /><a href="javascript:void(0)"
onclick="window.open('setlimit.php?mid=<?php echo $store_id; ?>&crd=<?php echo $crval; ?>',
'welcome','width=310,height=300,menubar=no,status=no')" >SET LIMT</a></td>
      <td align="left" valign="top"><a href="storeaccount.php?id=<?php echo $id; ?>&st=1" class="footertxt">Account</a> | <a href="bvhistory.php?id=<?php echo $id; ?>&st=1" class="footertxt">HISTORY</a></td>
  </tr>
      <?php $crval = 0; $crlimit = 0;$er++;}?>
</table>
