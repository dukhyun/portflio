<?php // 회원가입
header("Content-Type:application/json");

$root_path = '../..';
require_once $root_path.'/../assets/host/pdo_function.php';

if (isset($_POST['email'], $_POST['username'], $_POST['password'])) {
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pw_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
	echo 'POST does not exist.';
	die();
}

$dbh = db_connect('demo');
// id 중복 검사
$stmt = $dbh->prepare('SELECT * FROM public."User" WHERE email=:email');
$stmt->bindParam(':email', $email);
$stmt->execute();
if ($stmt->rowCount() == 0) {
	$stmt = $dbh->prepare('INSERT INTO public."User" (email, username, pw_hash, role_id, is_enabled) VALUES (:email, :username, :pw_hash, :role_id, :enabled)');
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':pw_hash', $pw_hash);
	$stmt->bindValue(':role_id', 2);
	$stmt->bindValue(':enabled', true);
	if ($stmt->execute()) {
		echo 'registered';
	} else {
		echo 'query could not execute!';
	}
} else {
	echo 'duplicated';
}
$stmt = NULL;
$dbh = NULL;