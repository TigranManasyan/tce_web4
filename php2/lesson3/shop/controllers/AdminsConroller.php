<?php 
	require_once "../models/AdminModel.php";

	if(isset($_GET['action']) && $_GET['action'] === 'login') {
		$admin = new AdminModel;

		if($admin->check_in($_POST['login'], $_POST['password'])) {
			header("location:../vies/pages/admin/dashboard/admin_home.php");
		} else {
			echo "Faild";
		}

	}


 ?>