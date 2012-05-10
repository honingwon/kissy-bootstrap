<?php $title="CRM Design Pattern Library"?>
<?php include("./templates/header.php"); ?>

<style>
.tutorial {
	position: relative;
	width: 940px;
	height: 200px;
	overflow: hidden;
}

.tutorial .step {
	width: 820px;
	height: 80px;
	margin-bottom: 0;
}
</style>

<div id="J_Header" class="hero-unit">
	<div class="page-header">
		<h1>CRM Design Pattern Library</h1>
	</div>
	<p class="sub-header">—— 简单、快捷、轻量的后台页面界面交互组件</p>
	<p>
		<a id="J_TutorialStart" class="btn btn-primary btn-large pull-right">
			快速上手 </a>
	</p>
</div>

<div id="J_Tutorial" class="tutorial" style="display: none">
	<div class="steps ks-switchable-content">
		<div class="hero-unit step">
			<h2>第一步：从空白页面开始</h2>
			<p>
				以一张空白页面作为你的起点，拷贝<a href="scaffolding.php#page" target="_blank">页面脚手架</a>，开始你的旅程。
			</p>
			<p>
				<a class="btn btn-primary btn-large pull-right"> 下一步 </a>
			</p>
		</div>
		<div class="hero-unit step" style="display: none">
			<h2>第二步：确定布局方式</h2>
			<p>
				定宽还是自适应布局，这是一个问题。但不管是哪种方式，我们都提供了<a href="scaffolding.php#layout"
					target="_blank">布局</a>的解决方案。
			</p>
			<p>
				<a class="btn btn-primary btn-large pull-right"> 下一步 </a>
			</p>
		</div>
		<div class="hero-unit step" style="display: none">
			<h2>第三步：使用栅格系统</h2>
			<p>
				规划页面框架，使用<a href="scaffolding.php#grid" target="_blank">栅格系统</a>把页面划分为几大块。
			</p>
			<p>
				<a class="btn btn-primary btn-large pull-right"> 下一步 </a>
			</p>
		</div>
		<div class="hero-unit step" style="display: none">
			<h2>第四步：从丰富的组件库中选择</h2>
			<p>
				开始细节实现，我们提供了足够丰富的组件供你选择：<a href="base.php" target="_blank">基础组件</a>、<a
					href="interaction.php" target="_blank">交互组件</a>、<a
					href="form.php" target="_blank">Form组件</a>、
					<a href="table.php" target="_blank">表格组件</a>。
			</p>
			<p>
				<a class="btn btn-primary btn-large pull-right"> 下一步 </a>
			</p>
		</div>
		<div class="hero-unit step" style="display: none">
			<h2>第五步：使用JavaSctipt</h2>
			<p>为了让组件能够与用户交互，你还需引入我们提供的JavaScript，更复杂的逻辑等待你的实现⋯⋯</p>
			<p>
				<a class="btn btn-primary btn-large pull-right"> 从头开始 </a>
			</p>
		</div>
	</div>
</div>

<script>
KISSY.use("switchable", function (S, Switchable) {
	
    var slide;

    S.Event.on('#J_TutorialStart', 'click', function() {
		S.DOM.css('#J_Header', 'display', 'none');
		S.DOM.css('#J_Tutorial', 'display', 'block');
		slide = new Switchable.Slide('#J_Tutorial', {
	    	autoplay: false,
	        effect : 'scrolly',
	        easing : 'easeOutStrong'
	    });
		});

	S.Event.on('#J_Tutorial .step .btn', 'click', function() {
		slide.next();
		});
	
 });
</script>

<?php  include("./templates/footer.php"); ?>