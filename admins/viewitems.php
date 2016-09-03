<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>

<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deleteitems.php?id=" + id;
}
</script>
<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="3" cellspacing="1" bordercolor="#00CCFF" class="Contents">
<?php 
$hjg=mysql_query("select distinct cat_id from itemsnew ");
while($sdgfs=mysql_fetch_array($hjg))
{
$cat_id=$sdgfs['cat_id'];
?>
          <tr>
            <td colspan="6" bgcolor="#BBF1FF" class="ContentBold"><?php echo $cat_id; ?></td>
          </tr>
          <?php 
$dfgodgh=mysql_query("select distinct brandname from itemsnew where cat_id='$cat_id' ");
while($gdgdfgd=mysql_fetch_array($dfgodgh))
{
$brandname=$gdgdfgd['brandname'];
?>
          <tr>
            <td colspan="6" class="successtxt"><a href="itemsbrandwise.php?itms=<?php echo $brandname; ?>&itm=1" title="View This Category" class="forumlinks"><u><strong><?php echo $brandname; ?></strong></u></a></td>
          </tr>
          <tr>
            <td width="5%" class="ContentBold"><strong>No.</strong></td>
            <td width="39%" class="ContentBold"><strong>Item Name</strong></td>
            <td width="11%" class="ContentBold"><strong>Tax Rate</strong></td>
            <td width="8%" class="ContentBold">Stock</td>
            <td width="9%" class="ContentBold"><strong>MRP</strong></td>
            <td width="23%" class="ContentBold"><strong>Action</strong></td>
          </tr>
<?php 
$er=1;
$qry=mysql_query("select * from itemsnew where cat_id='$cat_id' and brandname='$brandname'");
while($qrys=mysql_fetch_array($qry))
{
$itid=$qrys['id'];
$id=$qrys['id'];

$qryj=mysql_query("select * from itm_prices where itmid='$itid'");
while($qrysj=mysql_fetch_array($qryj))
{
$dp=$qrysj['dp'];
}

?>
          <tr>
            <td><?php echo $er; ?></td>
            <td><a href="itemdetails.php?id=<?php echo $id; ?>&itm=1" title="View Item In Detail" class="redlinks"><?php echo $qrys['itemsname']; ?></a></td>
            <td><?php echo $qrys['taxrate']; ?> %</td>
            <td><?php echo $qrys['quantity']; ?></td>
            <td><?php echo $qrys['mrp']; ?></td>
            <td><a href="edititems.php?id=<?php echo $id; ?>&amp;itm=1" class="redlinks" title="Edit Item">EDIT</a> / <a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks" title="Delete Item">DELETE</a>/ <a href="updatethis.php?id=<?php echo $id; ?>&amp;itm=1" class="redlinks" title="Update Stock">UPDATE</a></td>
          </tr>
          <?php $er++; } } ?>
          <?php } ?>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>
