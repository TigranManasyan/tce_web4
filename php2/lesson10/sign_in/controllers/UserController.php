<?php 
	require_once "./../models/User.php";
	if(isset($_POST['action'])) {
		$action = $_POST['action'];
	}
 
	if($action == 'register') {
		if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_FILES['avatar']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['rep_password'])) {
			$fn = trim($_POST['first_name']);
			$ln = trim($_POST['last_name']);
			$avatar_name = trim($_FILES['avatar']['name']);
			$avatar_path = trim($_FILES['avatar']['tmp_name']);
			$email = trim($_POST['email']);
			$pass1 = trim($_POST['password']);
			$pass2 = trim($_POST['rep_password']);
			@mkdir('../images');
			if($pass1 != $pass2) {
				$_SESSION['error'] = "Faild";
				header("location:../views/auth/Register.php");
			} else {
				$upload_avatar = move_uploaded_file($avatar_path, "../images/" . $avatar_name);
				if($upload_avatar) {
					$user = new User;
					$user -> register($fn, $ln,  $avatar_name, $email, $pass1);
				} else {
					$_SESSION['error'] = "Upload failed";
					header("location:../views/auth/Register.php");
				}
			}
		}

	} else if($action == 'login') {
		$user = new User;
		$user -> login($_POST['email'], $_POST['password'], $_POST['rem']);
	}






 ?>