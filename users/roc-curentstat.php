<?php 
include('index.tpl');

function getTitle()
{
echo 'My Current Statistics';
}

function ShowContent($rocuname)
{

	$ssdgfsgf=mysql_query("select sbv, abv, bbv from curr_stat where mem_id = '$rocuname' ");
	while($tyivyfui=mysql_fetch_array($ssdgfsgf))
	{
	$sbv =$tyivyfui['sbv'];
	$abv =$tyivyfui['abv'];
	$bbv =$tyivyfui['bbv'];
	}
?>
<div class="content_area">
  <table width="90%" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td colspan="3" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td width="73%" rowspan="2" align="center" valign="top"> <a class="large button green" href="roc-reftree.php">View Referral Tree</a> </td>
  </tr>
  <tr>
    <td width="26%" align="left" valign="top">&nbsp;</td>
    <td width="1%" align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td align="left" valign="top"><strong>Previous Closing Accumulated BV</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo precloseaccbv($rocuname); ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Self Purchase BV [Current Month]</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $sbv; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>A Side BV [Current Month]</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $abv ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>B Side BV [Current Month]</strong></td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $bbv ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Your Direct Referrals</strong><br />     </td>
    <td align="left" valign="top"><strong>:</strong></td>
    <td align="left" valign="top">
    <table width="40%" border="1" cellpadding="3"cellspacing="0" bordercolor="#999999" style="border-collapse:collapse;" id="tablesorter-demo" class="tablesorter">
      
      <thead> 
      <tr style="cursor: pointer;">
        <th width="28" align="left" valign="top" bgcolor="#EEEEEE" scope="col">No</th>
        <th width="90" align="left" valign="top" bgcolor="#EEEEEE" scope="col">ROC ID</th>
        <th width="292" align="left" valign="top" bgcolor="#EEEEEE" scope="col">Name</th>
      </tr>
      </thead>
      <tbody>
      <?php 
$cntt = 1;
	$ssdgfsgf=mysql_query("select MemberID,Name from members where RefID = '$rocuname' ");
	while($tyivyfui=mysql_fetch_array($ssdgfsgf))
	{
	$MemberID =$tyivyfui['MemberID'];
	$Name =$tyivyfui['Name'];
	?>
      <tr>
        <td align="left" valign="top"><?php echo $cntt; ?></td>
        <td align="left" valign="top"><?php echo $MemberID; ?></td>
        <td align="left" valign="top"><?php echo $Name; ?></td>
      </tr>
      <?php $cntt++; } ?>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>

</div>
<?php 
}

function precloseaccbv($usrid)
{
$ssfgh=mysql_query("select tot_bv_acc_lc from closingpicalcs where mmbr_id='$usrid' ");
while($tyusty=mysql_fetch_array($ssfgh)) { 
$tot_bv_acc_lc = $tyusty['tot_bv_acc_lc'];
}

return $tot_bv_acc_lc;
}
?>
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(function() {
		$("table")
			.tablesorter({widthFixed: true, widgets: ['zebra']})
			.tablesorterPager({container: $("#pager")});
	});
</script>
