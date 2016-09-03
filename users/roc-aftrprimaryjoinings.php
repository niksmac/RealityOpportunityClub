<?php 
include('index.tpl');

function getTitle()
{
echo 'Congratulation';
}

function ShowContent($rocuname)
{
?>
<table width="800" border="0" align="center" cellpadding="4" cellspacing="0" >
<tr>
                    <td width="10">&nbsp;</td>
                    <td width="101">&nbsp;</td>
                    <td width="11">&nbsp;</td>
                    <td width="426">&nbsp;</td>
                  </tr>
                  <?php 
$pid=$_GET['pid'];
$qry=mysql_query("select primaryid,memid,kittype from primarytree where primaryid='$pid' ");
while($qrys=mysql_fetch_array($qry))
{
$memid=$qrys['memid'];
$primaryid=$qrys['primaryid'];
$kittype=$qrys['kittype'];

$ssdgfsgf=mysql_query("select Name from members where MemberID='$memid' ");
while($tyivyfui=mysql_fetch_array($ssdgfsgf))
{
$Name =$tyivyfui['Name'];
}

$puyv=mysql_query("select incentive from primarytreekit where ident = '$kittype' ");
while($hreed=mysql_fetch_array($puyv))
{ 
$incentive=$hreed['incentive'];
}

?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>ROC ID</td>
                    <td class="ContentBold"><strong>:</strong></td>
                    <td><?php echo $memid; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Name</td>
                    <td class="ContentBold"><strong>:</strong></td>
                    <td><?php echo $Name; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Primary ID</td>
                    <td class="ContentBold"><strong>:</strong></td>
                    <td><?php echo "P".$primaryid; ?></td>
                  </tr>

                  <?php } ?>

                  <tr>
                    <td>&nbsp;</td>
                    <td>POINTS</td>
                    <td><strong>:</strong></td>
                    <td><?php echo $kittype; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;&nbsp; Alternatively we will send you a SMS regarding your  information to the given mobile number.</td>
                  </tr>
                </table>
<?php 
}

?>