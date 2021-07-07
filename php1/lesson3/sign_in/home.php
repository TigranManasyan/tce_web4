<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		session_start();
		$error_msg = '<div class="msg" style="background-color: red;padding:15px;">
		<p style="color:white">Sign in please</p>
		</div>';
		if(!isset($_SESSION['user'])) {
			$_SESSION['msg'] = $error_msg;
			header("location:index.php");
		} else {
			echo "<h1>Welcome " . $_SESSION['user'] . "</h1>";
		}
	 ?>
	 <a href="logout.php"> Log out </a>
</body>
</html>