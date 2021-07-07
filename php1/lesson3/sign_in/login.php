<?php 
	session_start();
	$error_msg = '<div class="msg" style="background-color: red;padding:15px;">
		<p style="color:white">Incorrect login or password</p>
	</div>';
	$login = $password = $msg = "";
	function check_in($login, $password) {
		if($login == "asd@mail.ru" && $password == "asd123") {
			return true; 
		} else {
			return false;
		}
	}

	if(isset($_POST['login']) && isset($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		if(check_in($login, $password)) {
			$_SESSION['user'] = $login;
			header("location:home.php");
		} else {
			$_SESSION['msg'] = $error_msg;
			header("location:index.php");
		}
	}
	// session_destroy();
 ?>