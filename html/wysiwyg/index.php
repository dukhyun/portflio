<!DOCTYPE html>
<html>
<head>
<?php
$root_path = '../';
include_once $root_path.'/../assets/meta.php';
?>
<link rel="stylesheet" href="/assets/js/highlight/styles.min.css">
<script src="/assets/js/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<style>
code.hljs {
	// background-color: rgba(255,255,255,0) !important;
}
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