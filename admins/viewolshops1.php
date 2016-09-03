<link href="colours.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deleteolshops.php?id=" + id;
}
</script>
<table width="99%" border="1" cellpadding="4" cellspacing="1" bordercolor="#00CCFF" class="Contents">
<tr>
    <td width="31" height="40" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Sl. No.</strong></td>
    <td width="111" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Store Name</strong></td>
    <td width="103" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>ID</strong></td>
    <td width="87" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Password</strong></td>
    <td width="87" align="left" valign="middle" bgcolor="#BBF1FF" ><strong>Action</strong></td>
  </tr>  
<?php 
$qry=mysql_query("select * from olshops order by id asc");
$er=1;
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$store_id=$qrys['store_id'];
?>

    <tr>
      <td align="left" valign="top"><?php echo $er; ?></td>
      <td align="left" valign="top"><?php echo $qrys['storename']; ?></td>
      <td align="left" valign="top"><?php echo $qrys['store_id']; ?></td>
      <td align="left" valign="top"><?php echo $qrys['pass']; ?></td>
      <td align="left" valign="top"><a href="editolshops.php?id=<?php echo $id; ?>&amp;ol" class="redlinks">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE<br />
      </a><a href="olshopbookings.php?id=<?php echo $store_id; ?>&amp;ol" class="redlinks">BOOKINGS</a><a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks"><br />
      </a><a href="olshopaccounts.php?id=<?php echo $store_id; ?>&amp;ol" class="redlinks">ACCOUNT</a><a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks"><br />
      </a></td>
  </tr>
      <?php $crval = 0; $crlimit = 0;$er++;}?>
</table>
