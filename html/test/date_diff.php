<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

<h1>Demo</h1>

<?php
$root_path = '..';
include_once $root_path.'/../assets/host/pdo_function.php';
$dbh = db_connect('demo');

$st = $dbh->query('SELECT CURRENT_TIMESTAMP(0)');
$st->execute();
$result = $st->fetch(PDO::FETCH_NUM);
print_r($result);
echo '<br>';

$old = new DateTime('2015-09-28 18:33:49+00');
$now = new DateTime();
$diff = $old->diff($now);
print_r($diff);
echo '<br>';
echo 'days: '.$diff->days; // days
echo '<br>';
echo 'years: '.$diff->y; // years
echo '<br>';

if ($diff->days > 0) {
	echo '1년 이하, 1일 이상';
} else if ($diff->y > 0) {
	echo '1년 이상';
}
echo '<br>';
// date_default_timezone_set("UTC");
view_time($now->format('Y-m-d H:i:s e'), 'U = Y-m-d H:i:sP');
?>

</body>
</html>