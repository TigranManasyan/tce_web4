<?php 
	require_once "./../config/database.php";
	session_start();
	class User extends Database {
		public function register ($firstname, $lastname, $avatar,$email,$password) {
			$password = md5($password);

			$result = $this -> sql_db -> query("INSERT INTO `users` (`first_name`, `last_name`, `avatar`, `email`, `password`) VALUES ('$firstname', '$lastname', '$avatar', '$email', '$password')");
			if($result) {
				$_SESSION['success'] = 'User registered';
				header("location:./../views/auth/Login.php");
			} else {
				$_SESSION['error'] = 'Faild';
				header("location:./../index.php");
			}
		}

		public function login($email, $password) {
			$password = md5($password);
			$result = $this -> sql_db -> query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
				if($result -> num_rows > 0) {
					if($rem) {
						setcookie('user', json_encode($result -> fetch_all(MYSQLI_ASSOC)), time() + 3600, '/');
					}
					$_SESSION['user'] = $result -> fetch_all(MYSQLI_ASSOC);
					header("location:./../views/dashboard/home.php");
				} else {
					$_SESSION['error'] = 'Incorrect login or password!';
					header("location:./../index.php"); 
				}
		}
	}


	// $user = new User;
	// $user-> register("John", "Smith", "avatar1.jpg", "john@mail.ru", "1234");
	// echo $user-> login("john@mail.ru", md5("1234"));

 ?>