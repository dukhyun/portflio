<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="js/froala/css/froala_editor.css">
<link rel="stylesheet" href="js/froala/css/froala_style.css">
<link rel="stylesheet" href="js/froala/css/plugins/code_view.css">
<link rel="stylesheet" href="js/froala/css/plugins/colors.css">
<link rel="stylesheet" href="js/froala/css/plugins/emoticons.css">
<link rel="stylesheet" href="js/froala/css/plugins/image_manager.css">
<link rel="stylesheet" href="js/froala/css/plugins/image.css">
<link rel="stylesheet" href="js/froala/css/plugins/line_breaker.css">
<link rel="stylesheet" href="js/froala/css/plugins/table.css">
<link rel="stylesheet" href="js/froala/css/plugins/char_counter.css">
<link rel="stylesheet" href="js/froala/css/plugins/video.css">
<link rel="stylesheet" href="js/froala/css/plugins/fullscreen.css">
<link rel="stylesheet" href="js/froala/css/plugins/file.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/at.js/1.4.0/css/jquery.atwho.min.css">
<form action="insert_db.php" method="post">
	<textarea id="edit" name="myeditablediv"></textarea>
	<input type="submit" value="작성">
</form>
<!-- Include jQuery. -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/at.js/1.4.0/js/jquery.atwho.min.js"></script>
<!-- Include JS files. -->
<script type="text/javascript" src="js/froala/js/froala_editor.min.js"></script>

<script type="text/javascript" src="js/froala/js/plugins/align.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/image.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/file.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/link.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/video.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/table.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/url.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/save.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="js/froala/js/plugins/quote.min.js"></script>
<!-- Include Language file if we want to use it. -->
<script type="text/javascript" src="js/froala/js/languages/ko.js"></script>
<!-- Initialize the editor. -->
<script>
$(function() {
	$('#edit').froalaEditor()
});
</script>