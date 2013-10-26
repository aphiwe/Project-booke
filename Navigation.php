<?php
// to count items in the cart
//$cartItemCount = count($_SESSION['cart']);
$items = explode(',',$cart);
			$s = (count($items) > 1) ? '':'';
			$cartItemCount = count($items).''.$s.'';
?>



