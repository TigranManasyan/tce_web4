<?php 
	require_once "../config/databse.php";

	class AdminModel extends Database {
		public function check_in($login, $password) {
			$sql = "SELECT * FROM `admins` WHERE `login` = '$login' AND `password` = '$password'";
			$result = mysqli_query($this -> conn, $sql);

			if(mysqli_num_rows($result) > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
	
