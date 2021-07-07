<?php 
	 class Database {
	 	const DB_HOST = 'localhost';
	 	const DB_USER = 'root';
	 	const DB_PASSWORD = '';
	 	const DB_NAME = 'tm_shop';	
	 	protected $conn; 
	 	public function __construct() {
	 		$this -> conn = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
	 	} 
	 }



