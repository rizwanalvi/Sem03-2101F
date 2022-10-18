<?php
class Database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "bookdb";
    protected $connection;
    function __construct(){
        $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        
    }
}