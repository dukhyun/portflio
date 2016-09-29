<article class="container center">
	<?php
	$stmt = $dbh->prepare('SELECT * FROM public."Post"');
	$stmt->execute();
	?>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th class="col-xs-1 col-md-1 hidden-xs">#</th>
					<th class="col-xs-2 col-md-2">구분</th>
					<th class="col-xs-5 col-md-5">제목</th>
					<th class="col-xs-2 col-md-2 hidden-xs">글쓴이</th>
					<th class="col-xs-2 col-md-2 hidden-xs">날짜</th>
				</tr>
			</thead>
			<tbody>
	<?php
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>
				<tr>
					<td class="hidden-xs"><?php echo $row['id']; ?></td>
					<td class=""><?php echo $row['category_id']; ?></td>
					<td class=""><?php echo htmlspecialchars($row['subject']); ?></td>
					<td class="hidden-xs"><?php echo $row['user_id']; ?></td>
					<td class="hidden-xs">
					<?php
					$post_date = new DateTime($row['create_time']);
					$now_date = new DateTime();
					$diff = $post_date->diff($now_date);
					if ($diff->y > 0) {
					} else if ($diff->days > 0) {
					} else {
					}
					?>
					</td>
				</tr>
	<?php
	}
	?>
			</tbody>
		</table>
	</div>
	
	<div class="both">
		<form action="write_post.php" method="post">
			<button type="submit" class="btn btn-default" id="write-submit">글쓰기</button>
		</form>
	<?php
	if (check_login() == false) {
	?>
		<script>$("#write-submit").addClass("disabled");</script>
	<?php
	}
	?>
		<ul class="pagination">
			<li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">4</a></li>
			<li class="page-item"><a class="page-link" href="#">5</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</div>
</article>