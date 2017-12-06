<?php
class AuthController {
	public function login() {
		$page = 'login';
		include_once __DIR__ . '/../../view/templates/auth/login.php';
	}
}
