<?php 
    require_once "../models/CategorieModel.php";

    $obj = new Categorie;
    echo json_encode($obj -> select_categorie());