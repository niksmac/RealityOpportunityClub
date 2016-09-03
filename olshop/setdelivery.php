<?php 
include("../connect/olsession.php");
$bilno = $_GET['bno'];
mysql_query (" update ol_bills set ord_stat=3,del_date=now() where billno = '$bilno' ");


$qrtyh=mysql_query("select order_no, billno,shopid,prodid,prodqty,supp_id,memid from ol_bills where billno = '$bilno' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$order_no =$qraysjh['order_no'];
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$prodqty = $qraysjh['prodqty'];
$supp_id = $qraysjh['supp_id'];
$memid = $qraysjh['memid'];
}

$ssqrtyh=mysql_query("select supp_price, roc_bv, roc_bp from ol_products where prod_code = '$prodid' ");
while($qraysfjh=mysql_fetch_array($ssqrtyh))
{
$supp_price =$qraysfjh['supp_price'];
$roc_bv =$qraysfjh['roc_bv'];
$roc_bp =$qraysfjh['roc_bp'];
}

$totsuppprice = $supp_price * $prodqty;

$particlr = $order_no.' - Product Delivered';

mysql_query (" INSERT INTO olsupp_acc_det (supp_id, ac_date, particulars, credits) VALUES ('$supp_id', now(), '$particlr', '$totsuppprice') ");
mysql_query (" INSERT INTO olmaster_acc_det (stor_id, ac_date, particulars, debits) VALUES ('$uname', now(), '$particlr', '$totsuppprice') ");


mysql_query (" INSERT INTO ol_bv_detail (olshop_id, roc_id, prod_id, bv, bill_date) VALUES ('$shopid',  '$memid', '$prodid', '$roc_bv', curdate()) ");
mysql_query("update ol_bv set bv_val=bv_val-'$roc_bv' ");



mysql_query (" INSERT INTO  bvthruweb (shopid ,memid ,bv ,datentim)VALUES ('$uname',  '$memid',  '$roc_bv',  now()) ");

####### BP Section

mysql_query("insert into bp_acc_det (mem_id,bp, dates) values ('$memid','$roc_bp', curdate() )");
$sde = mysql_query("select mem_id from bp_acc where mem_id = '$store'");
if (mysql_num_rows($sde) == 0 )
mysql_query("insert into bp_acc (mem_id,bp_accum, cl_no) values ('$memid','$roc_bp',1)");
else
mysql_query("update  bp_acc set bp_accum = bp_accum+'$roc_bp' where mem_id = '$memid' ");



?>
<script type="text/javascript" language="javascript">
alert ('Success');
window.close();
</script>