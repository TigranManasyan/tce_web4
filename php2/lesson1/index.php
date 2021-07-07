<?php 
// OOP - Object Oriented Programming

// class 
// object

/*class Meqena {
	//popoxakanner ==> property, key kam dasht
	//funkcianer ==> methods
	// tesaneliutyan tiruytner public, private, protected
	public $first_name = "John";
	public function getFirstName() {
		return "Hello";
	}
}

$ob1 = new Meqena;
$ob2 = new Meqena;
echo $ob1 -> first_name . "<br><hr>";

$ob1 ->first_name = "David";//poxum enq ob1-in patkanox first_name key-i arjeq@

echo $ob1 -> first_name . "<br><hr>";
echo $ob2 -> first_name . "<br><hr>";


echo $ob1 -> getFirstName() . "<br><hr>";*/


/*class Person {
	public $first_name = "John";
	private $last_name = "Smith";
	protected $age = 25;
	public function getFullName() {
		return $this -> first_name . " " . $this -> last_name . " " . $this -> age;
	}
}

$person1 = new Person();
// echo $person1 -> first_name . '<br>';
// echo $person1 -> last_name . '<br>';

echo $person1 -> getFullName();*/



/*class Users {
	public $first_name = "";
	public $last_name = "";
	public $age = "";
	public function setValues($first_name, $last_name, $age) {
		$this -> first_name = $first_name;
		$this -> last_name = $last_name;
		$this -> age = $age;
	}
	public function getFullName() {
		return $this -> first_name . " " . $this -> last_name . " " . $this -> age;
	}
}
$us1 = new Users;
$us1 -> setValues("John", "Smith", 30);
echo $us1 -> getFullName();


$us2 = new Users;
$us2 -> setValues("David", "Smith", 40);
echo $us2 -> getFullName();*/



/*class Users {
	public $first_name = "";
	public $last_name = "";
	public $age = "";
	public function __construct($first_name, $last_name, $age) {
		$this -> first_name = $first_name;
		$this -> last_name = $last_name;
		$this -> age = $age;
	}
	public function getFullName() {
		return $this -> first_name . " " . $this -> last_name . " " . $this -> age;
	}
}
$us1 = new Users("John", "Smith", 30); 
echo $us1 -> getFullName();
$us2 = new Users("David", "Smith", 40); 
echo $us2 -> getFullName();*/



class, object, properties, methods, public, private, construct, this, __construct

https://www.php.net/manual/ru/language.oop5.php