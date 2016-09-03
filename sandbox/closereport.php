<?php include("../connect/connect.php");
include("session.php"); ?>
<script type="text/javascript" src="../admins/sorttable.js"></script>
<style type="text/css">
<!--
body {
	font-family: Tahoma;
	font-size: 8.5pt;
}
table th {
cursor:pointer;
font-weight:bold;
}
-->
</style>
<table width="95%" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;" class="sortable">
<thead>
<tr>
    <th width="3%"  align="left" valign="top" bgcolor="#F1F1F1" >No.</th>
    <th width="6%"  align="left" valign="top" bgcolor="#F1F1F1" >ROC ID</th>
    <th width="5%"  align="left" valign="top" bgcolor="#F1F1F1" >Name</th>
    <th width="3%"  align="left" valign="top" bgcolor="#F1F1F1" >Address</th>
    <th width="9%"  align="left" valign="top" bgcolor="#F1F1F1" >SELF BV</th>
    <th width="5%"  align="left" valign="top" bgcolor="#F1F1F1" >BV A </th>
    <th width="4%"  align="left" valign="top" bgcolor="#F1F1F1" >BV B</th>
    <th width="7%"  align="left" valign="top" bgcolor="#F1F1F1" >REF Inc.</th>
    <th width="7%"  align="left" valign="top" bgcolor="#F1F1F1" >Roy Inc</th>
    <th width="6%"  align="left" valign="top" bgcolor="#F1F1F1" >Pur Inc</th>
    <th width="7%"  align="left" valign="top" bgcolor="#F1F1F1" >PLB Inc.</th>
    <th width="6%"  align="left" valign="top" bgcolor="#F1F1F1" >Ref BV</th>
    <th width="4%"  align="left" valign="top" bgcolor="#F1F1F1" >C/F</th>
    <th width="4%"  align="left" valign="top" bgcolor="#F1F1F1" >TDS</th>
    <th width="4%"  align="left" valign="top" bgcolor="#F1F1F1" >Ser</th>
    <th width="4%"  align="left" valign="top" bgcolor="#F1F1F1" >Othr</th>
    <th width="5%"  align="left" valign="top" bgcolor="#F1F1F1" >Gross</th>
    <th width="4%"  align="left" valign="top" bgcolor="#F1F1F1" >Ded</th>
    <th width="7%"  align="left" valign="top" bgcolor="#F1F1F1" >Net Pay</th>
  </tr>
</thead>
<tbody>
<?php 
$close_no=3;
$precloseno = $close_no - 1 ;

