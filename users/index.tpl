<?php 
include ("../connect/session.php");
//$ssdgasdffs=mysql_num_rows (mysql_query("select id from royalty where mmbr_id='$rocuname'  "));
$tyertye = mysql_num_rows (mysql_query("select id from primarytree where memid='$rocuname'  "));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo getTitle(); ?> </title>
<!-- css -->
<link href="../css/user.css" rel="stylesheet" type="text/css" />
<!-- css end -->
</head>
<body>
<div id="outerdiv">
<div id="bannertop"><a href="http://www.ropclub.com"><img src="../images/RealityOpportunityClub.jpg" alt="Reality Opportunity Club" width="400" height="86" border="0" /></a>
  <div id="menuheader">
    <ul class="menutopnav">
      <li><a href="index.php">Home</a></li>
      <li><a href="roc-joinings.php">Joinings</a></li>
      <li><a href="roc-mydownline.php">Downline</a></li>
      <li><a href="roc-bin-genealogy.php">Geneology</a></li>
      <?php if ($ssdgasdffs > 0) { ?>
      <li><a href="roc-rclubstats.php">Royalty Club</a></li>
      <?php } ?>
      <?php if ($tyertye > 0) { ?>
      <li> <a href="roc-primarystats.php">Primary Plan</a>
          <ul class="menusubnav">
            <li><a href="roc-primarystats.php">Primary Plan Details</a></li>
            <li><a href="roc-primarydownline.php">Primary Downline</a></li>
          </ul>
      </li>
      <?php }?>
      <li> <a href="#">Services</a>
          <ul class="menusubnav">
            <li><a href="memsearchad.php">Member Search</a></li>
            <li><a href="shopauth.php">Shop Application</a></li>
          </ul>
      </li>
      <li> <a href="#">My Account</a>
          <ul class="menusubnav">
            
            <!--<li><a href="#" title="Page will be available soon">Current Statistics</a></li>
            <li><a href="#" title="Page will be available soon">Account History</a></li>-->
            <li><a href="roc-curentstat.php">Current Statistics</a></li>
            <li><a href="roc-accounthistory.php">Account History</a></li>
            <li><a href="roc-purchasedetails.php">Purchase Details</a></li>
          </ul>
      </li>
      
      <li> <a href="#">Settings</a>
          <ul class="menusubnav">
            <li><a href="roc-changepass.php">Change Password</a></li>
            <li><a href="roc-editprofile.php">Edit Profile</a></li>
          </ul>
      </li>
      <li><a href="logout.php">Sign Out</a></li>
    </ul>
    </div>
  </div>
<div id="userinfoarea"> <?php include("usrdetails.php"); ?> </div> 
<div id="usercontentarea"> <?php ShowContent($rocuname); ?> </div>

<div id="footer">

    <ul>
        <li><a href="index.php" >Home</a></li>
      <li><a href="../roc-aboutus.php" >About Us</a></li>
        <li><a href="../productdetails.php" >Products</a></li>
        <li><a href="../roc-businessplans.php" >Business Plan</a></li>
        <li><a href="../roc-careers.php" >Career</a></li>
        <li><a href="../roc-downloads.php" >Downloads</a></li>
      <li><a href="../roc-distributers.php" >Distributors</a></li>
      <li><a href="../roc-sitemap.php" >Site Map</a></li>
        <li><a href="../contact-roc.php" >Contact Us</a></li>
    </ul>

</div>
</div>
<!-- Scripts -->
<script type="text/javascript" src="../js/ajax.js"></script> 
<script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
 
	$("ul.menusubnav").parent().append("<span style='cursor:pointer'></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	
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
<script type="text/javascript" src="js/jquery-1.2.2.pack.js"></script>
<script type="text/javascript" src="js/ajaxtooltip.js"> </script>  
<!-- Scripts End -->
<?php include ("../connect/conclose.php"); ?>
</body>
</html>
