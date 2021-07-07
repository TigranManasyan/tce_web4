<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars_sale";

$conn = mysqli_connect($servername, $username, $password, $dbname);

/* if($conn){
    echo "Connected";
}else{
    echo "Faild!" . mysqli_connect_error($conn);
    die;
} */

//Create Tables

function create_table($carname){
    global $conn;
    $sql = "CREATE TABLE $carname (
        id INT AUTO_INCREMENT PRIMARY KEY,
        model VARCHAR(20),
        gin INT,
        taretiv INT(4),
        vazq INT
    )";
    mysqli_query($conn, $sql);
}
create_table("mercedes_benz");
create_table("bmw");
create_table("toyota");
create_table("nissan");