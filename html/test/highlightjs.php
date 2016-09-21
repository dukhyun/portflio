<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/assets/js/highlight/styles/tomorrow-night.css">
<script src="/assets/js/highlight/highlight.pack.js"></script>
<!-- <script src="/assets/js/highlight/highlightjs-line-numbers.js"></script> -->
<script>
hljs.initHighlightingOnLoad();
//hljs.initLineNumbersOnLoad();
</script>
<style>
.hljs {
	font-size: 1.2em;
	white-space: pre-wrap;
	padding: 0.7em;
	border: 1px solid #ccc;
	border-radius: 5px;
}
/* .hljs-line-numbers {
	text-align: right;
	border-right: 1px solid #ccc;
	color: #999;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
} */
</style>
</head>
<body>

<section>
	<h3>highlight.js</h3>
	<pre><code class="html">&lt;div class="col-lg-12"&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;
&lt;/div&gt;</code></pre>

	<pre><code class="sql">CREATE TABLE "topic" (
    "id" serial NOT NULL PRIMARY KEY,
    "forum_id" integer NOT NULL,
    "subject" varchar(255) NOT NULL
);
ALTER TABLE "topic"
ADD CONSTRAINT forum_id FOREIGN KEY ("forum_id")
REFERENCES "forum" ("id");

-- Initials
insert into "topic" ("forum_id", "subject")
values (2, 'D''artagnian');</code></pre>
</section>

</body>
</html>