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

function get_post_columns($dbh, $id = NULL) {
	$query = 'SELECT post.id, subject, text, create_time, update_time,
				us.email, us.username, category.name AS category FROM "Post" AS post
				LEFT JOIN "User" AS us ON post.user_id = us.id
				LEFT JOIN "Category" AS category ON post.category_id = category.id';
	if (isset($id)) {
		$query .= ' WHERE post.id = :id';
	}
	$query .= ' ORDER BY post.id DESC';
	$stmt = $dbh->prepare($query);
	if (isset($id)) {
		$stmt->bindParam(':id', $id);
	}
	$stmt->execute();
	
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function view_time($timestamp, $format = DATE_ATOM) {
	// date_default_timezone_set("Asia/Seoul");
	$timestamp = strtotime($timestamp);
	echo date($format, $timestamp);
}