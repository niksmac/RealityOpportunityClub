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
<style type="text/css">
<!--
.style1 {font-size: 7pt}
.highlight_word{
        background-color: pink;
}
-->
</style>

<script language="javascript" type="text/javascript">
function validateform1(name)
{
form1.onsubmit=function()
{

if(name.elements['srch'].value.length<1)
{
alert("What you want to search with ?");
name.elements['srch'].focus();
return false;
}

return true;
}
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
        <td align="left" valign="top" class="ContentBlue" ><form id="form1" name="form1" method="post" action="srchmems.php?mem">
          <table border="0" cellspacing="0" cellpadding="5">
          
          <?php 
		  if (isset ($_POST['srch']))
		  $key = $_POST['srch'];
		  else 
		  $key = "";
		  
		  ?>
            <tr>
              <td colspan="3"><h2><strong>Search Members</strong></h2></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Seach Term</td>
              <td><input type="text" name="srch" id="srch" value="<?php echo $key; ?>" /></td>
              <td><input type="submit" name="button" id="button" value="GO" onclick="validateform1(form1)" /></td>
            </tr>
            <tr>
              <td colspan="3"><span class="style1">* Term can be part of name, address, place or ROC ID</span></td>
              </tr>
          </table>
                        <p>&nbsp;</p>
                        
        </form>
        
        <?php if ($_POST) { 
		$qrydfgh=mysql_query("select AutoID from members where Name like '%$key%' or Address like '%$key%'or MemberID like '%$key%' ");
		$resno = mysql_num_rows ($qrydfgh);
		
		?>
          <table width="99%" border="1" cellpadding="4" cellspacing="0" bordercolor="#06315B" style="border-collapse:collapse;">
            <tr>
              <td height="33" colspan="8"><h3><?php echo $resno; ?> Result(s) Found</h3></td>
            </tr>
            <tr>
              <td width="26" height="25" class="ContentBlue"><strong>No </strong></td>
              <td width="19" class="ContentBlue">&nbsp;</td>
              <td width="120" class="ContentBlue"><strong>Name</strong></td>
              <td width="140" class="ContentBlue"><strong>Address</strong></td>
              <td width="85" class="ContentBlue"><strong>Mobile</strong></td>
              <td width="62" class="ContentBlue"><strong>User Id</strong></td>
              <td width="107" class="ContentBlue"><strong>Edit</strong></td>
              </tr>
            <?php 
			
			$key = $_POST['srch'];
		  $er=1;
$qryh=mysql_query("select Name,Address,MemberID,Mobile from members where Name like '%$key%' or Address like '%$key%' or MemberID like '%$key%'");
while($qrysh=mysql_fetch_array($qryh))
{
?>
            <tr>
              <td height="26"><?php echo $er; ?></td>
              <td><a href="javascript:void(0)"
onclick="window.open('viewmem.php?mid=<?php echo $qrysh['MemberID']; ?>',
'welcome','width=310,menubar=yes,status=yes')" ><img src="images/line_popup_ico.gif" alt="Details" width="16" height="12" border="0" /></a></td>
              <td><?php echo $nmfe = $qrysh['Name']; ?></td>
              <td><?php echo nl2br($qrysh['Address']); ?></td>
              <td><?php echo $qrysh['Mobile']; ?></td>
              <td><?php echo $qrysh['MemberID']; ?></td>
              <td>[<a href="allocatehere.php?id=<?php echo $qrysh['MemberID']; ?>&mem">EDIT</a>]&nbsp; [<a href="adminlogintomem.php?mid=<?php echo $qrysh['MemberID']; ?>&adm" target="_blank">LOGIN</a>]</td>
              </tr>
            <?php 
		  $er++;
		  }
		  ?>
          </table>
          
          <?php } 
function highlightWords($text, $words)
{
        /*** loop of the array of words ***/
        foreach ($words as $word)
        {
                /*** quote the text for regex ***/
                $word = preg_quote($word);
                /*** highlight the words ***/
                $text = preg_replace("/\b($word)\b/i", '<span class="highlight_word">\1</span>', $text);
        }
        /*** return the text ***/
        return $text;
}

?>
          
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
