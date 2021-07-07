<?php 
	require_once "../config/Database.php";

	class Image extends Database {
		public function uploadImage($img_url) {
			$sql = "INSERT INTO `images` (`name`) VALUES ('$img_url')";
			$this -> sql_db -> query($sql);
		}

		public function showImages() {
			$sql = "SELECT * FROM `images`";
			$result = $this -> sql_db -> query($sql);
			return $result -> fetch_all(MYSQLI_ASSOC);
		}

		public function checkImage($id, $check) {
			$sql = "UPDATE `images` SET `checked` = $check WHERE `id` = '$id'";
			$this -> sql_db -> query($sql);
			// return $id;
		}

		public function deleteSelectedImages() {
			$sql = "DELETE FROM `images`  WHERE `checked` = true";
			$result = $this -> sql_db -> query($sql);
			if($result) {
				return "Derleted";
			}
		}
	}


 ?>