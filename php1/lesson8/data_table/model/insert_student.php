<?php 
	require_once "model.php";
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['age']) && isset($_POST['address'])) {	
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$age = $_POST['age'];
		$address = $_POST['address']; 
		insert($first_name, $last_name, $age, $address);
	}

 ?>