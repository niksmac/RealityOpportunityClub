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
<!-- Skin CSS file -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/assets/skins/sam/skin.css">
<!-- Utility Dependencies -->
<script src="http://yui.yahooapis.com/2.8.1/build/yahoo-dom-event/yahoo-dom-event.js"></script> 
<script src="http://yui.yahooapis.com/2.8.1/build/element/element-min.js"></script> 
<!-- Needed for Menus, Buttons and Overlays used in the Toolbar -->
<script src="http://yui.yahooapis.com/2.8.1/build/container/container_core-min.js"></script>
<script src="http://yui.yahooapis.com/2.8.1/build/menu/menu-min.js"></script>
<script src="http://yui.yahooapis.com/2.8.1/build/button/button-min.js"></script>
<!-- Source file for Rich Text Editor-->
<script src="http://yui.yahooapis.com/2.8.1/build/editor/editor-min.js"></script>

<script type="text/javascript" language="JavaScript" src="./sample_dataas.js"></script>
<script type="text/javascript" language="JavaScript" src="./wick.js"></script>
<link rel="stylesheet" type="text/css" href="./wick.css" />

</head>

<body class="yui-skin-sam">
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
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="emailcontnt_post.php">
          <table border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td colspan="2"><strong>Mail Manager</strong></td>
              </tr>
            <tr>
              <td width="46" align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
              </tr>
            <tr>
              <td align="left" valign="top">List</td>
              <td align="left" valign="top"><textarea name="multemail" cols="45" rows="4" class="wickEnabled" id="multemail" wrap="virtual"></textarea></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top"><strong>OR</strong></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td width="197" align="left" valign="top"><input name="chkfull" type="checkbox" id="chkfull" value="1" />
Complete List</td>
              </tr>
            <tr>
              <td align="left" valign="top">Subject</td>
              <td align="left" valign="top"><input name="subject" type="text" id="subject" size="30" /></td>
            </tr>
            <tr>
              <td align="left" valign="top">Message</td>
              <td align="left" valign="top">
              <script type="text/javascript" >
	var myEditor = new YAHOO.widget.Editor('msgpost', {
    height: '300px',
    width: '600px',
    dompath: true, //Turns on the bar at the bottom
    animate: true //Animates the opening, closing and moving of Editor windows
});
myEditor.render();
 
//Inside an event handler after the Editor is rendered
YAHOO.util.Event.on('button', 'click', function() {
    //Put the HTML back into the text area
    myEditor.saveHTML();
 
    //The var html will now have the contents of the textarea
    var html = myEditor.get('msgpost').value;
});
</script>
              <textarea name="msgpost" id="msgpost" cols="60" rows="10"></textarea></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top"><img src="../images/roclogosmall.gif" width="143" height="59" /></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top"><input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
          </table>
                </form>
        </td>
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
