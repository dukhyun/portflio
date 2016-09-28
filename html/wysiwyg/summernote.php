<?php
$root_path = '..';
?>
<form action="insert_db.php" method="post">
	<textarea id="summernote" name="myeditablediv"></textarea>
	<input id="save" type="submit" value="작성">
</form>
<?php
include_once $root_path.'/../assets/js/summernote/summernote.php';
?>
<script type="text/javascript">
$(document).ready(function(){
	var postForm = function() {
		var content = $('textarea[name="myeditablediv"]').html($('#summernote').code());
	}
});
</script>