<?php $title="DPL 插件"?>
<?php include("./templates/header.php"); ?>
<!-- Masthead
      ================================================== -->
<header id="overview">
	<h1>DPL 插件</h1>
	<p class="lead">CRM DPL基于Bootstrap的组件，提供各组件的JS插件。</p>
	<div class="subnav">
		<ul class="nav nav-pills">
			<li><a href="#button">按钮</a></li>
			<li><a href="#pagging">分页</a></li>
			<li><a href="#dialog">弹出框</a></li>
			<li><a href="#tab">tab</a></li>
			<li><a href="#message">消息提示</a></li>
			<li><a href="#tooltip">tooltip</a></li>
			
			<li><a href="#overlay-image">放大图片</a></li>
		</ul>
	</div>
</header>
<script>
	KISSY.config({
		packages:[{
			name:"js",
			tag:"201204271014",
			path:"./assets/"
		}]
	});
</script>
<?php  include("./plug-in/button.php"); ?>
<?php  include("./plug-in/pagging.php"); ?>
<?php  include("./plug-in/dialog.php"); ?>
<?php  include("./plug-in/tab.php"); ?>
<?php  include("./plug-in/message.php"); ?>
<?php  include("./plug-in/tooltip.php"); ?>
<?php  include("./plug-in/overlay-image.php"); ?>


<?php  include("./templates/footer.php"); ?>