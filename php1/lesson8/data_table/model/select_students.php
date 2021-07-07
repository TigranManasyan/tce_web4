<?php 
	require_once "model.php";

	$students = select();
	echo json_encode($students);
	/*echo "<pre>";
		print_r($students);
	echo "</pre>";*/


 ?>