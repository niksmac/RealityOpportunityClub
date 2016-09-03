<?php 
include("inner.tpl");
function ShowContent($title)
{
include('pagination.php');
}

function getTitle()
{
return "Online Products | Reality Opportunity Club";
}
function showMeta()
{

$qrtyh=mysql_query("select prod_name  from ol_products ");
while($qraysjh=mysql_fetch_array($qrtyh))
{
$prod_name .=$qraysjh['prod_name'].', ';
}
$meta = '<meta name="description" content="Online Products"/>
<meta name="keywords" content="'.$prod_name.' "/>
<meta name="copyright" content="Copyright &copy; 2010 Reality Opportunity Club. All Rights Reserved."/>
<meta name="author" content="Nikhil Mohan (nikhil@lightrains.com)"/>
<meta name="revisit-after" content="3"/>
<meta name="robots" content="index,follow"/>';
return $meta;
}
?>

<script charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"/></script>

<script src="http://pwam.googlecode.com/files/jquery.lazyload.js" type="text/javascript"/></script>

<script charset='utf-8' type='text/javascript'>

$(function() {

   $(&quot;img&quot;).lazyload({placeholder : &quot;http://pwam.googlecode.com/files/grey.gif&quot;,threshold : 200});

});

</script>

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>