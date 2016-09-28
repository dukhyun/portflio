<?php // 로그인
// header("Content-Type:application/json");
$root_path = '../..';
require_once $root_path.'/../assets/session.php';

start_session();
try_to_logout();
destroy_session();

if (isset($_SERVER["HTTP_REFERER"])) {
	header('Location: '.$_SERVER["HTTP_REFERER"]);
} else {
	header('Location: ./');
}