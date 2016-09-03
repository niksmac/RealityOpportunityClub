<?php 
include('index.tpl');

function getTitle()
{
$rocuname = $_SESSION['uname'];
$qry=mysql_query("select Name from members where MemberID='$rocuname'");
while($qrys=mysql_fetch_array($qry))
{
$Name=$qrys['Name'];
}
echo 'Welcome '.$Name;
}

function ShowContent($rocuname)
{
?>
<br />
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" style=" background-image:url(../images/business_partners,_teamwork.jpg); background-repeat:no-repeat; background-position:right;" >
<?php 
$qrtyh=mysql_query("select * from proofvalidation where memid='$rocuname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ecard=$qraysjh['ecard'];
$pancard=$qraysjh['pancard'];
$mobile=$qraysjh['mobile'];
}
if ($ecard == 1)
$estst = "<img src='img/verified.png' alt='Verified'  />";
else 
$estst = "<img src='img/notverified.gif'  alt='Not Verified'/>";

if ($pancard == 1)
$pstst = "<img src='img/verified.png' alt='Verified' />";
else 
$pstst = "<img src='img/notverified.gif' alt='Not Verified' />";

if ($mobile == 1)
$mstst = "<img src='img/verified.png'  alt='Verified'/>";
else 
$mstst = "<img src='img/notverified.gif'  alt='Not Verified'/>";

$qry=mysql_query("select MemberID,ActStatus,Name,RefID,ECNo,PanNo,Address,Phone,Mobile,Occupation from members where MemberID='$rocuname'");
while($qrys=mysql_fetch_array($qry))
{
$MemberID=$qrys['MemberID'];
$act_status=$qrys['ActStatus'];

if ($act_status==1)
$status= '<span class="activediv" title="Activated" >ACTIVE</span>';
else 
$status='<span class="notactivediv" title="Not active" >NOT ACTIVE</span>';

$qsssry=mysql_query("select bp_accum from bp_acc where mem_id='$rocuname'");
while($qsrjys=mysql_fetch_array($qsssry))
{
$bp_accum=$qsrjys['bp_accum'];
}
$bp_el = $bp_accum * 100;
?>
  <tr>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>Name</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td width="1025" align="left" valign="top"><?php echo $qrys['Name']; ?></td>
  </tr>
<!--  <tr>
    <td >&nbsp;</td>
    <td ><strong>Regularized </strong></td>
    <td ><strong>:</strong></td>
    <td><span id="element6">[ Loading Progress Bar ]</span></td>
  </tr>-->
  <tr>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" ><strong>My ID</strong></td>
    <td align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['MemberID']; ?></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>I'm Refered By</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['RefID']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" ><strong>Binary Eligibility</strong></td>
    <td align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $bp_el; ?>&nbsp;</td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>Electral Card</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['ECNo']; ?><?php echo $estst; ?></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>PAN No.</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['PanNo']; ?><?php echo $pstst; ?></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>Address</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['Address']; ?></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>Phone</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['Phone']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" ><strong>Mobile</strong></td>
    <td align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['Mobile']; ?><?php echo $mstst; ?></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>Occupation</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $qrys['Occupation']; ?></td>
  </tr>
  <tr>
    <td width="13" align="left" valign="top" >&nbsp;</td>
    <td width="152" align="left" valign="top" ><strong>Status</strong></td>
    <td width="5" align="left" valign="top" ><strong>:</strong></td>
    <td align="left" valign="top"><?php echo $status; echo checkRegularize($rocuname); ?></td>
  </tr>
  <?php if ($act_status==0) { ?>
  <tr>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top"><a href="activatemyself.php" class="redtext">Activate Now</a></td>
  </tr>
  <?php  } ?>
  <tr>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top" >&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <?php }  ?>
</table>    
<?php 
}

function checkRegularize($rocid)
{
		$ssdgfsgf = mysql_query("select MemberID from members where RefID = '$rocid' ");
		$count = mysql_num_rows ($ssdgfsgf);
		if ($count >= 2)
		$resgtatt = '<span class="regularediv" title="Regularized">Regularized</span>';
		else 
		$resgtatt = '<span class="notregularediv" title="Not Regularized">Not Regularized</span>';
		
		return $resgtatt;

}

?>
<?php /*?><script type="text/javascript" src="js/bramus/jsProgressBarHandler.js"></script>
<script type="text/javascript" src="js/prototype/prototype.js"></script>
<script type="text/javascript">
				document.observe('dom:loaded', function() {

					manualPB2 = new JS_BRAMUS.jsProgressBar(
								$('element6'),
								<?php echo 40; ?>,
								{

									barImage	: Array(
										'img/bramus/percentImage_back1.png',
										'img/bramus/percentImage_back2.png',
										'img/bramus/percentImage_back3.png',
										'img/bramus/percentImage_back4.png'
									),

	
								}
							);
				}, false);
</script><?php */?>