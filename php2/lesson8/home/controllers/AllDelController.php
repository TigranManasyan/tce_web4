<?php
    include_once "../models/ImageModel.php";

    if(isset($_GET['arrDel'])){
        $arrDel = json_decode($_GET['arrDel']);
        $del = new Image;
        $del -> del_images($arrDel);
    }