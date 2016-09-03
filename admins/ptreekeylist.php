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

<script type="text/javascript" >

function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['rocid'].value.length<1)
{
name.elements['rocid'].focus();
alert ("Mandatory !!");
return false;
}


return true;
}
}
</script>

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript"  language="javascript">

function hjfghjf(div_id,content_id)
		{
		    subject_id = div_id;
			num=document.getElementById(content_id).value;
			if (num.length == 0) return false;
			myRand=parseInt(Math.random()*99999999);
			var dt = new Date( ).valueOf();
     		http.open("GET", "usrdetails.php?Myrand="+myRand+"&content=" + escape(num) + "?dt=" + escape(dt), true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);		
			}
 </script>
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
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top" class="ContentBlue" >
          <h3>
            Primary Secret Key          </h3>
          <link href="colours.css" rel="stylesheet" type="text/css" />
<table width="500" border="1" cellpadding="4" cellspacing="0" bordercolor="#8B8B8B" class="Contents" style="border-collapse:collapse;">
  
  <tr>
    <td colspan="5" align="center" valign="middle" bgcolor="#F2F2F2"><?php $alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); 
foreach ($alphabet as $letter) { 
echo "<a class='redlinks' href=\"?content=" . $letter . "&pm\">" . $letter . "</a>&nbsp;¦&nbsp;"; 
}?></td>
  </tr>
  
  <?php 
  $kitname = "<span bgcolor='red'>No such Kit</span>";
  $dryg = $_GET['content'];
  $qryfgfgk=mysql_query("select kitname from primarytreekit where ident = '$dryg' ");
while($qrdfkdys=mysql_fetch_array($qryfgfgk))
{
 $kitname =$qrdfkdys['kitname'];
 }
  ?>
  
  
  <tr>
    <td colspan="5" bgcolor="#F2F2F2">Kit Type : <h3><strong><?php echo $dryg." : ".$kitname ; ?></strong></h3></td>
    </tr>
  <tr>
    <td width="27" bgcolor="#F2F2F2"><strong>Sl No</strong></td>
    <td width="26" bgcolor="#F2F2F2"><strong>PIN</strong></td>
    <td width="152" bgcolor="#F2F2F2"><strong>Key</strong></td>
    <td width="57" bgcolor="#F2F2F2"><strong>Used</strong></td>
    <td width="186" bgcolor="#F2F2F2"><strong>Active/ Non Active</strong></td>
  </tr>
  <?php 
  $slno=1;
$content = $_GET['content'];
$qryfgk=mysql_query("select unqkey,keystat,id,actsts,usdby from primarytreekey where unqkey REGEXP '^$content' ");
while($qrdfdys=mysql_fetch_array($qryfgk))
{
 $unqkey =$qrdfdys['unqkey'];
 $keystat=$qrdfdys['keystat'];
 $actsts=$qrdfdys['actsts'];
 $id=$qrdfdys['id'];
 $usdby=$qrdfdys['usdby'];
 
 if ($keystat == "0")
 $flag = "<span class'successtxt'>No</span>";
 else
 $flag = "<span class'errtxt'>Yes</span>";
 
  if ($actsts == "0" && $keystat == "0")
 $stt = "<a href='activateptreekey.php?id=$id&content=$content'>Activate</a>";
 else if ($actsts == "0" && $keystat == "1")
 $stt = "<span><a href='deactivateptreekey.php?id=$id&content=$content'><s>Deactivate<s></span>";
 else if ($actsts == "1" && $keystat == "0")
 $stt = "<span><a href='deactivateptreekey.php?id=$id&content=$content'><s>Deactivate<s></span>";
 else if ($actsts == "1" && $keystat == "1")
 $stt = "<span<s>Key Used by : $usdby<s></span>";
 
?>
  <tr>
    <td><?php echo $slno; ?>&nbsp;</td>
    <td><?php echo "00".$id; ?>&nbsp;</td>
    <td><?php echo $unqkey; ?>&nbsp;</td>
    <td><?php echo $flag; ?></td>
    <td><?php echo $stt; ?><span class="output-div-container"><span id="dghsdfsgdfg"></span></span></td>
    </tr>
	<?php $slno++;} ?>
    </table>
</td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top" >&nbsp;</td>
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
