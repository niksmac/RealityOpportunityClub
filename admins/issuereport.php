<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
<table width="590" border="1" cellpadding="3" cellspacing="1" bordercolor="#9A9A9A" class="Contents">
  <tr>
    <th align="left" valign="middle" scope="col"><div align="center">
      <p>ROP Club</p>
      <p><br />
        Issue Reports: <?php echo date('d-m-Y'); ?><br />
      </p>
    </div></th>
  </tr>
  <tr>
    <th width="224" align="left" valign="middle" scope="row"><table width="585" border="0" cellpadding="3" cellspacing="0" class="Contents">
      <tr>
        <th width="19" align="left" valign="middle" class="ContentBlue" scope="col">No.</th>
        <th width="215" align="left" valign="middle" class="ContentBlue" scope="col">Category</th>
        <th width="117" align="left" valign="middle" class="ContentBlue" scope="col">Brand</th>
        <th width="117" align="left" valign="middle" class="ContentBlue" scope="col">Item</th>
        <th width="117" align="left" valign="middle" class="ContentBlue" scope="col">Quantity</th>
        <th width="117" align="left" valign="middle" class="ContentBlue" scope="col">Date</th>
      </tr>
<?php 
$qry=mysql_query("select distinct store from issueddetails");
while($qrys=mysql_fetch_array($qry))
{
$store=$qrys['store'];
?>
      <tr>
        <th colspan="6" align="left" valign="middle" scope="col"><strong><?php echo $store; ?></strong></th>
        </tr>
<?php 
$er=1;
$qryd=mysql_query("select * from issueddetails where store='$store' order by dates asc ");
while($qrysd=mysql_fetch_array($qryd))
{
$items=$qrysd['items'];
$dates=$qrysd['dates'];
$cat_id =$qrysd['cat_id'];
$brandname=$qrysd['brandname'];
$items=$qrysd['items'];
$qty=$qrysd['qty'];
$dates =$qrysd['dates'];
?>        
      <tr>
        <th align="left" valign="middle" scope="row"><?php echo $er ; ?></th>
        <td align="left" valign="middle"><?php echo $cat_id ; ?></td>
        <td align="left" valign="middle"><?php echo $brandname ; ?></td>
        <td align="left" valign="middle"><?php echo $items; ?></td>
        <td align="left" valign="middle"><?php echo $qty; ?></td>
        <td align="left" valign="middle"><?php echo $dates ; ?></td>
      </tr>
      <?php $er++; } } ?>
    </table></th>
  </tr>
</table>
