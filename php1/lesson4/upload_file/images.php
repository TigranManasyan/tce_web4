<?php 
	$images = scandir("images");// verdarcnuma trvac directivi mej gtnvox bolor fayleri anunner@
	$images = array_splice($images, 2);///ktrum enq zangvac@, skzbi .-er@ hanelu hamar
	// echo "<pre>";
	// print_r($images);

	echo json_encode($images);
	// echo "hello";

 ?>