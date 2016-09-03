<?php
session_start();
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
input {
-moz-border-radious:3px;
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
    <th align="left" valign="middle">ROC - Sandbox</th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="45%" align="center" class="hovertable">
  <tr>
    <th align="center" valign="middle" bordercolor="#C3DDE0"><form id="someform" name="someform" method="post" action="chklogin.php">
      <p>
        <br />
        </p>
      <p>
        <input name="sblogin" type="password" id="sblogin" style="text-align:center; color:#66CCFF;" value="Password"  onfocus="this.value='' " />      
        <br />
        <br />
        <br />
        <input name="captcha" type="text" id="captcha" style="text-align:center; color:#66CCFF;" value="Captcha" onfocus="this.value='' " />
      </p>
      <p><img src="../includes/scaptcha.php" /><br />
        <br />
        <input type="submit" name="button" id="button" value="Submit" style="height:30px; padding:5px;" />
        </p>
      <p><br />  
          <br />
      </p>
    </form>
    </th>
  </tr>
</table>
<p>&nbsp;</p>
<p><br />
  <br />
</p>
<table width="75%" align="center" class="hovertable">
  <tr>
    <th align="left" valign="middle">&nbsp;</th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>	
