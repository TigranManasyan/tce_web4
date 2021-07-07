<?php
    include_once "../models/ImageModel.php";

    if(isset($_GET['del_id'])){
        $del_id = $_GET['del_id'];
        $del = new Image;
        $del -> del_image($del_id);
    }