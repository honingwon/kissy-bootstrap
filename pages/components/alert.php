<!-- Alerts & Messages
================================================== -->
<section id="alert">
  <div class="page-header">
    <h1>提示信息（Alerts）<small>成功、警告和错误提示</small></h1>
  </div>
  <div class="row">
    <div class="span8">
      <h3>简单统一的信息提示</h3>
      <p>Alert主要包含2部分，关闭Icon（可选）和内容，外层用一个div包含并添加样式 <code>.alert-block</code>.</p>
      <hr>
      <h3>KISSY DPL 插件的支持</h3>
      <p>使用KISSY 的DPL插件可以使Alert具有关闭、拖动等功能</p>
      <p><a class="ks-button js-btn" href="dpl-plugin.php#message">获取 plugin &raquo;</a></p>
    </div>
    <div class="span16">
      <h3>示例</h3>
      <p>警告提示，包含提示信息和可选的关闭图标。</p>
      <div class="alert">
        <a class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert"&gt;
  &lt;a class="close" data-dismiss="alert"&gt;&times;&lt;/a&gt;
  &lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you're not looking too good.
&lt;/div&gt;
</pre>
      <p>可以简单的对Alert进行扩展:使用样式 <code>.alert-block</code> 可以增加额外的Padding;使用 <code>.alert-heading</code>可以添加标题。</p>
      <div class="alert alert-block">
        <a class="close" data-dismiss="alert">&times;</a>
        <h4 class="alert-heading">Warning!</h4>
        <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-block"&gt;
  &lt;a class="close" data-dismiss="alert"&gt;&times;&lt;/a&gt;
  &lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
  Best check yo self, you're not...
&lt;/div&gt;
</pre>
    </div>
  </div>

  <div class="row">
    <div class="span8">
      <h3>错误</h3>
      <div class="alert alert-error">
        <a class="close" data-dismiss="alert">&times;</a>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-error"&gt;
  ...
&lt;/div&gt;
</pre>
    </div>
    <div class="span8">
      <h3>成功</h3>
      <div class="alert alert-success">
        <a class="close" data-dismiss="alert">&times;</a>
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-success"&gt;
  ...
&lt;/div&gt;
</pre>
    </div>
    <div class="span8">
      <h3>提示</h3>
      <div class="alert alert-info">
        <a class="close" data-dismiss="alert">&times;</a>
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-info"&gt;
  ...
&lt;/div&gt;
</pre>
    </div>
  </div>
<script>
	KISSY.use('bootstrap/message',function(S,Message){
		S.all('.alert','#alert').each(function(item){
			new Message({srcNode : item});
		});
		
	});
</script>
</section>
