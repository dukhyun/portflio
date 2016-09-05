<script src="js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
	selector: '#myeditablediv',
    language: 'ko',
	themes: "inlite",
	plugins: "code image imagetools autolink codesample",
	inline: false,
	menubar: false,
	toolbar: 'undo redo fontsizeselect bold italic alignleft aligncenter alignright image quickimage codesample code'
});
</script>
<form action="insert_db.php" method="post">
	<div id="myeditablediv"></div>
	<br><br>
	<input type="submit" value="작성">
</form>