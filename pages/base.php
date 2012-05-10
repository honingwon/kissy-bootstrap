<?php include("./templates/header.php"); ?>

<!-- Masthead
      ================================================== -->
<header id="overview">
	<h1>基础样式</h1>
	<p class="lead">为页面基础元素提供一个清新的适合后台页面的展现。</p>
	<div class="subnav">
		<ul class="nav nav-pills">
			<li><a href="#typography">字体排版</a></li>
			<li><a href="#label">标签</a></li>
			<li><a href="#badge">标记</a></li>
			<li><a href="#breadcrumbs">面包屑</a></li>
		</ul>
	</div>
</header>

<?php  include("./components/typography.php"); ?>

<?php  include("./components/label.php"); ?>

<?php  include("./components/badge.php"); ?>

<?php  include("./components/breadcrumbs.php"); ?>

<?php  include("./templates/footer.php"); ?>