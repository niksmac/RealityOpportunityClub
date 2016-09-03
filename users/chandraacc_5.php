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
        <td rowspan="2" align="left" valign="top" background="img/RealityOpportunityClub.jpg" style="background-repeat:no-repeat;"><br />
          <br />
          <br />
          <br />
          <br />
          www.ropclub.com</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><div align="right"><strong>Reality Opportunity Club</strong><br />
          Mannath Buildings<br />
          NSHM P.O.
          &nbsp;Kottayam<br />
          Kerala&nbsp;
          &nbsp;PIN 686006<br />
          Ph : +91 481 2311147 </div></td>
      </tr>
      <tr>
        <td width="294" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Personal Details</th>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo $nameofcust; ?><br />
                  <?php echo nl2br($Address); ?></td>
            </tr>
        </table></td>
        <td width="294" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Statement for the Month of <?php echo date('F Y') ?></th>
            </tr>
            <tr>
              <td align="left" valign="middle">ROC ID : <?php echo $rocuname; ?><br />
                Percentage Position : 23</td>
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
              <td align="left" valign="middle"><?php echo $nameofcust; ?></td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">168</td>
              <td align="left" valign="middle">413808.5</td>
            </tr>
            <tr>
              <td align="left" valign="middle"><?php echo showName($LChildID); ?></td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">32614</td>
              <td align="left" valign="middle">97432</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Babu Raj M.A.</td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">16210</td>
              <td align="left" valign="middle">316126.5</td>
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
              <td width="15%" align="right" valign="middle">12450.00</td>
              <td width="1%" align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="25%" align="left" valign="middle"> Real Royalty </td>
              <td width="25%" align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Royalty Income <br /></td>
              <td align="right" valign="middle">0</td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Volume Royalty </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Purchase Income </td>
              <td align="right" valign="middle">2975.32</td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Bonus </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"> Primary Level Binary Income </td>
              <td align="right" valign="middle">6400</td>
              <td align="left" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle"> Real Turnover </td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Referral BV Income</td>
              <td align="right" valign="middle">1469.76</td>
              <td align="right" valign="middle" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="middle">C/F from Last Closing</td>
              <td align="right" valign="middle">0</td>
            </tr>
            <tr>
              <td colspan="5" align="right" valign="middle">Gross Income : 23295.08</td>
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
              <td width="30%" align="right" valign="middle">2329.51</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Service Charge 5%</td>
              <td align="right" valign="middle">1164.75</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Others</td>
              <td align="right" valign="middle">0</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Total</td>
              <td align="right" valign="middle">3494.26</td>
            </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <th colspan="2" align="left" valign="middle" bgcolor="#CCCCCC" scope="col">Summary</th>
            </tr>
            <tr>
              <td width="51%" align="left" valign="middle">Gross Income</td>
              <td width="49%" align="right" valign="middle">23295.1</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Deductions</td>
              <td align="right" valign="middle">3294.24</td>
            </tr>
            <tr>
              <td align="left" valign="middle">Previous Balance</td>
              <td align="right" valign="middle">0.00</td>
            </tr>
            <tr>
              <td align="left" valign="middle"><strong>Net Payable </strong></td>
              <td align="right" valign="middle"><strong>19800.82</strong></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tr>
              <td align="left" valign="middle">Amount in Words <strong><?php echo ucwords(numberToWords(19800.82)); ?></strong></td>
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
