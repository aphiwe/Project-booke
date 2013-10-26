<?php
include ("config.php");

$title = $_GET['title'];
$author = $_GET['author'];
$price = $_GET['price'];

$strquery="UPDATE product SET title= '" . $title . "', author= '" . $author . "', price= '". $price ."' ";

$results=mysql_query ($strquery);

header ('location: products.php '); 


?>
