<table width="600" border="1" cellpadding="3" cellspacing="0">

<?php 
include("session.php");
//header("Content-Type: application/vnd.ms-excel");
	include("../connect/connect.php");
	//echo ini_get('max_execution_time'); 
	//set_time_limit(0);
	//echo ini_get('max_execution_time'); 
	$count = 1;
	$sfghfgdhgh=mysql_query("select  Name, Mobile, MemberID from members  ");
	while($fhsd=mysql_fetch_array($sfghfgdhgh))
		{ 
		$Mobile=$fhsd['Mobile'];
		$Name=$fhsd['Name'];
		$MemeberID=$fhsd['MemberID'];
		if(isValid ($Mobile))
		{
		$meses = "Hi $Name, Wide variety of kit options for activating your ROC ID and develop your business to gain great income. Visit www.ropclub.com.";
		//$messages = urlencode($meses);
		//file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$Mobile&message=$messages");
		
		?>
          <tr>
   
    <td width="158"><?php echo $Name; ?></td>
    <td width="158"><?php echo $MemeberID; ?></td>
     <td width="62"><?php echo $Mobile; ?></td>
  </tr>
  <?php 
		$count ++;
		//if ($count == 100)
		//sleep (20);
		}
		}		
		//echo "$count  Done !! ";
function isValid ($mob)
{
	$pattern = "^[9,8]";
	$nos = strlen ($mob);
	if ( (eregi($pattern,$mob)) && ($nos == 10))
	return true;
	else 
	return false;
}
?>
</table>
