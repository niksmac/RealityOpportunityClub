<style type="text/css"> 
<!--
	#border_div{
		padding:3px;
		margin:0px 0px 0px 0px;
		height:auto;
		width:250px;
		-moz-box-shadow: 5px 10px 10px;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		border:1px solid #009900;
		background: #FCFCFC;
		border-radius: 8px;
		}
	#dash_board {
		padding:0px;
		margin:0px 0px 0px 0px;
		width:230px;
		height:auto;
		text-align:justify;
		line-height:18px;
		background:#FCFCFC;
	}

</style> 
<?php include("../connect/session.php"); 
$memid=$_GET['id'];
$Name = "";
$ssdgfs=mysql_query("select memid,kittype from primarytree where primaryid='$memid' ");
while($tyiyui=mysql_fetch_array($ssdgfs))
{
$memidk =$tyiyui['memid'];
$kittype =$tyiyui['kittype'];
}

$ssdgfsgf=mysql_query("select Name,MemberID from members where MemberID='$memidk' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$MemberID =$tyivyfui['MemberID'];
$Name =$tyivyfui['Name'];
}

$puyv=mysql_query("select incentive from primarytreekit where ident = '$kittype' ");
while($hreed=mysql_fetch_array($puyv))
{ 
$incentive=$hreed['incentive'];
}

?>
<div id="border_div"><div id="dash_board">
<table width="100%" border="0" cellpadding="4" cellspacing="0" class="ropcontents">
  <tr>
    <td width="70" align="left" valign="middle" scope="col">ROC ID</td>
    <td width="4" align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td width="132" align="left" valign="middle" scope="col"><?php echo $MemberID; ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" scope="col">PRIMARY ID</td>
    <td align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo "P".$memid; ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" scope="col">Name</td>
    <td align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo $Name; ?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" scope="col">Points </td>
    <td align="left" valign="middle" class="orangetext" scope="col"><strong>:</strong></td>
    <td align="left" valign="middle" scope="col"><?php echo $kittype; ?></td>
  </tr>
</table>
</div></div>
