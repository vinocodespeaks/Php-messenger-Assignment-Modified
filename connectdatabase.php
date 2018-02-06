<?php
session_start();


$conn=mysql_connect("localhost","vinsl","")or die("Connection to Server failed");
$db=mysql_select_db("vinoth",$conn)or die("Connection to Database failed");


//Webmaster Email
$mail_webmaster = 'vinod.aadvik@gmail.com';

//Top site root URL
$url_root = 'http://www.example.com/';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
//$design = 'default';
?>
?>