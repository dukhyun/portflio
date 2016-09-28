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
		<article class="container center">
			<form method="post" action="write_db.php" id="post-form" role="form">
				<div class="form-group">
					<label class="sr-only" for="select">Category</label>
					<select class="select form-control" id="select" name="category">
					<?php
					$rows = get_category_columns($dbh);
					foreach ($rows as $row) {
					?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
					<?php
					}
					?>
					</select>
				</div>
				<div class="form-group ">
					<label class="sr-only" for="subject">Subject</label>
					<input class="form-control" id="subject" name="subject" type="text" />
				</div>
				<div class="form-group ">
					<label class="sr-only" for="summernote">Text</label>
					<textarea class="form-control" id="summernote" name="text"></textarea>
				</div>
				<?php
				include_once $root_path.'/../assets/js/summernote/summernote.php';
				?>
			</form>
			<div class="pull-right">
				<button type="button" class="btn btn-default" id="btn-close">Cencel</button>
				<button type="submit" class="btn btn-primary" form="post-form" name="submit">Write</button>
				<script>
				$("#btn-close").click(function(){
					if (confirm("글작성을 취소합니까?")) {
						event.preventDefault();
						history.back(1);
					}
				});
				</script>
			</div>
	<?php
	} else {
		$prevPage = $_SERVER['HTTP_REFERER'];
		header('location:'.$prevPage);
	}
	?>
		</article>
	</section>

</body>
</html>