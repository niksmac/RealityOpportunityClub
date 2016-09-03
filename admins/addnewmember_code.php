<?php 
include("sessioncode.php");
session_start();
$key=substr($_SESSION['key'],0,5);
$number = $_POST['number'];
if($number!=$key)
{
echo "<html><head><title>ROP Club :: Error</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Error: Human verification Failed !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}
else if($number==$key)
{
	$leg=$_POST['leg'];
	$RefID=$_POST['RefID'];
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Gender=$_POST['Gender'];
	$MarStatus=$_POST['MarStatus'];
	$DOB=$_POST['dd']."-".$_POST['mm']."-".$_POST['yy'];
	$FoHName=$_POST['FoHName'];
	$Occupation=$_POST['Occupation'];
	$Phone=$_POST['Phone'];
	$Mobile=$_POST['Mobile'];
	$ECNo=$_POST['ECNo'];
	$PanNo=$_POST['PanNo'];
	$Address=$_POST['Address'];
	$Country=$_POST['Country'];
	$State=$_POST['State'];
	$District=$_POST['District'];
	$Pin=$_POST['Pin'];
	$NomName=$_POST['NomName'];
	$NomRel=$_POST['NomRel'];
	$DirRefID=$_POST['DirRefID'];
	$today = date("m-d-y"); 
	$Password=$_POST['passtwo'];
	$ActStatus=0;
	$TrackID=$_SESSION['uname'];
	$q = "select MAX(MemberID) from members";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$MemberIDNew=$data[0]+1;
	
	function createRandomPassword() 
	{
		$chars = "QWERTYUIOPASDFGHJKLZXCVBNM";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 4) {
        	$num = rand() % 33;
	        $tmp = substr($chars, $num, 1);
    	    $pass = $pass . $tmp;
	        $i++;
    	}
	    return $pass;
	}	
	//$Password = createRandomPassword();
	
mysql_query("insert into members (Name, Address, State, Country, Occupation, Phone, ActStatus, MemberID, RefID, NomName, NomRel, FoHName, DOB, ECNo, PanNo,Password, Gender, TrackID, doj, Email, District, MarStatus ,Mobile, Pin ) values ('$Name', '$Address', '$State', '$Country', '$Occupation','$Phone','$ActStatus', '$MemberIDNew', '$RefID', '$NomName', '$NomRel','$FoHName', '$DOB', '$ECNo', '$PanNo', '$Password', '$Gender', '$TrackID', '$today', '$Email', '$District', '$MarStatus', '$Mobile', '$Pin')");

$meses = "Hi $Name welcome to Reality Opportunity Club. Your ID : $MemberIDNew Password : $Password Activate your ID asap to enjoy all benefits from ROC";
$messages = urlencode($meses);
file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsms&sender=ROC&to=$Mobile&message=$messages");



	$sfghfgdhgh=mysql_query("select * from members where MemberID='$RefID' ");
	while($fhsd=mysql_fetch_array($sfghfgdhgh))
		{ 
		$OldID=$fhsd['MemberID'];
		$OldParityID=$fhsd['ParityID'];
		}
	$jghjfhj=mysql_query("select * from childstatus ");
	$endd=mysql_num_rows($jghjfhj);

	$rtyry=mysql_query("select * from childstatus where ParentID='$OldID' ");
	while($sdfrsf=mysql_fetch_array($rtyry))
		{ 
		$ParentID=$sdfrsf['ParentID'];
		$LChildID=$sdfrsf['LChildID'];
		$RChildID=$sdfrsf['RChildID'];
		}


if ($leg == "L" && $LChildID == 0)
{
	mysql_query ("update childstatus set LChildID='$MemberIDNew', where ParentID='$ParentID' ");
	$P_ParentID=$ParentID;
}
else if ($leg == "R" && $RChildID == 0)
{

	mysql_query ("update childstatus set RChildID='$MemberIDNew'  where ParentID='$ParentID' ");
	$P_ParentID=$ParentID;	
}

else if ($leg == "L" && $LChildID != 0)
{
	
	for ($i=1; $i <= $endd; $i++)
	{
	$ghjfghj=mysql_query("select * from childstatus where ParentID='$LChildID' ");
	while($sdsd=mysql_fetch_array($ghjfghj))
		{ 
		$ParentID=$sdsd['ParentID'];
		$P_ParentID=$sdsd['ParentID'];
		$LChildID=$sdsd['LChildID'];
		if ($LChildID == 0)
		break;
		}
	
	}

	mysql_query ("update childstatus set LChildID='$MemberIDNew'  where ParentID='$ParentID' ");
	
}
else if ($leg == "R" && $RChildID != 0)
{
	for ($i=1; $i <= $endd; $i++)
	{
	$ghjfghj=mysql_query("select * from childstatus where ParentID='$RChildID' ");
	while($sdsd=mysql_fetch_array($ghjfghj))
		{ 
		$ParentID=$sdsd['ParentID'];
		$P_ParentID=$sdsd['ParentID'];
		$RChildID=$sdsd['LChildID'];
		if ($RChildID == 0)
		break;
		}
	
	}
	mysql_query ("update childstatus set LChildID='$MemberIDNew'  where ParentID='$ParentID' ");
}	
mysql_query("insert into childstatus (ParentID,LChildID,RChildID,P_ParentID) values('$MemberIDNew',0,0,'$P_ParentID')");
echo "<html><head><title>ROP Club :: Success</title><script>function update(){window.location='newlyadded.php?id=$MemberIDNew';}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td><table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Success: New Member Added !</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while... You are being redirected! If not then click </font><a href=javascript:history.go(-3); text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
}
?>