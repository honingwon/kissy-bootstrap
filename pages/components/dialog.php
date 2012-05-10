<!-- Progress bars
================================================== -->
<section id="dialog">
  <div class="page-header">
    <h1>Dialog <small>模态窗口</small></h1>
  </div>
	<div class="row">
		<div class="span8">
			<h3>关于模态窗口</h3>
			<p>一般用于显示详细信息、添加/编辑文本和进行某种确认，当显示模态窗口时，为了防止编辑原有页面的内容会添加一个屏蔽层</p>
			<p>模态窗口要配合KISSY DPL的插件使用</p>
		</div>
		<div class="span16">
			<h3>示例</h3>
			<p>你可以简单的利用javascript插件实现一个模态窗口，仅需要在HTML标签中配置 <code>data-toggle="modal"</code> 作为触发模态窗口的控制器，同时指定 <code>data-target="#foo"</code> 或者 <code>href="#foo"</code> 来关联要弹出的元素的ID，这些内容将显示在模态对话框中。</p>
			<p>同时，配置模态窗口的配置项，可以在控制器或者模态窗口的标签上配置一些数据。</p>
		<div class="well modal-example" style="background-color: #888; border: none;">
			<div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1">
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">×</a>
					<h3>Modal header</h3>
				</div>
				<div class="modal-body">
					<p>One fine body…</p>
				</div>
				<div class="modal-footer">
					<a href="#" class="ks-button">Close</a>
					<a href="#" class="ks-button ks-button-primary">Save changes</a>
				</div>
			</div>
		</div>
					
<pre class="prettyprint linenums">
&lt;a class="ks-button" data-toggle="modal" href="#myModal" &gt;Launch Modal&lt;/a&gt;
</pre>

<pre class="prettyprint linenums">
&lt;div class="modal" id="myModal"&gt;
  &lt;div class="modal-header"&gt;
    &lt;a class="close" data-dismiss="modal"&gt;&times;&lt;/a&gt;
    &lt;h3&gt;Modal header&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;One fine body…&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="ks-button"&gt;Close&lt;/a&gt;
    &lt;a href="#" class="ks-button ks-button-primary"&gt;Save changes&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
			
		</div>
	</div>
</section>
