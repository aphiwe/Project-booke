<?php
include ("config.php");

$name = $_GET['username'];
$email = $_GET['email'];

$strquery="UPDATE users SET username= '" . $name . "', email= '" . $email . "' ";

$results=mysql_query ($strquery);

header ('location: account-update.php '); 


?>
