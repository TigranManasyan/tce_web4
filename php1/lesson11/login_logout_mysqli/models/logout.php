<?php 
	setcookie("user", "", time() - 1, "/");
	session_destroy();
	header("location:../index.php");
 ?>