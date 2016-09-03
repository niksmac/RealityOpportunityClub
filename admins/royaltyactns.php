<?php include("../connect/session.php");
$mmbr_id=$_GET['id']; 
$qryh=mysql_query("select Name from members where MemberID='$mmbr_id'");
while($qrysh=mysql_fetch_array($qryh))
{
$Name=$qrysh['Name'];
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
return true;
}
}

</script>
<link href="colours.css" rel="stylesheet" type="text/css">
</head> 
<body>
<div align="center" id="border_div">
  <div align="center" id="dash_board">
    <form name="formk" method="post" action="raccount_code.php" target="_parent">
      <table width="100%" border="0" cellpadding="3" cellspacing="0" class="Contents">
        <tr>
          <td width="114" align="left" valign="middle">Member ID</td>
          <td width="174" align="left" valign="middle"><?php echo $mmbr_id; ?>
          <input type="hidden" name="mmbr_id" value="<?php echo $mmbr_id; ?>" ></td>
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
<?php }?>
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