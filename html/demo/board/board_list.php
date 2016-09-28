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
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['category_id']; ?></td>
					<td><?php echo htmlspecialchars($row['title']); ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['create_time']; ?></td>
				</tr>
	<?php
	}
	?>
			</tbody>
		</table>
	</div>
	
	<div class="both">
		<form action="write_post.php" method="post">
			<button type="submit" class="btn btn-default">글쓰기</button>
		</form>
	</div>
</article>