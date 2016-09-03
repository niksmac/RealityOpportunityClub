<?php
  // This is a minimum example of using the Universal Feed Generator Class
  include("FeedWriter.php");
  include("../connect/connect.php");
  
  //Creating an instance of FeedWriter class. 
  $TestFeed = new FeedWriter(RSS2);
  
  //Setting the channel elements
  //Use wrapper functions for common channel elements
  $TestFeed->setTitle('Testing & Checking the RSS writer class');
  $TestFeed->setLink('http://www.ajaxray.com/projects/rss');
  $TestFeed->setDescription('This is test of creating a RSS 2.0 feed Universal Feed Writer');
  
  //Image title and link must match with the 'title' and 'link' channel elements for valid RSS 2.0
  $TestFeed->setImage('Testing the RSS writer class','http://www.ajaxray.com/projects/rss','http://www.rightbrainsolution.com/images/logo.gif');
  
    //Retriving informations from database
    $result = mysql_query("SELECT * FROM `ol_products` ORDER BY id DESC");

 
    while($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        //Create an empty FeedItem
        $newItem = $TestFeed->createNewItem();
        
        //Add elements to the feed item    
        $newItem->setTitle($row['prod_name']);
        $newItem->setLink($row['prod_name']);
        $newItem->setDate($row['prod_name']);
        $newItem->setDescription($row['prod_name']);
        
        //Now add the feed item
        $TestFeed->addItem($newItem);
    }
  
  //OK. Everything is done. Now genarate the feed.
  $TestFeed->genarateFeed();
?>