<!DOCTYPE HTML>
<html>
<head>
<?php
$root_path = '../..';
include_once $root_path.'/../assets/meta.php';
?>
<link rel="stylesheet" type="text/css" href="/assets/css/demo.css">
</head>
<body>
<?php
include_once $root_path.'/../assets/nav.php';
require_once $root_path.'/../assets/session.php';
require_once $root_path.'/../assets/host/pdo_function.php';
$dbh = db_connect('demo');
?>
	<section class="contant">
	<?php
	require_once 'login.php';
	require_once 'board_list.php';
	?>
	</section>

</body>
</html>