<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Images</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <form action="controllers/InsertController.php" method="post" enctype="multipart/form-data" class="mb-2">
                <div class="my-2">
                    <label class="form-label"><input class="form-control" type="file" name="img"></label>
                </div>
                <button class="btn btn-primary upload" type="submit">Upload</button>
            </form>
            <button class="btn btn-info show">Show Images</button>
            <button class="btn btn-danger hidden-btn">Delete Images</button>
            <div class="show-images mt-5 d-flex align-items-center">

            </div>
        </div>
    </body>
</html>