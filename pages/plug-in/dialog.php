<section id="dialog">
  <div class="page-header">
        <h1>Dialog <small>弹出层，显示信息或者编辑表单</small></h1>
  </div>
  <div class="row">
    <div class="span6">
      <h3> 模态Dialog框 </h3>
      <p>弹出框一般用于显示详细信息或者进行表单的编写</p>
      <h3> 引入方式 </h3>
      <p>将事先写好的HTML结构指定给Dialog弹出</p>
    </div>
    <div class="span18">
      <h3>Dialog 示例</h3>
      <p>使用kissy 原生的Dialog方法，需要完成以下步骤：</p>
      <ul>
        <li>1. 指定标题信息，指定关闭按钮</li>
        <li>2. 指定弹出框的内容</li>
        <li>3. 指定弹出框的操作按钮</li>
        <li>4. 处理各种操作</li>
      </ul>
      <button id="btnDialog" class="ks-button">显示Dialog</button>
      <div id="temp" class="hide">
        <div id="pop" >
            <p>One fine body…asdfasdf</p>
        </div>
      </div>
      <pre class="prettyprint linenums">
&lt;div id="temp" class="hide"&gt;
  &lt;div id="pop" &gt;
      &lt;p&gt;One fine body…asdfasdf&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;        
      </pre>
      <pre class="prettyprint linenums">
KISSY.use("overlay", function(S, O) {
  var d = new O.Dialog({
        headerContent: '  &lt;a href="#" class="close"&gt;×&lt;/a&gt;&lt;h3&gt;Modal header&lt;/h3&gt;',//1. 指定标题信息，指定关闭按钮
        bodyContent : S.one('#pop'),//2. 指定弹出框的内容
        //3. 指定弹出框的操作按钮
        footerContent : '  &lt;a href="#" class="ks-button ks-button-primary"&gt;确定&lt;/a&gt;&lt;a href="#" class="ks-button"&gt;关闭&lt;/a&gt;',
        width: 480,
        align: {
           points: ['cc', 'cc']
        },
        mask:true,
        closable: false
      });
  //4. 处理各种操作
  d.on('afterRenderUI',function(){
    d.get('el').one('.close').on('click',function(event){
      event.halt();
      d.hide();
    });
  });

  S.one('#btnDialog').on('click', function() {
      d.show();
  });
});
      </pre>
    </div>
  </div>
	<script>
    KISSY.use("overlay", function(S, O) {
			var d = new O.Dialog({
						headerContent: '  <a href="#" class="close">×</a><h3>Modal header</h3>',//1. 指定标题信息，指定关闭按钮
						bodyContent : S.one('#pop'),//2. 指定弹出框的内容
						//3. 指定弹出框的操作按钮
						footerContent : '	<a href="#" class="ks-button ks-button-primary">确定</a><a href="#" class="ks-button">关闭</a>',
						width: 480,
						align: {
							 points: ['cc', 'cc']
						},
						mask:true,
						closable: false
					});
			//4. 处理各种操作
			d.on('afterRenderUI',function(){
				d.get('el').one('.close').on('click',function(event){
					event.halt();
					d.hide();
				});
				d.get('el').all('.ks-button').on('click',function(event){
					event.halt();
					d.hide();
				});
				
			});

			S.one('#btnDialog').on('click', function() {
					d.show();
			});
    });
	</script>
</section>