<!-- Buttons
================================================== -->
<section id="buttons">
  <div class="page-header">
    <h1>按钮</h1>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>按钮</th>
        <th>应用的样式（class=""）</th>
        <th>描述</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button class="ks-button" href="#">Default</button></td>
        <td><code>ks-button</code></td>
        <td>默认的灰色按钮，并带有渐变色</td>
      </tr>
      <tr>
        <td><button class="ks-button ks-button-primary" href="#">Primary</button></td>
        <td><code>ks-button ks-button-primary</code></td>
        <td>提供更深的色度来表明在按钮组中是最重要的行为</td>
      </tr>
      <tr>
        <td><button class="ks-button ks-button-info" href="#">Info</button></td>
        <td><code>ks-button ks-button-info</code></td>
        <td>默认样式的一种替代方案</td>
      </tr>
      <tr>
        <td><button class="ks-button ks-button-success" href="#">Success</button></td>
        <td><code>ks-button ks-button-success</code></td>
        <td>表示一个成功的或者有积极意义的行为</td>
      </tr>
      <tr>
        <td><button class="ks-button ks-button-warning" href="#">Warning</button></td>
        <td><code>ks-button ks-button-warning</code></td>
        <td>表明警告，并需要采取这种行为的操作</td>
      </tr>
      <tr>
        <td><button class="ks-button ks-button-danger" href="#">Danger</button></td>
        <td><code>ks-button ks-button-danger</code></td>
        <td>表明一个危险的或者潜在的有消极意义的行为</td>
      </tr>
      <tr>
        <td><button class="ks-button ks-button-inverse" href="#">Inverse</button></td>
        <td><code>ks-button ks-button-inverse</code></td>
        <td>深灰色的按钮，默认按钮的一种替代按钮，跟语义无关的操作</td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="span8">
      <h3>按钮的行为</h3>
      <p>一般而言，按钮仅当链接作为一个行为对象时来使用时。例如“下载”应当为一个按钮，“最近活动”应该是一个链接。</p>
      <p>按钮的样式可以使用任何标签并添加样式 <code>.ks-button</code> 。但是一般而言你应该仅使用 <code>&lt;a&gt;</code> 和 <code>&lt;button&gt;</code> 元素。</p>
      
    </div>
    <div class="span8">
      <h3>多种尺寸</h3>
      <p>你喜欢大的还是小的按钮？添加样式<code>.ks-button-large</code>, <code>.ks-button-small</code>或者 <code>.ks-button-mini</code>实现不同的样式。</p>
      <p>
        <button class="ks-button ks-button-large ks-button-primary">Primary action</button>
        <button class="ks-button ks-button-large">Action</button>
      </p>
      <p>
        <button class="ks-button ks-button-small ks-button-primary">Primary action</button>
        <button class="ks-button ks-button-small">Action</button>
      </p>
      <p>
        <button class="ks-button ks-button-mini ks-button-primary">Primary action</button>
        <button class="ks-button ks-button-mini">Action</button>
      </p>
      <br>
      <h3>不可用状态</h3>
      <p>对于不可用的按钮来说, 分别添加 <code>.disabled</code> 样式给链接和 <code>disabled</code> 属性给 <code>&lt;button&gt;</code>元素。</p>
      <p>
        <a href="#" class="ks-button ks-button-large ks-button-primary disabled">Primary link</a>
        <a href="#" class="ks-button ks-button-large disabled">Link</a>
      </p>
      <p style="margin-bottom: 18px;">
        <button class="ks-button ks-button-large ks-button-primary disabled" disabled="disabled">Primary button</button>
        <button class="ks-button ks-button-large" disabled>Button</button>
      </p>
      <p>
        <span class="label label-info">警告！</span>
        我们在这里使用 <code>.disabled</code> 帮助样式, 类似于<code>.active</code>样式， 所以不需要前缀.
      </p>
    </div>
    <div class="span8">
      <h3>同一个样式，多种标签的实现</h3>
      <p>使用 <code>.ks-button</code> 样式在以下标签上 <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, 或者 <code>&lt;input&gt;</code> 。</p>
<form>
<a class="ks-button" href="#">Link</a>
<button class="ks-button" type="submit">Button</button>
<input class="ks-button" type="button" value="Input">
<input class="ks-button" type="submit" value="Submit">
</form>
<pre class="prettyprint linenums">
&lt;a class="ks-button" href=""&gt;Link&lt;/a&gt;
&lt;button class="ks-button" type="submit"&gt;
  Button
