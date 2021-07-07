<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sale</title>
</head>
<body>
    <form action="insert_db.php" method="post">
        <label for="cars">Choose a car:</label>
        <select name="cars" id="cars">
            <option disabled selected>--Select care--</option>
            <option value="mercedes_benz">Mercedes Benz</option>
            <option value="bmw">Bmw</option>
            <option value="toyota">Toyota</option>
            <option value="nissan">Nissan</option>
        </select><br><br>
        <input type="text" name="model" placeholder="Model"><br><br>
        <input type="number" name="gin" placeholder="Gin"><br><br>
        <input type="number" name="taretiv" placeholder="Taretiv"><br><br>
        <input type="number" name="vazq" placeholder="Vazq"><br><br>
        <button>Submit</button>
    </form>
    <?php 
        session_start();
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
        }
        unset($_SESSION["msg"]);
        // session_destroy();
    ?>
</body>
</html>