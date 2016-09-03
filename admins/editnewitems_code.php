<?php 
include("../connect/session.php"); 
$id=$_GET['id'];
$cat_id=$_POST['cat_id'];
$brandname=$_POST['brandname'];
$itemsname=$_POST['itemsname'];
$mrp=$_POST['mrp'];
$dp=$_POST['dp'];
$gr1=$_POST['gr1'];
$gr2=$_POST['gr2'];
$gr3=$_POST['gr3'];
$gr4=$_POST['gr4'];
$manid=$_POST['manid'];
$batchno=$_POST['batchno'];
$descr=$_POST['descr'];
$bv=$_POST['bv'];
$taxrate=$_POST['taxrte'];
$manid=$_POST['manid'];

$file1=$_FILES['files']['name'];
if($file1!="" && $_FILES['files']['error']==0)
{
$qry=mysql_query("select * from itemsnew where id='$id'");
while($fry=mysql_fetch_array($qry))
     {
	 $id=$fry['id'];
	 $path="../products/".$fry['photo'];
	 if ($path!="default.jpg")
	 unlink ($path);
	 }
$ext= strtolower(substr(strrchr($file1,"."),1));
$elen= strlen($ext);
$flen= strlen($file1);
$slen= $flen-$elen-1;
$sname= substr($file1,0,$slen);
$photo=$sname.$id.".".$ext;
move_uploaded_file($_FILES["files"]["tmp_name"],"../products/".$photo);
mysql_query("update itemsnew set photo='$photo' where id='$id'");
}
mysql_query("update itemsnew set cat_id='$cat_id', brandname='$brandname',bv='$bv',batchno='$batchno', itemsname='$itemsname', mrp='$mrp',descr='$descr',taxrate='$taxrate',manid='$manid' where id='$id'");

mysql_query("update itm_prices set mrp='$mrp', dp='$dp',gr1='$gr1',gr2='$gr2', gr3='$gr3', gr4='$gr4' where itmid='$id'");
header("Location:"."viewitems.php?itm=1&yes=1");
?>