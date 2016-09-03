<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin'];

$id = $_GET['id'];
	
$qrtyh=mysql_query("select order_no, billno,shopid,prodid,prodqty,memid,bill_address,bill_date,ord_stat from ol_bills where billno = '$id' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$order_no =$qraysjh['order_no'];
$billno =$qraysjh['billno'];
$shopid =$qraysjh['shopid'];
$prodid =$qraysjh['prodid'];
$prodqty = $qraysjh['prodqty'];
$memid = $qraysjh['memid'];
$bill_address = $qraysjh['bill_address'];
$bill_date = $qraysjh['bill_date'];
$ord_stat = $qraysjh['ord_stat'];
}


		$qrtyh=mysql_query("select dist_price,supp_id  from ol_products where prod_code = '$prodid'");
		while($qraysjh=mysql_fetch_array($qrtyh))
		{
		$dist_price =$qraysjh['dist_price'];
		$supp_id =$qraysjh['supp_id'];
		}

$newcramt = $dist_price * $prodqty;

if ($newcramt > 0 ) 
{
//mysql_query (" INSERT INTO ol_bills ( order_no, shopid, prodid,supp_id, prodqty, bill_amt, memid, bill_address, bill_date) VALUES ('$orderno', '$uname', '$prodid','$supp_id', '$prodqty', '$linetotal', '$rocid', '$bill_address', now() ) ");
mysql_query (" update ol_bills set  ord_stat  = 1 where billno = '$billno' ");
mysql_query (" update olshops_acc set  balamt = balamt+'$newcramt' where olshopid = '$uname' ");
mysql_query (" update ol_products set  pro_stock = pro_stock+'$prodqty' where prod_code = '$prodid' ");
header('Location:'."olproductorderview.php");
}
else 
{
header('Location:'."olshopbookings.php");
}
?>