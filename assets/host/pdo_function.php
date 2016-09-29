<?php
if (isset($root_path) == false) {
	$root_path = '.';
}

// db connect
function db_connect($dbname = 'mydb') {
	global $root_path;
	require $root_path.'/../assets/host/pgsql_host.php';
	
	try {
		$dbn = "pgsql:host={$dbhost};port={$dbport};dbname={$dbname};";
		// $dbn = 'pgsql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname.';';
		$dbh = new PDO($dbn, $dbuser, $dbpass);
		// error code display
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "error: ".$e->getMessage()."<br>";
		die();
	}
	
	return $dbh;
}

function get_category_columns($dbh) {
	$st = $dbh->prepare('SELECT * FROM public."Category"');
	$st->execute();
	
	return $st->fetchAll(PDO::FETCH_ASSOC);
}

function get_post_columns($dbh) {
	$query = 'SELECT id, subject, text, username, category FROM public."Post"
				WHERE id = :id';
	$stmt = $dbh->prepare($query);
	$stmt->execute();
	
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function view_time($timestamp, $format = DATE_ATOM) {
	// date_default_timezone_set("Asia/Seoul");
	$timestamp = strtotime($timestamp);
	echo date($format, $timestamp);
}