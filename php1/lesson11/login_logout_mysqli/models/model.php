<?php 
	$conn = require_once "../config/db.php";
	session_start();

	function sign_in($login, $password) {
		global $conn;
		$sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$login' && `password` = '$password'");
		if(mysqli_num_rows($sql) > 0) {
			// $_SESSION['user'] = mysqli_fetch_all($sql, MYSQLI_ASSOC);
			return true;
		} else {
			return false;
		}
	}

	function sign_up($first_name, $last_name, $login, $password) {
		global $conn;
	}


 ?>