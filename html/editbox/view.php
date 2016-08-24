<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<?php
$root = '..';
include_once $root.'/../include/db_host.php';
?>
<!-- view.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$post_id = $_GET['post_id'];
}

$conn = db_connect();

// 게시판 내용 물러오기
$query = 'SELECT * FROM post WHERE id = ?;';
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $post_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt) or die('Database access failed: '.mysqli_error());
$row = mysqli_fetch_assoc($result);
// echo $row['crea_dtm'];
?>
<div class="table">
	<ul class="both">
		<li class="floatleft">제목</li>
		<li class="floatleft"><?php
			printf('%s', htmlspecialchars($row['title']));
		?></li>
	</ul>
	<ul class="both">
		<li class="floatleft"><?php
			$content = $row['content'];
			printf('%s', strip_tags($content));
		?></li>
	</ul>
</div>

</body>
</html>