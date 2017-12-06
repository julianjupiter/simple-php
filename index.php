<?php
$httpMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

if ($httpMethod == 'GET') {
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	$action = isset($_GET['action']) ? $_GET['action'] : 'index';
	
	switch($page) {
		case 'auth':
			include_once __DIR__ .'/src/controller/AuthController.php';
			$auth = new AuthController();
			if ($action == 'login') {
				$auth->login();	
			}
			
			break;
			
		case 'phonebook':
			include_once __DIR__ .'/src/controller/PhonebookController.php';
			$phonebook = new PhonebookController();
			
			if ($action == 'index') {
				$phonebook->index();	
			} else if ($action == 'add') {
				$phonebook->add();	
			} else if ($action == 'view') {
				$id = isset($_GET['id']) ? $_GET['id'] : '';
				$phonebook->view($id);	
			} else {
				$phonebook->index();	
			}
			
			break;
			
		default:		
			include_once __DIR__ .'/src/controller/HomeController.php';
			$home = new HomeController();
			$home->index();
			break;
	}
}

if ($httpMethod == 'POST') {
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	$action = isset($_GET['action']) ? $_GET['action'] : 'index';
	
	switch($page) {
		case 'phonebook':
			include_once __DIR__ .'/src/controller/PhonebookController.php';
			$phonebook = new PhonebookController();
			
			if ($action == 'add') {
				$phonebook->add();	
			}
	}
}


