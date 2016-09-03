<table width="99%" border="1" cellpadding="3" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">
            <tr>
              <td height="33" colspan="8"><h3><strong>Data Validation</strong></h3></td>
            </tr>
            <tr>
              <td width="20" height="29" class="ContentBlue"><strong>No </strong></td>
              <td width="48" class="ContentBlue">&nbsp;</td>
              <td width="48" class="ContentBlue"><strong>ID No</strong></td>
              <td width="176" class="ContentBlue"><strong>Name</strong></td>
              <td width="99" class="ContentBlue"><strong>Electral Card</strong></td>
              <td width="93" class="ContentBlue"><strong>PAN</strong></td>
              <td width="101" class="ContentBlue"><strong>Mobile</strong></td>
              <td width="36" class="ContentBlue"><strong>Check</strong></td>
            </tr>
            <?php 
$er=1;		  
$qryh=mysql_query("select MemberID,Name,ECNo,PanNo,Mobile from members order by Name asc ");
while($qrysh=mysql_fetch_array($qryh))
{
$MemberID=$qrysh['MemberID'];

$ecard = 0; $pancard = 0; $mobile = 0;

$qrtyh=mysql_query("select * from proofvalidation where memid='$MemberID' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$ecard=$qraysjh['ecard'];
$pancard=$qraysjh['pancard'];
$mobile=$qraysjh['mobile'];
}

if (  ($ecard == 1) &&($pancard == 1) &&($mobile == 1))
$chk = 1;
else
$chk = 0;

if ($chk == 0)
{

?>
            <form id="form1" name="form1" method="post" action="validateecard_code.php">
            <tr>
              <td height="26"><?php echo $er; ?></td>
              <td><a href="javascript:void(0)"
onclick="window.open('viewmem.php?mid=<?php echo $MemberID; ?>',
'welcome','width=310,menubar=yes,status=yes')" ><img src="images/line_popup_ico.gif" alt="Details" width="16" height="12" border="0" /></a></td>
              <td><?php echo $qrysh['MemberID']; ?></td>
              <td><?php echo $qrysh['Name']; ?>
                <input type="hidden" name="memid" id="memid" value="<?php echo $MemberID; ?>"/></td>
              <td>
              <?php if ($ecard == 0) { ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="73%" align="left"><?php echo $qrysh['ECNo']; ?></td>
                    <td width="27%" align="right"><input type="checkbox" name="ecno" id="ecno" value="1" /></td>
                  </tr>
                </table>
                <?php } else { ?><img src="../images/ok.JPG" /><input name="ecno" type="hidden" value="1" /> <?php } ?>                </td>
              <td>
               <?php if ($pancard == 0) { ?>
               <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="68%" align="left"><?php echo $qrysh['PanNo']; ?></td>
                    <td width="32%" align="right"><input type="checkbox" name="panno" id="panno" value="1" /></td>
                  </tr>
                </table>
                <?php } else { ?><img src="../images/ok.JPG" /><input name="panno" type="hidden" value="1" /> <?php } ?>                </td>
              <td>
              <?php if ($mobile == 0) { ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="58%" align="left"><?php echo $qrysh['Mobile']; ?></td>
                    <td width="42%" align="right"><input type="checkbox" name="mob" id="mob" value="1" /></td>
                  </tr>
                </table>
                <?php } else { ?><img src="../images/ok.JPG" /><input name="mob" type="hidden" value="1" /> <?php } ?>                </td>
              <td><input type="submit" name="button" id="button" value="GO" /></td>
            </tr></form>
            <?php 
			$er++;
			$chk = 0;$ecard = 0; $pancard = 0; $mobile = 0;
			}
		 
		  
		  }
		  
		  ?>
          </table>