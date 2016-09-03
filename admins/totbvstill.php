<?php 
include("../connect/session.php");
$store=$_GET['content'];



$fgdh=mysql_query("select * from stores  where storename='$store'");
while($tyuty=mysql_fetch_array($fgdh))
{
$store_id=$tyuty['store_id'];
}



$netamt=array();
$i=1;
$bvold=0;
$qry=mysql_query("select * from issueddetails where store='$store' ");
$chk=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
$items=$qrys['items'];
$sdfs=mysql_query("select * from itemsnew where itemsname='$items'");
while($ssdfdf=mysql_fetch_array($sdfs))
{
$bv=$ssdfdf['bv'];
$netamt[$i]=$bv;
}
$i++;
}
$ttkl=array_sum($netamt);
$qry=mysql_query("select * from directbv where storename='$store' ");
while($qrys=mysql_fetch_array($qry))
{
$bvold=$qrys['bvs'];
}
?>
<link href="colours.css" rel="stylesheet" type="text/css" />
<table width="201" height="23" border="0" cellpadding="0" cellspacing="0" class="errtxt">
  <tr>
    <td><?php echo "Total Direct BV In Hand   ".number_format($ttkl+$bvold); ?> <?php echo $store_id; ?></td>
  </tr>
</table>
