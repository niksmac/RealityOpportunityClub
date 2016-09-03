<?php include("../connect/session.php");
$mmbr_id=$_POST['membernamename']; 
$qryh=mysql_query("select Name,MemberID from members where Name='$mmbr_id'");
while($qrysh=mysql_fetch_array($qryh))
{
$Name=$qrysh['Name'];
$MemberID=$qrysh['MemberID'];
}

if ($mmbr_id == "ROC")
$Name = "Reality Opportunity Club";
?>

<style type="text/css"> 
<!--
body{
 
background:none;
	
	}
	*{}
	#border_div{
		padding:10px 0px 10px 0px;
		margin:0px 0px 0px 0px;
		height:auto;
		width:300px;
		-moz-box-shadow: 5px 10px 10px;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		border:1px solid #CCCCCC;
		background:#eeeeee;
		border-radius: 8px;
		behavior:url(border-radius.htc);
		}
	#dash_board {
		padding:10px;
		margin:0px 0px 0px 0px;
		width:280px;
		height:auto;
		text-align:justify;
		line-height:18px;
		background:#eeeeee;
	}
	#border_divs{
		padding:10px 0px 10px 0px;
		margin:0px 0px 0px 0px;
		height:auto;
		width:300px;
		-moz-box-shadow: 5px 10px 10px;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		border:1px solid #339933;
		background:#CFC;
		border-radius: 8px;
		behavior:url(border-radius.htc);
		}
	#dash_boards {
		padding:10px;
		margin:0px 0px 0px 0px;
		width:280px;
		height:auto;
		text-align:justify;
		line-height:18px;
		background: #CFC;
	}
	#txt{
		margin:0px 0px 0px 0px;
		width:420px;
		height:auto;
		text-align:justify;
		line-height:18px;
		float:left;
	}
	#dash_board h1{padding-bottom:6px;}
	#imagediv{
	padding-left:10px;
		margin:0px 0px 0px 0px;
		width:150px;
		height:auto;
		float:left;
	}
-->
</style> 


<script language="javascript" type="text/javascript">
function validateform1(name)
{
formk.onsubmit=function()
{

if(name.elements['noofentry'].value.length<1)
{
alert("This field cannot be empty !");
name.elements['noofentry'].focus();

var doms = document.formk.noofentry.value;
if (isNaN (doms))
{
alert("Numerics Only");
document.formk.noofentry.value = "";
name.elements['noofentry'].focus();
}
return false;
}

if(name.elements['rebs'].value.length<1)
{
alert("How Many Rebirths ?");
name.elements['rebs'].focus();
return false;
}
if(name.typ[1].checked)
{
	myoption=1;
}
else if(name.typ[2].checked)
{
	myoption=1;
}
else
{
	myoption=0;
}
if(myoption==0)
{
	alert("selct roylty type")
	return false;
}
return true;
}
}

</script>
<link href="colours.css" rel="stylesheet" type="text/css">
</head> 
<body>
<?php 

$result = mysql_query("SELECT balance FROM rocroyaltycapitalsummary WHERE mmbr_id = 'ROC'");
$row = mysql_fetch_row($result);
$balance = $row[0];

$ssdgfsh=mysql_query("select noofrebs from royalty where mmbr_id='$MemberID' ");
$preentries = mysql_num_rows($ssdgfsh);
while($qrysh=mysql_fetch_array($ssdgfsh))
{
$noofrebs=$qrysh['noofrebs'];
}
if ($preentries > 0)
{
?>
<div align="center" id="border_divs">
  <div align="center" id="dash_boards">
    <table width="300" border="0" cellpadding="2" cellspacing="0" class="Contents">
      <tr>
        <td align="center" valign="middle" class="ContentBold">Previous Royalty Status of <?php echo $MemberID; ?></td>
      </tr>
      <tr>
        <td width="123">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">Total <?php echo $preentries ?> Entries of <?php echo $noofrebs; ?> Rebirths</td>
      </tr>
<?php if ($mmbr_id == "ROC") {  ?>
      <tr>
        <td align="center">ROC's Royalty Capital : <?php echo $balance; ?></td>
      </tr>
<?php } ?>
    </table>
  </div>
</div><br>
<br>
<?php 
}
?>
<div align="center" id="border_div">
  <div align="center" id="dash_board">
    <form name="formk" method="post" action="sendtoroyalty_code.php" target="_parent">
      <table width="300" border="0" cellpadding="3" cellspacing="0" class="Contents">
        <tr>
          <td width="114" align="left" valign="middle">Member ID</td>
          <td width="174" align="left" valign="middle"><?php echo $MemberID; ?>
          <input type="hidden" name="mmbr_id" value="<?php echo $MemberID; ?>" ></td>
        </tr>
        <tr>
          <td align="left" valign="middle">Name</td>
          <td align="left" valign="middle"><?php echo $Name; ?></td>
        </tr>
        <tr>
          <td align="left" valign="middle">How Many Entries</td>
          <td align="left" valign="middle"><input name="noofentry" type="text" id="noofentry" value="1" size="5"></td>
        </tr>
<?php 
if ($mmbr_id != "ROC")
{?>
        <tr>
          <td align="left" valign="middle">Rebirths</td>
          <td align="left" valign="middle"><select name="rebs" id="rebs"><option selected value="">-</option>
          <?php for ($i=1;$i<=25;$i++) {?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php }?>
          </select></td>
        </tr>

        <tr>
          <td align="left" valign="middle">Type</td>
          <td align="left" valign="middle"><p>
            <label>
              <input type="radio" name="typ" value="N" id="RadioGroup1_0">
              Normal</label>
            <label>
              <input type="radio" name="typ" value="T" id="RadioGroup1_1">
              Investment</label>
            <br>
          </p></td>
        </tr>
<?php } else {?>
<tr>
          <td align="left" valign="middle"><input type="hidden" id="rebs" name="rebs" value="0" ></td>
          <td align="left" valign="middle">&nbsp;</td>
        </tr>
<?php } ?>
        <tr>
          <td align="left" valign="middle">&nbsp;</td>
          <td align="left" valign="middle"><input type="submit" name="button" id="button" value="Submit" onClick="validateform1(formk)">
            <input type="reset" name="button2" id="button2" value="Reset"></td>
        </tr>
      </table>
    </form>
  </div>
</div>

</body> 
</html>