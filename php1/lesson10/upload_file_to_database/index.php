<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload file to database</title>
	<link rel="stylesheet" href="css/style.css">

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</head>
<body>
	
	<form action="models/upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="img">
		<button>Upload</button>
	</form>
	<hr>
	<div id="images">
		
	</div>
</body>
</html>