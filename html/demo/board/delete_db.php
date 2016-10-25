<?php // 글 삭제
// header("Content-Type:application/json");

$root_path = '../..';
require_once $root_path.'/../assets/session.php';
require_once $root_path.'/../assets/host/pdo_function.php';

start_session();
if (check_login() == false) {
	echo '<script>history.back(1);</script>';
} else {
	$user_id = $_SESSION['user_session'];
}

if (isset($_POST['post_id'])) {
	$post_id = $_POST['post_id'];
} else {
	echo 'POST does not exist.';
}

$dbh = db_connect('demo');

$stmt = $dbh->prepare('DELET FORM public."Post" id = :post_id AND user_id = :user_id');
$stmt->bindParam(':post_id', $post_id);
$stmt->bindParam(':user_id', $user_id);
if ($stmt->execute()) {
	echo 'ok';
} else {
	echo 'query could not execute!';
}
$stmt = NULL;
$dbh = NULL;
header('location: ./');