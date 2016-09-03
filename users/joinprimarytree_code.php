<?php 

include("../connect/session.php");

$rocid = $_POST['rocid'];
$refprimaryid = $_SESSION['refpid'];
$side = $_SESSION['side'];
$kityp = $_SESSION['kityp'];

	$q = "select MAX(primaryid) from primarytree";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$NewPID=$data[0]+1;
	
	$rtyry=mysql_query("select level,leftid,rightid from primarytree where primaryid='$refprimaryid' ");
	while($sdfrsf=mysql_fetch_array($rtyry))
		{ 
		 $leftid=$sdfrsf['leftid'];
		 $rightid=$sdfrsf['rightid'];
		 $level=$sdfrsf['level'];
		}
	

	$jghjfhj=mysql_query("select id from primarytree ");
	$endd=mysql_num_rows($jghjfhj);
	
if ($side == "L" && $leftid == "0")
{
	mysql_query ("update primarytree set leftid='$NewPID' where primaryid='$refprimaryid' ");
}
else if ($side == "R" && $rightid == "0")
{

	mysql_query ("update primarytree set rightid='$NewPID'  where primaryid='$refprimaryid' ");
}

else if ($side == "L" && $leftid != "0")
{
	
	for ($i=1; $i <= $endd; $i++)
	{
	$ghjfghj=mysql_query("select primaryid,leftid,level from primarytree where primaryid='$leftid' ");
	while($sdsd=mysql_fetch_array($ghjfghj))
		{ 
		$primaryid=$sdsd['primaryid'];
		$level=$sdsd['level'];
		$leftid=$sdsd['leftid'];
		if ($leftid == "0")
		break;
		}
	
	}

	mysql_query ("update primarytree set leftid='$NewPID'  where primaryid='$primaryid' ");
	
}
else if ($side == "R" && $rightid != "0")
{
	for ($i=1; $i <= $endd; $i++)
	{
	$ghjfghj=mysql_query("select primaryid,leftid,level from primarytree where primaryid='$rightid' ");
	while($sdsd=mysql_fetch_array($ghjfghj))
		{ 
		$primaryid=$sdsd['primaryid'];
		$level=$sdsd['level'];
		$rightid=$sdsd['leftid'];
		if ($rightid == "0")
		break;
		}
	
	}
	mysql_query ("update primarytree set leftid='$NewPID'  where primaryid='$primaryid' ");
}	

############### Updates level and inserts into ptree ###############

$newlevel = $level + 1;
mysql_query("insert into primarytree (primaryid, memid, leftid, rightid,level,kittype,reffpid ,DOA,actstatus) values ('$NewPID','$rocid', 0, 0,'$newlevel','$kityp', '$refprimaryid' ,NOW(),1 )");
mysql_query("insert into primaryacc (pid) values ('$NewPID')");


$keyid = $_SESSION['keyid'];
mysql_query("update primarytreekey set keystat=1,usdby='$NewPID' where id='$keyid'");

############## Clearing all sessions ###############
unset ($_SESSION['refpid']);
unset ($_SESSION['side']);
unset ($_SESSION['keyid']);
unset ($_SESSION['kityp']);

############## Sending SMS to new joiner ###############

$rtfyry=mysql_query("select Mobile from members where MemberID = '$rocid' ");
		while($sdfrspoxf=mysql_fetch_array($rtfyry))
		{ 
			$Mobile=$sdfrspoxf['Mobile'];
			if (strlen ($Mobile) == 10)
				{
					$meses = "Congratulations, Welcome to ROC Primary plan. Log on to ROC ID to check your status and position. Wish you all success in ROC biz. Visit www.ropclub.com";
					$messages = urlencode($meses);
					//file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$Mobile&message=$messages");
				}

		}
		

header('Location:'."roc-aftrprimaryjoinings.php?pid=$NewPID&token=y4rt45fDs6iDS");

?>