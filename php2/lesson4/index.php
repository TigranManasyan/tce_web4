<?php 
	/*abstract class Users {
		abstract public function welcome();
	}
	

	class Guests extends Users {
		public function q() {
			echo "Hi";
		}
	}

	$object = new Guests;
	$object -> q();*/



/*$sql_db = new mysqli("localhost", "root", "", "edu");

if($sql_db -> connect_error) {
	die($sql_db -> connect_error);
} else {
	echo "Connected";
}

$categories = $sql_db -> query("SELECT * FROM `categories`");
$result = $categories -> fetch_all(MYSQLI_ASSOC);

echo "<pre>";
print_r($result); */	

class Database {
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASSWORD = '';
	const DB_NAME = 'edu';
	protected $sql_db;
	public function __construct() {
		$this -> sql_db = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
	}
}

class Category extends Database {
	public function add_category($name) {
		if(strlen($name) > 4 && strlen($name) < 15) {
			$this->sql_db -> query("INSERT INTO `categories` VALUES(null, '$name')");
		}
	}

	public function getCategories() {
		$item = "";
		$categories = $this -> sql_db -> query("SELECT * FROM `categories`");
		$result = $categories -> fetch_all(MYSQLI_ASSOC);
		for($i = 0; $i < count($result); $i++) {
			$item .= "<option value='" . $result[$i]['id'] . "'>" . $result[$i]['name'] . "</option>";
 		}
 		return $item;
	}
}

$categ = new Category;
echo "<select>";
	echo $categ -> getCategories();
echo "</select>"; 