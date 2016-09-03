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

<script language="JavaScript" type="text/javascript">
function deletethis(id)
{
if(confirm('Are you Sure ?'))
window.location.href="deletenews.php?id=" + id;
}
</script>
<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['captn'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['captn'].focus();
return false;
}
if(name.elements['descr'].value.length<1)
{
alert("This Field Cannot be Blank");
name.elements['descr'].focus();
return false;
}
return true;
}
}
</script>

<link href="colours.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
        <td height="260" align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" ><form id="nfrm" name="nfrm" method="post" action="addnews_code.php">
          <table width="300" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td height="40" colspan="2" align="left" valign="top" class="ContentBold">NEWS</td>
              </tr>
            <tr>
              <td width="73" align="left" valign="top">Caption</td>
              <td width="215" align="left" valign="top"><input type="text" name="captn" id="captn" class="jsrequired" /></td>
              </tr>
            <tr>
              <td align="left" valign="top">Description</td>
              <td align="left" valign="top"><textarea name="descr" cols="30" rows="5" id="descr" class="jsrequired" ></textarea></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top"><input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
              </tr>
          </table></form> 
                        <table width="557" border="0" cellpadding="3" cellspacing="0" class="Contents">
                          <tr>
                            <td width="17">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
<?php  
   $qry=mysql_query("select * from newsss  ");
   $er=1;
   while($fry=mysql_fetch_array($qry))
     {
	 $id=$fry['id'];
	 $captn=$fry['captn'];
	 $descr=$fry['descr'];
	  $dates=$fry['dates'];
	 ?> 
                          <tr>
                            <td><?php echo  $er; ?></td>
                            <td width="432"><span class="ContentBold"><?php echo  $captn; ?> : Posted On - <?php echo  $dates; ?></span></td>
                            <td width="90"><a href="javascript:deletethis(<?php echo $id; ?>)" class="redlinks">DELETE</a></td>
                          </tr>
                          
                          <tr>
                            <td>&nbsp;</td>
                            <td colspan="2"><?php echo $descr;  ?></td>
                          </tr>
                          <tr>
                            <td colspan="3" bgcolor="#006600" height="2"></td>
                          </tr>
                          <?php $er++;}?>
                        </table>
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
