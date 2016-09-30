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
	if (isset($_GET['post_id'])) {
		$post_id = $_GET['post_id'];
	} else {
	?>
		<script>
		alert('not found post id.');
		history.back(1);
		</script>
	<?php
		die();
	}
	?>
		<article class="container center">
		<?php
		$rows = get_post_columns($dbh, $post_id);
		$row = $rows[0];
		?>
			<div class="row col-lg-12">
				<h1><?php echo htmlspecialchars($row['subject']); ?></h1>
				<p class="read"><i class="glyphicon glyphicon-user"></i> by <a href=""><?php echo $row['username']; ?></a></p>
				<p><i class="glyphicon glyphicon-calendar"></i> Posted on <?php view_time($row['create_time'], 'Y-m-d H:i:s'); ?></p>
				<hr>
				<?php echo $row['text']; ?>
				<hr>
				<!-- the comment box -->
				<div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
				<hr>
				<!-- the comments -->
				<h4>
					<i class="glyphicon glyphicon-comment"></i> User:
                    <small> 2016-09-30 11:35:55</small>
                </h4>
				<p>commnet text</p>
			</div>
		</article>
	</section>
</body>
</html>