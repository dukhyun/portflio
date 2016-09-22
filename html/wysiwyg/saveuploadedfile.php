<?php
public function saveuploadedfile() {
	$file = Input::file('file');
	$fileArray = array('image' => $file);
	$rules = array(
		'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
	);
	$validator = Validator::make($fileArray, $rules);

	if ($validator->fails()) {
		$error = 'Invalid file type / size';
		return $error;
	} else {
		$path = "/uploadfile/"
		$uploads_dir = $_SERVER['DOCUMENT_ROOT'].$path;
		$extension = Input::file('file')->getClientOriginalExtension();
		$tmp_name = $_FILES["file"]["tmp_name"];
		$name = $filename = date('Ymdhis').'_'.$_FILES["file"]["name"].'.'.$extension;
		move_uploaded_file($tmp_name, $uploads_dir.'/'.$name);
		return $path.$name;
	}
}