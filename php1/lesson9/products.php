<?php 


// CREATE TABLE categories (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci 
// )

// CREATE TABLE products (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
//     price INT NOT NULL,
//     description VARCHAR(255)  CHARACTER SET utf8 COLLATE utf8_general_ci,
//     img VARCHAR(100)  CHARACTER SET utf8 COLLATE utf8_general_ci,
//     categ_id INT,
//     FOREIGN KEY(categ_id) REFERENCES categories(id)
// )

// INSERT INTO `categories` (`name`) VALUES ('Notebook'), ('Netbook'), ('PC'), ('Mather board'), ('Keyboard'), ("Mouse"), ("Dectop");

// INSERT INTO `products` (`name`, `price`, `description`, `img`, `categ_id`) VALUES 
// ('Asus', 185000, "SSD:500GB, RAM: 4GB, Color: Black", "images/prod1.jpg", 1), 
// ('Asus', 255000, "SSD:500GB, RAM: 16GB, Color: Silver","images/prod2.jpg", 1), 
// ('Dell', 180000, "SSD:500GB, RAM: 8GB, Color: Black", "images/prod3.jpg", 3), 
// ('Intell', 55000, "DDR3", "images/prod4.jpg", 4), 
// ('Genius', 4500, "USB",  "images/prod5.jpg", 6), 
// ("Genius", 7500, "Black USB", "images/prod6.jpg", 6), 
// ("LG", 79000, "Black 17 duym", "images/prod7.jpg", 7);

// SELECT products.name, products.price, categories.name FROM `products` INNER JOIN `categories` ON products.categ_id = categories.id;

$conn = mysqli_connect("localhost", "root", "", "edu");
function select() {
    global $conn;
    $sql = "SELECT products.id, products.product_name, products.price, products.description, products.img, categories.name FROM `products` INNER JOIN `categories` ON products.categ_id = categories.id";
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
$result = select();
echo json_encode($result);
?>