<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>

<h1>Demo</h1>

<?php
$root_path = '../..';
include_once $root_path.'/../assets/host/pdo_function.php';
// $dbh = db_connect($root_path);
?>

<script>
$(function(){
	alert('<?=$root_path?>');
});
</script>

</body>
</html>