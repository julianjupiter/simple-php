<?php
class Database {
    private $connection;
    
    public function __construct() {
        try {
            $dns = 'mysql:host=localhost;port=3306;dbname=simplephp;char-set=utf-8'; 
            $this->connection = new PDO($dns, 'root', 'admin');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function connect() {
        return $this->connection;
    }
}
