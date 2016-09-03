<?php 
include("session.php");
include('../connect/connect.php');


/* $cvczv=mysql_query("select MemberID from members where ActStatus = 1 ");
		while($xcvxcc=mysql_fetch_array($cvczv))
		{	
		$MemberID = $xcvxcc['MemberID'];
		mysql_query (" insert into activation_account (mem_id, act_amt) values ('$MemberID',2000 ) ");
		}
*/		
		$cvcv=mysql_query("select MemberID from members where ActStatus = 0 ");
		while($xcvxc=mysql_fetch_array($cvcv))
		{	
		$MemberID = $xcvxc['MemberID'];



			$jfsddffdj=mysql_query("select mem_id, gross_inc, net_pay, paid_stat from acc_stmnt_final where mem_id='$MemberID' and close_no = 4 ");
			while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
			{	
				$mem_id = $ssddtfsdfga['mem_id'];
				$gross_inc = $ssddtfsdfga['gross_inc'];
				$net_pay = $ssddtfsdfga['net_pay'];
				$paid_stat = $ssddtfsdfga['paid_stat'];
				
				if ($paid_stat == 1)
				{
					$werwe = mysql_query("select mem_id from activation_account where mem_id = '$mem_id'");
					$rtyrt = mysql_num_rows ($werwe);
					if ($rtyrt == 1)
					mysql_query ("update activation_account set act_amt = act_amt + '$net_pay' where mem_id = '$mem_id'");
					else 
					mysql_query (" insert into activation_account (mem_id, act_amt) values ('$mem_id','$net_pay' ) ");
				}
				
	/*		else 
				{	
					$werwe = mysql_query("select mem_id from activation_account where mem_id = '$mem_id'");
					$rtyrt = mysql_num_rows ($werwe);
					if ($rtyrt == 1)
					mysql_query ("update activation_account set act_amt = act_amt + '$net_pay' where mem_id = '$mem_id'");
					else 
					mysql_query (" insert into activation_account (mem_id, act_amt) values ('$mem_id','$net_pay' ) ");
				
				}*/
				
			}
			
			}

?>