<!DOCTYPE html>
<html>
<head>
<style>
/* board.css */
.section {
	width: 800px;
	margin: 0 auto;
}
</style>
</head>
<body>
<div class="section">
	<?php
	$root = '../';
	// include_once 'tinymce.php';
	include_once 'summernote.php';
	// include_once 'trumbowyg.php';
	?>

	<div class="view">
		<?php
		include_once 'view.php';
		?>
	</div>
</div>
</body>
</html>