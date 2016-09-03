<?php 
include ("../connect.php");
$alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); 
foreach ($alphabet as $letter) { 
echo "<a href=\"?letter=" . $letter . "\">" . $letter . "</a>&nbsp;¦&nbsp;"; 
} 
?>

<!--mysql--> 
<?php 
if(empty($_POST)) { 
$letter = $_GET['letter']; 
$letter .= "%"; 
$search = $letter; 
$sdesc = "*"; 
$classquery = ""; 
} else { 
$search = $_POST['search']; 
$search = "%" . $search . "%"; 
$sdesc = "%" . $search . "%"; 
$sclass = $_POST['category_eng']; 
$classquery = "AND 'category_eng' = CONVERT( _utf8 '" . $sclass . "' USING latin1 )"; 
} 
mysql_connect("localhost", "admin", "admin"); 
mysql_select_db("ucp060410"); 
// If current page number, use it 
// if not, set one!

if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
}

// Define the number of results per page 
$max_results = 5;

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);

// Perform mysql query on only the current page number's results 
$result = mysql_query("SELECT * FROM saba ORDER BY name DESC LIMIT $from, $max_results") 
or die(mysql_error());

//TO PRINT OUT THE DATA 
echo "<table border='1'>"; 
echo "<tr> <th>ID</th> <th>Section</th> <th>List Type</th> <th>Category English</th> <th>Category French</th> <th>Name</th> <th>Address</th> <th>Phone_Number</th> <th>Phone Number2</th> <th>Fax</th> <th>Website</th> <th>Email</th> </tr>"; 
// keeps getting the next row until there are no more to get 
while($saba = mysql_fetch_array( $result )) { 
// Print out the contents of each row into a table 
echo "<tr><td>"; 
echo $saba['ID']; 
echo "</td><td>"; 
echo $saba['section']; 
echo "</td><td>"; 
echo $saba['listtype']; 
echo "</td><td>"; 
echo $saba['category_eng']; 
echo "</td><td>"; 
echo $saba['category_french']; 
echo "</td><td>"; 
echo $saba['name']; 
echo "</td><td>"; 
echo $saba['address']; 
echo "</td><td>"; 
echo $saba['phone_number']; 
echo "</td><td>"; 
echo $saba['phone_number2']; 
echo "</td><td>"; 
echo $saba['fax']; 
echo "</td><td>"; 
echo $saba['website_url']; 
echo "</td><td>"; 
echo $saba['email']; 
echo "</td></tr>"; 
}

echo "</table>"; 
//STOP PRINTING OUT THE DATA

// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM saba ORDER BY name DESC"),0);

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

// Build Page Number Hyperlinks 
echo "<p class=\"center\">Pages: ";

// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['php_SELF']."?page=$prev\">&laquo;</a> "; 
}

for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 
echo "<a href=\"".$_SERVER['php_SELF']."?page=$i &letter=$letter\">$i</a> "; 
} 
}

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['php_SELF']."?page=$next\">&raquo;</a>"; 
} 
echo "</p>";

mysql_close(); 
?> 