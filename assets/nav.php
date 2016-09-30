<header>
	<ul id="gn-menu" class="gn-menu-main">
		<li class="gn-trigger">
			<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
			<nav class="gn-menu-wrapper">
				<div class="gn-scroller">
					<ul class="gn-menu">
						<li>
							<a class="gn-icon gn-icon-code">Demo</a>
							<ul class="gn-submenu">
								<li><a class="gn-icon gn-icon-post" href="/demo/board/">Board</a></li>
								<li><a class="gn-icon gn-icon-compare" href="/demo/diff/">Diff</a></li>
							</ul>
						</li>
						<li><a class="gn-icon gn-icon-literature">Study</a></li>
					</ul>
				</div><!-- /gn-scroller -->
			</nav>
		</li>
		<!-- <li class="gn-header">Dukhyun Portfolio Site</li> -->
		<?php
		if ($root_path !== '.') {
		?>
			<li class="gn-header"><a class="gn-icon gn-icon-arrow-left" href="/">Prev</a></li>
		<?php
		}
		?>
	</ul>
	<script src="/assets/js/gnmenu/classie.js"></script>
	<script src="/assets/js/gnmenu/gnmenu.js"></script>
	<script>new gnMenu(document.getElementById('gn-menu'));</script>
<header>