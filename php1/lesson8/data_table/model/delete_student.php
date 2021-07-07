<?php 
	require_once "model.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		delete($id);
	}



 ?>