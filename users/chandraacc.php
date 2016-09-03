<?php 

ini_set("precision", "6");
$close_no=$_GET['clno'];
$precloseno = $close_no - 1 ;

$jfj=mysql_query("select MemberID,Name,ActStatus,Address from members where MemberID='$rocuname' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$nameofcust=$sdfsdfa['Name'];
$act_status=$sdfsdfa['ActStatus'];
$Address=$sdfsdfa['Address'];
}

$jfdfgj=mysql_query("select LChildID,RChildID from childstatus where ParentID='$mmbr_id' ");
while($sddfsdhfa=mysql_fetch_array($jfdfgj))
{
$LChildID=$sddfsdhfa['LChildID'];
$RChildID=$sddfsdhfa['RChildID'];
}



$dfdgfgs=mysql_query("select SelfBV,AsideBV,BsideBV,SelfPI, AsidePI, BsidePI, TotalBVTillLastClosing, REFBV, percetagePossition  from pilastclosing where MemberID='$rocuname' and CloseNo = 3  ");
while($sdfsxccdfa=mysql_fetch_array($dfdgfgs))
{
$SelfBV=$sdfsxccdfa['SelfBV'];
$AsideBV=$sdfsxccdfa['AsideBV'];
$BsideBV=$sdfsxccdfa['BsideBV'];
$SelfPI=$sdfsxccdfa['SelfPI'];
$AsidePI=$sdfsxccdfa['AsidePI'];
$BsidePI=$sdfsxccdfa['BsidePI'];
$TotalBVTillLastClosing=$sdfsxccdfa['TotalBVTillLastClosing'];
$percetagePossition=$sdfsxccdfa['percetagePossition'];
}

$qrsyh=mysql_query("select amt_bal from paymenthistory  where mmbr_id = '$rocuname'  ");
while($qryssdsh=mysql_fetch_array($qrsyh))
{
$amt_ball +=$qryssdsh['amt_bal'];
}

	
$qryh=mysql_query("select ref_income,roy_income from closings_last where mmbr_id = '$rocuname' ");
while($qrysh=mysql_fetch_array($qryh))
{
$ref_income=$qrysh['ref_income'];
$roy_income=$qrysh['roy_income'];
}


$ssdgsdfs=mysql_query("select primaryid from primarytree where memid='$rocuname' ");
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
	$BsideBV= 198763;
	
?><style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	font-size: 9.5pt;
	color: #000000;
}
.style2 {font-size: 8pt}
body {
	margin-top: 5pt;
	margin-bottom: 5pt;
}
-->
</style>

