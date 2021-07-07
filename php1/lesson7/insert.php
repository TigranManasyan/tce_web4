<?php 

	const DB_HOST = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_NAME = "edu";
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	/*if($conn) {
		echo "Connected!";
	} else {
		echo "Faild! " . mysqli_connect_error($conn);
		die;
	}*/
	function insertStudent($first_name, $last_name, $age, $address) {
		global $conn;
		$sql = "INSERT INTO `students` (`firstname`, `lastname`, `age`, `address`) VALUES('$first_name', '$last_name', '$age', '$address')";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['age']) && isset($_POST['address'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$age = $_POST['age'];
			$address = $_POST['address'];
		insertStudent($first_name, $last_name, $age, $address);
		header("location:index.php");
	}
	