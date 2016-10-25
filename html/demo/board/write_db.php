<?php // 글 작성
// header("Content-Type:application/json");

$root_path = '../..';
require_once $root_path.'/../assets/session.php';
require_once $root_path.'/../assets/host/pdo_function.php';

start_session();
if (check_login() == false) {
	echo '<script>history.back(2);</script>';
} else {
	$user_id = $_SESSION['user_session'];
}

if (isset($_POST['category'], $_POST['subject'], $_POST['text'])) {
	$category_id = $_POST['category'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];
} else {
	echo 'POST does not exist.';
}

$dbh = db_connect('demo');

$stmt = $dbh->prepare('INSERT INTO public."Post" 
		(subject, text, category_id, user_id) VALUES 
		(:subject, :text, :category_id, :user_id)');
$stmt->bindParam(':subject', $subject);
$stmt->bindParam(':text', $text);
$stmt->bindParam(':category_id', $category_id);
$stmt->bindParam(':user_id', $user_id);
if ($stmt->execute()) {
	echo 'ok';
} else {
	echo 'query could not execute!';
}
$stmt = NULL;
$dbh = NULL;
header('location: ./');