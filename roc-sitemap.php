<?php 
include("inner.tpl");
function ShowContent($title)
{
?>
<div id="content_area">

<h1> Sitemap </h1>
<ol>
<li><a href="http://www.ropclub.com/index.php" class="normlink">Home</a></li>
<li><a href="http://www.ropclub.com/roc-distributers.php" class="normlink">Our Distributers</a></li>
<li><a href="http://www.ropclub.com/downs/ROC-Application.pdf" class="normlink">Member Registration Form</a></li>
<li><a href="http://www.ropclub.com/downs/ROC-businessplan-mal.pdf" class="normlink">Business Plan (Malayalam)</a></li>
<li><a href="http://www.ropclub.com/downs/ROC-businessplan.pdf" class="normlink">Business Plan (English)</a></li>
<li><a href="http://www.ropclub.com/downs/ROC-shop-Application.pdf" class="normlink">Application for Shops</a></li>
<li><a href="http://www.ropclub.com/productsfull.php" class="normlink">Products (Full)</a></li>
<li><a href="http://www.ropclub.com/roc-aboutus.php" class="normlink">About ROC</a></li>
<li><a href="http://www.ropclub.com/roc-businessplan.php" class="normlink">Business Plan</a></li>
<li><a href="http://www.ropclub.com/roc-careers.php" class="normlink">Careers</a></li>
<li><a href="http://www.ropclub.com/roc-contactus.php" class="normlink">Contact ROC</a></li>
<li><a href="http://www.ropclub.com/roc-distributers.php" class="normlink">Our Distributers</a></li>
<li><a href="http://www.ropclub.com/roc-downloads.php" class="normlink">Downloads</a></li>
<li><a href="http://www.ropclub.com/roc-generalinfo.php" class="normlink">General Information</a></li>
<li><a href="http://www.ropclub.com/roc-mission.php" class="normlink">Mission And Vision</a></li>
<li><a href="http://www.ropclub.com/roc-products.php" class="normlink">Product List</a></li>
<li><a href="http://www.ropclub.com/roc-specialproducts.php" class="normlink">Special Products</a></li>
<li><a href="http://www.ropclub.com/terms.html" class="normlink">Terms and Conditions</a></li>
<br />
<li><a href="http://www.ropclub.com/memberlogin.php" class="normlink">Member Login</a></li>
<li><a href="http://www.ropclub.com/shop" class="normlink">Shop Login</a></li>
</ol>

</div>
<?php 
}
function getTitle()
{
return "Sitemap | Reality Opportunity Club";
}
function showMeta()
{
$meta = '
<meta name="description" content="Reality Opportunity Club"/>
<meta name="keywords" content="Sitemap, Reality Opportunity Club, "/>';
return $meta;
}
?>