<?php
include('config.php');

$order_id=$_POST['order_id'];
$txtitemcode=$_POST['username'];
$txtitem=$_POST['address'];
$txtqty=$_POST['mobile'];
$txtsrp=$_POST['email'];

if(!$txtitemcode || !$txtitem || !$txtqty || !$txtsrp)
{
  echo "<script> alert('All field are required');
window.location.href='checkout.php';</script>";
}


$sql="INSERT INTO order(username,address,mobile,email) VALUES ('".$txtitemcode."','".$txtitem."','".$txtqty."','".$txtsrp."')";


if(!mysql_query($sql))
{
//die('Error:'.mysql_error());
echo "<script> alert('Fail to process your order, try again please !');
window.location.href='checkout.php';</script>";
}
echo "<script> alert('Thank you, Order successfully added in the list !');
window.location.href='checkout.php';</script>";
mysql_close($con);

?>