<?php
require_once __DIR__ . '/../util/Database.php';

class Phonebook {
	private $connection;
	
	public function __construct() {
		$db = new Database();
        	$this->connection = $db->connect(); 
	}
	
	public function findAll() {
		$sql = 'SELECT * FROM phonebook';
		$statement = $this->connection->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function save($data) {
		$sql = 'INSERT INTO phonebook(name, number) VALUES(:name, :number)';
		$statement = $this->connection->prepare($sql);
		$data = [':name' => $data['name'], ':number' => $data['number']];
		$statement->execute($data);
		return $this->connection->lastInsertId();
	}
	
	public function findContactById($id) {
		$sql = 'SELECT * FROM phonebook WHERE id = :id';
		$statement = $this->connection->prepare($sql);
		$statement->execute([':id' => $id]);
		return $statement->fetch();
	}
}
