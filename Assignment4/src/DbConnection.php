<?php
namespace Src;

class DbConnection{

    private $host = "localhost"; // your host name  
    private $username = "neeraj"; // your user name  
    private $password = "Neeraj@123"; // your password  
    private $db = "users"; // your database name  
    public  
    function __construct()  
    {  
         $this->conn = new \MySQLi($this->host, $this->username, $this->password, $this->db);
         if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } 
    } 
    function getData($table){
            $sql = "SELECT * FROM ".$table;          
            $sql = $this->conn->query($sql);
         //   $sql = $sql->fetch_assoc();
            while($row = mysqli_fetch_array($sql))
            {
             echo $row['username']."  ". $row['email'].PHP_EOL;
            }
    }
    function insertData($table, $columns, $values){
            $sql = "INSERT INTO ".$table." ".$columns." VALUES ".$values;        
            $sql = $this->conn->query($sql);
            if($sql == true){
                return $sql;
            }else{
                return false;
            }
        }
    }

