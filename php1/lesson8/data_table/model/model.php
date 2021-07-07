<?php 
	$conn = require_once "../config/db.php";

	function select() {
		global $conn;
		$sql = "SELECT * FROM `students`";
		$result = mysqli_query($conn, $sql);
		// return mysqli_fetch_all($result); // sovorakan zangvac
		return mysqli_fetch_all($result, MYSQLI_ASSOC);//asoceativ zangvac
	}

	function delete($id) {
		global $conn;
		$sql = "DELETE FROM `students` WHERE `id` = '$id'";
		mysqli_query($conn, $sql);
	}

	function update($id, $fname, $lname, $age, $address) {
		global $conn;
		$sql = "UPDATE `students` SET `firstname` = '$fname', `lastname` = '$lname', `age` = '$age', `address` = '$address' WHERE `id` = '$id'";
		mysqli_query($conn, $sql);
	}

	function insert($fname, $lname, $age, $address) {
		global $conn;
		$sql = "INSERT INTO `students` VALUES (NULL,'$fname', '$lname', '$age', '$address')";
		mysqli_query($conn, $sql);
	}

 ?>