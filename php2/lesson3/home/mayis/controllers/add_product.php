<?php
include_once "../models/product.php";

if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['desc'])){
    $obj1 = new Products;
    $obj1 -> insert_product($_POST['name'], $_POST['price'], $_POST['desc']);
}