$slno=1;
$jfj=mysql_query("select MemberID,Name,Address,District, Pin,ActStatus from members");
while($sdfmsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfmsdfa['MemberID'];
$nameofcust=$sdfmsdfa['Name'];
$Address=$sdfmsdfa['Address'];
$District=$sdfmsdfa['District'];
$Pin=$sdfmsdfa['Pin'];
$ActStatus=$sdfmsdfa['ActStatus'];

$dfdgfgs=mysql_query("select SelfBV,AsideBV,BsideBV,SelfPI, AsidePI, BsidePI, TotalBVTillLastClosing, REFBV, percetagePossition  from pilastclosing where MemberID='$mmbr_id' and CloseNo = '$close_no'  ");
while($sdfsxccdfa=mysql_fetch_array($dfdgfgs))
{
$SelfBV=$sdfsxccdfa['SelfBV'];
$AsideBV=$sdfsxccdfa['AsideBV'];
$BsideBV=$sdfsxccdfa['BsideBV'];
$SelfPI=$sdfsxccdfa['SelfPI'];
$AsidePI=$sdfsxccdfa['AsidePI'];
$BsidePI=$sdfsxccdfa['BsidePI'];
$TotalBVTillLastClosing=$sdfsxccdfa['TotalBVTillLastClosing'];
$REFBV=$sdfsxccdfa['REFBV'];
$percetagePossition=$sdfsxccdfa['percetagePossition'];
$Asidepercetage=$sdfsxccdfa['Asidepercetage'];
$bsidePercentage=$sdfsxccdfa['bsidePercentage'];
}

$qrsyh=mysql_query("select amt_bal from paymenthistory  where mmbr_id = '$mmbr_id'  ");
while($qryssdsh=mysql_fetch_array($qrsyh))
{
$amt_ball +=$qryssdsh['amt_bal'];
}

$qryh=mysql_query("select ref_income,roy_income from closings_last where mmbr_id = '$mmbr_id' ");
while($qrysh=mysql_fetch_array($qryh))
{
$ref_income=$qrysh['ref_income'];
$roy_income=$qrysh['roy_income'];
}

$ssdgsdfs=mysql_query("select primaryid from primarytree where memid='$mmbr_id' ");
while($tdyisdyui=mysql_fetch_array($ssdgsdfs))
{
$primaryid =$tdyisdyui['primaryid'];

		$ssdgsfs=mysql_query("select amt from primaryacc where pid='$primaryid' ");
		while($tyisdyui=mysql_fetch_array($ssdgsfs))
		{
		$primaryincomee = $tyisdyui['amt'];
		}
$primryncme += $primaryincomee;		
}

$grossincome = $ref_income + $roy_income + $TotalBVTillLastClosing + $primryncme + $REFBV + $amt_ball; 

	if ($grossincome >= 2500) {
		$tds = $grossincome * (10/100);
		$serchrg = $grossincome * (5/100);
	}
	else { 
		$tds = 0;
		$serchrg = $grossincome * (5/100);
	}
	
	if ($ActStatus == 1 ) {
		$othrded = 0;
		$totded = $tds + $serchrg + $othrded;
		$netpayout = $grossincome - $totded;
		
	}
	else if ($ActStatus == 0 ) {
		$othrded = $grossincome / 2;
		$totded = $tds + $serchrg + $othrded;
		$netpayout = $grossincome - $totded;
	}
?>
<tr>
    <td  align="left" valign="top" ><?php echo $slno.'- '.$ActStatus; ?></td>
    <td  align="left" valign="top" ><?php echo $mmbr_id; ?></td>
    <td  align="left" valign="top" ><?php echo $nameofcust; ?></td>
    <td  align="left" valign="top" ><?php //echo nl2br($Address).'<br>'.$District.'<br>'.$Pin; ?><br /></td>
    <td  align="left" valign="top" ><?php echo $SelfBV; ?></td>
    <td  align="left" valign="top" ><?php echo $AsideBV; ?></td>
    <td  align="left" valign="top" ><?php echo $BsideBV; ?></td>
    <td  align="left" valign="top" ><?php echo $ref_income; ?></td>
    <td  align="left" valign="top" ><?php echo $roy_income; ?></td>
    <td  align="left" valign="top" ><?php echo $TotalBVTillLastClosing; ?></td>
    <td  align="left" valign="top" ><?php echo $primryncme; ?></td>
    <td  align="left" valign="top" ><?php echo $REFBV; ?></td>
    <td  align="left" valign="top" ><?php echo $amt_ball + 0; ?></td>
    <td  align="left" valign="top" ><?php echo $tds; ?></td>
    <td  align="left" valign="top" ><?php echo $serchrg; ?></td>
    <td  align="left" valign="top" ><?php echo $othrded;  ?></td>
    <td  align="left" valign="top" ><?php echo $grossincome;  ?></td>
    <td  align="left" valign="top" ><?php echo $totded;  ?></td>
    <td  align="left" valign="top" ><?php echo $netpayout; ?></td>
</tr>
<?php 
$slno ++;
$mmbr_id ='$nbsp';
$Address ='$nbsp';
$nameofcust = '$nbsp';
$SelfBV = 0;
$BsideBV = 0;
$AsideBV = 0;
$ref_income = 0;
$roy_income = 0;
$TotalBVTillLastClosing = 0;
$REFBV = 0;
$primryncme = 0;
$primaryincomee = 0;
$amt_ball = 0;
$tds = 0;
$serchrg = 0;
$othrded = 0;
$netpaybl = 0;
$netpayout = 0;
$grossincome = 0;
$totded = 0;
$ActStatus = '';
} 
?>
</tbody>
<tfoot>
  <tr>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" scope="col">&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
    <td  align="left" valign="top" bordercolor="#F1F1F1" bgcolor="#F1F1F1" >&nbsp;</td>
  </tr>
</tfoot>
</table>

