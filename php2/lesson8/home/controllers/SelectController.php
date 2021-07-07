<?php
    require_once "../models/ImageModel.php";

    $select = new Image;
    echo json_encode($select -> select_image());