<?php 
class Database {
	protected $db;
	public function __construct() {
		$this -> db = new mysqli('localhost', 'root', '', 'shop');
	}
}


 ?>