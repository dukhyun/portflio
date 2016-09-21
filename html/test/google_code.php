<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
pre.prettyprint {
	white-space: pre-warp;
}
</style>
</head>
<body>
<section>
	<h3>google-code-prettify</h3>
	<pre class="prettyprint linenums">
&lt;div class="col-lg-12"&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;
&lt;/div&gt;
&lt;?php echo "print"; ?&gt;</pre>

	<pre class="prettyprint linenums">CREATE TABLE "topic" (
    "id" serial NOT NULL PRIMARY KEY,
    "forum_id" integer NOT NULL,
    "subject" varchar(255) NOT NULL
);
ALTER TABLE "topic"
ADD CONSTRAINT forum_id FOREIGN KEY ("forum_id")
REFERENCES "forum" ("id");

-- Initials
insert into "topic" ("forum_id", "subject")
values (2, 'D''artagnian');</pre>
	<script src="/assets/js/google-code-prettify/run_prettify.js"></script>
</section>

</body>
</html>