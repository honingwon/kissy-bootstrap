<!-- Buttons
================================================== -->
<section id="button">
	<div class="page-header">
		<h1>按钮 <small>直接使用kissy的button组件</small></h1>
	</div>
	<div class="row">
		<div class="span12 columns">
			<h3>关于按钮</h3>
			<p>可以控制按钮的状态，组合多个按钮形成按钮组。</p>
			<h3>引入方式</h3>
			<ul>
				<li>1. 按照DPL编写HTML，将节点通过配置项 srcNode 属性传入js</li>
				<li>2. 利用js生成按钮，通过配置项render设置按钮的容器， elCls 属性传入样式信息</li>
				<li>3. 生成按钮组</li>
			</ul>
		</div>
		<div class="span12 columns">
			<h3>将现有的DOM转成按钮控件</h3>
			<p></p>
			<div>
				<button  id="primary" class="ks-button ks-button-primary">Primary</button>
				<pre class="prettyprint linenums">
&lt;button id="primary" class="ks-button ks-button-primary" &gt;Primary&lt;/button&gt;              
				</pre>
				<pre class="prettyprint linenums">
KISSY.use('button',function(S,Button){
primaryButton = new Button({
srcNode:'#primary'
});
primaryButton.render();
primaryButton.on('click',function(){
alert('click me');
});
});                      
				</pre>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<h3>使用JS生成按钮</h3>
			<p></p>
			<div id="button_container"></div>
				<pre class="prettyprint linenums">
&lt;div id="button_container"&gt;&lt;/div&gt;              
				</pre>
				<pre class="prettyprint linenums">
KISSY.use('button',function(S,Button){
button1 = new Button({
srcNode:'#primary'
});
button1.render();
button1.on('click',function(){
alert('js 生成');
});
});                      
				</pre>
		</div>
		<div class="span12">
			<h3>生成有多种状态的按钮</h3>
			<p></p>
			<div id="J_Toggle"></div>
				<pre class="prettyprint linenums">
&lt;div id="J_Toggle"&gt;&lt;/div&gt;              
				</pre>
					<pre class="prettyprint linenums">
KISSY.use('button',function(S,Button){
var toggleButton = new Button({
	content:"测试",
	checkable:true,
	describedby:"describe",
	render:"#J_Toggle",
	elCls : 'ks-button-primary'
});

toggleButton.render();
toggleButton.on('click',function(){
	alert(this.get('checked'));
});
});                      
				</pre>
		</div>
	</div>
	<!--
	<div class="row">
		<div class="span12">
			<h3>生成按钮组</h3>
			<p></p>
			<div id="J_Group" class="ks-button-group"></div>
			<pre class="prettyprint linenums">
&lt;div id="J_Group" class="ks-button-group"&gt;&lt;/div&gt;          
			</pre>
		<pre class="prettyprint linenums">
var group = new ButtonGroup({
srcNode : '#J_Group',
children:[
new Button({
	content:"测试1",
	describedby:"describe",
	render:"#button_container",
	elCls : 'ks-button-warning'
}),
new Button({
	content:"测试2",
	describedby:"describe",
	render:"#button_container",
	elCls : 'ks-button-warning'
}),
new Button({
	content:"测试3",
	describedby:"describe",
	render:"#button_container",
	elCls : 'ks-button-warning'
})
]
});
group.render();

		</pre>
		</div>
		<div class="span12">
			<h3>通过配置项生成按钮组</h3>
			<p>按钮组，可以设置按钮的选择状态，默认是点击按钮时，不会产生选中效果，可以设置<code>checkMode : 'radio'</code>（单选）或者<code>checkMode : 'check'</code>（复选）。此时可以通过监听按钮组的 checkedChanged 事件，取得发生改变后按钮组选中的按钮，取得的结果是按钮（value）的数组。
			</p>
			<div id="J_Group1" class="ks-button-group"></div>
				<pre class="prettyprint linenums">
&lt;div id="J_Group1" &gt;&lt;/div&gt;          
			</pre>
		<pre class="prettyprint linenums">
