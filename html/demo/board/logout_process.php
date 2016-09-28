<?php // 로그인
// header("Content-Type:application/json");
$root_path = '../..';
require_once $root_path.'/../assets/session.php';

start_session();
try_to_logout();
destroy_session();

echo 'success';