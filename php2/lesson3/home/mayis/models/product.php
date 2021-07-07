<?php
include_once "../configs/database.php";

class Products extends Database {
	public function insert_product($name, $price, $desc) {
		$sql = "INSERT INTO `products` VALUES (null, '$name', '$price', '$desc', null, null)";
		mysqli_query($this -> conn, $sql);
	}

    public function select_products() {
		$sql = "SELECT `id`, `name`, `price`, `description` FROM  `products`";
		$res = mysqli_query($this -> conn, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
	}
} 