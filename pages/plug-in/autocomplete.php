<!-- tooltips
================================================== -->
<section id="autocomplete">
  <div class="page-header">
    <h1>autocomplete <small>输入文本提示</small></h1>
  </div>
  <div class="row">
    <div class="span6">
      <h3>关于autocomplete</h3>
      <p>当用户输入文本时，显示相关联的提示选项，包括：suggest,combox等方式</p>
    </div>
    <div class="span9">
      <h3>suggest 示例</h3>
      <p>使用已有DOM生成autocomplete</p>
      <div>
				<div class="ks-combobox" id="J_AutoComplete">
					<div class="ks-combobox-input-wrap">
            <input class="ks-combobox-input" id="inp"/>
					</div>
				</div>
      </div>
      <pre class="prettyprint linenums">
&lt;div class="ks-combobox" id="J_AutoComplete"&gt;
	&lt;div class="ks-combobox-input-wrap"&gt;
		&lt;input class="ks-combobox-input" id="inp"/&gt;
	&lt;/div&gt;
&lt;/div&gt;
      </pre>
      <pre class="prettyprint linenums">
 KISSY.use('combobox',function(S,ComboBox){
			var data = ["a123456", "b12345", "c3464356", "d23434"];
			var basicComboBox = new ComboBox({
					width:100,
					srcNode:S.one("#J_AutoComplete"),
					// 初始就聚焦
					focused:true,
					hasTrigger:false,
					dataSource:{
							data:data,
							xclass:'combobox-LocalDataSource'
					}
			});
			basicComboBox.render();

			// 得到焦点时展示全部
			S.one("#inp").on("focus", function () {
					basicComboBox.sendRequest('');
			});
    });
      </pre>
      
    </div>
    <div class="span9">
      <h3>suggest 示例</h3>
      <p>使用已有js生成autocomplete,可以通过配置格式化函数，格式化建议项，并且可以禁用建议项</p>
      <div id="inp_container">
       
      </div>
      <pre class="prettyprint linenums">
&lt;div id="inp_container"&gt;
  &lt;label&gt;使用JS生成DOM&lt;/label&gt;
&lt;/div&gt;
      </pre>
      <pre class="prettyprint linenums">
 KISSY.use('combobox',function(S,ComboBox){
	var data = ["a123456", "b12345", "c3464356", "d23434"];

	var basicComboBox = new ComboBox({
			render:"#inp_container",
			dataSource:{
					xclass:'combobox-LocalDataSource',
					data:data
			},
			hasTrigger:false,
			maxItemCount:2,
			format:function (query, data) {
					var ret = [];
					for (var i = 0; i < data.length; i++) {
							ret[i] = {
									content:(data[i] + "")
													.replace(new RegExp(S.escapeRegExp(query), "g"),
													"&lt;b&gt;$&&lt;/b&gt;"),
									disabled:(i % 2 ? true : false)
							};
					}
					return ret;
			}
	});
	basicComboBox.render();

	basicComboBox.on("click", function (e) {
			var item = e.target;
			S.log(item.get("value") + "\n" + item.get("content") +
							"\n" + item.get("textContent"));
	});
});
      </pre>
    </div>
  </div>
  <div class="row">
    <div class="span6">
      <h3>关于combox</h3>
      <p>组合框，是一个输入框和下拉菜单构成，跟autocomplete一起组合使用更方便用户</p>
    </div>
    <div class="span9">
      <h3>combox示例</h3>
      <p>利用现有DOM生成combox</p>
      <div>
				<div class="ks-combobox" id="J_Combox">
					<div class="ks-combobox-input-wrap">
            <input class="ks-combobox-input" id="inp"/>
					</div>
				</div>
      </div>
      <pre class="prettyprint linenums">
&lt;div class="ks-combobox" id="J_Combox"&gt;
	&lt;div class="ks-combobox-input-wrap"&gt;
		&lt;input class="ks-combobox-input" id="inp"/&gt;
	&lt;/div&gt;
