<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/js/highlight/styles/vs.css">
<script src="/assets/js/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<style>
pre {
	background-color: rgba(255,255,255,0) !important;
	border: 1px solid #ccc;
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