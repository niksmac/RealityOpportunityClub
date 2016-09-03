<?php 
include("../connect/session.php"); 

function timer()
{
    $time = explode(' ', microtime());
    return $time[0]+$time[1];
}
$beginning = timer();


if ( mysql_query ("REPAIR TABLE `accstmntnikamts`, `accstmntnikbv`, `accstmntnikrefbv`, `acc_stmnt_final`, `acc_stmnt_final_copy`, `admin`, `brands`, `bvafterclose`, `bvthruweb`, `careers`, `category`, `childstatus`, `childstatus-old`, `closingpicalcs`, `closingpicalcs_old`, `closings`, `closings_full`, `closings_last`, `curr_stat`, `issueddetails`, `joinig_keys`, `memberacc`, `memberaccdetail`, `memberbv`, `members`, `newsss`, `olmaster_acc_det`, `olshops`, `olshops_acc`, `olshops_acc_det`, `olsupplier`, `olsupp_acc`, `olsupp_acc_det`, `ol_bills`, `ol_bv`, `ol_bv_detail`, `ol_kit_purchaseacc`, `ol_products`, `ol_products_det`, `ol_products_pics`, `paymenthistory`, `pdoductdescription`, `pilastclosing`, `pilastclosing_nik`, `pintbl`, `pintbl_shp`, `primaryacc`, `primaryacc_new`, `primarytree`, `primarytreeclosing`, `primarytreekey`, `primarytreekit`, `primarytree_new`, `productscroller`, `proofvalidation`, `ref_tree`, `rocroyaltyaccountdetail`, `rocroyaltycapitalsummary`, `sales`, `salesdetail`, `salessummary`, `selfactivation`, `selfactivation_typ`, `splproducts`, `stock`, `storebv`, `stores`, `storestock`, `store_account`, `stor_credit`, `stor_credit_sum`, `temp_memberacc`, `temp_memberaccdetail`") ) 

echo "Tables Repaired<br>";

echo "<br><br>Operation took".round(timer()-$beginning,6)."Seconds";

//print_r ( mysql_query ("show status like 'Conn%'"));

//$result = mysql_query ("select * from pintbl");
//
//$resultArray = explode(',',$result); 
//for ($i=0;$i<sizeof($resultArray);$i++) 
//{ 
//        echo $resultArray[$i]; 
//} 

?>