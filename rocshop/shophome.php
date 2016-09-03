<?php include("sessioncode.php"); ?><title>HOME</title>
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<table width="850" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><a href="index.php" title="home page"> <img src="images/logo.png" alt="logo" class="logo" border="0" /></a></td>
  </tr>
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="189" align="left" valign="top"><div align="right">
          <?php include("shpmenu.php"); ?>
        </div></td>
        <td width="655" align="left" valign="top"><?php 
			  $uname = $_SESSION['shplogin'];
$qrtyh=mysql_query("select ownername,storename,address,pincode,credits,grade  from stores where store_id='$uname' ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$grade =$qraysjh['grade'];
$ownername =$qraysjh['ownername'];
$storename =$qraysjh['storename'];
$address = $qraysjh['address'];
$pincode = $qraysjh['pincode'];
$credits = $qraysjh['credits'];
}
switch ($grade)
{
case 1:
$disp="STATE Depo.";
break;
case 2:
$disp="MEGA STOCKIST";
break;
case 3:
$disp="STOCKIST";
break;
case 4:
$disp="RETAIL SHOP";
break;
}


			  ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                
                <tr>
                  <td width="3%">&nbsp;</td>
                  <td width="73%"><h4><?php echo $storename; ?> - <?php echo $disp; ?></h4></td>
                  <td width="24%"><h4><?php echo $uname; ?></h4></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext">Owner : <?php echo $ownername; ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext"><?php echo nl2br($address); ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext"><?php echo $pincode; ?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext"> this site is best viewed in Google Chrome / Mozilla</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext">Download Mozilla <a href="http://www.mozilla.com/en-US/">HERE</a></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext">Download Chrome <a href="http://www.google.com/chrome">HERE</a></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="graytext">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
