<!-- Page
================================================== -->
<section id="page">
	<div class="page-header">
		<h1>
			页面 <small>页面脚手架、字体链接、Reset</small>
		</h1>
	</div>
	<div class="row">
		<div class="span8">
			<h2>页面脚手架</h2>
			<p>页面脚手架是创建所有页面的基础，拷贝以下代码作为你的页面的初始状态。</p>
			<pre class="prettyprint linenums">
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8" /&gt;
&lt;title&gt;your title&lt;/title&gt;
&lt;link rel="stylesheet" 
	href="css_example_url" /&gt;
&lt;script src="js_example_url"&gt;
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
		</div>
		<!-- /.span -->
		<div class="span8">
			<h2>字体链接</h2>
			<p>
				在page.less文件中，我们对全局显示、字体、链接做了设置。你可以通过修改variables.less中相关的值来改变这些设置。相关的设置：
				<ul>
					<li>@bodyBackground	全局背景颜色</li>
					<li>@baseFontFamily、@baseFontSize、@baseLineHeight	全局字体排版</li>
					<li>@textColor	全局字体颜色</li>
					<li>@linkColor、@linkColorHover	全局链接颜色</li>
				</ul>
			</p>
		</div>
		<!-- /.span -->
		<div class="span8">
			<h2>Reset</h2>
			<p>
				参照Bootstrap 2，基于<a
					href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a>的项目<a href="http://necolas.github.com/normalize.css/"
					target="_blank">Normalize.css</a>
			</p>
			<p>
				具体实现参看 <strong>reset.less</strong> 文件。
			</p>
		</div>
		<!-- /.span -->
	</div>
	<!-- /.row -->
</section>
