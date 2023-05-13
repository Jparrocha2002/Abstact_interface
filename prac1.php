<?php

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "parrocha";

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
    }
    abstract public function db(): string;
}
class Dbname extends Database
{
    public function db(): string
    {
        $connect = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($connect);
    }
}
$test = new Dbname();
$test->db();
?>