<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<div id="content_area">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td width="74%" height="35" align="left" valign="top"> <h1>Mission &amp; Vision of  ROC</h1></td>
    </tr>
    <tr>
      <td align="left" valign="top"><p>To reach out the horizon of a customer controlled market, where exploitation by unwanted middlemen and misdirecting advertisements are avoided or curbed. The customers get bespoke products and the Member-Distributors get their due benefits for linking ROC products.</p>
        <p>Our India is a country of more than 100 Crores people, of which 80% are in the village. Their life style has to be uplifted and refurbished to the standard that of developed countries. Lot of self-less and voluntary efforts are required to educate, nurture and nourish them and make them aware of the need of the time.</p>
      <p>ROC is an Endeavour to that goal.</p></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
</div>
<?php 
}
function getTitle()
{
return "Mission &amp; Vision | Reality Opportunity Club";
}
function showMeta()
{

$meta = '<meta name="description" content="To reach out the horizon of a customer controlled market, where exploitation by unwanted middlemen and misdirecting advertisements are avoided or curbed. The customers get bespoke products and the Member-Distributors get their due benefits for linking ROC products."/>
<meta name="keywords" content="Mission &amp; Vision, Reality Opportunity Club, unwanted middlemen, customer controlled market, ROC\'s goal  "/>';
return $meta;
}
?>