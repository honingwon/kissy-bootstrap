<!-- tooltips
================================================== -->
<section id="tooltip">
	<div class="page-header">
    <h1>tips <small>鼠标移动到元素上显示详细信息</small></h1>
  </div>
	<div class="row">
    <div class="span6">
			<h3>关于tips</h3>
			<p>可以用自定义的样式替代HTML默认的<code>title</code>属性</p>
		</div>
		 <div class="span18">
			<h3>简单tips示例</h3>
			<p>在HTMl标签上添加<code>title</code>属性并引入js</p>
			<p id="J_Tips" class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel="tooltip" title="first tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
     </p>
		 <pre class="prettyprint linenums">
&lt;a href="#" rel="tooltip" title="first tooltip"&gt;			
		 </pre>
		 <pre class="prettyprint linenums">
KISSY.use('js/tooltip',function(S,Tooltip){
	Tooltip({selector : '#J_Tips a'});
});
		 </pre>
		</div>
		<script>
			KISSY.use('js/tooltip',function(S,Tooltip){
				Tooltip({selector : '#J_Tips a'});
			});
		</script>
	</div>
</section>