<table width="80%" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#666666" style="margin-top:40px;" >
  <tr>
    <td width="600" align="center" valign="middle">
    
    <div id="printReady">
    
    <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><img src="img/roclogosmall.gif" width="143" height="59" border="0" /><br />
          www.ropclub.com<br /></td>
        <td align="left" valign="top"><div align="right"><strong>Reality Opportunity Club&nbsp;</strong><br />
          Mannath Buildings<br />
          NSHM P.O.
          &nbsp;Kottayam&nbsp;<br />
          Kerala&nbsp;
          &nbsp;PIN 686006<br />
          Ph : +91 481 2311147&nbsp; </div></td>
      </tr>
      <tr>
        <td width="294" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Personal Details</th>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo $nameofcust; ?><br />
                  <?php echo $Address; ?></td>
            </tr>
        </table></td>
        <td width="294" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Statement for the Month of <?php echo date('F Y') ?></th>
            </tr>
            <tr>
              <td align="left" valign="middle">ROC ID : <?php echo $rocuname; ?><br />
                Percentage Position : <?php echo 21; ?></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th width="34%" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">ROC ID</th>
              <th width="16%" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">RBV</th>
              <th width="25%" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">BV cm</th>
              <th width="25%" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">BV Acc.</th>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo $rocuname; ?></td>
              <td align="left" valign="middle"><?php echo $SelfBV; ?></td>
              <td align="left" valign="middle"><?php echo $SelfBV; ?></td>
              <td align="left" valign="middle"><?php echo $bvacc = $SelfBV + $AsideBV + $BsideBV; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo showName($LChildID); ?></td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle"> 60360 </td>
              <td align="left" valign="middle"> 60360 </td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Babu Raj M.A. </td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle"><?php echo $BsideBV= 198763; ?></td>
              <td align="left" valign="middle"><?php echo $BsideBV= 198763; ?></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th colspan="5" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Income Types</th>
            </tr>
            <tr>
              <td width="34%" align="left" valign="middle"> Referal Income </td>
              <td width="15%" align="right" valign="middle"><?php echo $ref_income = 4800; ?></td>
              <td width="1%" align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="25%" align="left" valign="middle"> Real Royalty </td>
              <td width="25%" align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Royalty Income <br /></td>
              <td align="right" valign="middle"><?php echo $roy_income; ?></td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Volume Royalty </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Purchase Income </td>
              <td align="right" valign="middle"><?php echo $TotalBVTillLastClosing = 6389.66; ?></td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Bonus </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Primary Level Binary Income </td>
              <td align="right" valign="middle"><?php echo $primryncme + 0; ?></td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Turnover </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Referral BV</td>
              <td align="right" valign="middle"><?php echo $REFBV = 6312; ?></td>
              <td align="right" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle">C/F from Last Closing</td>
              <td align="right" valign="middle"><?php echo $amt_ball + 0; ?></td>
            </tr>
            <tr>
              <td colspan="5" align="right" valign="middle">Gross Income : <?php echo $grossincome = $ref_income + $roy_income + $TotalBVTillLastClosing + $primryncme + $REFBV + $amt_ball; ?></td>
            </tr>
        </table></td>
      </tr>
      <?php 
  if ($grossincome >= 2500) {
  $tds = $grossincome * (10/100);
  $serchrg = $grossincome * (5/100);
  }
  else { 
  $tds = 0;
  $serchrg = $grossincome * (5/100);
  }
  
  $netpay = $grossincome - $totded;
  
  
  if ($act_status == 1 ) {
  $netpayy = $netpay;
  $othrded = 0;
  }
  else  {
  $netpayy = $netpay / 2;
  $othrded = $netpayy;
  }
  $totded = $tds + $serchrg + $othrded;
  $netpaybl = $grossincome - $totded;
  ?>
      <tr>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th colspan="2" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Deductions</th>
            </tr>
            <tr>
              <td width="70%" align="left" valign="middle">TDS @ 10%</td>
              <td width="30%" align="right" valign="middle"><?php echo $tds; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Service Charge 5%</td>
              <td align="right" valign="middle"><?php echo $serchrg; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Others</td>
              <td align="right" valign="middle"><?php  echo $othrded;  ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Total</td>
              <td align="right" valign="middle"><?php echo $totded; ?></td>
            </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th colspan="2" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Summary</th>
            </tr>
            <tr>
              <td width="51%" align="left" valign="middle">Gross Income</td>
              <td width="49%" align="right" valign="middle"><?php echo $grossincome; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Deductions</td>
              <td align="right" valign="middle"><?php echo $totded; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Previous Balance</td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"><strong>Net Payable </strong></td>
              <td align="right" valign="middle"><strong><?php echo $netpaybl; ?></strong></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <td align="left" valign="middle">Amount in Words <strong><?php echo numberToWords($netpaybl); ?></strong></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <td align="left" valign="middle" bordercolor="#CCCCCC" class="geninfo">* TDS as per the rates applicable under section 194H of Income tax act. This section has been inserted from 1st Jan 2001<br />
                * This is a computer generated statement and does not need any signature.<br />
                * If there is any change in Address please inform us with Address proof to serve you better.</td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="right" valign="top"><span class="style2">Reality Opportunity Club</span></td>
      </tr>
    </table>
    </div>
    
    <a href="javascript:void(printSpecial())" title="Print Section"><img src="img/btn_print.gif" alt="PRINT" width="34" height="18" border="0" /></a>
    
    </td>
  </tr>
</table>
<?php 

function numberToWords ($number)
{
	$words = array ('zero',
			'one',
			'two',
			'three',
			'four',
			'five',
			'six',
			'seven',
			'eight',
			'nine',
			'ten',
			'eleven',
			'twelve',
			'thirteen',
			'fourteen',
			'fifteen',
			'sixteen',
			'seventeen',
			'eighteen',
			'nineteen',
			'twenty',
			30=> 'thirty',
			40 => 'fourty',
			50 => 'fifty',
			60 => 'sixty',
			70 => 'seventy',
			80 => 'eighty',
			90 => 'ninety',
			100 => 'hundred',
			1000=> 'thousand');
 
	if (is_numeric ($number))
	{
		$number = (int) round($number);
		if ($number < 0)
		{
			$number = -$number;
			$number_in_words = 'minus ';
		}
		if ($number > 1000)
		{
			$number_in_words = $number_in_words . numberToWords(floor($number/1000)) . " " . $words[1000];
			$hundreds = $number % 1000;
			$tens = $hundreds % 100;
			if ($hundreds > 100)
			{
				$number_in_words = $number_in_words . ", " . numberToWords ($hundreds);
			}
			elseif ($tens)
			{
				$number_in_words = $number_in_words . " and " . numberToWords ($tens);
			}
		}
		elseif ($number > 100)
		{
			$number_in_words = $number_in_words . numberToWords(floor ($number / 100)) . " " . $words[100];
			$tens = $number % 100;
			if ($tens)
			{
				$number_in_words = $number_in_words . " and " . numberToWords ($tens);
			}
		}
		elseif ($number > 20)
		{
			$number_in_words = $number_in_words . " " . $words[10 * floor ($number/10)];
			$units = $number % 10;
			if ($units)
			{
				$number_in_words = $number_in_words . numberToWords ($units);
			}
		}
		else
		{
			$number_in_words = $number_in_words . " " . $words[$number];
		}
		return $number_in_words;
	}
	return false;
}

function showName($memid)
{
	$jfj=mysql_query("select Name from members where MemberID='$memid' ");
	while($sdfsdfa=mysql_fetch_array($jfj))
	{
	$Name=$sdfsdfa['Name'];
	}
return $Name;
}
?>
