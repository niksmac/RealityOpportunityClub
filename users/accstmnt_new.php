<?php 


$close_no=$_GET['clno'];
$precloseno = $close_no - 1 ;


$jfej=mysql_query("select close_date from closings where close_no='$close_no' ");
while($sdfdffa=mysql_fetch_array($jfej))
{
$close_date=$sdfdffa['close_date'];
}

$monthnum = substr($close_date, 5, -3); 

$jfj=mysql_query("select MemberID,Name,ActStatus,Address from members where MemberID='$rocuname' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$nameofcust=$sdfsdfa['Name'];
$act_status=$sdfsdfa['ActStatus'];
$Address=$sdfsdfa['Address'];
}

$jfdj=mysql_query("select * from acc_stmnt_final where mem_id='$rocuname' and close_no = '$close_no' ");
while($lkjhg=mysql_fetch_array($jfdj))
{


$jfdfgj=mysql_query("select LChildID,RChildID from childstatus where ParentID='$mmbr_id' ");
while($sddfsdhfa=mysql_fetch_array($jfdfgj))
{
$LChildID=$sddfsdhfa['LChildID'];
$RChildID=$sddfsdhfa['RChildID'];
}


$jdfj=mysql_query("select * from closingpicalcs where mmbr_id='$rocuname' ");
while($sdfsddfa=mysql_fetch_array($jdfj))
{
$per_pos=$sdfsddfa['per_pos'];
$s_bv_cm=$sdfsddfa['s_bv_cm'];
$a_bv_cm=$sdfsddfa['a_bv_cm'];
$b_bv_cm=$sdfsddfa['b_bv_cm'];
$a_bv_acc_lc=$sdfsddfa['a_bv_acc_lc'];
$b_bv_acc_lc=$sdfsddfa['b_bv_acc_lc'];
}
?>
<div id="printReady">
<style type="text/css">
<!--
body,td,th {
	font-size: 9pt;
	color: #000000;
	font-family: Tahoma;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<table width="80%" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#666666" style="margin-top:40px;" height="80%" >
  <tr>
    <td align="center" valign="middle"><table width="99%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td width="50%" rowspan="2" align="left" valign="top"><img src="img/RealityOpportunityClub.jpg" width="360" height="77" border="0" /><br />
          www.ropclub.com<br /></td>
        <td width="50%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%" align="left" valign="top"><div align="right"><strong>Reality Opportunity Club&nbsp;</strong><br />
          Mannath Buildings<br />
          NSHM P.O.
          &nbsp;Kottayam&nbsp;<br />
          Kerala&nbsp;
          &nbsp;PIN 686006<br />
          Ph : +91 481 2311147&nbsp; </div></td>
      </tr>
      <tr>
        <td width="50%" align="left" valign="top">&nbsp;</td>
        <td width="50%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%" align="left" valign="top"><table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse; line-height:190%;">
            <tr>
              <th align="left" valign="middle" bgcolor="#CCCCCC" scope="col">To,</th>
            </tr>
            <tr>
              <td align="left" valign="middle"><strong><?php echo $nameofcust; ?></strong><br />
                  <?php echo $Address; ?></td>
            </tr>
        </table></td>
        <td width="50%" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Statement for the Month of <?php echo showmnth($monthnum); ?></th>
            </tr>
            <tr>
              <td align="left" valign="middle">ROC ID : <?php echo $rocuname; ?><br />
                Percentage Position : <?php echo $per_pos; ?></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top">&nbsp;</td>
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
              <td align="left" valign="middle"><?php echo $nameofcust; ?></td>
              <td align="left" valign="middle"><?php echo $s_bv_cm; ?></td>
              <td align="left" valign="middle"><?php echo $s_bv_cm; ?></td>
              <td align="left" valign="middle"><?php echo $bvacc = $s_bv_cm + $a_bv_cm + $b_bv_cm; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo showName($LChildID); ?></td>
              <td align="left" valign="middle"><?php echo curmnthselfbv($LChildID); ?></td>
              <td align="left" valign="middle"><?php echo $a_bv_cm; ?></td>
              <td align="left" valign="middle"><?php echo $a_bv_acc_lc; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo showName($RChildID); ?></td>
              <td align="left" valign="middle"><?php echo curmnthselfbv($RChildID); ?></td>
              <td align="left" valign="middle"><?php echo $b_bv_cm; ?></td>
              <td align="left" valign="middle"><?php echo $b_bv_acc_lc; ?></td>
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
              <td width="15%" align="right" valign="middle"><?php echo $lkjhg['ref_inc']; ?></td>
              <td width="2%" align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="24%" align="left" valign="middle"> Real Royalty </td>
              <td width="25%" align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Royalty Income <br /></td>
              <td align="right" valign="middle"><?php echo $lkjhg['roy_inc'];  ?></td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Volume Royalty </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Purchase Income </td>
              <td align="right" valign="middle"><?php echo round($lkjhg['pur_inc'],2); ?></td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Bonus </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Primary Level Binary Income </td>
              <td align="right" valign="middle"><?php echo 0; ?></td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Turnover </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Referral BV Income</td>
              <td align="right" valign="middle"><?php echo $lkjhg['ref_bv_inc']; ?></td>
              <td align="right" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle">C/F from Last Closing</td>
              <td align="right" valign="middle"><?php echo $lkjhg['carry_lc']; ?></td>
            </tr>
            <tr>
              <td colspan="5" align="right" valign="middle">Gross Income : <?php echo round($lkjhg['gross_inc'],2); ?></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th colspan="2" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Deductions</th>
            </tr>
            <tr>
              <td width="70%" align="left" valign="middle">TDS @ 10%</td>
              <td width="30%" align="right" valign="middle"><?php echo $lkjhg['tds']; ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Service Charge 5%</td>
              <td align="right" valign="middle"><?php echo round($lkjhg['ser_chg'],2); ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Others</td>
              <td align="right" valign="middle"><?php  echo round($lkjhg['othrs'],2);  ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Total</td>
              <td align="right" valign="middle"><?php echo round($lkjhg['tot_ded'],2); ?></td>
            </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th colspan="2" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Summary</th>
            </tr>
            <tr>
              <td width="51%" align="left" valign="middle">Gross Income</td>
              <td width="49%" align="right" valign="middle"><?php echo  round($lkjhg['gross_inc'],2); ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Deductions</td>
              <td align="right" valign="middle"><?php echo round($lkjhg['tot_ded'],2); ?></td>
            </tr>
            <tr>
              <td align="left" valign="middle">Previous Balance</td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"><strong>Net Payable </strong></td>
              <td align="right" valign="middle"><strong><?php echo  round($lkjhg['net_pay'],2); ?></strong></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <td align="left" valign="middle">Amount in Words <strong><?php echo ucwords(numberToWords($lkjhg['net_pay'])); ?></strong></td>
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
    </table></td>
  </tr>
</table>
</div>
<a href="javascript:void(printSpecial())" title="Print Section"><img src="img/btn_print.gif" alt="PRINT" width="34" height="18" border="0" /></a>
<?php 
}
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


function curmnthselfbv($memid)
{
		$jdfj=mysql_query("select s_bv_cm from closingpicalcs where mmbr_id='$memid' ");
		while($sdfsddfa=mysql_fetch_array($jdfj))
		{
		$s_bv_cm=$sdfsddfa['s_bv_cm'];
		}
return $s_bv_cm;
}
function showmnth($mnthnos)
{
switch($mnthnos) 
{ 
    case "01" : {
        $stringmonth = "January"; 
		break; }
    case "02" : {
        $stringmonth = "February"; 
		break; }
    case "03" : {
        $stringmonth = "March"; 
		break; }
    case "04" : {
        $stringmonth = "April"; 
		break; }
    case "05" : {
        $stringmonth = "May"; 
		break; }
    case "06" : {
        $stringmonth = "June"; 
		break; }
    case "07" : {
        $stringmonth = "July"; 
		break; }
    case "08" : {
        $stringmonth = "August"; 
		break; }
    case "09" : {
        $stringmonth = "September"; 
		break; }
    case "10" : {
        $stringmonth = "October"; 
		break; }
    case "11" : {
        $stringmonth = "November"; 
		break; }
    case "12" : {
        $stringmonth = "December"; 
		break; }
}
return $stringmonth;
}
?>
