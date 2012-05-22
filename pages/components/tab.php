<section id="tab">
  <div class="page-header">
    <h1>Tabs <small>切换页面内容的组件</small></h1>
  </div>
  <div class="row">
    <div class="span8">
      <h3>Tabs</h3>
      <p>Tabs 分为导航和内容2部分，主要用于展示相同类型的内容，用于页面内或页面间切换</p>
      <h3>对齐方式</h3>
      <p>可以使用<code>.pull-left</code>或者<code>.pull-right</code>设置导航链接的对齐方式</p>
    </div>
    <div class="span16">
      <h3>Tabs简单示例</h3>
      <p>使用基本的<code>&lt;ul&gt;</code>组织链接，同时添加样式<code>.nav-tabs</code></p>
      <ul class="nav nav-tabs">
        <li class="ks-active pull-left"><a href="#">Home</a></li>
        <li class="pull-left"><a href="#">Profile</a></li>
        <li class="pull-left"><a href="#">Messages</a></li>
      </ul>
      <pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="ks-active pull-left"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li class="pull-left"&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li class="pull-left"&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
      </pre>
    </div>
    
  </div>
  <div class="row">
    <div class="span8">
      <h3>Tabs纵向排列</h3>
      <p>Tabs的导航默认横向排列，可以通过添加样式<code>.nav-stacked</code>的方式，使之看起来像一个纵向排列的堆栈</p>
    </div>
    <div class="span16">
      <h3>纵向排列示例</h3>
      <ul class="nav nav-tabs nav-stacked">
        <li class="ks-active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs nav-stacked"&gt;
  &lt;li class="ks-active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
      </pre>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <h3>Tabs可切换插件</h3>
      <p>为了使Tab能够切换，添加了KISSY的插件。KISSY DPL插件，有种样式可供选择</p>
      <p>选择不同方式，仅需要更改少量标签</p>
    </div>
    <div class="span16">
      <h3>可切换Tabs示例</h3>
      <p>为了使Tabs可以切换，在<code>.nav-tabs</code>的外层包装一层 div 并添加样式<code>.tabbable</code></p>
      <div class="tabbable" style="margin-bottom: 9px;">
        <ul class="nav nav-tabs">
          <li class="ks-active"><a href="#" data-toggle="tab">Section 1</a></li>
          <li class=""><a href="#" data-toggle="tab">Section 2</a></li>
          <li class=""><a href="#" data-toggle="tab">Section 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane ks-active" id="1">
          <p>I'm in Section 1.</p>
          </div>
          <div class="tab-pane" id="2">
          <p>Howdy, I'm in Section 2.</p>
          </div>
          <div class="tab-pane" id="3">
          <p>What up girl, this is Section 3.</p>
          </div>
        </div>
        </div>
      <pre  class="prettyprint linenums">
&lt;div class="tabbable" style="margin-bottom: 9px;"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    &lt;li class="ks-active"&gt;&lt;a href="#" data-toggle="tab"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=""&gt;&lt;a href="#" data-toggle="tab"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=""&gt;&lt;a href="#" data-toggle="tab"&gt;Section 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    &lt;div class="tab-pane ks-active" id="1"&gt;
    &lt;p&gt;I'm in Section 1.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane" id="2"&gt;
    &lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane" id="3"&gt;
    &lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </pre>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <h3>Tabs导航在下面</h3>
      <p>更改HTML标签的顺序，并且添加样式<code>.tabs-below</code>，使导航在下面</p>
      <div class="tabbable tabs-below">
        <div class="tab-content">
          <div class="tab-pane" id="A">
          <p>I'm in Section A.</p>
          </div>
          <div class="tab-pane" id="B">
          <p>Howdy, I'm in Section B.</p>
          </div>
          <div class="tab-pane ks-active" id="C">
          <p>What up girl, this is Section C.</p>
          </div>
        </div>
        <ul class="nav nav-tabs">
          <li class=""><a href="#" data-toggle="tab">Section 1</a></li>
          <li class=""><a href="#" data-toggle="tab">Section 2</a></li>
          <li class="ks-active"><a href="#" data-toggle="tab">Section 3</a></li>
        </ul>
        </div>
        <pre>
&lt;div class="tabbable tabs-below"&gt;
  &lt;div class="tab-content"&gt;
    &lt;!-- tab content--&gt;
  &lt;/div&gt;
  &lt;ul class="nav nav-tabs"&gt;
    &lt;!-- tab navs--&gt;
  &lt;/ul&gt;
&lt;/div&gt;
        </pre>
    </div>
    <div class="span8">
      <h3>Tabs 导航在左侧</h3>
      <p>添加样式<code>.tabs-left</code></p>
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="ks-active"><a href="#" data-toggle="tab">Section 1</a></li>
          <li><a href="#" data-toggle="tab">Section 2</a></li>
          <li><a href="#" data-toggle="tab">Section 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane ks-active" id="lA">
            <p>I'm in Section A.</p>
          </div>
          <div class="tab-pane" id="lB">
            <p>Howdy, I'm in Section B.</p>
          </div>
          <div class="tab-pane" id="lC">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
      </div>
      <pre class="prettyprint linenums">
&lt;div class="tabbable tabs-left"&gt;
  &lt;ul class="nav nav-tabs"&gt;
     &lt;!-- tab content--&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
     &lt;!-- tab navs--&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </pre>
    </div>
    <div class="span8">
      <h3>Tabs 导航在右侧</h3>
      <p>添加样式<code>.tabs-right</code></p>
      <div class="tabbable tabs-right">
        <ul class="nav nav-tabs">
          <li class="ks-active"><a href="#" data-toggle="tab">Section 1</a></li>
          <li><a href="#" data-toggle="tab">Section 2</a></li>
          <li><a href="#" data-toggle="tab">Section 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane ks-active" id="lA">
            <p>I'm in Section A.</p>
          </div>
          <div class="tab-pane" id="lB">
            <p>Howdy, I'm in Section B.</p>
          </div>
          <div class="tab-pane" id="lC">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
      </div>
      <pre class="prettyprint linenums">
&lt;div class="tabbable tabs-right"&gt;
  &lt;ul class="nav nav-tabs"&gt;
     &lt;!-- tab content--&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
     &lt;!-- tab navs--&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </pre>
    </div>
  </div>
	<div>
		
	</div>
	<script>
		KISSY.use("datalazyload,switchable", function(S,_,Switchable) {
			var Tabs = Switchable.Tabs;
			S.Event.delegate(document,'click','a',function(e){
				var sender = S.one(e.target);
				if(sender.attr('href')==='#')
				{
					e.halt();
				}
			});
			S.all('.tabbable','#tab').each(function(item){
				//通过DOM元素demo2新那一个Tab
				var tabs = new Tabs(item[0], {
					switchTo : 0,
					triggerType : 'click',
					contentCls : 'tab-content',
					navCls : 'nav-tabs'
				});
			});
			
			

		});
	</script>
</section>