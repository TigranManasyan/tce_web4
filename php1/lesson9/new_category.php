<?php 
$conn = mysqli_connect("localhost", "root", "", "edu");
function insert($categ_name) {
    global $conn;
    $sql = "INSERT INTO `categories` (`name`) VALUES ('$categ_name')";
    mysqli_query($conn, $sql); 
}
if(isset($_POST['categ'])) {
    insert($_POST['categ']);
}


?>