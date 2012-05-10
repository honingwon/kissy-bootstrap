<!-- Progress bars
================================================== -->
<section id="progress">
  <div class="page-header">
    <h1>进度条<small>进行加载、渲染和动作时使用的组件</small></h1>
  </div>

  <h2>示例和标签</h2>
  <div class="row">
    <div class="span8">
      <h3>基本示例</h3>
      <p>默认的进度条有垂直的渐变色。</p>
      <div class="progress">
        <div class="bar" style="width: 60%;"></div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress"&gt;
  &lt;div class="bar"
       style="width: 60%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span8">
      <h3>有条纹的进度条</h3>
      <p>使用渐变创建条纹效果（IE不支持）。</p>
      <div class="progress progress-striped">
        <div class="bar" style="width: 20%;"></div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-striped"&gt;
  &lt;div class="bar"
       style="width: 20%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span8">
      <h3>有动画效果的进度条</h3>
      <p>使用有条纹的进度条，并添加动画效果(IE不支持)。</p>
      <div class="progress progress-striped active">
        <div class="bar" style="width: 45%"></div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-striped
     active"&gt;
  &lt;div class="bar"
       style="width: 40%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>

  <h2>可选项和浏览器支持</h2>
  <div class="row">
    <div class="span6">
      <h3>额外的颜色支持</h3>
      <p>进度条使用许多跟按钮和信息提示一致的样式，保证系统的一致性。</p>
      <div class="progress progress-info" style="margin-bottom: 9px;">
        <div class="bar" style="width: 20%"></div>
      </div>
      <div class="progress progress-success" style="margin-bottom: 9px;">
        <div class="bar" style="width: 40%"></div>
      </div>
      <div class="progress progress-warning" style="margin-bottom: 9px;">
        <div class="bar" style="width: 60%"></div>
      </div>
      <div class="progress progress-danger" style="margin-bottom: 9px;">
        <div class="bar" style="width: 80%"></div>
      </div>
    </div>
     <div class="span6">
      <h3>有条纹的进度条</h3>
      <p>类似于固定颜色的进度条，条纹的颜色也有多种选择。</p>
      <div class="progress progress-info progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 20%"></div>
      </div>
      <div class="progress progress-success progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 40%"></div>
      </div>
      <div class="progress progress-warning progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 60%"></div>
      </div>
      <div class="progress progress-danger progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 80%"></div>
      </div>
    </div>
    <div class="span6">
      <h3>行为</h3>
      <p>进度条使用CSS3转换，如果你使用Javascript操作动态宽度的进度条，这会非常容易的改变尺寸。</p>
      <p>加入你使用 <code>.active</code>样式，你使用样式 <code>.progress-striped</code> 后，进度条将产生从左到右的动画效果。</p>
    </div>
    <div class="span6">
      <h3>浏览器支持</h3>
      <p>进度条使用css3的渐变、转换和动画实现视觉效果。这些特性在Ie7-9中或者老的fifox版本中不支持。</p>
      <p>Opera 和 IE 浏览器现在不支持动画效果。</p>
    </div>
  </div>

</section>

