<?php 
$conn = mysqli_connect("localhost", "root", "", "edu");
function insert($name, $price, $description, $categ_id) {
    global $conn;
    $sql = "INSERT INTO `products` (`product_name`, `price`, `description`, `categ_id`) VALUES ('$name', '$price', '$description', '$categ_id')";
    
    if(mysqli_query($conn, $sql)) {
        return "Inserted";
    }  else {
        return "Faild! ~ " . mysqli_error($conn);
    }
}


if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['categ']) ) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $categ = $_POST['categ'];
    insert($name, $price, $description, $categ);
}


?>