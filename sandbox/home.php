<?php

include("session.php");

function distanceOfTimeInWords($fromTime, $toTime = 0, $showLessThanAMinute = false) {
    $distanceInSeconds = round(abs($toTime - $fromTime));
    $distanceInMinutes = round($distanceInSeconds / 60);
       
        if ( $distanceInMinutes <= 1 ) {
            if ( !$showLessThanAMinute ) {
                return ($distanceInMinutes == 0) ? 'less than a minute' : '1 minute';
            } else {
                if ( $distanceInSeconds < 5 ) {
                    return 'less than 5 seconds';
                }
                if ( $distanceInSeconds < 10 ) {
                    return 'less than 10 seconds';
                }
                if ( $distanceInSeconds < 20 ) {
                    return 'less than 20 seconds';
                }
                if ( $distanceInSeconds < 40 ) {
                    return 'about half a minute';
                }
                if ( $distanceInSeconds < 60 ) {
                    return 'less than a minute';
                }
               
                return '1 minute';
            }
        }
        if ( $distanceInMinutes < 45 ) {
            return $distanceInMinutes . ' minutes';
        }
        if ( $distanceInMinutes < 90 ) {
            return 'about 1 hour';
        }
        if ( $distanceInMinutes < 1440 ) {
            return 'about ' . round(floatval($distanceInMinutes) / 60.0) . ' hours';
        }
        if ( $distanceInMinutes < 2880 ) {
            return '1 day';
        }
        if ( $distanceInMinutes < 43200 ) {
            return 'about ' . round(floatval($distanceInMinutes) / 1440) . ' days';
        }
        if ( $distanceInMinutes < 86400 ) {
            return 'about 1 month';
        }
        if ( $distanceInMinutes < 525600 ) {
            return round(floatval($distanceInMinutes) / 43200) . ' months';
        }
        if ( $distanceInMinutes < 1051199 ) {
            return 'about 1 year';
        }
       
        return 'over ' . round(floatval($distanceInMinutes) / 525600) . ' years';
}

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 6px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 6px;
	border-style: solid;
	border-color: #a9c6c9;
	/*cursor:pointer;*/
}
a {
	font-family: Tahoma;
	font-size: 9pt;
	color: #CC0000;
}
a:hover {
	color: #333333;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #CC0000;
}
a:active {
	text-decoration: none;
	color: #CC0000;
}
body {
	margin-left: 0px;
	margin-top: 20px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E6EFF0;
}
</style>
<title>ROC - Sandbox</title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<body topmargin="20">
<table width="75%" align="center" class="hovertable">
  <tr>
    <th width="92%" align="left" valign="middle">ROC - Sandbox</th>
    <th width="8%" align="center" valign="middle"><a href="logout.php">OUT</a></th>
  </tr>
</table>
<br />
<table width="75%" align="center" class="hovertable">
  <tr>
    <th colspan="2" align="left" valign="middle">Closings</th>
  </tr>
  <tr>
    <td width="3%" align="left" valign="middle" >1</td>
    <td width="97%" align="left" valign="middle" ><a href="rocclose_nik.php">Close it</a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" >2</td>
    <td align="left" valign="middle" ><a href="gen_accstmnt.php">Generate Accont Statement</a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" >3</td>
    <td align="left" valign="middle" ><a href="gen_accstmntnik.php">Generate Accont Statement</a></td>
  </tr>
</table>
<br />
<table width="75%" align="center" class="hovertable">
  <tr>
    <th colspan="2" align="left" valign="middle">Referral BV</th>
  </tr>
  <tr>
    <td width="3%" align="left" valign="middle" >1</td>
    <td width="97%" align="left" valign="middle" ><a href="view_ref_tree.php">View Referral Tree</a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" >2</td>
    <td align="left" valign="middle" ><a href="calc_refbv_inc.php">Calculate Referral bv Income</a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" >3</td>
    <td align="left" valign="middle" ><a href="writevalues.php">Write Values</a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" >4</td>
    <td align="left" valign="middle" ><a href="closereport.php">Report</a></td>
  </tr>
</table>

<br />
<table width="75%" align="center" class="hovertable">
  <tr>
    <th colspan="2" align="left" valign="middle">Apps</th>
  </tr>
  <tr>
    <td width="3%" align="left" valign="middle" >1</td>
    <td width="97%" align="left" valign="middle" ><a href="roc-mydownline.php">Downline</a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" >2</td>
    <td align="left" valign="middle" ><a href="activationaccount_code.php">Activation Account</a></td>
  </tr>
</table>
<br />
<table width="75%" align="center" class="hovertable" style="margin-bottom:20px;">
  <tr>
    <th width="3%" align="left" valign="middle">No.</th>
    <th width="58%" align="left" valign="middle">Name of Project</th>
    <th width="39%" align="left" valign="middle">Last Modified</th>
  </tr>
  <?php 
filesInDir('./');

function filesInDir($tdir)
{
        $dirs = scandir($tdir);
		$cnt = 1;
		$pattern = '/[(.mp3)(.wav)(.html)]$/';
        foreach($dirs as $file)
        {
                if ( ! (($file == '.')||($file == '..')||($file == 'index.php') != is_dir($file) ))
                {
                ?>
  <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td align="left" valign="middle"><?php echo  $cnt; ?></td>
    <td align="left" valign="middle"><a href="<?php echo $file;?>"><?php echo $file;?> </a>
        <?php $frmtime = filemtime($tdir.'/'.$file); $toTime = time (); ?></td>
    <td align="left" valign="middle"><?php echo distanceOfTimeInWords ($frmtime,$toTime);?></td>
  </tr>
  <?php
      	$cnt++;
	}
	}
	} 
?>
  <?php /*
  
  <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td colspan="3" align="left" valign="middle" bgcolor="#C3DDE0"><strong>Directories</strong></td>
  </tr>

filesInDir1('./');
function filesInDir1($tdir)
{
        $dirs = scandir($tdir);
		$cnt = 1;
		$pattern = '/[(.mp3)(.wav)(.html)]$/';
        foreach($dirs as $file)
        {
                if ( is_dir($file) )
                {
                ?>
  <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
    <td align="left" valign="middle"><?php echo  $cnt; ?></td>
    <td align="left" valign="middle"><a href="<?php echo curPageURL().$file;?>"><?php echo $file;?> </a>
        <?php $frmtime = filemtime($tdir.'/'.$file); $toTime = time (); ?></td>
    <td align="left" valign="middle"><?php echo distanceOfTimeInWords ($frmtime,$toTime);?></td>
  </tr>
  <?php
      	$cnt++;
	}
	}
	} 
*/ ?>
</table>
<br />
</body>
</html>	
