<?php 
	require_once "model.php";

	$result = select_images();

	echo json_encode($result);



 ?>