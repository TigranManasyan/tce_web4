<?php 
	if(isset($_COOKIE['cart'])) {
		$products = json_decode($_COOKIE['cart']);
	} else {
		$products = [];
	}
	if(isset($_POST['prod'])) {
		array_push($products, $_POST['prod']);
		$products = json_encode($products);
		$add = setcookie('cart', $products, time() + 3600, '/');
		if($add) {
			echo "Protuct inerted to cart";
		} else {
			echo "Faild";
		}
	}






 ?>