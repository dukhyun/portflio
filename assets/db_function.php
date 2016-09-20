<?php
// db connect
function db_connect($root_url) {
	require $root_url.'/../assets/pgsql_host.php';
	
	try {
		$dbn = 'pgsql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname.';';
		$dbh = new PDO($dbn, $dbuser, $dbpass);
		// error code display
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "error: ".$e->getMessage()."<br>";
		die();
	}
	
	return $dbh;
}
