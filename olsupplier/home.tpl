<?php include("../connect/olsuppsession.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE SUPPLIER | ROC</title>
<link href="css/olshop.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="outerdiv">
  <div id="bannertop"><img src="img/RealityOpportunityClub.png" width="800" height="86" /></div>
<div id="middlecontainer">
  <div id="leftmenu">
  <br />
<br />

    <ul id="menu">
  		<li><a href="home.php">Home</a></li>
<li><a href="olsuppaccounts.php">Accounts</a></li>
		<li><a href="#">Orders</a>
			<ul>
			<li><a href="olsupp_orderview.php?g=0" >Pending</a>
            <li><a href="olsupp_orderview.php?g=2" >Intransit</a>
			<li><a href="olsupp_orderview.php?g=1" >Cancelled</a></li>
            <li><a href="olsupp_orderview.php?g=3" >Delivered</a></li>
            <li><a href="olsupp_orderview.php?g=4" >View All</a></li>
		  </ul>
		</li>
	<li><a href="olsupp_suppproducts.php">Products</a></li>
    <li><a href="olsupp_passchange.php">Change Password</a></li>
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
