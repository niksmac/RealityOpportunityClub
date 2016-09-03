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




<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 900;
  var googleSearchDomain = "www.google.co.in";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="//www.google.com/afsonline/show_afs_search.js"></script>




</div>
<?php 
}
function getTitle()
{
return "Search | Reality Opportunity Club";
}
function showMeta()
{

$meta = '<meta name="description" content="You can download Application Form (Individuals), Application Form (Shops), Business Plan, Business Plan (Malayalam), "/>
<meta name="keywords" content="Downloads , Reality Opportunity Club, Downloads  "/>';
return $meta;
}

?>