<?php
    require_once "../config/Database.php";

    class Image extends Database{
        public function uploadImage($img_url){
            $sql = "INSERT INTO `img` (`path`) VALUES ('$img_url')";
            $this -> sql_db -> query($sql);
        }

        public function showImages(){
            $sql = "SELECT * FROM `img`";
            $result = $this -> sql_db -> query($sql);
            return $result -> fetch_all(MYSQLI_ASSOC);
        }

        public function checkImage($id, $check){
            $sql = "UPDATE `img` SET `checked` = $check WHERE `id` = '$id'";
            $this -> sql_db -> query($sql);
        }

        public function deleteSelectedImages(){
            $sql = "DELETE FROM `img` WHERE `checked` = 1";
            $this -> sql_db -> query($sql);
        }

        public function delete($id){
            $sql = "DELETE FROM `img` WHERE `id` = '$id'";
            $this -> sql_db -> query($sql);
        }

        public function selectAll(){
            $sql = "UPDATE `img` SET `checked` = 1";
            $this -> sql_db -> query($sql);
        }

        public function deselectAll(){
            $sql = "UPDATE `img` SET `checked` = 0";
            $this -> sql_db -> query($sql);
        }
    }
?>