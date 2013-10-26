<?php
class Cart
{
	//add products to shopping if empty
    function writeShoppingCart() {
		$cart = $_SESSION['cart'];
		if (!$cart) {
			return '<p>shopping cart(0)</p>';
		} else {
		// Parse the cart session variable
			$items = explode(',',$cart);
			$s = (count($items) > 1) ? '':'';
			return '<p><a href="cart.php">shopping cart ('.count($items).''.$s.')</a></p>';
		}
	}
	//show every thing inside my cart
   function showCart() {
	global $db;
	$cart = $_SESSION['cart'];
	if ($cart) {
		$items = explode(',',$cart);
		$contents = array();
		foreach ($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		$output[] = '<form action="cart.php?action=update" method="post" id="cart">';
		$output[] = '<table>';
		foreach ($contents as $id=>$qty) {
			$sql = 'SELECT * FROM product WHERE id = '.$id;
			$result = $db->query($sql);
			$row = $result->fetch();
			@extract($row);
			$output[] = '<tr>';
			$output[] = '<td>'.$title.' by '.$author.'</td>';
			$output[] = '<td>R'.$price.'</td>';
			$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
			$output[] = '<td>R'.($price * $qty).'</td>';
			$total += $price * $qty;
			$output[] = '<td> | </td>';
			$output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
			$output[] = '</tr>';
		}
		$output[] = '</table>';
		$output[] = '<p>Your total: <strong>R'.$total.'</strong></p>';
		$output[] = '<div><button type="submit">Update cart</button></div>';
		$output[] = '</form>';
	} else {
		$output[] = '<p>You shopping cart is empty.</p>';
	}
	return join('',$output);
  }
}


?>
