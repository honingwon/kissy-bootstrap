<!-- Grid system
================================================== -->
<section
	id="grid">
	<div class="page-header">
		<h1>
			栅格 <small>12列栅格系统</small>
		</h1>
	</div>

	<div class="row show-grid">
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
	</div>
	<div class="row show-grid">
		<div class="span8">4</div>
		<div class="span8">4</div>
		<div class="span8">4</div>
	</div>
	<div class="row show-grid">
		<div class="span8">4</div>
		<div class="span16">8</div>
	</div>
	<div class="row show-grid">
		<div class="span12">6</div>
		<div class="span12">6</div>
	</div>
	<div class="row show-grid">
		<div class="span24">12</div>
	</div>
	<div class="row">
		<div class="span8">
			<p>
				默认的<strong>12列、940px</strong>宽度的栅格系统。
			</p>
			<p>同时，针对不同设备不同的宽度，我们也做了可响应设计。</p>
		</div>
		<!-- /.span -->
		<div class="span8">
			<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
  &lt;div class="span16"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
		</div>
		<!-- /.span -->
		<div class="span8">
			<p>页面被我们分割成12个基础列，你通过指定横跨多少列来控制每个区域的宽度。</p>
		</div>
		<!-- /.span -->
	</div>
	<!-- /.row -->

	<br>

	<h2>带有偏移量的列</h2>
	<div class="row show-grid">
		<div class="span8">4</div>
		<div class="span8 offset4">4 offset 4</div>
	</div>
	<!-- /row -->
	<div class="row show-grid">
		<div class="span6 offset3">3 offset 3</div>
		<div class="span6 offset3">3 offset 3</div>
	</div>
	<!-- /row -->
	<div class="row show-grid">
		<div class="span16 offset4">8 offset 4</div>
	</div>
	<!-- /row -->
	<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
  &lt;div class="span8 offset4"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

	<br>

	<h2>嵌套列</h2>
	<div class="row">
		<div class="span12">
			<p>
				有时我们需要在某一列中嵌套一个栅格，只需要在
				<code>.span*</code>
				中增加一个
				<code>.row</code>
				， 并在
				<code>.row</code>
				中增加若干
				<code>.span*</code>
				。
			</p>
			<h3>样例</h3>
			<p>
				嵌套行中的列横跨宽度相加必须等于其外部列的宽度。 例如：一个
				<code>.span12</code>
				列中可以有两个
				<code>.span6</code>
				列。
			</p>
			<div class="row show-grid">
				<div class="span12">
					Level 1 of column
					<div class="row show-grid">
						<div class="span6">Level 2</div>
						<div class="span6">Level 2</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.span -->
		<div class="span12">
			<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span12"&gt;
    Level 1 of column
    &lt;div class="row"&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
		</div>
		<!-- /.span -->
	</div>
	<!-- /.row -->
</section>

<!-- Fluid grid system
================================================== -->
<section id="fluidGridSystem">
	<div class="page-header">
		<h1>
			自适应栅格 <small>基于百分比的列宽</small>
		</h1>
	</div>

	<h2>自适应列</h2>
	<div class="row-fluid show-grid">
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
		<div class="span2">1</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span8">4</div>
		<div class="span8">4</div>
		<div class="span8">4</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span8">4</div>
		<div class="span16">8</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">6</div>
		<div class="span12">6</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span24">12</div>
	</div>

	<div class="row">
		<div class="span8">
			<h3>自适应的行</h3>
			<p>
				通过简单的修改
				<code>.row</code>
				为
				<code>.row-fluid</code>
				可以定义自适应行。 而列定义完全保持和原来相同，简单快速的在定宽和自适应间切换。
			</p>
		</div>
		<!-- /.span -->
		<div class="span8">
			<h3>代码</h3>
			<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
  &lt;div class="span16"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
		</div>
		<!-- /.span -->
	</div>
	<!-- /.row -->

	<h2>自适应嵌套</h2>
	<div class="row">
		<div class="span12">
			<p>在自适应列的嵌套中，子列的数值之和不一定等于父列，而是按照百分比计算的宽度。</p>
			<div class="row-fluid show-grid">
				<div class="span24">
					Fluid 12
					<div class="row-fluid show-grid">
						<div class="span6">Fluid 3</div>
						<div class="span12">Fluid 6</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.span -->
		<div class="span12">
			<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span24"&gt;
    Level 1 of column
    &lt;div class="row-fluid"&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
      &lt;div class="span12"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
		</div>
		<!-- /.span -->
	</div>
	<!-- /.row -->

</section>
