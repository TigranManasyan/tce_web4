<?php 
	require_once "model.php";
	if(isset($_GET['id']) && isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['age']) && isset($_GET['address'])) {
		$id = $_GET['id'];
		$first_name = $_GET['first_name'];
		$last_name = $_GET['last_name'];
		$age = $_GET['age'];
		$address = $_GET['address']; 
		update($id,$first_name, $last_name, $age, $address);
	}

 ?>