<?php 
    require_once "../config/Database.php";
    
    class Categorie extends Database{
        public function select_categorie(){
            $sql = $this -> sql_db -> query("SELECT * FROM `categories`");
            $res = $sql -> fetch_all(MYSQLI_ASSOC);
            return $res;
        }
    }