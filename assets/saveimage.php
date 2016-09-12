<?php
$allowed = array('png', 'jpg', 'gif');
 
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if (!in_array(strtolower($extension), $allowed)) {
		echo '{"status":"error"}';
		exit;
	}
 
	if (move_uploaded_file($_FILES['file']['tmp_name'], '/uploadfile/'.$_FILES['file']['name'])) {
		$tmp = '/uploadfile/'.$_FILES['file']['name'];
		echo '/uploadfile/'.$_FILES['file']['name'];
		//echo '{"status":"success"}';
		exit;
	}
}
 
echo '{"status":"error"}';
exit;