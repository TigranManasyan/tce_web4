<?php 
	$conn = require_once "../config/db.php";

	function insert_image($path) {
		global $conn;
		mysqli_query($conn, "INSERT INTO `images` (`path`, `upload_to`) VALUES ('$path', NOW())");
	}

	function select_images() {
		global $conn;
		$res = mysqli_query($conn, "SELECT * FROM `images`");
		return mysqli_fetch_all($res, MYSQLI_ASSOC);
	}



 ?>