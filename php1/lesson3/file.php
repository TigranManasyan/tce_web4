<?php 
	/*if(isset($_GET['username']) && isset($_GET['password'])) {
		echo $_GET['username'] . " " . md5($_GET['password']);
	}*/

// if(isset($_POST['username']) && isset($_POST['password'])) {
// 	echo $_POST['username'] . " " . md5($_POST['password']);
// }

	/*session_start();
	echo $_SESSION['msg'];*/
if (isset($_GET['msg'])) {
	echo $_GET['msg'];
}
?>