<!-- paging -->
<section id="paging">
  <div class="page-header">
     <h1>分页栏 <small>提供分页/small></h1>
  </div>
  <div class="row">
    <div class="span6">
      <h3>分页栏</h3>
      <p>分页栏有很多实现形式：前端分页和后端分页</p>
      <p>后端分页主要用于在页面生成时直接由后台渲染，点击到其他页面时直接进行页面跳转，此时不需要JS</p>
      <p>前端分页主要是通过JS调用Ajax请求，实现分页效果。表现形式又有多种，按钮全部是图标的、按钮全部是数字的等等。。。</p>
    </div>
    <div class="span18">
      <h3>前端分页示例</h3>
      <div id="J_PageContent" style="border: 1px solid #ccc;"></div>
      <div id="J_PageBar"></div>
       <pre class="prettyprint linenums">
&lt;div id="J_PageContent"&gt;&lt;/div&gt;
&lt;div id="J_PageBar"&gt;&lt;/div&gt;        
       </pre>
        <pre class="prettyprint linenums">
 KISSY.use('bootstrap/store,bootstrap/bar',function(S,Store,Bar){
  //数据缓存对象
  var store = new Store({
    url : 'plug-in/page-data.json'
  });
  //分页控件
  var pb = new Bar.PaggingBar({
    store : store,
    pageSize : 10,//单页记录数
    renderTo : 'J_PageBar'
  });
  //加载完数据后显示数据，每次切换页面时都触发
  store.on('load',function(event){
    var text = '这是第' + pb.curPage + '页<br>';
    S.one('#J_PageContent').html(text + store.getResult().join('<br>'));
  });
  //首次加载数据
  store.load();
});         
        </pre>
    </div>
  </div>
	<script>
		KISSY.use('bootstrap/store,bootstrap/bar',function(S,Store,Bar){
			//数据缓存对象
			var store = new Store({
				url : 'plug-in/page-data.json'
			});
			//分页控件
			var pb = new Bar.PaggingBar({
				store : store,
				pageSize : 10,//单页记录数
				renderTo : 'J_PageBar'
			});
			//加载完数据后显示数据，每次切换页面时都触发
			store.on('load',function(event){
				var text = '这是第' + pb.curPage + '页<br>';
				S.one('#J_PageContent').html(text + store.getResult().join('<br>'));
			});
			//首次加载数据
			store.load();
		});
	</script>
</section>