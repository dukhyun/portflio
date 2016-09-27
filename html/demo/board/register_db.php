<?php // 회원가입
$root_path = '../..';
require_once $root_path.'/../assets/host/pdo_function.php';

if (isset($_POST['id'], $_POST['password'])) {
	$id = $_POST['id'];
	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
	header('Location: /register_form.php?error_code=1');
}

$dbh = db_connect('demo');
// id 중복 검사
$stmt = $dbh->prepare('SELECT Count(*) FROM public."user" WHERE email=:email');
$stmt->bindParam(':email', $id);
$stmt->execute();
if ($stmt->fetchColumn() > 0) {
	header('Location: /register_form.php?error_code=2');
}

$stmt = $dbh->prepare('INSERT INTO public."user" (email, pw_hash) VALUES (:email, :pw_hash)');
$stmt->bindParam(':email', $id);
$stmt->bindParam(':pw_hash', $hash);
$stmt->execute();
$stmt = NULL;
$dbh = NULL;
header('Location: /');