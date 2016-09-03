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
  <table width="100%" border="0" cellpadding="4" cellspacing="0" >
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="30">&nbsp;</td>
      <td width="297">&nbsp;</td>
      <td width="1200">&nbsp;</td>
    </tr>
    <tr>
      <td ><strong>1.</strong></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-Application.pdf" class="redlink">Application Form (Individuals)</a></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-Application.pdf"><img src="images/download.gif" width="20" height="20" border="0" /></a></td>
    </tr>
    <tr>
      <td ><strong>2.</strong></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-shop-Application.pdf" class="redlink">Application Form (Shops)</a></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-shop-Application.pdf"><img src="images/download.gif" width="20" height="20" border="0" /></a></td>
    </tr>
    <tr>
      <td ><strong>3.</strong></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-businessplan.pdf" class="redlink">Business Plan</a></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-businessplan.pdf"><img src="images/download.gif" width="20" height="20" border="0" /></a></td>
    </tr>
    <tr>
      <td ><strong>5.</strong></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-businessplan-mal.pdf" class="redlink">Business Plan (Malayalam)</a></td>
      <td><a href="includes/asktodownload.php?file=../downs/ROC-businessplan-mal.pdf"><img src="images/download.gif" width="20" height="20" border="0" /></a></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<?php 
}
function getTitle()
{
return "Downloads | Reality Opportunity Club";
}
function showMeta()
{

$meta = '<meta name="description" content="You can download Application Form (Individuals), Application Form (Shops), Business Plan, Business Plan (Malayalam), "/>
<meta name="keywords" content="Downloads , Reality Opportunity Club, Downloads  "/>';
return $meta;
}

?>