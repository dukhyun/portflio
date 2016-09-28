<?php
// 쿠키 생성
function start_session() {
	$secure = false;
	$httponly = true;
	
	if (ini_set('session.use_only_cookies', 1) === false) {
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

function try_to_login($email, $password, $dbname = 'mydb') {
	$dbh = db_connect($dbname);
	$stmt = $dbh->prepare('SELECT * FROM public."User" WHERE email=:email');
	$stmt->bindParam(':email', $email);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$pw_hash = $row['pw_hash'];
	
	if (password_verify($password, $pw_hash)) {
		// $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		// $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		$_SESSION['user_session'] = $row['id'];
		$_SESSION['user_email'] = $row['email'];
		$_SESSION['login_status'] = true;
		return true;
	} else {
		return false;
	}
}

function try_to_logout() {
	if (check_login()) {
		$_SESSION['login_status'] = false;
	}
}

function check_login() {
	return isset($_SESSION['user_session']) && $_SESSION['login_status'];
	// return isset($_SESSION['ip'], $_SESSION['user_agent'], $_SESSION['login_status']) && 
		// $_SESSION['ip'] == $_SERVER['REMOTE_ADDR'] && 
		// $_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT'] &&
		// $_SESSION['login_status'];
}