<?php
//Parse the php file as xml
header('Content-Type: text/xml');

//incude database connection info
include("../connect/connect.php");
   // Run query...
   $getFeed = mysql_query("SELECT * FROM `ol_products` ORDER BY id DESC")or die(mysql_error());

   // Output XML (RSS)
    echo '

                        Your RSS Title
                        http://the_location_of_your_feed/feed
                        Description of your Feed
                        English

                                website Logo

                                Link to image
                                width
                                height
                        ';
                                                while($rssFeed = mysql_fetch_array($getFeed)) {
                                                 echo ''.
                                                      ''.$rssFeed['prod_name'].'<br>',
                                                      ''.$rssFeed['mem_price']. '',
                                                      '';

                                                }
                                echo '
        ';

?>