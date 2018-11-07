<!-- <?php 
$date = date("g:ia \o\n l jS F Y");
echo $datetime = date_format($date, 'g:ia \o\n l jS F Y');
 ?> -->

 <?php
date_default_timezone_set("Asia/Manila");
echo "Today is " . date("g:ia  l jS F Y") . "<br>";

?>