&lt;/div&gt;
      </pre>
      <pre class="prettyprint linenums">
 KISSY.use('combobox',function(S,ComboBox){
    var data = ["a123456", "b12345", "c3464356", "d23434"];

    var basicComboBox = new ComboBox({
        srcNode:S.one("#J_Combox"),
        dataSource:{
							data:data,
							xclass:'combobox-LocalDataSource'
				}
    });
    basicComboBox.render();
  });     
      </pre>
    </div>
    <div class="span9">
      <h3>combox示例</h3>
      <p>利用js生成combox</p>
      <div id="inp-combox-container">
        
      </div>
      <pre class="prettyprint linenums">
        &lt;div id="inp-combox-container"&gt;
        
        &lt;/div&gt;
      </pre>
      <pre class="prettyprint linenums">
KISSY.use('combobox',function(S,ComboBox){
	var data = ["a123456", "b12345", "c3464356", "d23434"];

	var basicComboBox = new ComboBox({
				render:"#inp-combox-container",
				dataSource:{
						xclass:'combobox-LocalDataSource',
						data:data
				},
				maxItemCount:5,
				format:function (query, data) {
						var ret = [];
						for (var i = 0; i < data.length; i++) {
								ret[i] = {
										content:(data[i] + "")
														.replace(new RegExp(S.escapeRegExp(query), "g"),
														"&lt;b&gt;$&&lt;/b&gt;"),
										disabled:(i % 2 ? true : false)
								};
						}
						return ret;
				}
		});
		basicComboBox.render();
});
      </pre>
    </div>
  </div>
<script>
/**/
    KISSY.use('combobox',function(S,ComboBox){
			var data = ["a123456", "b12345", "c3464356", "d23434"];
			var basicComboBox = new ComboBox({
					srcNode:S.one("#J_AutoComplete"),
					width:100,
					// 初始就聚焦
					focused:true,
					hasTrigger:false,
					dataSource:{
							data:data,
							xclass:'combobox-LocalDataSource'
					}
			});
			basicComboBox.render();

			// 得到焦点时展示全部
			S.one("#inp").on("focus", function () {
					basicComboBox.sendRequest('');
			});/**/
    });

    KISSY.use('combobox',function(S,ComboBox){
			var data = ["a123456", "b12345", "c3464356", "d23434"];

			var basicComboBox = new ComboBox({
					render:"#inp_container",
					// width:S.one("#inp").css("width"),
					dataSource:{
							xclass:'combobox-LocalDataSource',
							data:data
					},
					hasTrigger:false,
					maxItemCount:2,
					format:function (query, data) {
							var ret = [];
							for (var i = 0; i < data.length; i++) {
									ret[i] = {
											content:(data[i] + "")
															.replace(new RegExp(S.escapeRegExp(query), "g"),
															"<b>$&</b>"),
											disabled:(i % 2 ? true : false)
									};
							}
							return ret;
					}
			});
			basicComboBox.render();

			basicComboBox.on("click", function (e) {
					var item = e.target;
					S.log(item.get("value") + "\n" + item.get("content") +
									"\n" + item.get("textContent"));
			});
    });

  KISSY.use('combobox',function(S,ComboBox){
    var data = ["a123456", "b12345", "c3464356", "d23434"];

    var basicComboBox = new ComboBox({
        srcNode:S.one("#J_Combox"),
        dataSource:{
							data:data,
							xclass:'combobox-LocalDataSource'
				}
    });
    basicComboBox.render();
  });/**/
  KISSY.use('combobox',function(S,ComboBox){
		var data = ["a123456", "b12345", "c3464356", "d23434"];

		var basicComboBox = new ComboBox({
					render:"#inp-combox-container",
					dataSource:{
							xclass:'combobox-LocalDataSource',
							data:data
					},
					maxItemCount:5,
					format:function (query, data) {
							var ret = [];
							for (var i = 0; i < data.length; i++) {
									ret[i] = {
											content:(data[i] + "")
															.replace(new RegExp(S.escapeRegExp(query), "g"),
															"<b>$&</b>"),
											disabled:(i % 2 ? true : false)
									};
							}
							return ret;
					}
			});
			basicComboBox.render();
  });
</script>
</section>