<?php
include("../connect/session.php");
$login=$_SESSION['login'];
$id=$_GET['id'];
$act_status =1;
$today = date("Y-m-d");  
mysql_query("update members  set ActStatus=1,doa='$today' where MemberID='$id'");
mysql_query("insert into  rocroyaltyaccountdetail (mmbr_id, debits,credits, dates,descriptn) values ('$id', 0, 300, '$today','Activation') ");
mysql_query("update rocroyaltycapitalsummary  set debits=debits+300,balance=balance+300 where mmbr_id='ROC'");
mysql_query("insert into  memberacc (mmbr_id, debits,credits,balance) values ('$id', 0, 0, 0) ");

$dfgdf=mysql_query("select Password,Name,Mobile from members where MemberID='$id' ");
while($dfg=mysql_fetch_array($dfgdf))
		{ 
		$Password=$dfg['Password'];
		$Name=$dfg['Name'];
		$Mobile=$dfg['Mobile'];
		if (strlen ($Mobile) == 10)
		{
	$meses = "Hi $Name Congratulations. Your ID : $id is activated. Wish you all Success with ROC. Visit www.ropclub.com";
	$messages = urlencode($meses);
	file_get_contents("http://sms.ropclub.com/pushsms.php?username=ropclub&password=rocsmsnew1&sender=ROC&to=$Mobile&message=$messages");
	}
		}
		
		

calculaterefincome($id);

function calculaterefincome($mmbr_id)
{

$today = date("Y-m-d");   

$ghjfghafsdfsdsj=mysql_query("select RefID from members where MemberID='$mmbr_id' ");
while($sdssdsdtd=mysql_fetch_array($ghjfghafsdfsdsj))
		{ 
		$RefIK=$sdssdsdtd['RefID'];
		mysql_query ("insert into memberaccdetail (MemberId, debits, credits, dates	, descriptn) values ('$RefIK',0,400,'$today','Ref. Inc' )");
		mysql_query ("update memberacc set credits=credits+400, balance=balance+400 where MemberId='$RefIK' ");
		}
	$ghjfghasj=mysql_query("select RefID from members where MemberID='$RefIK' ");
	while($sdssdtd=mysql_fetch_array($ghjfghasj))
		{ 
		
			$RefID=$sdssdtd['RefID'];
			mysql_query ("insert into memberaccdetail (MemberId, debits, credits, dates	, descriptn) values ('$RefID',0,100,'$today','Ref. Inc' )");
			mysql_query ("update memberacc set credits=credits+100, balance=balance+100 where MemberId='$RefID' ");
		}	
			
				$ghjfsfghj=mysql_query("select RefID from members where MemberID='$RefID' ");
				while($sdsdsd=mysql_fetch_array($ghjfsfghj))
					{ 
					$RefIDA=$sdsdsd['RefID'];
					mysql_query ("insert into memberaccdetail (MemberId, debits, credits, dates	, descriptn) values ('$RefIDA',0,50,'$today','Ref. Inc' )");
					mysql_query ("update memberacc set credits=credits+50, balance=balance+50 where MemberId='$RefIDA' ");
					
					}
						$gsdhjfghj=mysql_query("select RefID from members where MemberID='$RefIDA' ");
						while($sdsdsd=mysql_fetch_array($gsdhjfghj))
							{ 
							$RefIDB=$sdsdsd['RefID'];
							mysql_query ("insert into memberaccdetail (MemberId, debits, credits, dates	, descriptn) values ('$RefIDB',0,50,'$today','Ref. Inc' )");
							mysql_query ("update memberacc set credits=credits+50, balance=balance+50 where MemberId='$RefIDB' ");
							}
							for ($i=1; $i<=16;$i++)
								{
									$ghjfsdghj=mysql_query("select RefID from members where MemberID='$RefIDB' ");
									while($sdsdsdsd=mysql_fetch_array($ghjfsdghj))
										{ 
										$RefIDC=$sdsdsdsd['RefID'];
										mysql_query ("insert into memberaccdetail (MemberId, debits, credits, dates	, descriptn) values ('$RefIDC',0,25,'$today','Ref. Inc' )");
										mysql_query ("update memberacc set credits=credits+25, balance=balance+25 where MemberId='$RefIDC' ");
										}
								}				
	


}

?>
<script type="text/javascript">
alert ("User Activated");
window.location = "activatemembers.php"
</script>