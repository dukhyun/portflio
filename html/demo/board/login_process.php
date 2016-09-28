<?php // 로그인
// header("Content-Type:application/json");

$root_path = '../..';
require_once $root_path.'/../assets/session.php';
require_once $root_path.'/../assets/host/pdo_function.php';

start_session();

if (isset($_POST['email'], $_POST['password'])) {
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
} else {
	echo 'POST does not exist.';
	die();
}

if (try_to_login($email, $password, 'demo') == true) {
	echo 'ok';
} else {
	echo 'email or password does not exist.';
}