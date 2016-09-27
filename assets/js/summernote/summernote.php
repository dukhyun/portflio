<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
<!-- include summernote css/js-->
<link href="js/summernote/summernote.css" rel="stylesheet">
<script src="js/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="js/summernote/lang/summernote-ko-KR.js"></script>
<!-- include summernote plugin -->
<script src="js/summernote/plugin/highlight/summernote-ext-highlight.min.js"></script>
<script>
$(document).ready(function() {
	$('#summernote').summernote({
		height: 200,
		prettifyHtml: false,
		toolbar: [
			// ['misc', ['undo','redo']],
			// ['fontname', ['fontname']],
			['fontsize', ['fontsize']],
			['font', ['bold', 'italic', 'underline', 'clear']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['highlight', ['highlight']],
			['insert', ['picture', 'video', 'link']],
			['insert', ['specialchars']],
			['view', ['fullscreen', 'codeview']]
		],
		callbacks: {
			onImageUpload: function (image) {
				uploadImage(image[0]);
			}
		},
		dialogsFade: true,
		lang:'ko-KR'
	});
	function uploadImage(file, editor, welEditb) {
		var data = new FormData();
		data.append("file", file);
		$.ajax({
			data: data,
			type: "post",
			url: '/assets/upload.php',
			cache: false,
			contentType: false,
			processData: false,
			success: function(data) {
				var image = $('<img>').attr({
					src: data
				});
				$('#summernote').summernote("insertNode", image[0]);
			},
			error: function (data) {
				console.log(data);
			}
		});
	}
});
</script>