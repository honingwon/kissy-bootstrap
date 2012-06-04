<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>字体排版 <small>标题、段落、列表等等</small></h1>
  </div>

  <h2>标题</h2>
  <!-- Headings & Paragraph Copy -->
  <div class="row">
    <div class="span24">
      <div class="well">
        <h1>h1. 标题 1</h1>
        <h2>h2. 标题 2</h2>
        <h3>h3. 标题 3</h3>
        <h4>h4. 标题 4</h4>
        <h5>h5. 标题 5</h5>
        <h6>h6. 标题 6</h6>
      </div>
    </div>
  </div>

  <!-- Blockquotes -->
  <h2>引用块</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>元素</th>
        <th>使用方式</th>
        <th>备注</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;blockquote&gt;</code>
        </td>
        <td>
          引用其它出处文字块
        </td>
        <td>
          <p><code>cite</code> 属性可以用来标注文字出处。</p>
          class设置为 <code>.pull-left</code> 或 <code>.pull-right</code> 可以改变浮动的方向。
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;small&gt;</code>
        </td>
        <td>
          可选的元素，用来描述引用文字的出处。
        </td>
        <td>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="span24">
<pre class="prettyprint linenums">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.&lt;/p&gt;
  &lt;small&gt;Someone famous&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
    </div>
  </div><!--/row-->

  <h3>样例</h3>
  <div class="row">
    <div class="span12">
      <p>默认的引用块样式:</p>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
    <div class="span12">
      <p>通过增加 <code>class="pull-right"</code> 让引用块浮动到右边:</p>
      <blockquote class="pull-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
  </div>


  <!-- Lists -->
  <h2>列表</h2>
  <div class="row">
    <div class="span8">
      <h3>无序列表</h3>
      <p><code>&lt;ul&gt;</code></p>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span8">
      <h3>无样式列表</h3>
      <p><code>&lt;ul class="unstyled"&gt;</code></p>
      <ul class="unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span8">
      <h3>有序列表</h3>
      <p><code>&lt;ol&gt;</code></p>
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
  </div><!-- /row -->

</section>