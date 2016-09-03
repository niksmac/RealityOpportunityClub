<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; 
$ropid=$_GET['id']; 

if ($ropid=="")
{
	
	echo "<html><head><title>ROP Club :: Error</title><script>function update(){history.back(-2);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><br /><br /><br /><br /><br /><br /><table border=1pt cellpadding=0 cellspacing=0 border-collapse: collapse; bordercolor=#111111 bgcolor=#ced979><tr><td>
        <table border=0 cellpadding=3 cellspacing=0 border-collapse: collapse; bordercolor=#111111><tr><td><b><font color=#FF0000><font face=verdana size=2>Error: Invalid User ID Given!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Exiting ... Please wait for a while... You are being redirected! If not then click </font><a href=javascript: text-decoration: none><font face=Verdana size=1 color=#3399FF>here</font></a><font face=Verdana size=1 color=#666666>.</font></p><body></html>";
		
}
else 
{
?>
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
<style type="text/css">
<!--
.style2 {color: #FF3333}
-->
</style>

</head>

<body>
<?php 
}
?>
<form action="allocate_code1.php?id=<?php echo $ropid; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="300" border="0" cellpadding="5" cellspacing="0" class="Contents">
  
  <?php 
$trthjgjyet=mysql_query("select * from members where MemberID='$ropid' ");
while($rtsdset=mysql_fetch_array($trthjgjyet))
{
$RefID =$rtsdset['RefID'];
$Name =$rtsdset['Name'];
$ECNo =$rtsdset['ECNo'];
$PanNo =$rtsdset['PanNo'];
$Address =$rtsdset['Address'];
$NomName =$rtsdset['NomName'];
$NomRel =$rtsdset['NomRel'];
$DOB =$rtsdset['DOB'];
$DOB =$rtsdset['DOB'];
$Email =$rtsdset['Email'];
$Password =$rtsdset['Password'];
$Occupation =$rtsdset['Occupation'];
$Phone =$rtsdset['Phone'];
$Mobile =$rtsdset['Mobile'];
$Pin =$rtsdset['Pin'];
$FoHName =$rtsdset['FoHName'];
$Gender =$rtsdset['Gender'];
$District =$rtsdset['District'];
$MarStatus =$rtsdset['MarStatus'];
$ActStatus =$rtsdset['ActStatus'];
$PrePoint =$rtsdset['PrePoint'];
$PreRefPoint =$rtsdset['PreRefPoint'];
$PreRefID =$rtsdset['PreRefID'];
$BankAccNo =$rtsdset['BankAccNo'];
}


$oiuy=mysql_query("select * from members where MemberID='$PreRefID' ");
while($jhg=mysql_fetch_array($oiuy))
{
$PreRefPoints =$jhg['PreRefPoint'];
}
?>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="140" align="left" valign="top">Name</td>
    <td width="237" align="left" valign="top"><input name="name" type="text" id="name" size="25"  value="<?php echo $Name; ?>"/></td>
  </tr>
  
  <tr>
    <td align="left" valign="top" class="Contents">Phone</td>
    <td align="left" valign="top" class="Contents"><input name="Phone" type="text" id="Phone"value="<?php echo $Phone; ?>" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="Contents">Mobile.</td>
    <td align="left" valign="top" class="Contents"><input name="Mobile" type="text" id="Mobile" value="<?php echo $Mobile; ?>"/></td>
  </tr>
  <tr>
    <td align="left" valign="top">Electral Card No.</td>
    <td align="left" valign="top"><input name="ECNo" type="text" id="ECNo" size="25" value="<?php echo $ECNo; ?>"/></td>
  </tr>
  <tr>
    <td align="left" valign="top">PAN </td>
    <td align="left" valign="top"><input name="PanNo" type="text" id="PanNo" size="25" value="<?php echo $PanNo; ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" onclick="Validate(form1)" />
    <input type="reset" name="Submit2" value="Reset" /></td>
  </tr>
</table>
</form>
</body>
</html>
