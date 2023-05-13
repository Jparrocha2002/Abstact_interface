<?php

abstract class Database 
{
    private $conn;
    public $dbname = "parrocha";

    public function connect()
    {
        $this->conn = new mysqli("localhost","root","");
        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $this->conn = new mysqli("localhost","root","", $this->dbname);
    }
}
$connect = new Database();
$connect->connect();
?>