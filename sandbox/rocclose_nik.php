<?php 
include("session.php");

session_start();

ini_set("precision", "8");

include("../connect/connect.php");

						
					
						$jfsddffdj=mysql_query("select MemberID from members  ");
						while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
						{
							$_SESSION['leftbv'] = 0;
							$_SESSION['rightbv'] = 0;
							$_SESSION['leftbvcur'] = 0;
							$_SESSION['rightbvcur'] = 0;
							$mmbr_id=$ssddtfsdfga['MemberID'];
							myleftsidebv($mmbr_id);
							myrightsidebv($mmbr_id);
							myleftsidecurbv($mmbr_id);
							myrightsidecurbv($mmbr_id);
							$s_bv_acc_lc = myownbvacc($mmbr_id);
							$a_bv_acc_lc = $_SESSION['leftbv'];
							$b_bv_acc_lc = $_SESSION['rightbv'];
							$s_bv_cm = mybvcurmnth($mmbr_id);
							$a_bv_cm = $_SESSION['leftbvcur'];
							$b_bv_cm = $_SESSION['rightbvcur'];
							$tot_bv_acc_lc = $s_bv_acc_lc + $a_bv_acc_lc + $b_bv_acc_lc;
							$tot_bv_cm = $s_bv_cm + $a_bv_cm + $b_bv_cm;
							$bv_acc = $tot_bv_acc_lc;
							$per_pos = mypercentageposition($tot_bv_acc_lc);
mysql_query(" INSERT INTO  closingpicalcs (mmbr_id ,s_bv_acc_lc ,a_bv_acc_lc ,b_bv_acc_lc ,tot_bv_acc_lc ,s_bv_cm ,a_bv_cm ,b_bv_cm ,tot_bv_cm ,bv_acc ,per_pos )VALUES ('$mmbr_id',  '$s_bv_acc_lc',  '$a_bv_acc_lc',  '$b_bv_acc_lc',  '$tot_bv_acc_lc',  '$s_bv_cm',  '$a_bv_cm',  '$b_bv_cm',  '$tot_bv_cm',  '$bv_acc',  '$per_pos') ");
						reSetall();
						}

						



						
						
		$jfsddffdj=mysql_query("select MemberID from members ");
		while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
		{
		
			$mmbr_id=$ssddtfsdfga['MemberID'];
					updatePerDiff($mmbr_id);
					updateRefInc($mmbr_id);
					reSetall();
					//break;
		}
		
		$jfsddffdj=mysql_query("select MemberID from members ");
		while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
		{
			$mmbr_id=$ssddtfsdfga['MemberID'];
					update_calpi($mmbr_id);
					writeValues($mmbr_id);
					reSetall();
					//break;
		}		


header('Location:'."index.php");

function updateRefInc($usrid)
{

	$query = "SELECT  SUM(credits) FROM memberaccdetail where  MemberId='$usrid' and descriptn = 'Ref. Inc' and dates > '2011-02-26'  "; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
	$reff_inc = $row['SUM(credits)'];
	}
	mysql_query ("update closingpicalcs set reff_inc='$reff_inc' where mmbr_id='$usrid' ");
}

function updatePerDiff($usrid)
{

		$ssdgfs=mysql_query("select per_pos from closingpicalcs where mmbr_id='$usrid' ");
		while($tyiyui=mysql_fetch_array($ssdgfs))
		{
		$per_pos =$tyiyui['per_pos'];
		}
		
		
		$ssdgfs=mysql_query("select LChildID,RChildID from childstatus where ParentID='$usrid' ");
		while($tyiyui=mysql_fetch_array($ssdgfs))
		{
		$LChildID =$tyiyui['LChildID'];
		$RChildID =$tyiyui['RChildID'];
		}
		
		$ssddddgfs=mysql_query("select per_pos from closingpicalcs where mmbr_id='$LChildID' ");
		while($tyiffyui=mysql_fetch_array($ssddddgfs))
		{
		$perposl =$tyiffyui['per_pos'];
		}
		$per_dif_a = $per_pos - $perposl;
		
		$ssdgkkfs=mysql_query("select per_pos from closingpicalcs where mmbr_id='$RChildID' ");
		while($tyiyudddi=mysql_fetch_array($ssdgkkfs))
		{
		$perposr = $tyiyudddi['per_pos'];
		}
		
		$per_dif_b = $per_pos - $perposr;
		
		mysql_query ("update closingpicalcs set per_dif_a='$per_dif_a', per_dif_b='$per_dif_b' where mmbr_id='$usrid' ");
		
		//mysql_query ("update closingpicalcs set aside_per='$perposl', bside_per='$perposr' where mmbr_id='$usrid' ");

}


