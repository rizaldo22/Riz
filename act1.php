<?php

    abstract class Database 
    {

        public $conn;
        public $server = "abstract";
        public $user = "root";
        public $pass = "";
        public $dbname = "riz";
        
        public function __construct($conn)
        {
            $this->conn = new mysqli($this->server, $this->user, $this->pass);
            $create = "CREATE DATABASE IF NOT EXISTS $this->dbname";
            var_dump($this->conn);
        }

        abstract public function insert() : string;
        
    }

    abstract class Model extends Database
    {
        public function insert() : string
        {
            return "This is original";
        }
    }
    
?>