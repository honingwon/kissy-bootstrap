<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="assets/css/dpl.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="assets/js/html5.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="assets/images/favicon.ico">
<!--<script src="http://chengyu.taobao.ali.com/kissy_git/kissy1.3/??kissy.js,sizzle.js,switchable.js"></script>
-->
<script src="../kissy/build/kissy.js,sizzle.js,switchable.js"></script>
<script src="../kissy/build/sizzle.js,switchable.js"></script>
<script src="../kissy/build/switchable.js"></script>

</head>
<body>

	<!-- Navbar
    ================================================== -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="./index.php">DPL</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li <?php if(isset($page) && $page == 'index') echo 'class="active"' ?> ><a href="./index.php">概要</a>
						</li>
						<li  <?php if(isset($page) && $page == 'scaffolding') echo 'class="active"'?>><a href="./scaffolding.php">框架</a>
						</li>
						<li <?php if(isset($page) && $page == 'base') echo 'class="active"'?>><a href="./base.php">基础样式</a>
						</li>
						<li <?php if(isset($page) && $page == 'interaction') echo 'class="active"'?>><a href="./interaction.php">交互组件</a>
						</li>
						<li  <?php if(isset($page) && $page == 'form') echo 'class="active"'?>><a href="./form.php">表单</a>
						</li>
						<li <?php if(isset($page) && $page == 'table') echo 'class="active"'?>><a href="./table.php">表格</a>
						</li>
						<li <?php if(isset($page) && $page == 'dpl-plugin') echo 'class="active"'?>><a href="./dpl-plugin.php">DPL 插件</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">