&lt;/button&gt;
&lt;input class="ks-button" type="button"
         value="Input"&gt;
&lt;input class="ks-button" type="submit"
         value="Submit"&gt;
</pre>
      <p>作为一个最佳实践，假如你使用<code>input</code>, 那么就用<code>&lt;input type="submit"&gt;</code> 实现你的按钮来兼容跨浏览器的渲染。</p>
    </div>
  </div>
</section>
<!-- Button Groups
================================================== -->
<section id="buttonGroups">
  <div class="page-header">
    <h1>按钮组 <small>将多个按钮组合成工具栏</small></h1>
  </div>
  <div class="row">
    <div class="span8">
      <h3>按钮组</h3>
      <p>使用按钮组就是把多个按钮组合成一个复杂的组件。 使用一系列的 <code>&lt;a&gt;</code> 或者 <code>&lt;button&gt;</code> 元素。</p>
      <h3>最佳实践</h3>
      <p>我们建议用下面的指引使用按钮组和工具栏:</p>
      <ul>
        <li>始终使用相同的元素在一个单一的按钮组, <code>&lt;a&gt;</code> 或者 <code>&lt;button&gt;</code>。</li>
        <li>不要在同一个按钮组使用不同颜色的按钮。</li>
        <li>使用图标以补充或代替文本, 但是要适当的添加 alt和title属性。</li>
      </ul>
      <p><span class="label label-info">关联内容</span> 按钮组和下拉按钮（见下文）应该被区分开来，下拉按钮应该使用一个下拉图标来表明预期的行为。</p>
    </div>
    <div class="span8">
      <h3>按钮组 示例</h3>
      <p>使用html展示如何用 <code>&lt;a&gt;</code> 标签构造按钮组:</p>
      <div class="">
        <div class="ks-button-group" style="margin: 9px 0;">
          <button class="ks-button">Left</button>
          <button class="ks-button">Middle</button>
          <button class="ks-button">Right</button>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="ks-button-group"&gt;
  &lt;button class="ks-button"&gt;1&lt;/button&gt;
  &lt;button class="ks-button"&gt;2&lt;/button&gt;
  &lt;button class="ks-button"&gt;3&lt;/button&gt;
&lt;/div&gt;
</pre>
      <h3>工具栏 示例</h3>
      <p>将一系列的 <code>&lt;div class="ks-button-group"&gt;</code>放入<code>&lt;div class="ks-button-toolbar"&gt;</code>  组合成更加复杂的组件。</p>
      <div class="ks-button-toolbar">
        <div class="ks-button-group">
          <button class="ks-button">1</button>
          <button class="ks-button">2</button>
          <button class="ks-button">3</button>
          <button class="ks-button">4</button>
        </div>
        <div class="ks-button-group">
          <button class="ks-button">5</button>
          <button class="ks-button">6</button>
          <button class="ks-button">7</button>
        </div>
        <div class="ks-button-group">
          <button class="ks-button">8</button>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="ks-button-toolbar"&gt;
  &lt;div class="ks-button-group"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span8">
      <h3>复选和单选</h3>
      <p>按钮组可以实现复选框和单选框的功能，当只有一个按钮能被选中时可以用作单选框，多个按钮可以选中时用作复选框. 参考 <a href="dpl-plugin.php#button">the Javascript docs</a> 查看更多内容。</p>
      <h3>下拉按钮在按钮组中</h3>
      <p><span class="label label-info">警告!</span> 在工具栏<code>.ks-button-toolbar</code>中使用下拉按钮应该单独的被包含在<code>.ks-button-group</code>。</p>
    </div>
  </div>
</section>

