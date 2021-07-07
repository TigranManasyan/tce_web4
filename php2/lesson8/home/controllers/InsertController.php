<?php
    require_once "../models/ImageModel.php";
    @mkdir("../images");
    $path_db = "images/" . $_FILES['img']['name'];
    $path_move = "../images/" . $_FILES['img']['name'];

    $insert = new Image;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $path_move)) {
		  $insert -> insert_image($path_db);
		  header("location:../");
	  } 
    else {
		  echo "Faild";
	  }

    