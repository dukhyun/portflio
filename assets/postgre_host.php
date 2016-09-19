<?php
// db connect
try {
	$dbhost = 'kocia-postgre-db.cvs0xwx2zhxj.ap-northeast-2.rds.amazonaws.com';
	$dbport = '5432';
	$dbuser = 'dukhyun';
	$dbpass = 'vXnnDbR69jTU3D9E';
	$dbname = 'portfolio';

	$dbh = new PDO("pgsql:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
	// error
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "error: ".$e->getMessage()."<br>";
	die();
}
