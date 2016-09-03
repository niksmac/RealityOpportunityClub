<?php include ("connect/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="clearbox.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo getTitle(); ?> </title>
<?php echo showMeta(); ?>

<meta name="copyright" content="Copyright &copy; 2010 Reality Opportunity Club. All Rights Reserved."/>
<meta name="author" content="Nikhil Mohan (nikhil@lightrains.com)"/>
<meta name="revisit-after" content="3"/>
<meta name="robots" content="index,follow"/>
<link rel="shortcut icon" href="images/favicon.ico" />
<!-- css -->
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<!-- css -->
</head>
<body>
<div id="outerdiv">
  <div id="bannertop"><a href="http://www.ropclub.com"><img src="images/RealityOpportunityClub.jpg" alt="Reality Opportunity Club" width="400" height="86" border="0" /></a>
    <div id="menuheader">
    <ul class="menutopnav">
      <li><a href="index.php">Home</a></li>
      <li> <a href="#">ROC</a>
          <ul class="menusubnav">
            <li><a href="roc-aboutus.php">About ROC</a></li>
            <li><a href="roc-missionandvision.php">Mission &amp; Vision</a></li>
          </ul>
      </li>      <li> <a href="roc-businessplans.php">Business Plan</a>
          <ul class="menusubnav">
            <li><a href="roc-businessplans.php">Main Business Plan</a></li>
           </ul>
      </li>
      <li> <a href="roc-onlineproducts.php">ROC On-Line</a>
          <ul class="menusubnav">
<!--            <li><a href="roc-joinigkit.php">ROC Joining Kit</a></li>
            <li><a href="roc-primarykitoptions.php">Primary Joining Kit</a></li>-->
            <li><a href="roc-onlineshops.php">Online Shops</a></li>
            <li><a href="roc-onlineproducts.php">Online Products</a></li>
          </ul>
      </li>
      <li> <a href="productdetails.php">Products</a>
          <ul class="menusubnav">
            <?php 
            $qrfyo=mysql_query("select id,name from pdoductdescription order by id asc");
            while($qrysfu=mysql_fetch_array($qrfyo))
            {
            $id=$qrysfu['id'];
            $name=$qrysfu['name'];
            ?>
            <li><a href="productdetails-more.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></li>
            <?php } ?>
          </ul>
      </li>
<li> <a href="roc-information.php">Information</a></li>
        <li> <a href="roc-downloads.php">Downloads</a>
          <ul class="menusubnav">
            <li><a href="roc-downloads.php">Application Form (Individuals)</a></li>
            <li><a href="roc-downloads.php">Application Form (Shops)</a></li>
            <li><a href="roc-downloads.php">Business Plan</a></li>
            <li><a href="roc-downloads.php">Business Plan (Malayalam)</a></li>
          </ul>
      </li>
      <li> <a href="roc-distributers.php">Distribution Centers</a>
          <ul class="menusubnav">
            <?php 
            $qrfyo=mysql_query("select id,storename from stores where shpstat=1 order by id desc limit 5");
            while($qrysfu=mysql_fetch_array($qrfyo))
            {
            $id=$qrysfu['id'];
            $storename=$qrysfu['storename'];
            ?>
            <li><a href="storedetails.php?id=<?php echo $id; ?>"> <?php echo substr($storename,0,30).'...'; ?></a></li>
            <?php } ?>
          </ul>
      </li>
          <li><a href="contact-roc.php">Contact Us</a></li>
    </ul>
</div></div>
<div id="middlecontainer"><?php ShowContent($title); ?></div>
<div id="footer">

    <ul>
        <li><a href="index.php" >Home</a></li>
        <li><a href="roc-information.php" >Information</a></li>
        <li><a href="roc-aboutus.php" >About Us</a></li>
        <li><a href="productdetails.php" >Products</a></li>
        <li><a href="roc-businessplans.php" >Business Plan</a></li>
        <li><a href="roc-careers.php" >Career</a></li>
        <li><a href="roc-downloads.php" >Downloads</a></li>
        <li><a href="roc-distributers.php" >Distributors</a></li>
        <li><a href="roc-sitemap.php" >Site Map</a></li>
        <li><a href="contact-roc.php" >Contact Us</a></li>
         <li><a href="memberlogin.php" >Member Login</a></li>
         <li><a href="shop/" >Shop Login</a></li>
    </ul>
    <ul>
    	<li>&copy; 2010-2011 Reality Opportunity Club</li>
        <li><a href="privacy.php" >Privacy Policy</a></li>
    </ul>
</div>
</div>
<!-- Scripts -->

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
 
	$("ul.menusubnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	
	$("ul.menutopnav li span").hover(function() { //When trigger is clicked...
		
		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).parent().find("ul.menusubnav").slideDown('fast').show(); //Drop down the subnav on click
 
		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.menusubnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});
 
		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			$(this).addClass("menusubhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("menusubhover"); //On hover out, remove class "subhover"
	});
 
});
</script>
<!-- Scripts End -->

</body>
</html>
