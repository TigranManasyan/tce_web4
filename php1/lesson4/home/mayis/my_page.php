<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
</head>
<body>
    <?php 
    session_start(); 
    if(!isset($_SESSION["user_name"])){
        $_SESSION["notif"] = "<br><p style='font-size:18px; color:darkred'>Please Sign In</p>";
        header("location:index.php");
    }else{
        echo "<h2>Welcome, ".$_SESSION["user_name"]." ".$_SESSION["user_surname"]." !</h2>";
        echo "<img src=".$_SESSION['user_photo']." width='300px'><br>";
    }
    ?>
    <a href="logout.php" style="text-decoration:none; color:darkred; font-size:20px;">Log Out</a>
</body>
</html>