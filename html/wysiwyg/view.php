<script>
// var view = document.getElementsByClassName('view');
// var img = view.getElementsByTagName('img');
// alert(img.src);
</script>
<?php
include_once $root.'/../assets/host/mysqli_function.php';
$conn = db_connect();

$select_query = 'SELECT * FROM wysiwyg_test';
$stmt = mysqli_prepare($conn, $select_query);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
mysqli_stmt_bind_result($stmt, $temp_id, $temp_txt);
while (mysqli_stmt_fetch($stmt)) {
	printf("<h3>%d</h3><div>%s</div>", $temp_id, $temp_txt);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
