<?php 
include("../connect/session.php"); 
$Name=$_POST['name']; 
$RefID=$_POST['RefID']; 
$MemberID=$_POST['MemberID']; 
$Address=$_POST['Address']; 
$Occupation=$_POST['Occupation'];
$Country=$_POST['Country'];
$State=$_POST['State'];
$Phone=$_POST['Phone'];
$ECNo=$_POST['ECNo'];
$PanNo=$_POST['PanNo'];
$NomName=$_POST['NomName'];
$NomRel=$_POST['NomRel'];
$FoHName=$_POST['FoHName'];
$Pin=$_POST['Pin'];
$Mobile=$_POST['Mobile'];
$Phone=$_POST['Phone'];
$Gender=$_POST['Gender'];
$District=$_POST['District'];
$PreRefPoint=$_POST['PreRefPoint'];
$PreRefID=$_POST['PreRefID'];
$PrePoint=$_POST['prepiont'];
$MarStatus=$_POST['MarStatus'];
$Email=addslashes($_POST['Email']);
$ActStatus=$_POST['ActStatus'];
$DOB=$_POST['DOB'];
$accno=$_POST['accno'];
$password = $_POST['pass1'];
mysql_query("update  members set Name='$Name',Address='$Address',State='$State', Country='$Country', Occupation='$Occupation', Phone='$Phone', ActStatus='$ActStatus' , RefID='$RefID' , NomName='$NomName', NomRel='$NomRel', FoHName='$FoHName', DOB='$DOB',ECNo='$ECNo', PanNo='$PanNo',BankAccNo='$accno', Email='$Email',MarStatus='$MarStatus', Mobile='$Mobile', District='$District', Gender='$Gender', Pin='$Pin', Password='$password', PrePoint=PrePoint+'$PrePoint' where MemberID='$MemberID' ");

mysql_query("update members set PreRefPoint=PreRefPoint+'$PreRefPoint' where MemberID='$prerefid' ");

header('Location:'."allocatehere.php?id=$MemberID&stng=1");
?>