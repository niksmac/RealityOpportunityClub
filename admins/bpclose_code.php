<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; 

					mysql_query("truncate table bp_acc_mnthly  ");
					
					
	$q = "select MAX(close_no) from closings";
	$result = mysql_query($q);
	$data = mysql_fetch_array($result);
	$next_close_no=$data[0]+1;


						
					$jfsddffdj=mysql_query("select MemberID from members ");
						//$jfsddffdj=mysql_query("select MemberID from members where  MemberID='10010' ");
						while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
						{
							$_SESSION['leftbv'] = 0;
							$_SESSION['rightbv'] = 0;
							
							
							
							$mmbr_id=$ssddtfsdfga['MemberID'];
							mysql_query(" update bp_acc set cl_no = cl_no+1 where mem_id = '$mmbr_id' ");
							
							myleftsidebv($mmbr_id);
							myrightsidebv($mmbr_id);
							
							$own = myownbvacc($mmbr_id);
							$leftpoints = $_SESSION['leftbv'];
							$rightpoints = $_SESSION['rightbv'];
							
							$arSrc = array($leftpoints,$rightpoints);
							
							
							
							$fgh = mysql_query("select cl_no from bp_acc where mem_id='$mmbr_id' ");
							while($tyuty = mysql_fetch_array($fgh)) { 
							$cl_no = $tyuty['cl_no'];
							}
							
							if (($cl_no > 3) && ($own < 10) )
							{
							mysql_query("INSERT INTO bp_acc_mnthly (mem_id,close_no, left_count, right_count,  left_carry, right_carry) VALUES ('$mmbr_id', '$next_close_no', '$leftpoints', '$rightpoints', 0, 0)" );
							}
							
							else 
							{		
							$iMinValue = max($arSrc);
							$arFlip = array_flip($arSrc);
							$iMinPosition = $arFlip[$iMinValue];
							
							if ($iMinPosition == 0 )
							mysql_query("INSERT INTO bp_acc_mnthly (mem_id, close_no,  left_count, right_count, left_carry, right_carry) VALUES ('$mmbr_id', '$next_close_no', '$leftpoints', '$rightpoints', '$iMinValue', 0)" );
							else if ($iMinPosition == 1 )
							mysql_query("INSERT INTO bp_acc_mnthly (mem_id, close_no, left_count, right_count,	left_carry, right_carry) VALUES ('$mmbr_id', '$next_close_no', '$leftpoints', '$rightpoints', 0, '$iMinValue')" );
							}
							//break;
							
							reSetall();
						}

						



						
						
//header('Location:'."index.php");




function reSetall()
{

$leftpoints == 0;
$rightpoints == 0;
$iMinPosition == 0;
$iMinValue == 0;
$arSrc == 0;


}


function myownbvacc($usrid)
{
		$fgh=mysql_query("select bp_accum from bp_acc where mem_id='$usrid' ");
		while($tyuty = mysql_fetch_array($fgh)) { 
		$lastbvv =$tyuty['bp_accum'];
		}
		if ($lastbvv == '')
		return 0;
		else 
		return $lastbvv;
}




###### Total Left side BV ###############
function myleftsidebv($usrid)
{
				$qwerty=mysql_query("select LChildID from childstatus where ParentID='$usrid' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$LChildID=$huibc['LChildID'];
				}
				mychildsleft($LChildID);
				showmeleft($LChildID);
}
function mychildsleft($uname)
				{
				$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$LChildID=$huibc['LChildID'];
				$RChildID=$huibc['RChildID'];
				if ($LChildID != 0){
				mychildsleft($LChildID);
				showmeleft($LChildID);
				}
				if ($RChildID != 0){
				mychildsleft($RChildID);
				showmeleft($RChildID);
				}
				}
				}
function showmeleft($usrid)
				{
					$fgh=mysql_query("select bp_accum from bp_acc where mem_id='$usrid' ");
					while($tyuty = mysql_fetch_array($fgh)) { 
					$leftbv =$tyuty['bp_accum'];
					}
					$_SESSION['leftbv'] = $_SESSION['leftbv'] + $leftbv;
				}
###### Total Left side BV ###############				
				
###### Total Right  side tot  BV   ###############

function myrightsidebv($usrid)
{
	$qwerty=mysql_query("select RChildID from childstatus where ParentID='$usrid' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$RChildID=$huibc['RChildID'];
				}
				mychildsright($RChildID);
				showmeright($RChildID);
}


function mychildsright($uname)
				{
				$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$LChildID=$huibc['LChildID'];
				$RChildID=$huibc['RChildID'];
				if ($LChildID != 0){
				mychildsright($LChildID);
				showmeright($LChildID);
				}
				if ($RChildID != 0){
				mychildsright($RChildID);
				showmeright($RChildID);
				}
				}
				}

function showmeright($usrid)
				{
					$fgh=mysql_query("select bp_accum from bp_acc where mem_id='$usrid' ");
					while($tyuty = mysql_fetch_array($fgh)) { 
					$rightbv =$tyuty['bp_accum'];
					}
					$_SESSION['rightbv'] = $_SESSION['rightbv'] + $rightbv;
				}


###### Total Right  side tot  BV end   ###############

?>