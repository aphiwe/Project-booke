<?php
include ("config.php");

$strquery=" DELETE from product where id = '" . $_GET['id'] . "' ";
$results=mysql_query ($strquery);
echo 'Delete Successfull!!';
//header ('location: MAIN.php ');
?>