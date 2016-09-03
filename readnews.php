<?php 
include("inner.tpl");
function ShowContent()
{
$id = $_GET['id'];
?>
<div id="content_area">

<table width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
<?php 
            $jdfj=mysql_query("select captn,descr from newsss where id = '$id'  ");
            while($sdfsdfsa=mysql_fetch_array($jdfj))
            {
            $captn=$sdfsdfsa['captn'];
            $descr=$sdfsdfsa['descr'];
            ?>
  <tr>
    <td colspan="2"><h2><?php echo $captn; ?></h2></td>
    </tr>
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="96%"><?php echo $descr; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><a href="index.php"><img src="users/img/first.png" alt="HOME" width="16" height="16" border="0" /></a></td>
  </tr>
</table>

        
</div>
<?php 
}
function getTitle()
{
return "News | Reality Opportunity Club";
}
function showMeta()
{
$meta = '<meta name="description" content="The best part of this concept, is that you do not have to do anything different from what you have been doing till now."/>
<meta name="keywords" content="Reality Opportunity Club, ROC, member distributer, Level binary, opportunity to earn more, ROC Real Noni, Online Business, United Customer\'s Programme, Kottayam Club, Noni Juice, Turbo Convection Oven, Ozone Disinfector, Olive VG300, Olive VG3201, Olive Msngr, Primary Income, Product Marketing Kottayam  "/>';
return $meta;
}

?>