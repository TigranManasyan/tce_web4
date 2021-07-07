<?php 
	require_once "./../config/Database.php";

	class Product extends Database {
		public function select() {
			$result = $this -> db -> query("SELECT * FROM `products`");
			return $result -> fetch_all(MYSQLI_ASSOC);
		}
	}


 ?>