<!-- Split button dropdowns
================================================== -->
<section id="buttonDropdowns">
  <div class="page-header">
    <h1>下拉按钮 <small>构建支持下拉菜单的按钮组</small></h1>
  </div>

  <h2>下拉按钮</h2>
  <div class="row">
    <div class="span8">
      <h3>概述和示例</h3>
      <p>使用按钮代替下拉菜单，设置class <code>.ks-button-group</code> 和合适的标签。</p>
      <div class="ks-button-toolbar" style="margin-top: 18px;">
       
          <div class="ks-button dropdown-toggle">Action
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>

       
          <div class="ks-button ks-button-primary dropdown-toggle" data-toggle="dropdown">Action 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>

       
          <div class="ks-button ks-button-danger dropdown-toggle" data-toggle="dropdown">
          Danger 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          

      </div>
      <div class="ks-button-toolbar">
          <div class="ks-button ks-button-warning dropdown-toggle" data-toggle="dropdown">
          Warning 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>

          <div class="ks-button ks-button-success dropdown-toggle" data-toggle="dropdown">Success
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>

          <div class="ks-button ks-button-info dropdown-toggle" data-toggle="dropdown">Info 
              <ul class="ks-menu ks-popupmenu">
                <li class="ks-menuitem">Action</li>
                <li class="ks-menuitem">Another action</li>
                <li class="ks-menuitem">Something else here</li>
              </ul>
          </div>
          <div class="ks-button ks-button-inverse dropdown-toggle" data-toggle="dropdown">Inverse 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
      </div><!-- /ks-button-toolbar -->
    </div>
    <div class="span16">
      <h3>示例</h3>
      <p>类似于按钮组，我们使用通用的按钮标签和一些重新定义了的样式来支持kissy的DPL插件.</p>
<pre class="prettyprint linenums">
&lt;div class="ks-button dropdown-toggle"&gt;Action
  &lt;ul class="ks-menu ks-popupmenu"&gt;
    &lt;li class="ks-menuitem"&gt;Action&lt;/li&gt;
    &lt;li class="ks-menuitem"&gt;Another action&lt;/li&gt;
    &lt;li class="ks-menuitem"&gt;Something else here&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <h3>可以适用于各种尺寸的按钮</h3>
      <p>下拉按钮适用于多种尺寸大小. 你可以定义 <code>.ks-button-large</code>, <code>.ks-button-small</code>, 或者 <code>.ks-button-mini</code>三种类型。</p>
      <div class="ks-button-toolbar" style="margin-top: 18px;">
          <div class="ks-button ks-button-large dropdown-toggle" data-toggle="dropdown">Large button 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          

          <div class="ks-button ks-button-small dropdown-toggle" data-toggle="dropdown">Small button 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>

          <div class="ks-button ks-button-mini dropdown-toggle" data-toggle="dropdown">Mini button 
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>

      </div><!-- /ks-button-toolbar -->
    </div><!--/span-->
    <div class="span8">
      <h3>javascript 依赖</h3>
      <p>下拉按钮依赖于<a href="dpl-plugin.php#drowpButton">DPL 下拉按钮插件</a>。</p>
      <p>在某些情形下&mdash;利于移动设备&mdash;下拉按钮可能会超出当前的可视区域. 你需要手动或者使用javascript的方式解决屏幕的自适应问题。</p>
    </div><!--/span-->
  </div><!--/row-->
  <br>

  <h2>分离式下拉按钮</h2>
  <div class="row">
    <div class="span8">
      <h3>概述和示例</h3>
      <p>在分组按钮的样式和标签基础上我们可以很容易的创建分离式下拉按钮。分离式下拉按钮左边部分有标准的按钮功能，右边部分有一个下拉菜单。</p>
      <div class="ks-button-toolbar" style="margin-top: 18px;">
        <div class="ks-button-group">
          <div class="ks-button">Action</div>
          <div class="ks-button dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
        </div><!-- /ks-button-group -->
        <div class="ks-button-group">
          <div class="ks-button ks-button-primary">Action</div>
          <div class="ks-button ks-button-primary dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          
        </div><!-- /ks-button-group -->
        <div class="ks-button-group">
          <div class="ks-button ks-button-danger">Danger</div>
          <div class="ks-button ks-button-danger dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          
        </div><!-- /ks-button-group -->
      </div>
      <div class="ks-button-toolbar">
        <div class="ks-button-group">
          <div class="ks-button ks-button-warning">Warning</div>
          <div class="ks-button ks-button-warning dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
         
        </div><!-- /ks-button-group -->
        <div class="ks-button-group">
          <div class="ks-button ks-button-success">Success</div>
          <div class="ks-button ks-button-success dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          
        </div><!-- /ks-button-group -->
        <div class="ks-button-group">
          <div class="ks-button ks-button-info">Info</div>
          <div class="ks-button ks-button-info dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
        </div><!-- /ks-button-group -->
      </div>
      <div class="ks-button-toolbar">
        <div class="ks-button-group">
          <div class="ks-button ks-button-inverse">Inverse</div>
          <div class="ks-button ks-button-inverse dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
        </div><!-- /ks-button-group -->
      </div><!-- /ks-button-toolbar -->
      <h3>尺寸</h3>
      <p>可以设置额外的按钮样式<code>.ks-button-mini</code>, <code>.ks-button-small</code>, 或者 <code>。ks-button-large</code> 来定义按钮的大小</p>
      <div class="ks-button-toolbar">
        <div class="ks-button-group">
          <div class="ks-button ks-button-large">Large action</div>
          <div class="ks-button ks-button-large dropdown-toggle" >
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          
        </div><!-- /ks-button-group -->
      </div><!-- /ks-button-toolbar -->
      <div class="ks-button-toolbar">
        <div class="ks-button-group">
          <div class="ks-button ks-button-small">Small action</div>
          <div class="ks-button ks-button-small dropdown-toggle" >
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
        </div><!-- /ks-button-group -->
      </div><!-- /ks-button-toolbar -->
      <div class="ks-button-toolbar">
        <div class="ks-button-group">
          <div class="ks-button ks-button-mini">Mini action</div>
          <div class="ks-button ks-button-mini dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
        </div><!-- /ks-button-group -->
      </div><!-- /ks-button-toolbar -->

    </div>
    <div class="span16">
      <h3>标签示例</h3>
      <p>我们利用第二个按钮动作扩展了下拉按钮，点击右边图标时触发。</p>
