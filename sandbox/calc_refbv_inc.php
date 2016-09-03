<?php 

include("session.php");

ini_set('max_execution_time' ,0);
ini_set('error_reporting' ,1);
include('../connect/connect.php');



mysql_query ("truncate table `ref_tree` ");
			
			$jfsddffdj=mysql_query("select MemberID from members ");
			while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
			{
				$mmbr_id=$ssddtfsdfga['MemberID'];
				$rocmemid=$ssddtfsdfga['MemberID'];
				$mmbr_idtop = $mmbr_id;
				showMyChild($rocmemid);
			}

		function showMyChild($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) {
				showMyChild2($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev1`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		function showMyChild2($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild3($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev2`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}

		function showMyChild3($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild4($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev3`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		
		function showMyChild4($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild5($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev4`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		function showMyChild5($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild6($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev5`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		function showMyChild6($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild7($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev6`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		function showMyChild7($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild8($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev7`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		function showMyChild8($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild9($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev8`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		
		function showMyChild9($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild10($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev9`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		function showMyChild10($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild11($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev10`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		function showMyChild11($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild12($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev11`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}		
		
		function showMyChild12($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild13($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev12`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}	
		
		function showMyChild13($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild14($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev13`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}	
		
		function showMyChild14($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild15($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev14`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}	
		
		function showMyChild15($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild16($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev15`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}	
		
		function showMyChild16($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild17($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev16`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		function showMyChild17($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild18($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev17`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		
		function showMyChild18($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild19($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev18`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		
		
		function showMyChild19($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				if (isValid($mmbr_id)) { 
				showMyChild20($mmbr_id);
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev19`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
				}
			}
		}
		
		function showMyChild20($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				mysql_query ("INSERT INTO  `ref_tree` (`memid` ,`lev20`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
			}
		}
		
		
		function isValid($myid)
		{
			$jfdj=mysql_query("select MemberID from members where MemberID = '$myid' ");
			$erter = mysql_num_rows($jfdj);
			if ($erter == 1)
			return true;
			else
			return false;

		}
		
		
		



//} 
?>