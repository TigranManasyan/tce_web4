<?php 
	if (isset($_COOKIE['user'])) {
		echo "Hi " . $_COOKIE['user'] . ". How are you?";
	} else {
		echo "Hi";
	}


 ?>

 <a href="../models/logout.php"> Logout </a>