<?php 
if(isset($_GET['cl']))
$cl=$_GET['cl'];
if(isset($_GET['st']))
$st=$_GET['st'];
if(isset($_GET['itm']))
$itm=$_GET['itm'];
if(isset($_GET['stng']))
$stng=$_GET['stng'];
if(isset($_GET['isu']))
$isu=$_GET['isu'];
if(isset($_GET['bl']))
$bl=$_GET['bl'];
if(isset($_GET['stk']))
$stk=$_GET['stk'];
if(isset($_GET['rpt']))
$rpt=$_GET['rpt'];
if(isset($_GET['spl']))
$spl=$_GET['spl'];
if(isset($_GET['acc']))
$acc=$_GET['acc'];
if(isset($_GET['roy']))
$roy=$_GET['roy'];
if(isset($_GET['em']))
$em=$_GET['em'];
if(isset($_GET['val']))
$val=$_GET['val'];
if(isset($_GET['mem']))
$mem=$_GET['mem'];
if(isset($_GET['msc']))
$msc=$_GET['msc'];
if(isset($_GET['pm']))
$pm=$_GET['pm'];

?>
<link href="colours.css" rel="stylesheet" type="text/css" />

<link href="../ropclub.css" rel="stylesheet" type="text/css" />
<table width="153" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg">
   <form id="form1" name="form1" method="post" action="srchmems.php?mem"> 
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
              <td><strong>Search Members</strong></td>
            </tr>
            
            <tr>
              <td><input name="srch" type="text" id="srch" size="15" /></td>
            </tr>
          </table>
      </form>    </td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="changepass.php" class="forumlinks">CHANGE PASS</a></td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="addstores.php?st=1" class="forumlinks">STORES</a></td>
  </tr>
  <?php if(isset($st)) { ?>
  <tr>
    <td width="10" height="23" align="left" valign="middle"><img src="images/images.jpg" width="10" height="10" /></td>
    <td width="126" height="23" align="left" valign="middle" background="../images/5.jpg"><a href="addstores.php?st=1" class="forumlinks">Add New</a></td>
  </tr>
  <tr>
    <td height="23" align="left" valign="middle"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="viewstores.php?st=1" class="forumlinks">View All</a></td>
  </tr>
  <tr>
    <td height="23" align="left" valign="middle"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="addcredits.php?st=1" class="forumlinks">BV Credit </a></td>
  </tr>
   
  <?php } ?>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="jobapplication.php" class="forumlinks">JOB APPLICATIONS</a></td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="srchmems.php?mem" class="forumlinks">MEMBERS</a></td>
  </tr>
   <?php if(isset($mem)) { ?>
   <tr>
     <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
     <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="srchmems.php?mem" class="forumlinks">SEARCH</a></td>
   </tr>
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="viewactive.php?mem" class="forumlinks">VIEW  ACTIVE</a></td>
  </tr>
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="viewnonactive.php?mem" class="forumlinks">VIEW NON ACTIVE</a></td>
  </tr>
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="viewallmemberss.php?mem" class="forumlinks">VIEW ALL MEMBERS</a></td>
  </tr>

  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="memberstoday.php?mem" class="forumlinks">Todays Joinig</a></td>
  </tr>
   
    <tr>
      <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
      <td height="23" align="left" valign="middle" background="../images/5.jpg"><strong><a href="ecardvalidation.php?val&amp;mem" class="forumlinks">Validation</a></strong></td>
    </tr>
    <tr>
      <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
      <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="showwhatineed.php?mem" class="forumlinks">Show What i need</a></td>
    </tr> <?php } ?>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="ptreekeygen.php?pm" class="forumlinks">PRIMARY PLAN</a></td>
  </tr>
    <?php if(isset($pm)) { ?>
    <tr>
      <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
      <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="p-plankits.php?pm" class="forumlinks">KIT OPTIONS</a></td>
    </tr>
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="ptreekeygen.php?pm" class="forumlinks">Primary Tree Key</a></td>
  </tr>
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="../pt/primarytree-long.php" target="_blank" class="forumlinks">Primary Tree</a></td>
  </tr>
<?php }?>

  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="miscfns.php?msc" class="forumlinks">MISC</a></td>
  </tr>
    <?php if(isset($msc)) { ?>

  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="miscfns.php?msc" class="forumlinks">Seach Option</a></td>
  </tr>
  
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="productdescription.php?msc" class="forumlinks">Product Desc</a><a href="ptreekeygen.php?msc" class="forumlinks"></a></td>
  </tr>
 
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="backupmanage.php?msc" class="forumlinks">BACKUPS</a><a href="../pt/primarytree.php" target="_blank" class="forumlinks"></a></td>
  </tr>
   
  
   <tr>
     <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
     <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="sms.php?msc" class="forumlinks">SMS</a></td>
   </tr>

   <tr>
     <td height="23" align="left" valign="middle" background="../images/5.jpg"><img src="images/images.jpg" alt="" width="10" height="10" /></td>
     <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="selfkey.php?msc" class="forumlinks">Self Activation Key</a></td>
   </tr>
  <tr>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="backupmanage.php" class="forumlinks"><img src="images/images.jpg" alt="" width="10" height="10" border="0" /></a></td>
    <td height="23" align="left" valign="middle" background="../images/5.jpg"><a href="refreshdb.php?msc" class="forumlinks">Refresh db</a></td>
  </tr>
 <?php } ?> 
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="pclose.php" class="forumlinks"></a></td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg"><a href="logout.php" class="forumlinks"><strong>LOG OUT</strong></a></td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="left" valign="middle" background="../images/5.jpg">&nbsp;</td>
  </tr>
</table>
