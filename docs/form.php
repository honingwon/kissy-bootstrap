<?php	 $page = "form" ?>
<?php $title="DPL 表单"?>
<?php include("./templates/header.php"); ?>
<!-- Masthead
      ================================================== -->
<header id="overview">
	<h1>表单</h1>
	<p class="lead">DPL基于Bootstrap的组件，提供各种布局的表单。</p>
	<div class="subnav">
		<ul class="nav nav-pills">
			<li><a href="#layout">表单布局</a></li>
			<li><a href="#basic">基本表单</a></li>
			<li><a href="#horizontal">横向表单</a></li>
			<li><a href="#control">表单元素状态</a></li>
			<li><a href="#extend">表单元素扩展</a></li>
		</ul>
	</div>
</header>
<?php  include("./components/form.php"); ?>

<?php  include("./templates/footer.php"); ?>