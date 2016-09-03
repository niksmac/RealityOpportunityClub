<?php 
include("../connect/session.php"); 
$cat_id=$_POST['cat_id'];
$brandname=$_POST['brandname'];
$itemsname=$_POST['itemsname'];
$batchno=$_POST['batchno'];
$descr=$_POST['descr'];
$manid=$_POST['manid'];
$bv=$_POST['bv'];
$mrp=$_POST['mrp'];
$dp=$_POST['dp'];
$gr1=$_POST['gr1'];
$gr2=$_POST['gr2'];
$gr3=$_POST['gr3'];
$gr4=$_POST['gr4'];
$quantity=$_POST['quantity'];
$taxrate=$_POST['taxrte'];
$taxcat=$_POST['taxcat'];
if($taxrate=="NA"){
$taxrate=$taxcat;}
$MaxID = mysql_query("SELECT MAX(Id) FROM `itemsnew`");
$MaxID = mysql_fetch_array($MaxID, MYSQL_BOTH);
$maxid = $MaxID[0];
$photo="default.jpg";
$prdct_id=strtoupper(substr($itemsname,0,3))."-".strtoupper(substr($batchno,0,4))."-".$maxid;

$file1=$_FILES['files']['name'];
if($file1!=""){
$ext= strtolower(substr(strrchr($file1,"."),1));
$elen= strlen($ext);
$flen= strlen($file1);
$slen= $flen-$elen-1;
$sname= substr($file1,0,$slen);
$photo=$batchno."_".$itemsname.".".$ext;
move_uploaded_file($_FILES["files"]["tmp_name"],"../products/".$photo);}

mysql_query("insert into itemsnew (cat_id, brandname, itemsname, mrp,descr,batchno,bv,photo,prdct_id,taxrate,quantity,manid) values ('$cat_id','$brandname','$itemsname','$mrp','$descr','$batchno','$bv','$photo','$prdct_id','$taxrate','$quantity','$manid')");
$MaxID = mysql_query("SELECT MAX(Id) FROM `itemsnew`");
$MaxID = mysql_fetch_array($MaxID, MYSQL_BOTH);
$maxids = $MaxID[0];
mysql_query("insert into itm_prices (itmid, mrp, dp, gr1, gr2, gr3, gr4) values ('$maxids', '$mrp', '$dp', '$gr1','$gr2','$gr3',  '$gr4')");
header("Location:"."viewitems.php?itm=1&yes=1");
?>