<!DOCTYPE html>
<html>
<head>
<style>
.section {
	width: 600px;
	margin: 0 auto;
}
</style>
</head>
<body>
<div class="section">
	<?php
	$root = '../';
	// include_once 'tinymce.php';
	// include_once 'froala.php';
	include_once 'summernote.php';
	?>

	<div>
		<?php
		include_once 'view.php';
		?>
	</div>
</div>
</body>
</html>