<?php 
	if(isset($_COOKIE['user'])) {
		header("location:pages/home.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form action="models/login.php" method="POST">
		<input type="email" name="email" placeholder="Login"> <br><br>
		<input type="password" name="password" placeholder="Password"> <br><br>
		<label>Remember: 
			<input type="checkbox" name="check">
		</label>
		
		<button>Sign In</button>
	</form>
</body>
</html>