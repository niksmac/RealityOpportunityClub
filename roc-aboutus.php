<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<div id="content_area">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="74%" height="35" align="left" valign="top"> <h1>About&nbsp; ROC</h1></td>
      <td width="26%" align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top"><p align="justify"><strong>Reality Opportunity Club (ROC)</strong>&nbsp;is a venture formed and promoted by a group of enthusiastic and enterprising youngsters from Kottayam, the literacy city of India. It is anchored by an extra ordinary force of its beckoning and ever growing Real-Member-Distributors. The Chief Navigator and Captain of this dream-ship is a stalwart in Direct Marketing business and United Customer's Programme (UCP), who excelled in this avenue for the last few years. ROC offers customer-oriented quality products ranging from common, necessary items to most innovative and specialty items at reasonable and affordable prices and an opportunity to earn income through the system.&nbsp; </p>
      <p>&nbsp;</p></td>
      <td align="left" valign="top"><img src="images/aboutROC.jpg" alt="Reality Opportunity Club" width="400" height="300" border="0" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
</div>
<?php 
}
function getTitle()
{
return "About ROC | Reality Opportunity Club";
}
function showMeta()
{

$meta = '<meta name="description" content="ROC is a venture formed and promoted by a group of enthusiastic and enterprising youngsters from Kottayam, the literacy city of India."/>
<meta name="keywords" content="About Us, Reality Opportunity Club, ROC, Online Business, United Customer\'s Programme,  "/>';
return $meta;
}
?>