function update_calpi($usrid)
{

		$ssdgfs=mysql_query("select per_pos, per_dif_a, per_dif_b, s_bv_cm, a_bv_cm, b_bv_cm from closingpicalcs where mmbr_id='$usrid' ");
		while($tyiyui=mysql_fetch_array($ssdgfs))
		{
		$per_pos =$tyiyui['per_pos'];
		$per_dif_a =$tyiyui['per_dif_a'];
		$per_dif_b =$tyiyui['per_dif_b'];
		
		$s_bv_cm =$tyiyui['s_bv_cm'];
		$a_bv_cm =$tyiyui['a_bv_cm'];
		$b_bv_cm =$tyiyui['b_bv_cm'];
		}
		
		$selfpi = $s_bv_cm * ($per_pos / 100);
		$asidepi = $a_bv_cm * ($per_dif_a / 100);
		$bsidepi = $b_bv_cm * ($per_dif_b / 100);
		
		$totalpi = $selfpi + $asidepi + $bsidepi;
		mysql_query ("update closingpicalcs set selfpi='$selfpi', asidepi='$asidepi' , bsidepi='$bsidepi' , totalpi='$totalpi' where mmbr_id='$usrid' ");
		
		//mysql_query ("update closingpicalcs set aside_per='$perposl', bside_per='$perposr' where mmbr_id='$usrid' ");

}



function reSetall()
{

$s_bv_acc_lc = 0;
$a_bv_acc_lc = 0;
$b_bv_acc_lc = 0;


$s_bv_acc_lc = 0;
$a_bv_acc_lc = 0;
$b_bv_acc_lc = 0;

$tot_bv_acc_lc = 0;
$s_bv_cm = 0;
$a_bv_cm = 0;

$b_bv_cm = 0;
$tot_bv_cm = 0;
$bv_acc = 0;

$per_pos = 0;
$per_dif_a = 0;
$per_dif_b = 0;

$selfpi = 0;
$asidepi = 0;
$bsidepi = 0;
$totalpi = 0;


}


function myownbvacc($usrid)
{
		$fgh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' ");
		while($tyuty = mysql_fetch_array($fgh)) { 
		$lastbvv =$tyuty['SUM(bv)'];
		}
		if ($lastbvv == '')
		return 0;
		else 
		return $lastbvv;
}



function mypreaccbv($usrid)
{
$fgh=mysql_query("select SelfBV, AsideBV, BsideBV from pilastclosing where MemberID='$usrid' ");
while($tyuty=mysql_fetch_array($fgh)) { 
$SelfBV =$tyuty['SelfBV)'];
$AsideBV =$tyuty['AsideBV'];
$BsideBV =$tyuty['BsideBV'];
}
$mypreclaccbv = $SelfBV + $AsideBV + $BsideBV;
return $mypreclaccbv;
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
					$fgh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' ");
					while($tyuty = mysql_fetch_array($fgh)) { 
					$leftbv =$tyuty['SUM(bv)'];
					}
					$_SESSION['leftbv'] = $_SESSION['leftbv'] + $leftbv;
				}
###### Total Left side BV ###############				
				
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
					$fgfffh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' and datentim >= '2011-02-26' ");
							while($tkyuuty = mysql_fetch_array($fgfffh)) { 
							$leftbvcur =$tkyuuty['SUM(bv)'];
							}
					$_SESSION['leftbvcur'] = $_SESSION['leftbvcur']+ $leftbvcur;
				}


###### Total Left side Current  BV ###############

###### My Own Current  BV ###############				
function mybvcurmnth($usrid)
				{
					$fgfffh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' and datentim >= '2011-02-26'");
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
					$fgfffh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' and datentim >= '2011-02-26'");
							while($tkyuuty = mysql_fetch_array($fgfffh)) { 
							$rightbvcur =$tkyuuty['SUM(bv)'];
							}
					$_SESSION['rightbvcur'] = $_SESSION['rightbvcur']+ $rightbvcur;
				}
###### Total Right  side Current  BV  end ###############



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
					$fgh=mysql_query("select SUM(bv) from bvthruweb where memid='$usrid' ");
					while($tyuty = mysql_fetch_array($fgh)) { 
					$rightbv =$tyuty['SUM(bv)'];
					}
					$_SESSION['rightbv'] = $_SESSION['rightbv'] + $rightbv;
				}


###### Total Right  side tot  BV end   ###############

###### Ref bv  Start   ###############

function writeValues($rocmmbr_id)
{


$jfsdfdj=mysql_query("select lev1 from ref_tree where memid = '$rocmmbr_id'  and lev1 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev1'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				 $fstlvlincc = $rows['s_bv_cm'];
			}
	$fstlvlinc += $fstlvlincc;
}

