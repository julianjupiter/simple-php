<?php
class HomeController {
	public function index() {
		$page = 'home';
		include_once __DIR__ . '/../../view/templates/home/index.php';
	}
}
