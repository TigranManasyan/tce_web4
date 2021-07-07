<?php 
    require_once "../config/Database.php";
    
    class Product extends Database{
        public function select_prod($cat_id){
            $sql = $this -> sql_db -> query("SELECT * FROM `products` WHERE `categ_id` = '$cat_id'");
            $res = $sql -> fetch_all(MYSQLI_ASSOC);
            if(empty($res)){
                $res = "Aydpisi product goyutyun chuni";
            }
            return $res;
        }
    }