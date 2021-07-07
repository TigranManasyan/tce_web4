<?php 
	if(isset($_COOKIE['cart'])) {
		$products = json_decode($_COOKIE['cart']);
		echo "<pre>";
		print_r($products);
	} else {
		echo "Cart empty";
	}

	




 ?>