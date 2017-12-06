<?php
require_once __DIR__ . '/../util/Database.php';

class Phonebook {
	private $connection;
	
	public function __construct() {
		$database = new Database();
        $this->connection = $database->connect(); 
	}
	
	public function findAll() {
		$query = 'SELECT * FROM phonebook';
		$statement = $this->connection->prepare($query);
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function save($data) {
		$query = 'INSERT INTO phonebook(name, number) VALUES(:name, :number)';
		$statement = $this->connection->prepare($query);
		$data = [
			':name' => $data['name'], 
			':number' => $data['number']
		];
		$statement->execute($data);

		return $this->connection->lastInsertId();
	}
	
	public function findContactById($id) {
		$query = 'SELECT * FROM phonebook WHERE id = :id';
		$statement = $this->connection->prepare($query);
		$statement->execute([':id' => $id]);

		return $statement->fetch();
	}
}