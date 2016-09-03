<?php 
include("../connect/session.php");
$id=$_GET['id'];
?>
<link href="../ropclub.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
body {
	background-color: #999999;
}
-->
</style>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<table width="500" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
  <tr>
    <td><table width="556" border="0" cellpadding="3" cellspacing="0" class="ropcontents">
      <?php 
$qry=mysql_query("select * from careers where id='$id' ");
$er=1;
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['id'];
$path="../careers/received/".$qrys['photos'];
?>
      <tr>
        <td>Post Applied</td>
        <td class="headingsorange">:</td>
        <td><span class="ropcontentsgreen"><strong><?php echo $qrys['positin']; ?></strong></span></td>
        <td width="100" rowspan="6"><img src="<?php echo $path; ?>" width="100" border="0"/></td>
      </tr>
      <tr>
        <td width="144">Name</td>
        <td width="11"><span class="headingsorange">:</span></td>
        <td width="277"><?php echo $qrys['names']; ?></td>
        </tr>
      <tr>
        <td>Address</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo nl2br($qrys['paddress']); ?></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['phones']; ?></td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['mobiles']; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['emails']; ?></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['dob']; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>District</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['distrct']; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Marital Status</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['mstats']; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Educational Qualification</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['eduql']; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Experience</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo nl2br($qrys['exper']); ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Salary Expected</td>
        <td><span class="headingsorange">:</span></td>
        <td><?php echo $qrys['sal_exp']; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Resume</td>
        <td><span class="headingsorange">:</span></td>
        <td><a href="asktodownload.php?file=<?php echo "../careers/received/".$qrys=$qrys['resume']; ?>" class="mores">DOWNLOAD</a></td>
        <td>&nbsp;</td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
</table>
