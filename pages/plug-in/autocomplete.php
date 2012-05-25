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
        <input id="inp"/>
      </div>
      <pre class="prettyprint linenums">
&lt;input id="inp"/&gt;
      </pre>
      <pre class="prettyprint linenums">
KISSY.use('autocomplete',function(S,AutoComplete){
  var data = ["a123456", "b12345", "c3464356", "d23434"];

  var basicAutoComplete = new AutoComplete.Basic({
      srcNode:S.one("#inp"),
      // width:S.one("#inp").css("width"),
      data:data
  });
  basicAutoComplete.render();

  // 得到焦点时展示全部
  S.one("#inp").on("focus", function () {
      basicAutoComplete.sendRequest('');
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
var basicAutoComplete = new AutoComplete.Basic({
    render:"#inp_container",
    // width:S.one("#inp").css("width"),
    data:data,
    maxItemCount:3,
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
basicAutoComplete.render();
basicAutoComplete.on("select", function (e) {
   alert(e.target.get('value'));
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
        <input type="text" id="inp-combox"/>
      </div>
      <pre class="prettyprint linenums">
          &lt;input type="text" id="inp-combox"/&gt;
      </pre>
      <pre class="prettyprint linenums">
KISSY.use('autocomplete',function(S,AutoComplete){
  var data = ["a123456", "b12345", "c3464356", "d23434"];

  var basicAutoComplete = new AutoComplete.BasicComboBox({
      srcNode:S.one("#inp-combox"),
      data:data
  });
  basicAutoComplete.render();
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

      </pre>
    </div>
  </div>
<script>
    KISSY.use('autocomplete',function(S,AutoComplete){
      var data = ["a123456", "b12345", "c3464356", "d23434"];

      var basicAutoComplete = new AutoComplete.Basic({
          srcNode:S.one("#inp"),
          // width:S.one("#inp").css("width"),
          data:data
      });
      basicAutoComplete.render();

      // 得到焦点时展示全部
      S.one("#inp").on("focus", function () {
          basicAutoComplete.sendRequest('');
      });
    });

    KISSY.use('autocomplete',function(S,AutoComplete){
      var data = ["a123456", "b12345", "c3464356", "d23434"];
      var basicAutoComplete = new AutoComplete.Basic({
          render:"#inp_container",
          // width:S.one("#inp").css("width"),
          data:data,
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
      basicAutoComplete.render();

      basicAutoComplete.on("select", function (e) {
         alert(e.target.get('value'));
      });
    });

  KISSY.use('autocomplete',function(S,AutoComplete){
    var data = ["a123456", "b12345", "c3464356", "d23434"];

    var basicAutoComplete = new AutoComplete.BasicComboBox({
        srcNode:S.one("#inp-combox"),
        data:data
    });
    basicAutoComplete.render();
  });
  KISSY.use('autocomplete',function(S,AutoComplete){
		var data = ["a123456", "b12345", "c3464356", "d23434"];
    var basicAutoComplete = new AutoComplete.BasicComboBox({
        render:"#inp-combox-container",
        // width:S.one("#inp").css("width"),
        data:data,
        maxItemCount:5,
        format:function (query, data) {
            var ret = [];
            for (var i = 0; i < data.length; i++) {
                ret[i] = {
                    content:(data[i] + "")
                            .replace(new RegExp(S.escapeRegExp(query), "g"),
                            "<b>$&</b>"),
                    disabled:(i%2?true:false)
                };
            }
            return ret;
        }
    });
    basicAutoComplete.render();
  });
</script>
</section>