<?php


class Database {
  private const DATABASE_HOST = "localhost";
  private const DATABASE_USER = "root";
  private const DATABASE_PASSWORD = "";
  private const DATABASE_NAME = "edu";  

  protected $conn;
  public function __construct(){
      $this-> conn = mysqli_connect(self::DATABASE_HOST, self::DATABASE_USER, self::DATABASE_PASSWORD, self:: DATABASE_NAME);
  }
  
}




?>