var group1 = new ButtonGroup({
srcNode : '#J_Group1',
checkMode : 'radio',
children:[
{
	value : 'v1',
	content:"测试1",
	describedby:"describe",
	render:"#button_container",
	elCls : 'ks-button-warning',
	handler : function(){
		alert('测试1');
	}
},
{
	value : 'v1',
	content:"测试2",
	describedby:"describe",
	render:"#button_container",
	elCls : 'ks-button-warning',
	handler : function(){
		alert('测试2');
	}
},
{
	value : 'v1',
	content:"测试3",
	describedby:"describe",
	render:"#button_container",
	elCls : 'ks-button-warning',
	handler : function(){
		alert('测试3');
	}
}
]
});
group1.render();
group1.on('checkedChanged',function(){
S.log(group1.get('checkedValue'));
});
		</pre>
		</div>
	</div>
	-->
	<h2>下拉按钮</h2>
	<div id="drowpButton" class="row">
		<div class="span12">
			<h3>关于下拉按钮</h3>
			<p>通过菜单的形式组织按钮。</p>
			<h3>引入方式</h3>
			<ul>
				<li>1. 按照DPL编写HTML，将节点通过配置项 srcNode 属性传入js</li>
				<li>2. 利用js生成按钮，并且通过JS配置子元素信息</li>
				<li>3. 下拉菜单的宽度可以根据按钮的宽度自适应，也可以自己配置下拉按钮宽度.<code>matchElWidth : false</code>时，下拉菜单不随着按钮的宽度变化</li>
			</ul>
		</div>
		<div class="span12">
			<h3>下拉按钮示例</h3>
			<p>下拉按钮的结构包括：一个按钮,应用了样式 <code>ks-button</code>的元素、下拉图标和下拉列表</p>
			<div class="ks-button-group">
				<div id="J_MButton" class="ks-button">
					<div class="ks-menu-button-caption">淘宝网</div>
					<ul class="ks-menu ks-popupmenu">
						<li class="ks-menuitem">Action</li>
						<li class="ks-menuitem">Another action</li>
						<li class="ks-menuitem">Something else here</li>
					</ul>
				</div>
				
			</div><!-- /ks-button-group -->
				<pre class="prettyprint linenums">
&lt;div id="J_MButton" class="ks-button"&gt;
淘宝网
&lt;ul class="ks-menu ks-popupmenu"&gt;
&lt;li class="ks-menuitem"&gt;Action&lt;/li&gt;
&lt;li class="ks-menuitem"&gt;Another action&lt;/li&gt;
&lt;li class="ks-menuitem"&gt;Something else here&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;    
			</pre>
			<pre class="prettyprint linenums">
KISSY.use("menubutton,menu", function (S, MenuButton, Menu) {
var mb = new MenuButton({
srcNode : '#J_MButton',
matchElWidth : false
})
mb.render();
mb.on('click',function(event){
event.halt();
var item = event.target;
//alert(item.get('el').text());
});
});
			</pre>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<h3>js生成下拉按钮</h3>
			<p>只需要制定下拉按钮的容器，并配置下拉菜单的选项</p>
			<div id="J_MButton1"></div>
				<pre class="prettyprint linenums">
&lt;div id="J_MButton1"&gt; &lt;/div&gt; 
        </pre>
        <pre class="prettyprint linenums">
var mb1 = new MenuButton({
      content:"淘宝网",
      describedby:"describe",
			matchElWidth : false,
      menu : {xclass : 'popupmenu',
			  width : 160,
        children:[
        {xclass : 'menuitem',content:"我要买",value:'buy'},
        {xclass : 'menuseparator'},
        {xclass : 'menuitem',content:"我要卖",value:'sale'}
      ]},
      render:"#J_MButton1"
  });

mb1.render();
mb1.on('click',function(event){
  event.halt();
  var item = event.target;
  alert(item.get('value'));
});
			</pre>
		</div>
		
	</div>

	<h2>分离式下拉按钮</h2>
  <div id="splitButton" class="row">
		<div class="span12">
			<h3>关于分离式下拉按钮</h3>
			<p>分离式下拉按钮，包括2部分，前半部分跟一般按钮使用方式一样，点击触发事件；后半部分点是一个下拉按钮，选中相关项时，前半部分的按钮切换到此项功能。</p>
			<h3>引入方式</h3>
			<ul>
				<li>分别生成按钮和下拉按钮，生成方式可参看按钮和下拉按钮的生成,在外层包一个<code>ks-button-group</code></li>
			</ul>
		</div>

		<div class="span12">
			<h3>使用JS生成</h3>
			<p>仅仅提供了使用JS生成按钮的方式</p>
			<div class="ks-button-group">
				<div id="splitBtn" class="ks-button">action</div>
				<div id="splitMenuBtn" class="ks-button">
					<div class="ks-menu-button-caption"></div>
					<ul class="ks-menu ks-popupmenu">
						<li class="ks-menuitem">Action</li>
						<li class="ks-menuitem">Another action</li>
						<li class="ks-menuitem">Something else here</li>
					</ul>
				</div>
			</div>
			<pre class="prettyprint linenums">
