<!DOCTYPE HTML>
<html>
<head>
<?php
$root_path = '../..';
include_once $root_path.'/../assets/meta.php';
?>
<link rel="stylesheet" type="text/css" href="/assets/css/demo.css">
</head>
<body>
<?php
include_once $root_path.'/../assets/nav.php';
require_once $root_path.'/../assets/session.php';
require_once $root_path.'/../assets/host/pdo_function.php';
$dbh = db_connect('demo');
?>
	<section class="contant">
	<?php
	start_session();
	if (check_login()) {
		$user_id = $_SESSION['user_session'];
	?>
		<form method="post" role="form">
			<div class="form-group">
				<label class="control-label " for="select">Select a Choice</label>
				<select class="select form-control" id="select" name="select">
					<option value="First Choice">First Choice</option>
					<option value="Second Choice">Second Choice</option>
					<option value="Third Choice">Third Choice</option>
				</select>
			</div>
			<div class="form-group ">
				<label class="control-label" for="subject">Subject</label>
				<input class="form-control" id="subject" name="subject" type="text" />
			</div>
			<div class="form-group ">
				<label class="control-label" for="message">Message</label>
				<textarea class="form-control" cols="40" id="message" name="message" rows="10"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary " name="submit" type="submit">Submit</button>
			</div>
		</form>
	<?php
	}
	?>
	</section>

</body>
</html>