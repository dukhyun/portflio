<script src="js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: "div#myeditablediv",
	height: 300,
	plugins: "code image imagetools autolink codesample",
	toolbar: 'undo redo fontsizeselect bold italic alignleft aligncenter alignright image codesample code',
    menubar: false,
	language: 'ko_KR'
});
</script>
<h4>TinyMCE Community</h4>
<form action="insert_db.php" method="post">
	<div id="myeditablediv">TinyMCE Community</div>
	<br><br>
	<input type="submit" value="작성">
</form>