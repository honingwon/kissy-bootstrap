<!-- Pagination
================================================== -->
<section id="pagination">
  <div class="page-header">
    <h1>分页栏 <small>2种分页选择</small></h1>
  </div>

  <h2>多页分页</h2>
  <div class="row">
    <div class="span8">
      <h3>有状态的页链接</h3>
      <p>链接根据当前页的状态使用了了合适的样式，例如当页面不能点击时使用<code>.disabled</code>样式；当前页使用<code>.active</code>样式。</p>
      <h3>灵活的对齐方式</h3>
      <p>可以再分页的链接上添加2种样式，改变文字的对齐方式：<code>.pagination-centered</code> 和<code>.pagination-right</code>。</p>
    </div>
    <div class="span8">
      <h3>示例</h3>
      <p>默认的分页组件是一个灵活的使用数字变量的组件.</p>
      <div class="pagination">
        <ul>
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">10</a></li>
          <li class="active"><a href="#">11</a></li>
          <li><a href="#">12</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li><a href="#">&larr;</a></li>
          <li class="active"><a href="#">10</a></li>
          <li class="disabled"><a href="#">...</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">&rarr;</a></li>
        </ul>
      </div>
      <div class="pagination pagination-centered">
        <ul>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
      </div>
    </div>
    <div class="span8">
      <h3>HTML 标签</h3>
      <p>分页栏是一个封装在<code>&lt;div&gt;</code>中的<code>&lt;ul&gt;</code>列表。</p>
<pre class="prettyprint linenums">
&lt;div class="pagination"&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href="#"&gt;Prev&lt;/a&gt;&lt;/li>
    &lt;li class="active"&gt;
      &lt;a href="#"&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Next&lt;/a&gt;&lt;/li>
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
  </div><!-- /row -->

  <h2>简单分页栏 <small>仅使用下一页和上一页</small></h2>
  <div class="row">
    <div class="span8">
      <h3>关于简单分页栏</h3>
      <p>简单分页栏使用一些非常简单的标签和轻量的样式来实现，这非常适用于博客和新闻之类的简单网站。</p>
      <h4>可选的禁用状态</h4>
      <p>简单分页栏跟一般分页栏一样可以使用 <code>.disabled</code>样式。</p>
    </div>
    <div class="span8">
      <h3>示例</h3>
      <p>简单分页栏是文本默认居中的链接。</p>
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Previous&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Next&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
    <div class="span8">
      <h3>链接的对其方式</h3>
      <p>作为一种选择，你可以将链接分别对其两边：</p>
      <ul class="pager">
        <li class="previous"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
  &lt;li class="previous"&gt;
    &lt;a href="#"&gt;&amp;larr; Older&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="next"&gt;
    &lt;a href="#"&gt;Newer &amp;rarr;&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
  </div><!-- /row -->
</section>


