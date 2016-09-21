<?php
if ($_FILES['file']['name']) {
	if (!$_FILES['file']['error']) {
		$name = md5(rand(100, 200));
		$ext = explode('.', $_FILES['file']['name']);
		$filename = $name.'.'.$ext[1];
		$path = '/uploadfile/';
		$destination = $_SERVER['DOCUMENT_ROOT'].$path.$filename; //change this directory
		$location = $_FILES["file"]["tmp_name"];
		move_uploaded_file($location, $destination);
		echo $path.$filename;
	} else {
	  echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
	}
}