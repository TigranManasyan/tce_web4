<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../css/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="../../..js/main.js"></script>
</head>
<body>
	<div class="container mt-5">
		<form action="../../../../controllers/AdminsConroller.php" class="row g-3" method="post">
			<div class="col-md-6">
			    <label for="inputEmail4" class="form-label">Email</label>
			    <input type="email" class="form-control" id="inputEmail4">
			</div>
			<div class="col-md-6">
			    <label for="inputPassword4" class="form-label">Password</label>
			    <input type="password" class="form-control" id="inputPassword4">
			</div>
			<button name="login" class="btn w-25 btn-primary">Sign In</button>
		</form>
	</div>
	
</body>
</html>