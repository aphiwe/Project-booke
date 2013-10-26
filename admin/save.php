<?php
include ("config.php");

$title = $_GET['title'];
$author = $_GET['author'];
$price = $_GET['price'];

if(!$title || !$author || !$price)
{
   echo "<html><script language = 'JavaScript'>alert('Enter title, author & price please')</script></html>";
 exit;
}
$strquery="INSERT INTO product SET title= '" . $title . "', author= '" . $author . "', price= '". $price ."' ";
$results=mysql_query ($strquery);
header( 'Location: main.php' ) ;
?>
 