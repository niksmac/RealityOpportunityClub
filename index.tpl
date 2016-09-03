<?php include ("connect/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo showMeta(); ?>
<meta name="author" content="Nikhil Mohan (nikhil@lightrains.com)"/>
<meta name="revisit-after" content="3"/>
<meta name="robots" content="index,follow"/>
 <link rel="shortcut icon" href="images/favicon.ico" />
<!-- css -->
<link href="css/screen.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=IM+Fell+English" rel="stylesheet" type='text/css' />
<!-- css end -->
<title>Reality Opportunity Club</title></head>
<body>
<div id="outerdiv">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome To Reality Opportunity Club</h1>
				<h2>ROC's Vision</h2>		
				<p class="grey">To reach out the horizon of a customer controlled market, where exploitation by unwanted middlemen and misdirecting advertisements are avoided or curbed. The customers get bespoke products and the Member-Distributors get their due benefits for linking ROC products.</h2>
				<p class="grey">Take a look at the Business Plan <a href="roc-businessplans.php" title="ROC Business Plan">HERE &raquo;</a></p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="rocmemberlogin.php" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">ROC ID:</label>
					<input class="field" type="text" name="rocuname" id="rocuname" value="" size="23" />
					<label class="grey" for="pwd" >Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23"  autocomplete="off"/>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
				</form>
			</div>
			<div class="left right">
            <a href="shop/"><img src="images/shoplogin.png" border="0" alt="ROC Shop Login" /></a>
			</div>
		</div>
</div>
<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Login Here</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
  </div>

<div id="bannertop"><a href="http://www.ropclub.com"><img src="images/RealityOpportunityClub.jpg" alt="Reality Opportunity Club" width="400" height="86" border="0" /></a>
  <div id="menuheader">
    <ul class="menutopnav">
      <li><a href="index.php">Home</a></li>
      <li> <a href="#">ROC</a>
          <ul class="menusubnav">
            <li><a href="roc-aboutus.php">About ROC</a></li>
            <li><a href="roc-missionandvision.php">Mission &amp; Vision</a></li>
          </ul>
      </li>      
      <li><a href="roc-businessplans.php">Business Plan</a></li>
      
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
            <li><a href="productdetails.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></li>
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
            <li><a href="storedetails.php?id=<?php echo $id; ?>"><?php echo $storename; ?></a></li>
            <?php } ?>
           </ul>
      </li>
          <li><a href="contact-roc.php">Contact Us</a></li>
    </ul>
    </div>
  </div>
    
<div id="middlecontainer">
<div id="middlecontainerleft"><?php ShowContent(); ?></div>
  <div id="middlecontainerright">
    <div id="newscontainer">
<table width="98%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td width="74%"> </td>
  </tr>
  <tr>
    <td height="3"></td>
  </tr>
  
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><div class="h2container">
      <h3>Latest News from ROC</h3>
    </div></td>
  </tr>
  <tr>
    <td>

    <div class="newsticker-jcarousellite">
        <ul style="margin-top:0px; margin-bottom:0px;">
        
        <?php
		$qryv=mysql_query("select id,captn,descr from newsss order by id desc");
		while($fryv=mysql_fetch_array($qryv))
		{
		$idd=$fryv['id'];
		$caption=$fryv['captn'];
		$description=$fryv['descr'];
		?>
        <li class="event_thumbndescription">
        <!--event_thumbndescription-->
        <!--/event_thumb_image-->  <?php echo "<b>".$caption."</b><br>".substr($description,0,90)."<br>";?><a href="readnews.php?id=<?php echo $idd; ?>" class="morelink">more...</a><!--/event_thumbndescription--> 
        </li>
         <?php
		  }
		  ?>
        </ul>
    </div>
<!--/event_thumbndescription--></td>
  </tr>
  <tr>
    <td><div align="left"></div></td>
  </tr>
 
<tr>
    <td height="5" align="center" valign="middle"><div align="left">
      <!--<table width="99%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="11%" align="center" valign="middle">&nbsp;</td>
        <td width="11%" align="center" valign="middle">&nbsp;</td>
        <td width="44%" align="center" valign="middle">&nbsp;</td>
        <td width="34%" align="center" valign="middle"><a href="feed/"><img src="images/rss_icon.gif" width="52" height="16" border="0" /></a></td>
      </tr>
      
    </table>-->
    </div>
      <form action="http://www.ropclub.com/gsearch.php" id="cse-search-box">
  <div>
    <div align="left">
      <input type="hidden" name="cx" value="partner-pub-5839327549098515:viwib18n8wt" />
      <input type="hidden" name="cof" value="FORID:9" />
      <input type="hidden" name="ie" value="ISO-8859-1" />
      <input type="text" name="q" size="30" />
    </div>
    <label class="submit">
    
      <div align="left">
        <input type="submit" name="sa" value="Search" />
        </div>
    </label>
  </div>
</form>
      <div align="left">
        <script type="text/javascript" src="//www.google.co.in/cse/brand?form=cse-search-box&amp;lang=en"></script>
      </div></td>
    </tr>
    
<!--  <tr>
    <td colspan="3" height="1"></td>
  </tr>
  
  <tr>
    <td colspan="3"><form name="searchform" class="searchform"> 
	<input class="searchfield" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" /> 
	<input name="Submit" type="submit" class="searchbutton" value="Go" /> 
</form></td>
  </tr>-->
</table>
</div>

</div>
</div>
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
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/slide.js" type="text/javascript"></script>
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
<!--<script language="javascript" type="text/javascript" src="js/mootools.svn.js"></script> 
<script language="javascript" type="text/javascript" src="js/lofslidernews.mt11.js"></script>
<script type="text/javascript"> 
	var _lofmain =  $('lofslidecontent45');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									  { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:800},
									 	 interval:3000,
							 			 direction :'hrleft' } );
	object.start( true, _lofmain.getElement('.preload') );
</script> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9728278-14']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 2,
		auto:1500,
		speed:2000
	});
});
</script>

<!-- Scripts End -->

</body>
</html>
