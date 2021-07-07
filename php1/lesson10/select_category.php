<?php 

$conn = mysqli_connect("localhost", "root", "", "edu");
function select_categories() {
    global $conn;
    $sql = "SELECT * FROM `categories`";
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
$result = select_categories();
echo json_encode($result);
?>