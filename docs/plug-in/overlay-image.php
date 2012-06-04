<!-- overlay images-->
<section id="overlay-image">
  <div class="page-header">
    <h1>放大图片 <small>将图片最大化显示</small></h1>
  </div>
  <div class="row">
    <div class="span6">
      <h3>控件说明</h3>
      <p>在页面上显示小图片，点击时屏蔽当前的页面，显示放大的图片，可以切换显示图片,有2中方式可以实现</p>
      <p>1. 事先生成Dom，然后引入JS</p>
      <p>2. 所有图片都是通过配置项由JS生成DOM</p>
    </div>
    <div class="span18">
      <h3>图片列表示例</h3>
      <p>在页面上显示小图片，将大图片的地址配置到对应的图片上，配置对应的JS，在<code>a</code>标签上添加大图的链接，并添加样式<code>thumbnail</code>,内部嵌入显示的小图片，点击小图片时显示大图。</p>
      <ul id="J_OI" class="thumbnails">
        <li class="span6">
          <a title="点击第一个" href="http://lokeshdhakar.com/projects/lightbox2/images/examples/image-3.jpg" class="thumbnail">
            <img src="http://lokeshdhakar.com/projects/lightbox2/images/examples/thumb-3.jpg" alt="1/3">
          </a>
        </li>
        <li class="span6">
          <a title="点击第二个" href="http://lokeshdhakar.com/projects/lightbox2/images/examples/image-4.jpg" class="thumbnail">
            <img src="http://lokeshdhakar.com/projects/lightbox2/images/examples/thumb-4.jpg" alt="2/3">
          </a>
        </li>
        <li class="span6">
          <a title="点击第三个" href="http://lokeshdhakar.com/projects/lightbox2/images/examples/image-5.jpg" class="thumbnail">
            <img src="http://lokeshdhakar.com/projects/lightbox2/images/examples/thumb-5.jpg" alt="3/3">
          </a>
        </li>
        </li>
      </ul>
      <pre class="prettyprint linenums">
&lt;ul id="J_OI" class="thumbnails"&gt;
&lt;li class="span6"&gt;
  &lt;a title="点击第一个" href="http://lokeshdhakar.com/projects/lightbox2/images/examples/image-3.jpg" class="thumbnail"&gt;
    &lt;img src="http://lokeshdhakar.com/projects/lightbox2/images/examples/thumb-3.jpg" alt="1/3"&gt;
  &lt;/a&gt;
&lt;/li&gt;
&lt;li class="span6"&gt;
  &lt;a title="点击第二个" href="http://lokeshdhakar.com/projects/lightbox2/images/examples/image-4.jpg" class="thumbnail"&gt;
    &lt;img src="http://lokeshdhakar.com/projects/lightbox2/images/examples/thumb-4.jpg" alt="2/3"&gt;
  &lt;/a&gt;
&lt;/li&gt;
&lt;li  class="span6"&gt;
  &lt;a title="点击第三个" href="http://lokeshdhakar.com/projects/lightbox2/images/examples/image-5.jpg" class="thumbnail"&gt;
    &lt;img src="http://lokeshdhakar.com/projects/lightbox2/images/examples/thumb-5.jpg" alt="3/3"&gt;
  &lt;/a&gt;
&lt;/li&gt;
&lt;/li&gt;
&lt;/ul&gt;
      </pre>
			<pre class="prettyprint linenums">
KISSY.use('bootstrap/overlayimage',function(S,OverlayImage){
	new OverlayImage({
		srcNode : '#J_OI'
	});
});				
			</pre>
		</div>
	</div>
	<script>
		KISSY.use('bootstrap/overlayimage',function(S,OverlayImage){
			new OverlayImage({
				srcNode : '#J_OI'
			});
		});
	</script>
</section>