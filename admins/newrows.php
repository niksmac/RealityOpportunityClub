<?php $erty=$_GET['erty']; include("../connect/session.php"); ?>
<script type="text/javascript" src="ajax.js"></script>
<link href="colours.css" rel="stylesheet" type="text/css" />
<table width="100%" border="1" cellpadding="3" cellspacing="1" bordercolor="#A4EDFF">
  <tr>
    <td width="3%" height="25" align="left" valign="middle" bgcolor="#F1F1F1" class="ContentBold" scope="col">No</td>
    <td width="12%" align="left" valign="middle" bgcolor="#F1F1F1" class="ContentBold" scope="col">Item Id</td>
    <td width="7%" align="left" valign="middle" bgcolor="#F1F1F1" class="ContentBold" scope="col">Quantity</td>
  </tr>
<?php for($i=1;$i<=$erty;$i++) { ?>
<tr>
    <td height="25" align="left" valign="top" bgcolor="#FFFFFF" scope="col"><?php echo $i; ?></td>
    <td align="left" valign="top" bgcolor="#FFFFFF" scope="col"><select name="prdct_id<?php echo $i; ?>" class="inputbox" id="prdct_id<?php echo $i; ?>">
<option selected="selected">- select -</option>
<?php 
$qry=mysql_query("select * from itemsnew order by prdct_id asc");
while($qrys=mysql_fetch_array($qry))
{
$prdct_id=$qrys['prdct_id'];
?>
<option value="<?php echo $qrys['prdct_id']; ?>" ><?php echo $qrys['prdct_id']; ?></option>
<?php } ?>
</select></td>
    <td align="left" valign="top" bgcolor="#FFFFFF" scope="col"><input name="myhids<?php echo $i; ?>" value="<?php echo $i; ?>" type="hidden" id="myhids<?php echo $i; ?>" />
    <input name="qtys<?php echo $i; ?>" type="text" id="qtys<?php echo $i; ?>" size="1" onkeyup="javascript:calcprices('output_div_tot<?php echo $i; ?>','prdct_id<?php echo $i; ?>','qtys<?php echo $i; ?>','myhids<?php echo $i; ?>')" /></td>
  </tr>  <?php }?><?php $erht=$i-1; ?>
  <tr>
    <td height="25" align="left" valign="top" bgcolor="#FFFFFF" scope="col">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF" scope="col">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF" scope="col"><input type="button" onclick=""></td>
  </tr>
</table>
