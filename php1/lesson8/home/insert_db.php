<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cars_sale";

    // $conn = mysqli_connect($servername, $username, $password, $dbname);

/* if($conn){
    echo "Connected";
}else{
    echo "Faild!" . mysqli_connect_error($conn);
    die;
} */

//Add values in db
    function insert_data($car_name, $model, $gin, $taretiv, $vazq){
        global $conn;
        $sql = "INSERT INTO `$car_name` VALUES (NULL, '$model', '$gin', '$taretiv', '$vazq')";
        mysqli_query($conn,$sql);
    }

    session_start();
//Get input values 
    if(isset($_POST["cars"]) && isset($_POST["model"]) && isset($_POST["gin"]) && isset($_POST["taretiv"]) && isset($_POST["vazq"])){
        $car_name = $_POST["cars"];
        $model = $_POST["model"];
        $gin = $_POST["gin"];
        $taretiv = $_POST["taretiv"];
        $vazq = $_POST["vazq"];
        echo $car_name;
        insert_data($car_name, $model, $gin, $taretiv, $vazq);
        $_SESSION["msg"] = "<p style='color:red'>Dzer tvyal@ hajoxutyamb mutqagrvats e</p>";
      
    } else{
        $_SESSION["msg"] = "<p style='color:red'>Dzer tvyal@ chi mutqagrvel</p>";
   
    }
  header("location:index.php");