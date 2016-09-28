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

function get_($dbh) {
	$st = $dbh->prepare('SELECT * FROM pulic."Post"');
	$st->execute();
}