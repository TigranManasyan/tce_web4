<?php

require_once '../config/database.php';


class Products extends Database {
    public function insert_product($name, $price, $description, $image, $categ_id){
        $sql = "INSERT INTO `products` VALUES (null, $name, $price, $description, $image, $categ_id)";
        mysqli_query($this -> conn, $sql);
    }
}

// if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['description']) && isset($_GET['img']) && isset($_GET['categ_id'])){
//     $name = $_GET['name'];
//     $price = $_GET['price'];
//     $description = $_GET['description'];
//     $categ_id = $_GET['categ'];
//     header('location:../models/products.php');
// }





?>