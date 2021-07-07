<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Images</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="../controllers/ImagesController.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Select Image:</label>
                    <input type="file" name="img" class="form-control" id="image">
                </div>
                <button class="btn btn-primary">Upload</button>
            </form>
            <hr>
            <button class="btn btn-success" id="show">Show All Images</button>
            <button class="btn btn-primary" id="select-all" style="display:none">Select All</button>
            <button class="btn btn-primary" id="deselect-all" style="display:none">Deselect All</button>
            <button class="btn btn-danger" id="delete-all" style="display:none">Delete Selected</button>
            <div id="images"></div>
        </div>
    </body>
</html>