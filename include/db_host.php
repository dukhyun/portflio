<?php
// db 접속
function db_connect() {
	$hostname = 'mykociadb.cvs0xwx2zhxj.ap-northeast-2.rds.amazonaws.com';
	$username = 'dukhyun';
	$password = 'U3*A7k5YP^hM*D9pp4';
	//$dbname = 'portfolio';
	$dbname = 'dukhyun';
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	mysqli_query($conn, "SET NAMES 'utf8'") or die('Mysql connection failed: '.mysqli_connect_error());
	
	return $conn;
}

// user.name -> id
function get_user_id($conn, $user_name) {
	//return $user_id;
}