<?php 
	class Database {
		protected $sql_db;
		public function __construct() {
			$this -> sql_db = new mysqli("localhost", "root", "", "tm");
		}
	}



 ?>