<?php

class Database{
    private const host = "localhost";
    private const user = "root";
    private const password = "";
    private const name = "product";
    protected $conn;
    public function __construct(){
        $this -> conn = mysqli_connect(self::host, self::user, self::password, self::name);
    }
}