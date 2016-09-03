<script type="text/javascript" src="js/jquery-1.2.2.pack.js"></script>
<script type="text/javascript" src="js/ajaxtooltip.js"> </script>

<style type="text/css">

body{
font-size:9pt;
font-family:Tahoma;
}

.ajaxtooltip{
position: absolute; /*leave this alone*/
display: none; /*leave this alone*/
width: 300px;
left: 0; /*leave this alone*/
top: 0; /*leave this alone*/
padding: 5px;
}

.col1{
font-size:9pt;
color: #006600;
background-color:#99FF99;
}
.col2{
font-size:9pt;
color: #00CC00;
}
.col3{
font-size:9pt;
color: #996600;
}
.col4{
font-size:9pt;
color: #006666;
}
.col5{
font-size:9pt;
color: #3399FF;;
}
.col6{
font-size:9pt;
color: #669933;
}
.col7{
font-size:9pt;
color: #FF9933;
}
.col8{
font-size:9pt;
color: #9999FF;
}
.col9{
font-size:9pt;
color: #9933CC;
}
.col10{
font-size:9pt;
color: #CC6699;
}
.col11{
font-size:9pt;
color: #000033;
}

</style>
<?php 

			
		showMyChild($rocuname); 

		function showMyChild($myid)
		{
			global $mmbr_idtop;
			$jfj=mysql_query("select MemberID,RefID from members where RefID = '$myid' ");
			while($sdfsdfa=mysql_fetch_array($jfj))
			{
				$mmbr_id=$sdfsdfa['MemberID'];
				$RefID=$sdfsdfa['RefID'];
				showLink($mmbr_id,1);
				if (isValid($mmbr_id)) {
				showMyChild2($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev1`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,2);
				if (isValid($mmbr_id)) { 
				showMyChild3($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev2`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,3);
				if (isValid($mmbr_id)) { 
				showMyChild4($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev3`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//cho "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,4);
				if (isValid($mmbr_id)) { 
				showMyChild5($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev4`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,5);
				if (isValid($mmbr_id)) { 
				showMyChild6($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev5`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,6);
				if (isValid($mmbr_id)) { 
				showMyChild7($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev6`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,7);
				if (isValid($mmbr_id)) { 
				showMyChild8($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev7`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,8);
				if (isValid($mmbr_id)) { 
				showMyChild9($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev8`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='line_corner2.gif' />".$mmbr_id.'<br>';
				showLink($mmbr_id,9);
				if (isValid($mmbr_id)) { 
				showMyChild10($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev9`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,10);
				if (isValid($mmbr_id)) { 
				showMyChild11($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev10`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,11);
				if (isValid($mmbr_id)) { 
				showMyChild12($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev11`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,12);
				if (isValid($mmbr_id)) { 
				showMyChild13($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev12`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,13);
				if (isValid($mmbr_id)) { 
				showMyChild14($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev13`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,14);
				if (isValid($mmbr_id)) { 
				showMyChild15($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev14`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,15);
				if (isValid($mmbr_id)) { 
				showMyChild16($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev15`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,16);
				if (isValid($mmbr_id)) { 
				showMyChild17($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev16`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,17);
				if (isValid($mmbr_id)) { 
				showMyChild18($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev17`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,18);
				if (isValid($mmbr_id)) { 
				showMyChild19($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev18`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				showLink($mmbr_id,19);
				if (isValid($mmbr_id)) { 
				showMyChild20($mmbr_id);
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev19`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
				//mysql_query ("INSERT INTO  `accstmntnikrefbv` (`memid` ,`lev20`)VALUES ('$mmbr_idtop',  '$mmbr_id')");
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
		
		
		
		function showLink($myidd,$cnt)
		{
			for ($i=0; $i<=$cnt; $i++)
			{ $spaces .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; } 
			
			switch ($cnt)
			{
				case 1: 
					$class = 'col1';
					break;
				case 2: 
					$class = 'col2';
					break;	
				case 3: 
					$class = 'col3';
					break;		
				case 4: 
					$class = 'col4';
					break;
				case 5: 
					$class = 'col5';
					break;	
				case 6: 
					$class = 'col6';
					break;	
				case 7: 
					$class = 'col7';
					break;
				case 8: 
					$class = 'col8';
					break;	
				case 9: 
					$class = 'col9';
					break;	
				case 10: 
					$class = 'col10';
					break;
				case 11: 
					$class = 'col11';
					break;	
				case 12: 
					$class = 'col12';
					break;	
			}
			
			$mylink = $spaces.'<a href="#" title="ajax:getdetails.php?id='.$myidd.'&ll='.$cnt.'" class="'.$class.'">'.$myidd.'</a><br>';			
			echo  $mylink;

		}


//} 
?>
