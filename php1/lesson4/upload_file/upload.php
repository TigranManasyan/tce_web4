<?php 
session_start();
// $_FILES-superglobal zangvac@ ashxatum e upload exac fayleri het
	// echo "<pre>";
	// print_r($_FILES['image']['name']);
	
	// file upload
	@mkdir("images");
	echo "<pre>";
	print_r($_FILES);
	$img_name = $_FILES['image']['name'];
	$img_tmp = $_FILES['image']['tmp_name']; 
	$uploaded = move_uploaded_file($img_tmp, "images/" . $img_name);
	if($uploaded) {
		$_SESSION['msg'] = "<p style='color:green'>Images successfuly uploaded!</p>";
	} else {
		$_SESSION['msg'] = "<p style='color:red'> Faild! </p>";
	}
	header("location:index.php");
 ?>