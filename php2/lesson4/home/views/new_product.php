<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="../controllers/add_product.php" method="get" enctype="multipart/from-data">
<input type="text" name="name" placeholder="Name"><br>
<input type="text" name="price" placeholder="Price"><br>
<input type="text" name="description" placeholder="Descriptino"><br>
<input type="file" name="image">
<button>Send</button>
</form>
    

</body>
</html>