<pre class="prettyprint linenums">
&lt;div class="ks-button-group"&gt;
  &lt;div class="ks-button ks-button-mini"&gt;Mini action&lt;/div&gt;
  &lt;div class="ks-button ks-button-mini dropdown-toggle"&gt;
    &lt;ul class="ks-menu ks-popupmenu"&gt;
      &lt;li class="ks-menuitem"&gt;Action&lt;/li&gt;
      &lt;li class="ks-menuitem"&gt;Another action&lt;/li&gt;
      &lt;li class="ks-menuitem"&gt;Something else here&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
      <h3>展示向上的菜单</h3>
      <p>可以通过在<code>.ks-menu</code>的父元素上添加一个样式将下拉菜单在按钮的下部调整到按钮上方。这将更改右边图标<code>.ks-button-dropdown</code>的方向 同时重新定位菜单的位置，将菜单从按钮的下面移动到上方。</p>
      <div class="ks-button-toolbar" style="margin-top: 9px;">
        <div class="ks-button-group dropup">
          <div class="ks-button">Dropup</div>
          <div class="ks-button dropdown-toggle">
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
        </div><!-- /ks-button-group -->
        <div class="ks-button-group dropup">
          <div class="ks-button primary">Right dropup</div>
          <div class="ks-button primary dropdown-toggle" >
            <ul class="ks-menu ks-popupmenu">
              <li class="ks-menuitem">Action</li>
              <li class="ks-menuitem">Another action</li>
              <li class="ks-menuitem">Something else here</li>
            </ul>
          </div>
          
        </div><!-- /ks-button-group -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="ks-button"&gt;Dropup&lt;/div&gt;
&lt;div class="ks-button dropdown-toggle"&gt;
	&lt;ul class="ks-menu ks-popupmenu"&gt;
		&lt;li class="ks-menuitem"&gt;Action&lt;/li&gt;
		&lt;li class="ks-menuitem"&gt;Another action&lt;/li&gt;
		&lt;li class="ks-menuitem"&gt;Something else here&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>

    </div>
  </div>
  <script>
    KISSY.use('button,menubutton',function(S,Button,MenuButton){
      S.all('.dropdown-toggle','#buttonDropdowns').each(function(item){
        
        var parent = item.parent(),
						mbtn = new MenuButton({
							srcNode : item
						});
        if(parent.hasClass('ks-button-group')){
          var prev = item.prev('.ks-button'),
              btn = new Button({srcNode : prev});
					if(parent.hasClass('dropup')){
						mbtn.set('menuAlign',{ points: ['tl','bl']});
					}
          new Button.Split({
            first:btn,
            second : mbtn
          }).render();
        }else{
          mbtn.render();
        }
      });
    });
  </script>
</section>

