<?php
// 쿠키 생성
function start_session() {
	$secure = false;
	$httponly = true;
	
	if (ini_set('session.use_only_cookies', 1) === false) {
		header("Location: error.php?error_code=2");
		exit();
	}
	
	$params = session_get_cookie_params();
	session_set_cookie_params($params["lifetime"],
		$params["path"], 
		$params["domain"], 
		$secure,
		$httponly);

	session_start();
	session_regenerate_id();
}

// 쿠키 삭제
function destroy_session() {
	$_SESSION = array();
	$params = session_get_cookie_params();
	
	setcookie(session_name(), '', 0, 
		$params['path'], $params['domain'], $params['secure'], isset($params['httponly'])); 
	session_destroy();
}

function try_to_login($id, $password, $dbname = 'mydb') {
	if (check_user_account($id, $password, $dbname)) {
		$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $password;
		$_SESSION['login_status'] = true;
		return true;
	} else {
		return false;
	}
}

function check_user_account($id, $password, $dbname = 'mydb') {
	$dbh = db_connect($dbname);
	$stmt = $dbh->prepare('SELECT pw_hash FROM public."user" WHERE email=:email AND enabled=:enabled');
	$stmt->bindParam(':email', $id);
	$stmt->bindValue(':enabled', 'true');
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$pw_hash = $row['pw_hash'];
	return password_verify($password, $pw_hash);
	$stmt = NULL;
	$dbh = NULL;
}

function try_to_logout() {
	if (check_login()) {
		$_SESSION['login_status'] = false;
	} else {
	}
}

function check_login() {
	return isset($_SESSION['ip'], $_SESSION['user_agent'], $_SESSION['login_status']) && 
		$_SESSION['ip'] == $_SERVER['REMOTE_ADDR'] && 
		$_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT'] &&
		$_SESSION['login_status'];
}