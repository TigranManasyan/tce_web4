<?php 
	/*class User {
		public function sayHello() {
			echo "Hello ";
		}
	}
	trait sayWorld {
		public function sayHello() {
			parent::sayHello();
			echo "world";
		}
	}
	class Child extends User {
		use sayWorld;
	}
	$ob = new Child;
	$ob -> sayHello();*/

	/*trait sayHello {
		public function sayHello() {
			echo "Hello ";
		}
	}
	trait sayWorld {
		public function sayWorld() {
			echo "world!";
		}
	}

	class User {
		use sayHello, sayWorld;
	}

	$us = new User;
	$us->sayHello();
	$us->sayWorld();*/



	// Type Hinting

	/*function f(int $x) {
		return $x;
	}

	echo f(5);*/

	// Type casting

/*	$x = 4.4;
	echo gettype($x) . " -> " . $x . "<br>";
	$x = (int)$x;
	echo gettype($x) . " -> " . $x;*/


	// Exceptions -> bacarutyunner, bug-er

/*	$x = -5;

	function f($a) {
		if($a > 0) {
			return true;
		} else {
			throw new Exception("tiv@ kam 0 e kam bacasakan");

		}
	} 

	try {
		echo f($x);
	} catch (Exception $error) {
		echo $error -> getMessage();
	}*/