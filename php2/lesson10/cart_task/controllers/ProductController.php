<?php 
	require_once "./../models/Product.php";

	$products = new Product;

	echo json_encode($products -> select());

 ?>