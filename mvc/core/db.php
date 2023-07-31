<?php
class DB{
    public $conn;
    public $host = "localhost";
    public $uname = "root";
    public $upass = "";
    public $db_name = "mvclayout";

    function __construct(){
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->db_name", 
                $this->uname, 
                $this->upass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          
    }
}

?>