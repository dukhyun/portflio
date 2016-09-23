<form action="insert_db.php" method="post">
	<div id="myeditablediv" placeholder="Your text as placeholder"></div>
	<input id="save" type="submit" value="작성">
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.0.min.js"><\/script>')</script>
<script src="js/trumbowyg/trumbowyg.min.js"></script>
<link rel="stylesheet" href="js/trumbowyg/ui/trumbowyg.min.css">
<script type="text/javascript" src="js/trumbowyg/langs/ko.min.js"></script>
<script type="text/javascript" src="js/trumbowyg/plugins/upload/trumbowyg.upload.min.js"></script>
<script type="text/javascript" src="js/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
<script type="text/javascript" src="js/trumbowyg/plugins/preformatted/trumbowyg.preformatted.min.js"></script>
<script type="text/javascript">
$('#myeditablediv').trumbowyg({
	lang: 'ko',
	btns: [
        ['viewHTML'],
        ['formatting'],
        'btnGrp-design',
        ['script'],
        ['link'],
        ['image'],
        ['justify'],
        'btnGrp-lists',
        ['removeformat'],
		['noembed'],
		['preformatted'],
        ['fullscreen']
    ],
	btnsDef: {
		justify: {
			dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
			ico: 'justifyFull'
		},
		script: {
			dropdown: ['superscript', 'subscript'],
			ico: 'superscript'
		},
		image: {
			dropdown: ['insertImage', 'upload', 'noEmbed'],
			ico: 'insertImage'
		}
	},
	plugins: {
		upload: {
            serverPath: '/image',
            fileFieldName: 'image',
            headers: {
                'Authorization': 'Client-ID 9e57cb1c4791cea'
            },
            urlPropertyName: 'data.link'
        }
	}
});
</script>