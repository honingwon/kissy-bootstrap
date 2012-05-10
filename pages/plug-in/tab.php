<!-- Tabs
================================================== -->
<section id="tab">
  <div class="page-header">
    <h1>Tab <small>切换Tab，显示不同的内容</small></h1>
  </div>
  <div class="row">
    <div class="span6">
      <h3>关于Tab</h3>
      <p>Tab分为2部分：导航区和内容区，这两部分的HTML结构需要事先写好，然后使用JS添加交互效果。</p>
      <p>使用一个容器包含导航区和内容区，导航区是一个使用了样式<code>ks-switchable-nav</code>的列表；内容区是使用了样式<code>ks-switchable-content</code>的列表，两个列表有一一对应的子元素。</p>
    </div>
    <div class="span18">
      <h3>tab示例</h3>
      <p>可以通过设置triggerType为“mouse”（鼠标Hover）或者”click“（鼠标点击），更改切换方式</p>
      <div id="J_Tab" class="tabbable" style="margin-bottom: 9px;">
        <ul class="nav nav-tabs ks-switchable-nav">
          <li ><a href="javascript:void('#')">Section 1</a></li>
          <li class=""><a href="javascript:void('#')">Section 2</a></li>
          <li class=""><a href="javascript:void('#')">Section 3</a></li>
        </ul>
        <div class="tab-content ks-switchable-content">
          <div id="1">
          <p>I'm in Section 1.</p>
          </div>
          <div class="hide" id="2">
          <p>Howdy, I'm in Section 2.</p>
          </div>
          <div class="hide" id="3">
          <p>What up girl, this is Section 3.</p>
          </div>
        </div>
      </div>
      <pre class="prettyprint linenums">
&lt;div id="J_Tab" class="tabbable" style="margin-bottom: 9px;"&gt;
  &lt;ul class="nav nav-tabs ks-switchable-nav"&gt;
    &lt;li &gt;&lt;a href="javascript:void('#')"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=""&gt;&lt;a href="javascript:void('#')"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=""&gt;&lt;a href="javascript:void('#')"&gt;Section 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content ks-switchable-content"&gt;
    &lt;div id="1"&gt;
    &lt;p&gt;I'm in Section 1.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="hide" id="2"&gt;
    &lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="hide" id="3"&gt;
    &lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </pre>
      <pre class="prettyprint linenums">
KISSY.use("datalazyload,switchable", function(S,_,Switchable) {
  var Tabs = Switchable.Tabs;
  //通过DOM元素demo2新那一个Tab
  var tabs = new Tabs('#J_Tab', {
    switchTo : 0,
    triggerType : 'click'
  })

});
      </pre>
    </div>
  </div>

	<script>
		KISSY.use("datalazyload,switchable", function(S,_,Switchable) {
			var Tabs = Switchable.Tabs;
			//通过DOM元素demo2新那一个Tab
			var tabs = new Tabs('#J_Tab', {
				switchTo : 0,
				triggerType : 'click'
			})

		});
	</script>
</section>