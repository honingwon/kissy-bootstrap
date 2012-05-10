<!-- Layouts (Default and fluid)
================================================== -->
<section id="layout">
	<div class="page-header">
		<h1>
			布局 <small>页面基础布局</small>
		</h1>
	</div>

	<div class="row">
		<div class="span12">
			<h2>定宽布局</h2>
			<p>
				默认布局宽度为940px、居中，简单的使用 <code>&lt;div class="container"&gt;</code> 即可达到效果。
			</p>
			<div class="mini-layout">
				<div class="mini-layout-body"></div>
			</div>
			<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
		</div>
		<!-- /.span -->
		<div class="span12">
			<h2>自适应布局</h2>
			<p>
				<code>&lt;div class="container-fluid"&gt;</code> 是一种更自由的布局。更适合apps或者docs使用。
			</p>
			<div class="mini-layout fluid">
				<div class="mini-layout-sidebar"></div>
				<div class="mini-layout-body"></div>
			</div>
			<pre class="prettyprint linenums">
&lt;div class="container-fluid"&gt;
  &lt;div class="row-fluid"&gt;
    &lt;div class="span4"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class="span20"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
		</div>
		<!-- /.span -->
	</div>
	<!-- /.row -->
</section>
