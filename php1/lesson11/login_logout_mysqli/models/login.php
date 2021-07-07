<?php 
	require_once "model.php";

	$login = $password = "";

	if(isset($_POST['email']) && isset($_POST['password'])) {
		$login = $_POST['email'];
		$password = $_POST['password'];
		// echo $login . " " . $password;


		if(sign_in($login, $password)) {
			if($_POST['check']) {
				setcookie("user", $login, time() + (3600 * 2), "/");
			}
			

			header("location:../pages/home.php");
		} else {
			header("location:../index.php");
		}


	}


	mysqli_close($conn);




	


 ?>