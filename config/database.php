<?php


class Database {
    
    private $host = "localhost";
    private $dbname =  "biblioschool_db";
    private $username =  "root";
    private $password = "123123321321@instance";

    private PDO $connection;

    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname:$this->dbname;charset=utf8mb4";
        $this->connection = new PDO($dsn, $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    public function getConnection(){
        return $this->connection;
    }

}






?>