&lt;div class="ks-button-group"&gt;
	&lt;div id="splitBtn" class="ks-button"&gt;action&lt;/div&gt;
	&lt;div id="splitMenuBtn" class="ks-button"&gt;
		&lt;ul class="ks-menu ks-popupmenu"&gt;
			&lt;li class="ks-menuitem"&gt;Action&lt;/li&gt;
			&lt;li class="ks-menuitem"&gt;Another action&lt;/li&gt;
			&lt;li class="ks-menuitem"&gt;Something else here&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
			</pre>
			<pre class="prettyprint linenums">
			    var first=new Button({
                    srcNode:'#splitBtn',
                    listeners:{
                        click:function(){
                            alert(this.get('content'));
                        }
                    }
                }).render();
                var second=new MenuButton({
                    srcNode:'#splitMenuBtn',
                    listeners:{
                        click:function(e){
                            first.set("content",e.target.get("content"));
                        }
                    },
                    matchElWidth : false
                }).render();
			</pre>
		</div>
	</div>
	<script>
			
			KISSY.use('button,menubutton,menu',function(S,Button, MenuButton, Menu){/*bootstrap/buttongroup,ButtonGroup,*/
				var primaryButton = new Button({
					srcNode:'#primary'
				});
				
				primaryButton.render();
				primaryButton.on('click',function(){
					alert('click me');
				});
				var button1 = new Button({
					content:"测试",
					describedby:"describe",
					render:"#button_container",
					elCls : 'ks-button-warning'
				});

				button1.render();
				button1.on('click',function(){
					alert('js 生成');
				});

				var toggleButton = new Button({
					content:"测试",
					checkable:true,
					describedby:"describe",
					render:"#J_Toggle",
					elCls : 'ks-button-primary'
				});

				toggleButton.render();
				toggleButton.on('click',function(){
					alert(this.get('checked'));
				});

				/*
				var group = new ButtonGroup({
					srcNode : '#J_Group',
					children:[
						new Button({
							content:"测试1",
							describedby:"describe",
							render:"#button_container",
							elCls : 'ks-button-warning'
						}),
						new Button({
							content:"测试2",
							describedby:"describe",
							render:"#button_container",
							elCls : 'ks-button-warning'
						}),
						new Button({
							content:"测试3",
							describedby:"describe",
							render:"#button_container",
							elCls : 'ks-button-warning'
						})
					]
				});
				group.render();

				var group1 = new ButtonGroup({
					srcNode : '#J_Group1',
					checkMode : 'radio',
					children:[
						{
							value : 'v1',
							content:"测试1",
							describedby:"describe",
							render:"#button_container",
							elCls : 'ks-button-warning',
							handler : function(){
								alert('测试1');
							}
						},
						{
							value : 'v2',
							content:"测试2",
							describedby:"describe",
							render:"#button_container",
							elCls : 'ks-button-warning',
							handler : function(){
								alert('测试2');
							}
						},
						{
							value : 'v3',
							content:"测试3",
							describedby:"describe",
							render:"#button_container",
							elCls : 'ks-button-warning',
							handler : function(){
								alert('测试3');
							}
						}
					]
				});
				group1.render();
				group1.on('checkedChanged',function(){
					S.log(group1.get('checkedValue'));
				});
				*/
				var mb = new MenuButton({
					srcNode : '#J_MButton',
					matchElWidth : false
				})
				mb.render();
				mb.on('click',function(event){
					event.halt();
					var item = event.target;
					alert(item.get('el').text());
				});

				 
				var		mb1 = new MenuButton({
						content:"淘宝网",
						describedby:"describe",
						matchElWidth : false,
						menu : {xclass : 'popupmenu',
							width : 160,
							children:[
							{xclass : 'menuitem',content:"我要买",value:'buy'},
							{xclass : 'menuseparator'},
							{xclass : 'menuitem',content:"我要卖",value:'sale'}
						]},
						render:"#J_MButton1"
				});

				mb1.render();
				mb1.on('click',function(event){
					event.halt();
					var item = event.target;
					alert(item.get('value'));
				});

                var first=new Button({
                    srcNode:'#splitBtn',
                    listeners:{
                        click:function(){
                            alert(this.get('content'));
                        }
                    }
                }).render();
                var second=new MenuButton({
                    srcNode:'#splitMenuBtn',
                    listeners:{
                        click:function(e){
                            first.set("content",e.target.get("content"));
                        }
                    },
                    matchElWidth : false
                }).render();
			});

	</script>
</section>
