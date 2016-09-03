<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE SHOP | ROC</title>
<link href="css/olshop.css" rel="stylesheet" type="text/css" />
<link href="css/dropdown.vertical.css" rel="stylesheet" type="text/css" />
<link href="css/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outerdiv">
<div id="bannertop"><img src="img/RealityOpportunityClub.png" height="86" /></div>
<div id="middlecontainer">
  <div id="loginbox">
    <form id="lform" name="lform" method="post" action="olshoplogin_code.php">
      <table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td align="right">&nbsp;</td>
          <td align="left">&nbsp;</td>
        </tr>
        <tr>
          <td width="33%" align="right">&nbsp;</td>
          <td width="67%" align="left">&nbsp;</td>
        </tr>
        <tr>
          <td align="left"><strong>SHOP ID</strong></td>
          <td align="left"><input name="shopid" type="text" class="jsrequired" id="shopid" /></td>
        </tr>
        <tr>
          <td align="left"><strong>PASSWORD</strong></td>
          <td align="left"><input name="password" type="password" class="jsrequired" id="password"/></td>
        </tr>

        <tr>
          <td align="left"><img src="../includes/gcaptcha1.php" height="100" width="150" id="gcaptcha" /></td>
          <td align="left"><input name="captcha" type="text" id="captcha" size="8" style="height:60px; color: #339900; font-size:14pt; text-align:center;"  class="jsrequired"/>
            <br /><a href="#" onclick="document.getElementById('gcaptcha').src = '../includes/gcaptcha1.php'" >Can't Read ?</a></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="left"><label class="submit"><input type="submit" name="button" id="button" /></label>
          <label class="reset"><input type="reset" name="button2" id="button2" value="Reset" /></label></td>
        </tr>
        <tr>
          <td colspan="2" align="left">&nbsp;</td>
        </tr>
      </table>
    </form>
  </div>
</div>
  
<div id="footer"> <ul> <li><br />&copy; 2010-2011 | Reality Opportunity Club </li></ul></div>
</div>
<script type="text/javascript" language="javascript" src="js/scriptaculous/lib/prototype.js"></script>
<script type="text/javascript" language="javascript" src="js/scriptaculous/src/scriptaculous.js"></script>
<script type="text/javascript" language="javascript" src="js/jsvalidate.js"></script>
</body>
</html>
