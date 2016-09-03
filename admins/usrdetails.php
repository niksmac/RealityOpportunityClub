
<?php 

include("../connect/session.php"); 

$uname = $_GET['content'];

$qryfgk=mysql_query("select MemberID,Name,Phone from members where MemberID = '$uname' ");
if ((mysql_num_rows($qryfgk)) == 0)
{
echo "<span class='errtxt'>Invalid</span>";echo "<br>";echo "<br>";echo "<br>";
}
else
{
$qryfgk=mysql_query("select MemberID,Name,Mobile,Address from members where MemberID = '$uname' ");
while($qrdfdys=mysql_fetch_array($qryfgk))
{
$MemberID =$qrdfdys['MemberID'];
$Name=$qrdfdys['Name'];
$Address=$qrdfdys['Address'];
$Phone=$qrdfdys['Mobile'];
}
?>
<link href="colours.css" rel="stylesheet" type="text/css" />
<table width="300" border="1" cellpadding="2" cellspacing="0" bordercolor="#8B8B8B" class="Contents" style="border-collapse:collapse;">
  <tr>
    <td colspan="3" bgcolor="#FFFFFF"><table width="250" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="72" align="left" valign="top">Name</td>
        <td width="170" align="left" valign="top"><?php echo $Name; ?></td>
      </tr>
      <tr>
        <td align="left" valign="top">Address</td>
        <td align="left" valign="top"><?php echo $Address; ?></td>
      </tr>
      <tr>
        <td align="left" valign="top">Phone</td>
        <td align="left" valign="top"><?php echo $Phone; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="32" bgcolor="#F2F2F2">Sl No</td>
    <td width="143" bgcolor="#F2F2F2">Key</td>
    <td width="105" bgcolor="#F2F2F2">Status</td>
  </tr>
  <?php 
  $slno=1;
  $cnt=0;
$qryfgk=mysql_query("select unqkey,keystat from primarytreekey where memid = '$uname' ");
while($qrdfdys=mysql_fetch_array($qryfgk))
{
 $unqkey =$qrdfdys['unqkey'];
 $keystat=$qrdfdys['keystat'];
 if ($keystat == 0)
 $cnt++;
?>
  <tr>
    <td><?php echo $slno; ?></td>
    <td><?php echo $unqkey; ?></td>
    <td><?php echo $keystat;
    
     if ( ($keystat == 0 ) && ( (strlen($Phone)) == 10)) 
	{
    ?>
      <a href="smskey.php?mob=<?php echo $Phone; ?>&key=<?php echo $unqkey; ?>">Send SMS</a> 
      
      <?php } else echo " Err."; ?>
      </td>
  </tr>
  <?php $slno++; } 
  
  if ($cnt == 0) 
  $advise = "<span class='successtxt' >Click Generate</span>";
  else
  $advise = "<span class='errtxt'>No need to Generate new key</span>";
  ?>
  <tr>
    <td>Advise</td>
    <td colspan="2"><?php echo $advise; ?></td>
  </tr>
</table>
<?php } ?>