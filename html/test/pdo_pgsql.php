<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<h1>Demo</h1>

<?php
$root_url = '..';
include_once $root_url.'/../assets/db_function.php';
$dbh = db_connect($root_url);

// $stmt = $dbh->prepare('UPDATE "Status" SET name = :update_name WHERE name = :search_name');
// $stmt->bindValue(':search_name', 'open');
// $stmt->bindParam(':update_name', $name, PDO::PARAM_STR);
// $name = 'public';
// $stmt->execute();

$stmt = $dbh->query('SELECT * FROM "Status" ORDER BY id ASC');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $row['id'].' '.$row['name'].'<br>';
}
?>

</body>
</html>