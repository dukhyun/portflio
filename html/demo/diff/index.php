<!DOCTYPE HTML>
<html>
<head>
<?php
$root_path = '../..';
include_once $root_path.'/../assets/meta.php';
?>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<?php
include_once $root_path.'/../assets/nav.php';
?>

<div class="contant">
	<div class="diff_content">
		<form action="diff_result.php" method="post">
			<div class="diff_text pull-left">
				<label>Orignal Text</label>
				<textarea name="txt_a"></textarea>
			</div>
			<div class="diff_text pull-left">
				<label>Changed Text</label>
				<textarea name="txt_b"></textarea>
			</div>
			<div>
				<input type="submit" value="Diff Go">
			</div>
		</form>
	</div>
</div>

</body>
</html>