<?php 


// OOP Object Oriented Programing

// class + object

/*class Users {
	// popoxakanner -> property, key, dasht
	//funkcianer -> metodner
	// bac - public
	// private - pak
	// protected - pashtpanvac

	private $first_name = "John";
	public $last_name = "Smith";

	public function getName() {
		return $this-> first_name;
	}
}

$us1 = new Users;
// echo $us1 -> first_name . "<br>";
// echo $us1 -> last_name;
echo $us1->getName();*/




// Constants

/*class Users {
	public const USER = "John";
	public function getUser() {
		return self::USER;
	}	
}

// $us1 = new Users;
// echo $us1 -> getUser();
echo Users::USER;*/


// Static properties and methods

/*class Users {
	static public $user = "John Smith";
	static public function welcome() {
		return "Welcome " . self::$user;
	}
}

// echo Users::$user;
echo Users::welcome();*/


// Jarangum Exteriance

/*class Cars {
	public $model;
	public $price;
	public function __construct($model, $price) {
		$this -> model = $model;
		$this -> price = $price;
	}
	public function getCar() {
		return $this-> model . " " . $this -> price . '<br>';
	}
}
class Mercedes extends Cars { }
class BMW extends Cars { }
class Ferari extends Cars { }
$car1 = new Mercedes("S-Class", 8000);
$car2 = new BMW("E-Class", 4000);
$car3 = new Ferari("E-Class", 4000);
echo $car1 -> getCar();
echo $car2 -> getCar();*/


/*class Cars {
	private $model;
	public $price;
	public function __construct($model, $price) {
		$this -> model = $model;
		$this -> price = $price;
	}
	public function getCar() {
		return $this-> model . " " . $this -> price . '<br>';
	}
}
class Mercedes extends Cars {
	public function getModel() {
		return $this-> model;
	}
 }
$car1 = new Mercedes("S-Class", 8000);
echo $car1 -> getModel();*/


/*class Database {
	private const DATABASE_HOST = 'localhost';
	private const DATABASE_USER = 'root';
	private const DATABASE_PASSWORD = '';
	private const DATABASE_NAME = 'edu';
	protected $conn;
	public function __construct() {
		$this -> conn = mysqli_connect(self::DATABASE_HOST, self::DATABASE_USER,self::DATABASE_PASSWORD,self::DATABASE_NAME);
	}

	public function select($table_name) {
		$sql = "SELECT * FROM $table_name";
		$result = mysqli_query($this->conn, $sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	} 
}


class Products extends Database {
	public function insert_product($name, $price, $desc, $img, $cat_id) {
		$sql = "INSERT INTO `products` VALUES (null, '$name', '$price', '$desc', '$img', '$cat_id')";
		mysqli_query($this->conn, $sql);
	}

	public function update_product($id, $name, $price, $desc, $img, $cat_id) {
		$sql = "UPDATE `products` SET `product_name` = '$name', `price` = '$price', `description` = '$desc', `img` = '$img', `categ_id` = '$cat_id' WHERE `id` = '$id'";
		mysqli_query($this->conn, $sql);
	}

	public function delete_product($id) {
		$sql = "DELETE FROM `products` WHERE `id` = '$id'";
		mysqli_query($this->conn, $sql);
	}

	public function total() {
		$sql = "SELECT SUM(`price`) FROM `products`";
		$result = mysqli_query($this->conn, $sql);
		return mysqli_fetch_all($result);
	}
}  

$prod = new Products;
// $prod->insert_product("HP", 178000, "SSD 500GB, RAM 16GB", "images/img10.jpg", 2);
// $prod->update_product(1, "HP", 178000, "SSD 500GB, RAM 16GB", "images/img1.jpg", 2);
// $prod->delete_product(1);

// echo json_encode($prod->select_products());

// $total = $prod->total();
//  echo $total[0][0];

echo json_encode($prod->select('students'));*/







