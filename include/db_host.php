<?php
// db 접속
function db_connect() {
	// $hostname = 'kociadb.cvs0xwx2zhxj.ap-northeast-2.rds.amazonaws.com';
	// $username = 'dukhyun';
	// $password = 'eM7z7YqvhJjHfwyvZg';
	// $dbname = 'portfolio';
	$hostname = 'kocia.cytzyor3ndjk.ap-northeast-2.rds.amazonaws.com';
	$username = 'dukhyun';
	$password = 'password';
	$dbname = 'dukhyun';
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	mysqli_query($conn, "SET NAMES 'utf8'") or die('Mysql connection failed: '.mysqli_connect_error());
	
	return $conn;
}
