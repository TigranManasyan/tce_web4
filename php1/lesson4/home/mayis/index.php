<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="uname" placeholder="Username"><br><br>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <button>Sign In</button>
    </form>
    <?php 
    session_start();
    if(isset($_SESSION["notif"])){
        echo $_SESSION["notif"];
    }
    session_destroy();
    ?>
</body>
</html>