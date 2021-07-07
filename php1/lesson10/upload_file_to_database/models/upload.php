<?php 
	@mkdir("../images");
	$path1 = "../images/" . $_FILES['img']['name'];
	$path = "images/" . $_FILES['img']['name'];

	if(move_uploaded_file($_FILES['img']['tmp_name'], $path1)) {
		require_once "model.php";
		insert_image($path);
		header("location:../index.php");
	} else {
		echo "Faild";
	}
 ?>