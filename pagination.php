
<?php
	/*
		Place code to connect to your DB here.
	*/
		// include your code to connect to DB.
include('connect/connect.php');
$tbl_name="ol_products";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM ".$tbl_name;
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "roc-onlineproducts.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM ".$tbl_name." order by id desc LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">« previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";		
	} ?>
<link href="css/screen.css" rel="stylesheet" type="text/css" />

<div align="center"><?= $pagination ?></div>
<?php 
while($qraysjh = mysql_fetch_array($result))
{
$prod_code =$qraysjh['prod_code'];
$prod_name =$qraysjh['prod_name'];
$mrp = $qraysjh['mrp'];
$dist_price = $qraysjh['dist_price'];
$mem_price = $qraysjh['mem_price'];
$pro_stock = $qraysjh['pro_stock'];
$photo = $qraysjh['photo'];
$roc_bv = $qraysjh['roc_bv'];
$roc_bp = $qraysjh['roc_bp'];
$imgpath = 'olproducts/'.$photo;


$ssssss=mysql_query("select page_url from ol_products_det where prod_code = '$prod_code'");
$sdfsdfsf = mysql_num_rows ($ssssss);

$ssssss=mysql_query("select page_url from ol_products_det where prod_code = '$prod_code'");
   while($frhhhy=mysql_fetch_array($ssssss))
    {
	$page_url=$frhhhy['page_url'];
	}

?>
        
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="12%" align="center" valign="middle"><a href="<?php echo $imgpath; ?>" rel="lightbox[olp]" title="<?php echo $prod_name; ?>" ><img src="timthumb.php?src=<?php echo $imgpath; ?>&h=125&w=125" alt="<?php echo $prod_name; ?>" border="0" ></a> <?php if ($sdfsdfsf >=1 ){ ?><br /> <a href="productdetails/<?php echo $page_url; ?>" class="morelink" title="<?php echo $prod_name; ?>">&radic; more... </a><?php } ?></td>
    <td width="79%" align="left" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="23%" align="left" valign="top"><strong>Product Code</strong> </td>
        <td width="1%" align="left" valign="top"><strong>:</strong></td>
        <td width="76%" align="left" valign="top"><?php echo $prod_code; ?></td>
        </tr>
      <tr>
        <td align="left" valign="top"><strong>Product Name</strong> </td>
        <td align="left" valign="top"><strong>:</strong></td>
        <td align="left" valign="top"><?php echo $prod_name; ?></td>
        </tr>
      <tr>
        <td align="left" valign="top"><strong>MRP</strong> </td>
        <td align="left" valign="top"><strong>:</strong></td>
        <td align="left" valign="top"><?php echo $mrp; ?></td>
        </tr>
      <tr>
        <td align="left" valign="top"><strong>ROC Price</strong> </td>
        <td align="left" valign="top"><strong>:</strong></td>
        <td align="left" valign="top"><?php echo $mem_price; ?></td>
        </tr>
      <tr>
        <td align="left" valign="top"><strong>BV</strong> </td>
        <td align="left" valign="top"><strong>:</strong></td>
        <td align="left" valign="top"><?php echo $roc_bv; ?></td>
        </tr>
      <tr>
        <td align="left" valign="top"><strong>BP</strong></td>
        <td align="left" valign="top"><strong>:</strong></td>
        <td align="left" valign="top"><?php echo $roc_bp; ?></td>
      </tr>
      
    </table></td>
    <td width="9%" align="left" valign="top">
    
  <table border="0" cellpadding="0" cellspacing="0" >
          <tr>
   <?php
   $count=0; $qry=mysql_query("select photo from ol_products_pics where prod_code = '$prod_code'");
   while($fry=mysql_fetch_array($qry))
    {
	$count++;
	$path="olproducts/".$fry['photo'];
	 ?>
              <td valign="top"><table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="32" align="left" valign="top" ><a href="<?php echo $path; ?>" rel="lightbox[<?php echo $prod_code; ?>]" ><img src="<?php echo $path; ?>" width="32" height="32" border="0"/></a></td>
                    <td width="2" align="center" >&nbsp;</td>
                  </tr>
              </table></td>
              <?php
			  if($count%4==0)
			   echo "<tr>";
			   } ?>
            </tr>
          </table> 
    
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><hr /></td>
  </tr>
</table>

        
<?php } ?>

<div align="center"><?= $pagination ?></div>
<br />
<br />
<br />
<br />
<br />

	