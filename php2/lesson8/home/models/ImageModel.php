<?php 
	require_once "../config/Database.php";

	class Image extends Database{
        public function insert_image($path){
            $this -> sql_db -> query("INSERT INTO `images` VALUES(null, '$path', NOW())");
        }
		public function select_image(){
            $sql = $this -> sql_db -> query("SELECT * FROM `images`");
            $res = $sql -> fetch_all(MYSQLI_ASSOC);
            if(empty($res)){
                $res = "Նկարներ չեն գտնվել";
            }
            return $res;
        }
        public function del_image($id){
            $this -> sql_db -> query("DELETE FROM `images` WHERE `id` = '$id'");
        }
        public function del_images($arrDel){
            foreach($arrDel as $id) {
                $this -> sql_db -> query("DELETE FROM `images` WHERE `id` = '$id'");
            }
        }
    }