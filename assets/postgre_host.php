<?php
try {
	$dbhost = 'kocia-postgre-db.cvs0xwx2zhxj.ap-northeast-2.rds.amazonaws.com:5432';
	$dbuser = 'dukhyun';
	$dbpass = 'vXnnDbR69jTU3D9E';
	$dbname = 'portfolio';

	$dbh = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Error : " . $e->getMessage() . "<br>";
	die();
}