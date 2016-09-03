<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

<body onLoad="if (location.href.indexOf('reload')==-1) location.replace(location.href+'&reload')">
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><table width="95%" border="0" cellpadding="6" cellspacing="0">
          <tr>
            <td width="5%">&nbsp;</td>
            <td width="95%"><a href="backup.php">Take BackUp</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="backup_server.php">Back Up from Server</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
  <table width="95%" border="0" cellpadding="6" cellspacing="0">
                      <tr>
                        <td width="10%" align="left" valign="middle">No</td>
                        <td width="39%" align="left" valign="middle">File Name</td>
                        <td width="29%" align="left" valign="middle">Created On</td>
                        <td width="22%" align="left" valign="middle">Action</td>
              </tr><?php echo filesInDir('../db_backup');
function filesInDir($tdir)
{
        $dirs = scandir($tdir);
		$cnt = 1;
        foreach($dirs as $file)
        {
                if (($file == '.')||($file == '..'))
                {
                }
                elseif (is_dir($tdir.'/'.$file))
                {
                         filesInDir($tdir.'/'.$file);
                }
                else
                {
					
					?>
                    
                       <tr>
                        <td align="left" valign="middle"><?php echo  $cnt; ?></td>
                        <td align="left" valign="middle"><?php echo $file; $frmtime = filemtime($tdir.'/'.$file); $toTime = time (); ?></td>
                        <td align="left" valign="middle"><?php echo distanceOfTimeInWords ($frmtime,$toTime);?></td>
                        <td align="left" valign="middle"><a href="delbackup.php?file=<?php echo $tdir.'/'.$file; ?>"><img src="../images/del.jpg" width="15" height="15" border="0" /></a> &nbsp;<a href="asktodownload.php?file=<?php echo $tdir.'/'.$file; ?>"><img src="../images/checkbox_off_us.jpg" width="80" height="21" border="0" /></a></td>
              </tr>
                    
                    <?php
                $cnt++;	
				}
        }
} 
?>
</table>
<?php
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

?></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>
