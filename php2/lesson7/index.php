<!-- PDO - PHP Database Object -->

<?php 
	/*class Database {
		protected $pdo;
		public function __construct() {
			try{
				$this -> pdo = new PDO("mysql:host=localhost;dbname=edu", 'root', '');
				echo "connected";
			} catch(PDOException $error) {
				die($error -> getMessage());
			}
		}

		public function select() {
			// $result = $this -> pdo -> query("SELECT * FROM `students`");
			$result = $this -> pdo -> prepare("SELECT * FROM `students`");
			$result -> execute();
			$students = $result -> fetchAll();
			echo "<pre>";
			// print_r($result -> fetch(PDO::FETCH_ASSOC));
			print_r($students);
		}

		public function insert() {
			$this -> pdo -> query("INSERT INTO `students` VALUES(Null, 'John', 'Smith', 20, 'Yerevan') ");
		}
		public function delete($id) {
			$this -> pdo -> query("DELETE FROM `students` WHERE `id` = '$id'" );
		}
		public function update($id, $first_name, $last_name, $age, $address) {
			$this -> pdo -> query("UPDATE `students` SET `firstname` = '$first_name', `lastname` = '$last_name', `age` = '$age', `address` = '$address' WHERE `id` = '$id'");
		}
	}
	
	$n = new Database;

	$n -> update(10, "Arman", "Hovsepyan", 30, "Abovyan"); */




	class Database {
		const DB_HOST = 'localhost';
		const DB_USER = 'root';
		const DB_PASSWORD = '';
		const DB_NAME = 'edu';
		protected $pdo;
		public function __construct() {
			try {
				$this -> pdo = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASSWORD);
				$this -> pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this -> pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			} catch(PDOException $error) {
				die($error -> getMessage());
			}
		}
		public function select() {
			$sql = "SELECT * FROM `students`";
			$students = $this -> pdo -> query($sql);
			/*echo "<pre>";
			print_r($students -> fetchAll());*/
			return json_encode($students -> fetchAll());
		}

		public function countDeletedRows() {

			return $this -> pdo -> exec("DELETE FROM `users`");
		}
	}
	$p = new Database;
	// echo $p-> select();
	echo $p-> countDeletedRows();