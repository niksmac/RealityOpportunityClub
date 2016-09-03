<?php 
include("session.php");
session_start();
ini_set("max_execution_time", "0");
ini_set("precision", "8");

include("../connect/connect.php");

	mysql_query (" TRUNCATE TABLE  `curr_stat` ");					
					
						$jfsddffdj=mysql_query("select MemberID from members  ");
						while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
						{
							$_SESSION['leftbvcur'] = 0;
							$_SESSION['rightbvcur'] = 0;
							$mmbr_id=$ssddtfsdfga['MemberID'];

							myleftsidecurbv($mmbr_id);
							myrightsidecurbv($mmbr_id);
							
							$s_bv_cm = mybvcurmnth($mmbr_id);
							$a_bv_cm = $_SESSION['leftbvcur'];
							$b_bv_cm = $_SESSION['rightbvcur'];
							mysql_query (" INSERT INTO  curr_stat (mem_id ,sbv ,abv ,bbv)VALUES ( '$mmbr_id',  '$s_bv_cm',  '$a_bv_cm',  '$b_bv_cm ')");


						}

						



						
										
###### Total Left side Current  BV ###############
function myleftsidecurbv($usrid)
{
				$qwerty=mysql_query("select LChildID from childstatus where ParentID='$usrid' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$LChildID=$huibc['LChildID'];
				}
				mychildsleftcur($LChildID);
				showmeleftcur($LChildID);
}
function mychildsleftcur($uname)
				{
				$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$LChildID=$huibc['LChildID'];
				$RChildID=$huibc['RChildID'];
				if ($LChildID != 0){
				mychildsleftcur($LChildID);
				showmeleftcur($LChildID);
				}
				if ($RChildID != 0){
				mychildsleftcur($RChildID);
				showmeleftcur($RChildID);
				}
				}
				}
function showmeleftcur($usrid)
				{
					$fgfffh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' and datentim >= '2011-03-21' ");
							while($tkyuuty = mysql_fetch_array($fgfffh)) { 
							$leftbvcur =$tkyuuty['SUM(bv)'];
							}
					$_SESSION['leftbvcur'] = $_SESSION['leftbvcur']+ $leftbvcur;
				}


###### Total Left side Current  BV ###############

###### My Own Current  BV ###############				
function mybvcurmnth($usrid)
				{
					$fgfffh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' and datentim >= '2011-03-21'");
							while($tkyuuty = mysql_fetch_array($fgfffh)) { 
							$mycurbv =$tkyuuty['SUM(bv)'];
							}
					return $mycurbv;
				}				
				
###### Total Left side Current  BV ###############

###### Total Right side Current  BV ###############

function myrightsidecurbv($usrid)
{
				$qwerty=mysql_query("select RChildID from childstatus where ParentID='$usrid' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$RChildID=$huibc['RChildID'];
				}
				mychildsrightcur($RChildID);
				showmerightcur($RChildID);
}
function mychildsrightcur($uname)
				{
				$qwerty=mysql_query("select LChildID,RChildID from childstatus where ParentID='$uname' ");
				while($huibc=mysql_fetch_array($qwerty))
				{ 
				$LChildID=$huibc['LChildID'];
				$RChildID=$huibc['RChildID'];
				if ($LChildID != 0){
				mychildsrightcur($LChildID);
				showmerightcur($LChildID);
				}
				if ($RChildID != 0){
				mychildsrightcur($RChildID);
				showmerightcur($RChildID);
				}
				}
				}
function showmerightcur($usrid)
				{
					$fgfffh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' and datentim >= '2011-03-21'");
							while($tkyuuty = mysql_fetch_array($fgfffh)) { 
							$rightbvcur =$tkyuuty['SUM(bv)'];
							}
					$_SESSION['rightbvcur'] = $_SESSION['rightbvcur']+ $rightbvcur;
				}
###### Total Right  side Current  BV  end ###############


?>