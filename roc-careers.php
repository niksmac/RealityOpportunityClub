<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

<div id="content_area">
  <table width="98%" border="0" cellpadding="2" cellspacing="0" >
    <tr>
      <td width="4%" align="left" valign="top">&nbsp;</td>
      <td colspan="3" align="left" valign="top">&nbsp;</td>
      <td width="3%" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="37" colspan="4" align="left" valign="top"><div align="justify">Imagine having the resources to influence tomorrow's reality - today. At ROC we are seeking people whose ideas can make a difference, individuals who thrive on the opportunity to think creatively and be empowered to deliver.<br />
              <br />
      </div></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="37" align="left" valign="top">&nbsp;</td>
      <td colspan="3" align="left" valign="top"><p>We are looking for eligible candidates for following positions<br />
              <br />
      </p></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="39" align="left" valign="top" class="greentext"><strong>No.</strong></td>
      <td align="left" valign="top" class="greentext"><strong>Role</strong></td>
      <td colspan="2" align="left" valign="top" class="greentext"><strong>Apply Now</strong></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="37" align="left" valign="top">1. </td>
      <td width="30%" align="left" valign="top">Manager </td>
      <td width="19%" align="left" valign="top" ><a href="showappfrm.php?cat=Manager" class="redlink">CLICK TO APPLY</a>&nbsp;</td>
      <td width="44%" align="left" valign="top"><a href="showappfrm.php?cat=Manager"><img src="images/assignperson_enabled.gif" width="24" height="24" border="0" /></a></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="36" align="left" valign="top">2. </td>
      <td align="left" valign="top">Accountant </td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Accountant" class="redlink">CLICK TO APPLY</a>&nbsp;</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Accountant"><img src="images/assignperson_enabled.gif" width="24" height="24" border="0" /></a></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="34" align="left" valign="top">3.</td>
      <td align="left" valign="top"> Receptionist</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Receptionist" class="redlink">CLICK TO APPLY</a>&nbsp;</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Receptionist"><img src="images/assignperson_enabled.gif" width="24" height="24" border="0" /></a></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="36" align="left" valign="top">4. </td>
      <td align="left" valign="top">Office Assistant</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Office Assistant" class="redlink">CLICK TO APPLY</a>&nbsp;</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Office Assistant"><img src="images/assignperson_enabled.gif" width="24" height="24" border="0" /></a></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">5</td>
      <td align="left" valign="top">Driver</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Driver" class="redlink">CLICK TO APPLY</a>&nbsp;</td>
      <td align="left" valign="top"><a href="showappfrm.php?cat=Driver"><img src="images/assignperson_enabled.gif" width="24" height="24" border="0" /></a></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="3" align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="3" align="left" valign="top"><a href="http://www.lightrains.com/" target="_blank" class="style1">Web Design & Development</a></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="3" align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
  <a href="roc-careers.php"><img src="images/career-development.jpg" alt="Career At ROC" width="791" height="261" border="0"  /></a>
  <p>&nbsp;</p>
</div>
<?php 
}
function getTitle()
{
return "Career | Reality Opportunity Club";
}
function showMeta()
{

$meta = '<meta name="description" content="At ROC we are seeking people whose ideas can make a difference, individuals who thrive on the opportunity to think creatively and be empowered to deliver."/>
<meta name="keywords" content="Career, Reality Opportunity Club, Manager, Accountant, Receptionist, Office Assistant, Driver  "/>';
return $meta;
}

?>