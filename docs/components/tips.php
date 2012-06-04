<!-- Tips -->
<section id="tips">
	<div class="page-header">
    <h1>Tips <small>鼠标移动到元素上的信息提示</small></h1>
  </div>
	<div class="row">
		<div class="span8">
			<h3>关于Tips</h3>
			<p>其实就是ToolTips,当鼠标移动到某些元素上时显示的文本框，用于解释当前元素或者显示更详细的信息。</p>
			<p>对于HTML元素而言，在属性中添加 <code>title=""</code>时会出现ToolTips效果，我们重写了系统的默认样式，所以必须以javascript的插件引入，具体参考 KISSY DPL 插件 Tips</p>
		</div>
		
		<div class="span16">
			<h3>示例</h3>
			<p id="J_Tips" class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel="tooltip" title="first tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
			</p>
			<h3>HTML代码</h3>
			<p>tooltip的代码是javascript自动生成的，这里显示的是触发元素的HTML</p>
<pre class="prettyprint linenums">
	&lt;a href="#" rel="tooltip" title="first tooltip"&gt;hover over me&lt;/a&gt;
</pre>
		</div>
	</div>
	<div class="row">
		<div class="span8">
			<h3>复杂的Tips</h3>
			<p>如果想在tooltip里添加比较长的文本或者嵌套HTML代码并附加样式的话，必须指定嵌入的HTML,在调用tooltip的插件时配置，详细信息参考KISSY DPL 插件 Tips</p>
		</div>
		<div class="span16">
			<h3>示例</h3>
			<div style="height:120px;position:relative">
				<div class="popover fade right in" style="display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">A Title</h3><div class="popover-content"><p>And here's some amazing content. It's very engaging. right?</p></div></div></div>

			</div>
		</div>
	</div>
	<script>
		KISSY.use('bootstrap/tooltip',function(S,Tooltip){
			Tooltip({selector : '#J_Tips a'});
		});
	</script>
</section>