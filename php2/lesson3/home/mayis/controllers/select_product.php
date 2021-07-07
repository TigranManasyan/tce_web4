<?php
include_once "../models/product.php";

$obj1 = new Products;
echo json_encode($obj1 -> select_products());