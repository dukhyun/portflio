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
<!-- borad table -->
<?php
$conn = db_connect();

// 게시판 불러오기
$query = 'SELECT * FROM post;';
$stmt = mysqli_prepare($conn, $query);
// mysqli_stmt_bind_param($stmt, 'i', $board_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt) or die('Database access failed: '.mysqli_error());
?>
<div class="table">
	<ul class="both">
		<li class="floatleft">번호</li>
		<li class="floatleft">제목</li>
	</ul>
<?php
while ($row = mysqli_fetch_assoc($result)) {
	printf('<ul class="both">');
	printf('<li class="floatleft">%d</li>', $row['id']);
	printf('<li class="floatleft"><a href="view.php?post_id=%d">%s</a></li>', $row['id'], htmlspecialchars($row['title']));
	printf('</ul>');
}
?>
</div>

</body>
</html>