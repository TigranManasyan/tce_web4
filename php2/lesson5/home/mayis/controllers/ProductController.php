<?php 
    require_once "../models/ProductModel.php";

    if(isset($_POST['cat_id'])){
        $obj = new Product;
        $cat_id = $_POST['cat_id'];
        echo json_encode($obj -> select_prod($cat_id));
    }