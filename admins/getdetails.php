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

<?php 
include("../connect/session.php"); 
$id=$_GET['id'];
if ($id!=0 )
{
$jfj=mysql_query("select MemberID,Name,ActStatus,DOJ,Address from members where MemberID='$id' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$nameofcust=$sdfsdfa['Name'];
$act_status=$sdfsdfa['ActStatus'];
$doj=$sdfsdfa['DOJ'];
$address=$sdfsdfa['Address'];
}
if ($act_status==0) 
$img=" NOT ACTIVE "; 
else if ($act_status==1) 
$img=" ACTIVE";
?>
<link href="ropclub.css" rel="stylesheet" type="text/css" />
<link href="colours.css" rel="stylesheet" type="text/css" />
<div id="border_div">
<div id="dash_board">
<table width="250" border="0" cellpadding="4" cellspacing="0" class="ropcontents">
  <tr>
    <td width="40" align="left" valign="top" class="Contents" scope="col"><strong>ID</strong></td>
    <td width="5" align="left" valign="top" class="Contents" scope="col"><strong>:</strong></td>
    <td width="194" align="left" valign="top" class="Contents" scope="col"><?php echo $mmbr_id; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="Contents" scope="col"><strong>Name</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><strong>:</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><?php echo $nameofcust; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="Contents" scope="col"><strong>Address</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><strong>:</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><?php echo $address; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="Contents" scope="col"><strong>DOJ</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><strong>:</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><?php echo $doj; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="Contents" scope="col"><strong>Status</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><strong>:</strong></td>
    <td align="left" valign="top" class="Contents" scope="col"><?php echo $img; ?></td>
  </tr>
</table>
</div></div>
<?php 
}
else if ($id==0 || $id=='')
{
?>
<table width="250" height="22" border="0" cellpadding="0" cellspacing="0" class="ropcontents">
  <tr>
    <td scope="col">Member Not Joined !</td>
  </tr>
</table>
<?php } ?>