$jfsdfdj=mysql_query("select lev2 from ref_tree where memid = '$rocmmbr_id'  and lev2 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev2'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc2 = $rows['s_bv_cm'];
			}
	$fstlvlinc2 += $fstlvlincc2;
}

$jfsdfdj=mysql_query("select lev3 from ref_tree where memid = '$rocmmbr_id'  and lev3 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev3'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc3 = $rows['s_bv_cm'];
			}
	$fstlvlinc3 += $fstlvlincc3;
}
$jfsdfdj=mysql_query("select lev4 from ref_tree where memid = '$rocmmbr_id'  and lev4 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev4'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc4 = $rows['s_bv_cm'];
			}
	$fstlvlinc4 += $fstlvlincc4;
}

$jfsdfdj=mysql_query("select lev5 from ref_tree where memid = '$rocmmbr_id' and  lev5 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev5'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc5 = $rows['s_bv_cm'];
			}
	$fstlvlinc5 += $fstlvlincc5;
}

$jfsdfdj=mysql_query("select lev6 from ref_tree where memid = '$rocmmbr_id' and  lev6 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev6'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc6 = $rows['s_bv_cm'];
			}
	$fstlvlinc6 += $fstlvlincc6;
}


$jfsdfdj=mysql_query("select lev7 from ref_tree where memid = '$rocmmbr_id' and  lev7 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev7'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc7 = $rows['s_bv_cm'];
			}
	$fstlvlinc7 += $fstlvlincc7;
}

$jfsdfdj=mysql_query("select lev8 from ref_tree where memid = '$rocmmbr_id'  and lev8 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev8'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc8 = $rows['s_bv_cm'];
			}
	$fstlvlinc8 += $fstlvlincc8;
}

$jfsdfdj=mysql_query("select lev9 from ref_tree where memid = '$rocmmbr_id'  and lev9 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev9'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc9 = $rows['s_bv_cm'];
			}
	$fstlvlinc9 += $fstlvlincc9;
}

$jfsdfdj=mysql_query("select lev10 from ref_tree where memid = '$rocmmbr_id'  and lev10 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev10'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc10 = $rows['s_bv_cm'];
			}
	$fstlvlinc10 += $fstlvlincc10;
}


$jfsdfdj=mysql_query("select lev11 from ref_tree where memid = '$rocmmbr_id'  and lev11 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev11'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc11 = $rows['s_bv_cm'];
			}
	$fstlvlinc11 += $fstlvlincc11;
}


$jfsdfdj=mysql_query("select lev12 from ref_tree where memid = '$rocmmbr_id'  and lev12 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev12'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc12 = $rows['s_bv_cm'];
			}
	$fstlvlinc12 += $fstlvlincc12;
}

$jfsdfdj=mysql_query("select lev13 from ref_tree where memid = '$rocmmbr_id'  and lev13 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev13'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc13 = $rows['s_bv_cm'];
			}
	$fstlvlinc13 += $fstlvlincc13;
}

$jfsdfdj=mysql_query("select lev14 from ref_tree where memid = '$rocmmbr_id'  and lev14 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev14'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc14 = $rows['s_bv_cm'];
			}
	$fstlvlinc14 += $fstlvlincc14;
}


$jfsdfdj=mysql_query("select lev15 from ref_tree where memid = '$rocmmbr_id'  and lev15 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev15'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc15 = $rows['s_bv_cm'];
			}
	$fstlvlinc15 += $fstlvlincc15;
}

$jfsdfdj=mysql_query("select lev16 from ref_tree where memid = '$rocmmbr_id'  and lev16 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev16'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc16 = $rows['s_bv_cm'];
			}
	$fstlvlinc16 += $fstlvlincc16;
}

$jfsdfdj=mysql_query("select lev17 from ref_tree where memid = '$rocmmbr_id'  and lev17 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev17'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc17 = $rows['s_bv_cm'];
			}
	$fstlvlinc17 += $fstlvlincc17;
}


$jfsdfdj=mysql_query("select lev18 from ref_tree where memid = '$rocmmbr_id'  and lev18 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev18'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc18 = $rows['s_bv_cm'];
			}
	$fstlvlinc18 += $fstlvlincc18;
}



$jfsdfdj=mysql_query("select lev19 from ref_tree where memid = '$rocmmbr_id'  and lev19 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev19'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc19 = $rows['s_bv_cm'];
			}
	$fstlvlinc19 += $fstlvlincc19;
}

