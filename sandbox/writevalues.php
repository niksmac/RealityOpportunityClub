<?php 
include("session.php");
include('../connect/connect.php');

						$jfsddffdj=mysql_query("select MemberID from members ");
						while($ssddtfsdfga=mysql_fetch_array($jfsddffdj))
						{
							$mmbr_id=$ssddtfsdfga['MemberID'];
							writeValues($mmbr_id);
							//break;
						}



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
			


//echo '<br> TOTAL BV- '.$totbvs = $s_bv_cm+ $fstlvlinc + $fstlvlinc2 + $fstlvlinc3 + $fstlvlinc4 + $fstlvlinc5 + $fstlvlinc6 + $fstlvlinc7+ $fstlvlinc8+ $fstlvlinc9+ $fstlvlinc10+ $fstlvlinc11;
//echo "<br><br>7 % of $s_bv_cm = ". $s_bv_cmper = ($s_bv_cm * (7/100));
//echo "<br><br>5 % of $fstlvlinc = ". $fstlevelper = ($fstlvlinc * (5/100));
//echo "<br>4 % of $fstlvlinc2 = ". $fstlevelper2 = ($fstlvlinc2 * (4/100));
//echo "<br>3 % of $fstlvlinc3 = ". $fstlevelper3 = ($fstlvlinc3 * (3/100));
//echo "<br>2 % of $fstlvlinc4 = ". $fstlevelper4 = ($fstlvlinc4 * (2/100));
//echo "<br>1 % of $fstlvlinc5 = ". $fstlevelper5 = ($fstlvlinc5 * (1/100));
//echo "<br>.05 % of $fstlvlinc6 = ". $fstlevelper6 = ($fstlvlinc6 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc7 = ". $fstlevelper7 = ($fstlvlinc7 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc8 = ". $fstlevelper8 = ($fstlvlinc8 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc9 = ". $fstlevelper9 = ($fstlvlinc9 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc10 = ". $fstlevelper10 = ($fstlvlinc10 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc11 = ". $fstlevelper11 = ($fstlvlinc11 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc12 = ". $fstlevelper12 = ($fstlvlinc12 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc13 = ". $fstlevelper13 = ($fstlvlinc13 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc14 = ". $fstlevelper14 = ($fstlvlinc14 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc15 = ". $fstlevelper15 = ($fstlvlinc15 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc16 = ". $fstlevelper16 = ($fstlvlinc16 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc17 = ". $fstlevelper17 = ($fstlvlinc17 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc18 = ". $fstlevelper18 = ($fstlvlinc18 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc19 = ". $fstlevelper19 = ($fstlvlinc19 * (0.5/100));
//echo "<br>.05 % of $fstlvlinc20 = ". $fstlevelper20 = ($fstlvlinc20 * (0.5/100));


//$totbvs = $s_bv_cm+ $fstlvlinc + $fstlvlinc2 + $fstlvlinc3 + $fstlvlinc4 + $fstlvlinc5 + $fstlvlinc6 + $fstlvlinc7+ $fstlvlinc8+ $fstlvlinc9+ $fstlvlinc10 + $fstlvlinc11+ $fstlvlinc12+ $fstlvlinc13+ $fstlvlinc14+ $fstlvlinc15+ $fstlvlinc16+ $fstlvlinc17+ $fstlvlinc18 + $fstlvlinc19 + $fstlvlinc20;

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

//mysql_query ("INSERT INTO  accstmntnikamts (mmbr_id ,bvsumm ,totrefbv ,lev1 ,lev2 ,lev3 ,lev4 ,lev5 ,lev6 ,lev7 ,lev8 ,lev9 ,lev10 ,lev11 ,lev12 ,lev13 ,lev14 ,lev15 ,lev16 ,lev17 ,lev18 ,lev19 ,lev20)VALUES (  '$rocmmbr_id',  '$s_bv_cm',  '$totrefbvs',  '$fstlvlinc',   '$fstlvlinc2',  '$fstlvlinc3',  '$fstlvlinc4',  '$fstlvlinc5',  '$fstlvlinc6',  '$fstlvlinc7',  '$fstlvlinc8',  '$fstlvlinc9',  '$fstlvlinc10',  '$fstlvlinc11',  '$fstlvlinc12',  '$fstlvlinc13',  '$fstlvlinc14',  '$fstlvlinc15',  '$fstlvlinc16',  '$fstlvlinc17',  '$fstlvlinc18',  '$fstlvlinc19', '$fstlvlinc20' ) " );


//mysql_query ("INSERT INTO  accstmntnikbv (mmbr_id ,bvsumm ,totrefbv ,lev1 ,lev2 ,lev3 ,lev4 ,lev5 ,lev6 ,lev7 ,lev8 ,lev9 ,lev10 ,lev11 ,lev12 ,lev13 ,lev14 ,lev15 ,lev16 ,lev17 ,lev18 ,lev19 ,lev20)VALUES (  '$rocmmbr_id',  '$s_bv_cm',  '$totrefbvs',  '$fstlevelper',   '$fstlevelper2',  '$fstlevelper3',  '$fstlevelper4',  '$fstlevelper5',  '$fstlevelper6',  '$fstlevelper7',  '$fstlevelper8',  '$fstlevelper9',  '$fstlevelper10',  '$fstlevelper11',  '$fstlevelper12',  '$fstlevelper13',  '$fstlevelper14',  '$fstlevelper15',  '$fstlevelper16',  '$fstlevelper17',  '$fstlevelper18',  '$fstlevelper19', '$fstlevelper20' ) " );


}


?>