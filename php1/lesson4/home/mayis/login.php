<?php 
session_start();
$users = [
    ["name" => "Elon", "surname" => "Musk", "e-mail" => "elonmusk@tesla.com", "password" => "Tesla", "photo" => "images/musk.jpg"],
    ["name" => "Jeff", "surname" => "Bezos", "e-mail" => "jeffbezos@amazon.com", "password" => "Amazon", "photo" => "images/jeff.jpeg"],
    ["name" => "Mark", "surname" => "Zuckerberg", "e-mail" => "mark@fb.com", "password" => "Facebook", "photo" => "images/mark.jpg"],
    ["name" => "Bill", "surname" => "Gates", "e-mail" => "billgates@microsoft.com", "password" => "Microsoft", "photo" => "images/gates.jpg"]
];

foreach($users as $value){
    if($_POST["uname"]==$value["e-mail"] && $_POST["pass"]==$value["password"]){
        $_SESSION["user_name"] = $value["name"];
        $_SESSION["user_surname"] = $value["surname"];
        $_SESSION["user_photo"] = $value["photo"];
        header("location:my_page.php");
        break;
    }else{
        $_SESSION["notif"] = "<br><p style='font-size:18px; color:darkred'>Incorrect Username or Password</p>";
        header("location:index.php");
    }
}