<article class="container center">
	<?php
	$rows = get_post_columns($dbh);
	?>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th class="col-xs-1 col-md-1 hidden-xs">#</th>
					<th class="col-xs-2 col-md-1">구분</th>
					<th class="col-xs-5 col-md-6">제목</th>
					<th class="col-xs-2 col-md-2 hidden-xs">글쓴이</th>
					<th class="col-xs-2 col-md-2 hidden-xs">날짜</th>
				</tr>
			</thead>
			<tbody>
	<?php
	foreach ($rows as $row) {
	?>
				<tr>
					<td class="hidden-xs"><?php echo $row['id']; ?></td>
					<td class=""><?php echo $row['category']; ?></td>
					<td class="">
						<span onclick="viewPost(<?php echo $row['id']; ?>)"><?php echo htmlspecialchars($row['subject']); ?></span>
					</td>
					<td class="hidden-xs"><?php echo $row['username']; ?></td>
					<td class="hidden-xs">
					<?php
					$post_date = new DateTime($row['create_time']);
					$now_date = new DateTime();
					$diff = $post_date->diff($now_date);
					if ($diff->days > 0) {
						view_time($post_date->format('Y-m-d H:i:s e'), 'y-m-d');
					} else {
						view_time($post_date->format('Y-m-d H:i:s e'), 'H:i');
					}
					?>
					</td>
				</tr>
	<?php
	}
	?>
			</tbody>
		</table>
		<script>
		function viewPost(post_id) {
			var form = document.createElement("form");
			form.setAttribute("method", "get");
			form.setAttribute("action", "view_post.php");
			
			var input = document.createElement("input");
			input.setAttribute("type", "hidden");
			input.setAttribute("name", "post_id");
			input.setAttribute("value", post_id);
			
			form.appendChild(input);
			document.body.appendChild(form);
			form.submit();
		}
		</script>
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
			<li class="page-item disabled"><a class="page-link" href="#">2</a></li>
			<li class="page-item disabled"><a class="page-link" href="#">3</a></li>
			<li class="page-item disabled"><a class="page-link" href="#">4</a></li>
			<li class="page-item disabled"><a class="page-link" href="#">5</a></li>
			<li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
		</ul>
	</div>
</article>