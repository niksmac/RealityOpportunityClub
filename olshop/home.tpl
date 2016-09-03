<?php include("../connect/olsession.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE SHOP | ROC</title>
<link href="css/olshop.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outerdiv">
  <div id="bannertop">
    <img src="img/RealityOpportunityClub.png" height="86" />  </div>
<div id="middlecontainer">
  <div id="leftmenu">
  <br />
<br />
  <ul id="menu">
  		<li><a href="home.php">Home</a></li>
		<li><a href="olshopaccounts.php">Accounts</a></li>
		<li><a href="#">Product Order</a>
			<ul>
                <li><a href="olproductorder.php" >New</a></li>
                <li><a href="orderview.php?k=1">Cancelled</a></li>
                <li><a href="orderview.php?k=2">Intransit</a></li>
                <li><a href="orderview.php?k=3">Delivered</a></li>
                <li><a href="orderview.php?k=4">View All</a></li>
		  	</ul>
		</li>
		<li><a href="olproducts.php">Products</a></li>
        <li><a href="olprintorder.php">Print Order</a></li>
        <li><a href="shopchangepassword.php">Change Password</a></li>
        <li><a href="logout.php">Sign Out</a></li>
	</ul>
    
</div> <div id="rightcontent"><?php showcontent(); ?></div>
</div>
<div id="footer"> <ul> <li><br />&copy; 2010-2011 | Reality Opportunity Club </li></ul></div>
</div>
<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu-collapsed.js" type="text/javascript"></script>
</body>
</html>
