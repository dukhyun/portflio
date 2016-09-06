<!-- include libraries(jQuery, bootstrap) -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
<!-- include summernote css/js-->
<link href="js/summernote/summernote.css" rel="stylesheet">
<script src="js/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="js/summernote/lang/summernote-ko-KR.js"></script>
<!-- include summernote plugin -->
<script src="js/summernote/plugin/highlight/summernote-ext-highlight.min.js"></script>
<script>
$(document).ready(function() {
	$('#myeditablediv').summernote({
		height: 200,
		prettifyHtml: false,
		toolbar: [
			// Add highlight plugin
			['style', ['bold', 'italic', 'underline', 'clear']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['highlight', ['highlight']],
			['insert', ['picture', 'video']],
			['view', ['fullscreen', 'codeview']],
		],
		codemirror: { // codemirror options
			theme: 'monokai'
		},
		lang:'ko-KR'
	});
});
</script>
<form action="insert_db.php" method="post">
	<div id="myeditablediv"></div>
	<input type="submit" value="작성">
</form>