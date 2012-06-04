<!-- message
================================================== -->
<section id="message">
	<div class="page-header">
    <h1>消息提示 <small>显示提示消息，允许用户关闭</small></h1>
  </div>
  <div class="row">
    <div class="span6">
      <h3>关于消息提示</h3>
      <p>DPL中的消息提示分为提示、警告、错误等类型，主要用于提示用户当前的操作信息，也可以形成弹出式的message</p>
    </div>
    <div class="span18">
      <h3>消息提示示例</h3>
      <p>直接显示在页面中的消息提示，只需要处理显示和隐藏事件即可。HTML结构需要事先生成，然后指定DOM即可</p>
      <div class="ks-button-group">
        <button id="J_Btn1" class="ks-button">显示</button>
        <button id="J_Btn2" class="ks-button">隐藏</button>
      </div>
      <div id="J_Msg" class="alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
      </div>
      <pre class="prettyprint linenums">
        &lt;div id="J_Msg" class="alert"&gt;
          &lt;a class="close" data-dismiss="alert"&gt;×&lt;/a&gt;
          &lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you're not looking too good.
        &lt;/div&gt;
      </pre>
      <pre class="prettyprint linenums">
        KISSY.use('bootstrap/message',function(S,Message){
          var msg = new Message({srcNode : '#J_Msg'});
          //显示
          S.one('#J_Btn1').on('click',function(){
            msg.show();
          });
          //隐藏
          S.one('#J_Btn2').on('click',function(){
            msg.hide();
          });
        });
      </pre>
    </div>
  </div>
	<script>
		KISSY.use('bootstrap/message',function(S,Message){
			var msg = new Message({srcNode : '#J_Msg'});
			S.one('#J_Btn1').on('click',function(){
				msg.show();
			});
			S.one('#J_Btn2').on('click',function(){
				msg.hide();
			});
		});
	</script>
</section>