<?php 
	/*final class A {
		final public function hello() {
			return "Hi class A";
		}
	}
	class B extends A {
		public function hello() {
			return "Hi class B";
 		}
	}
	$a = new A;
	$b = new B;
	echo $a -> hello();
	echo $b -> hello();*/




	/*class Users {
		public $first_name;
		public $last_name;
		public $age;
		public function __construct($first_name, $last_name, $age) {
			$this -> first_name = $first_name;
			$this -> last_name = $last_name;
			$this -> age = $age;
		}
	}

	class Admins extends Users {
		public $email;
		public function __construct($first_name, $last_name, $age, $email) {
			parent::__construct($first_name, $last_name, $age);
			$this -> email = $email;
		}
	}

	class Guests extends Users {
		public $address;
		public function __construct($first_name, $last_name, $age, $address) {
			parent::__construct($first_name, $last_name, $age);
			$this -> address = $address;
		}
	}

	$admin1 = new Admins("John ", "Smith ", 24, " john@mail.ru");
	echo $admin1 -> first_name;
	echo $admin1 -> last_name;
	echo $admin1 -> age;
	echo $admin1 -> email;*/


	/*class Users {
		public $first_name;
		public $last_name;
		public $age;
		public function __construct($first_name, $last_name, $age) {
			$this -> first_name = $first_name;
			$this -> last_name = $last_name;
			$this -> age = $age;
		}

		public function __destruct() {

		}
	}*/



	/*class Users {
		public $users = [];
		public function __set($key, $value) {
			$this -> users[$key] = $value; 
		}	
		public function __get($key) {
			if(array_key_exists($key, $this -> users)) {
				return $this -> users;
			}
		} 	
	}

	$user = new Users;
	$user -> id = 1;      
	$user -> first_name = 'John';
	$user -> last_name = 'Smith';
	$user -> skils = ['HTML', 'CSS', 'JS'];
	echo "<pre>";
		print_r($user);
	echo "</pre>";*/



	// Interface

	/*interface Methods {
		public function hello($username);
		public function __construct();
	}
	class Users implements Methods {
		public function __construct() {
			echo "Obejct created";
		}
		public function hello($username) {
			return "Hi $username";
		}
	}
	$us1 = new Users;
	echo $us1-> hello("John Smith");*/



	// __destruct, __set, __get, parent, interface, final methods and classes



index.php



config -> Database.php
models -> UserModel.php, CategoryModel.php, ProductModel.php
views 
	js -> main.js
	css -> style.css
	pages  
		admin 
			auth -> Login.php, Register.php, Logout.php
			dashboard -> admin_home.php, categories.php, products.php
		users -> home.php, products.php

controllers -> UsersController.php, CategoriesController.php, ProductssController.php