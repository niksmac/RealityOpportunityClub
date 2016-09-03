<style type="text/css"> 
<!--
body{
font-size:9pt;
background:none;
	
	}
	*{}
	#border_div{
		padding:5px;
		margin:0px;
		height:auto;
		width:250px;
		-moz-box-shadow: 5px 10px 10px;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		border:1px solid #CCCCCC;
		background:#eeeeee;
		border-radius: 8px;
		}
	#dash_board {
		padding:10px;
		margin:0px 0px 0px 0px;
		width:230px;
		height:auto;
		text-align:justify;
		line-height:18px;
		background:#eeeeee;
	}
-->
</style> 

<?php 
include("session.php");
include('../connect/connect.php');
$id=$_GET['id'];
$ll=$_GET['ll'];
if ($id!=0 )
{
$jfj=mysql_query("select MemberID,Name,ActStatus from members where MemberID='$id' ");
while($sdfsdfa=mysql_fetch_array($jfj))
{
$mmbr_id=$sdfsdfa['MemberID'];
$nameofcust=$sdfsdfa['Name'];
$act_status=$sdfsdfa['ActStatus'];
}
if ($act_status==0) 
$img=" NOT ACTIVE "; 
else if ($act_status==1) 
$img=" ACTIVE";
?>
<div id="border_div">
<div id="dash_board">
<table width="100%" border="0" cellpadding="4" cellspacing="0" class="ropcontents">
  <tr>
    <td align="left" valign="middle" scope="col">L</td>
    <td align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo $ll; ?></td>
  </tr>
  <tr>
    <td width="40" align="left" valign="middle" scope="col">ID</td>
    <td width="5" align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td width="194" align="left" valign="middle" scope="col"><?php echo $mmbr_id; ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" scope="col">Name</td>
    <td align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo $nameofcust; ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" scope="col">Status</td>
    <td align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo $img; ?></td>
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