<?php
class PhonebookController {
	private $phonebook;
	
	public function __construct() {
		include_once __DIR__ . '/../model/Phonebook.php';
		$this->phonebook = new Phonebook();
	}
	
	public function index() {
		$contacts = $this->phonebook->findAll();
		$page = 'phonebook';
		include_once __DIR__ . '/../../view/templates/phonebook/index.php';
	}
	
	public function add() {
		$httpMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
		
		if ($httpMethod == 'GET') {
			$page = 'phonebook';
			include_once __DIR__ . '/../../view/templates/phonebook/add.php';
		}
		
		if ($httpMethod == 'POST') {
			$name = isset($_POST['name']) ? $_POST['name'] : NULL;
			$number = isset($_POST['number']) ? $_POST['number'] : NULL;
			
			if ($name != '' && $number != '') {
				$data = ['name' => $name, 'number' => $number];
				
				$added = $this->phonebook->save($data);
				if ($added > 0) {
					header('Location: ' . '/index?page=phonebook');
				}
			}
		}
	}
	public function view($id) {
		$contact = $this->phonebook->findContactById($id);
		$page = 'phonebook';
		include_once __DIR__ . '/../../view/templates/phonebook/view.php';
    }	
}
