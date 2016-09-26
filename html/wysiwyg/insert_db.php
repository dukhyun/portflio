<?php
$root = '../';
include $root.'/../assets/host/mysqli_function.php';
$conn = db_connect();

if (isset($_POST['myeditablediv'])) {
	$txt = $_POST['myeditablediv'];
}

$insert_query = 'INSERT INTO wysiwyg_test (txt) VALUES (?)';
$stmt = mysqli_prepare($conn, $insert_query);
mysqli_stmt_bind_param($stmt, 's', $txt);
if (!mysqli_stmt_execute($stmt)) {
	echo mysqli_error($conn);
} else {
	echo 'DB INSERT<br>';
	echo '<div>'.$txt.'</div>';
	echo '<a href="index.php">Back</a>';
}
mysqli_stmt_close($stmt);
mysqli_close($conn);