<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="login.php" method="post">
		<input type="text" name="login" placeholder="Login"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button>Sign In</button>
	</form>
	<?php 
		session_start();
		if(isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
		}
		unset($_SESSION['msg']);
	 ?>
</body>
</html>