$jfsdfdj=mysql_query("select lev20 from ref_tree where memid = '$rocmmbr_id'  and lev20 <> 0 ");
while($sdfsdfa=mysql_fetch_array($jfsdfdj))
{
	$lev1=$sdfsdfa['lev20'];
			$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$lev1' "; 	 
			$results = mysql_query($querys) or die(mysql_error());
			while($rows = mysql_fetch_array($results))
			{
				$fstlvlincc20 = $rows['s_bv_cm'];
			}
	$fstlvlinc20 += $fstlvlincc20;
}


$querys = "SELECT  s_bv_cm FROM closingpicalcs where mmbr_id='$rocmmbr_id' "; 	 
$results = mysql_query($querys) or die(mysql_error());
while($rows = mysql_fetch_array($results))
{
	$s_bv_cm = $rows['s_bv_cm'];
}
			

$totrefbvs = $fstlvlinc + $fstlvlinc2 + $fstlvlinc3 + $fstlvlinc4 + $fstlvlinc5 + $fstlvlinc6 + $fstlvlinc7+ $fstlvlinc8+ $fstlvlinc9+ $fstlvlinc10 + $fstlvlinc11+ $fstlvlinc12+ $fstlvlinc13+ $fstlvlinc14+ $fstlvlinc15+ $fstlvlinc16+ $fstlvlinc17+ $fstlvlinc18 + $fstlvlinc19 + $fstlvlinc20;

$s_bv_cmper = $s_bv_cm * (7/100);
$fstlevelper = $fstlvlinc * (5/100);
$fstlevelper2 = $fstlvlinc2 * (4/100);
$fstlevelper3 = $fstlvlinc3 * (3/100);
$fstlevelper4 = $fstlvlinc4 * (2/100);
$fstlevelper5 = $fstlvlinc5 * (1/100);
$fstlevelper6 = $fstlvlinc6 * (0.5/100);
$fstlevelper7 = $fstlvlinc7 * (0.5/100);
$fstlevelper8 = $fstlvlinc8 * (0.5/100);
$fstlevelper9 = $fstlvlinc9 * (0.5/100);
$fstlevelper10 = $fstlvlinc10 * (0.5/100);
$fstlevelper11 = $fstlvlinc11 * (0.5/100);
$fstlevelper12 = fstlvlinc12 * (0.5/100);
$fstlevelper13 = $fstlvlinc13 * (0.5/100);
$fstlevelper14 = $fstlvlinc14 * (0.5/100);
$fstlevelper15 = $fstlvlinc15 * (0.5/100);
$fstlevelper16 = $fstlvlinc16 * (0.5/100);
$fstlevelper17 = $fstlvlinc17 * (0.5/100);
$fstlevelper18 = $fstlvlinc18 * (0.5/100);
$fstlevelper19 = $fstlvlinc19 * (0.5/100);
$fstlevelper20 = $fstlvlinc20 * (0.5/100);

$totrefinc = $s_bv_cmper + $fstlevelper + $fstlevelper2 + $fstlevelper3 + $fstlevelper4 + $fstlevelper5 + $fstlevelper6 + $fstlevelper7 + $fstlevelper8 + $fstlevelper9 + $fstlevelper10 + $fstlevelper11 + $fstlevelper12 + $fstlevelper13 + $fstlevelper14 + $fstlevelper15 + $fstlevelper16 + $fstlevelper17 + $fstlevelper18 + $fstlevelper19 + $fstlevelper20 ;

mysql_query ("update closingpicalcs set tot_refbv_inc='$totrefinc', totref_bv='$totrefbvs' where mmbr_id='$rocmmbr_id' ");


}

###### Ref bv  end    ###############


function mypercentageposition($mybv)
{
	if ($mybv < 1500 ) { 
	$perpos = 0;
	}
	else if ( ($mybv > 1500) && ($mybv <= 3000) ) { 
	$perpos = 5;
	}
	else if ( ($mybv > 3000) && ($mybv <= 6000) ) { 
	$perpos = 7;
	}
	else if ( ($mybv > 6000) && ($mybv <= 12000) ) { 
	$perpos = 10;
	}
	else if ( ($mybv > 12000) && ($mybv <= 25000) ) { 
	$perpos = 13;
	}
	else if ( ($mybv > 25000) && ($mybv <= 50000) ) { 
	$perpos = 15;
	}
	else if ( ($mybv > 50000) && ($mybv <= 100000) ) { 
	$perpos = 17;
	}
	else if ( ($mybv > 100000) && ($mybv <= 200000) ) { 
	$perpos = 19;
	}
	else if ( ($mybv > 200000) && ($mybv <= 300000) ) { 
	$perpos = 21;
	}
	else if ( ($mybv > 300000) && ($mybv <= 400000) ) { 
	$perpos = 23;
	}
	else if ( ($mybv > 400000) && ($mybv <= 10000000000) ) { 
	$perpos = 25;
	}
	
	return $perpos;
}




?>