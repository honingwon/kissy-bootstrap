<section id="menu">
  <div class="page-header">
    <h1>菜单</h1>
  </div>
  <div class="row">
    <div class="span8">
      <h3>关于菜单</h3>
      <p>在Web系统中菜单可以用在多种场景下，导航条、下拉菜单按钮、右键菜单以及autocomplete等。</p>
			<p>每一个菜单项可以使用单独生成，然后添加到菜单上，也可以在配置项中通过<code>xclass</code>配置。</p>
			<p>弹出菜单可以灵活的跟其他DPL控件、样式配合使用。</p>
    </div>
    <div class="span8">
      <h3>右键菜单示例</h3>
      <p>下面是一个右键菜单同时包含多级子菜单</p>
      <div id="context" class="well">
          在此区域点右键
      </div>
      <pre class="prettyprint linenums">
KISSY.use("menu", function(S, Menu) {
  var context = S.all("#context");
  var sb = new Menu.PopupMenu({
      elStyle:{
          color:"red"
      }
  });
  sb.addChild(new Menu.Item({
      content:"submenuitem1"}));
  sb.addChild(new Menu.Item({
      content:"submenuitem2"}));

  sb.addChild(new Menu.Separator({
  }));

  var sb2 = new Menu.PopupMenu({
      autoHideDelay:0.3,
      children:[
          new Menu.Item({
              
              content:"submenuitem141"})
      ],
      // bug elStyle 无效
      elStyle:{
          color:"red"
      }
  });
  sb2.addChild(new Menu.Item({
      content:"submenuitem22"}));
  var b2 = new Menu.SubMenu({            
      content:"sub-sub-menu",
      menu:sb2
  });
  sb.addChild(b2);

  var b = new Menu.SubMenu({ 
      content:"submenu",
      menu:sb
  });

  var menu = new Menu.PopupMenu({
      // 接受键盘事件
      focusable:1,
      children:[b,new Menu.Item({
          
          content:"alone"})]
  });


  menu.on("click", function(e) {
      context.html(e.target.get("content") + " clicked");
  });

  context.on("contextmenu", function(e) {
      e.halt();
      menu.render();
      menu.set("xy", [e.pageX,e.pageY]);
      menu.show();
      // 接受键盘事件
      menu.get("el")[0].focus();
  });

});
      </pre>
    </div>
    <div class="span8">
      <h3>下拉菜单示例</h3>
      <p>下面是一个基于导航的下拉菜单示例</p>
      <div id="navbar-example" class="navbar navbar-static">
        <div class="navbar-inner">
          <div class="container" style="width: auto;">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</b></a>
              </li>
              <li class="dropdown">
                <a id="J_Menu1" href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
              </li>
            </ul>
          </div>
        </div>
        <pre class="prettyprint linenums">
KISSY.use("menu", function(S, Menu) {
  var menu = new Menu.PopupMenu({
    // 接受键盘事件
    focusable:1,
    children:[
          {
              xclass:'submenu',
              content:"action",
              menu:{
                  xclass:'popupmenu',
                  // boolean，是否鼠标脱离菜单后自动隐藏
                  autoHideOnMouseLeave:true,
                  // ms，鼠标脱离菜单多长时间后自动隐藏
                  autoHideDelay:0.3,
                  children:[
                      {
                          xclass:'menuitem',
                          elStyle:{
                              color:"red"
                          },
                          content:"submenuitem1"
                      },
                      {
                          xclass:'menuseparator'
                      },
                      {
                          xclass:'menuitem',
                          content:"submenuitem2"
                      }
                  ]
              }
          },
          {
              xclass:'menuitem',
              content:"another"
          }
      ]
  });
  var link = S.one('#J_Menu1'),
    parent = link.parent();
  link.on('click',function(e){
    e.halt();
    var sender = S.one(this),
      offset = sender.offset();
    parent.addClass('open');
    menu.render();
    menu.set("xy", [offset.left,offset.top + parent.height() + 1]);
    
    menu.show();
    menu.set('focused',true);
  });

  menu.on('afterVisibleChange',function(e){
    if(!e.newVal){
      parent.removeClass('open');
    }
  });
});
        </pre>
      </div>
    </div>

  </div>
  <script>
     KISSY.use("menu", function(S, Menu) {
        var context = S.all("#context");
        var sb = new Menu.PopupMenu({
						width : 160,
            elStyle:{
                color:"red"
            }
        });
        sb.addChild(new Menu.Item({
            content:"submenuitem1"}));
        sb.addChild(new Menu.Item({
            content:"submenuitem2"}));

        sb.addChild(new Menu.Separator({
        }));

        var sb2 = new Menu.PopupMenu({
            autoHideDelay:0.3,
            children:[
                new Menu.Item({
                    
                    content:"submenuitem141"})
            ],
            // bug elStyle 无效
            elStyle:{
                color:"red"
            }
        });
        sb2.addChild(new Menu.Item({
            content:"submenuitem22"}));
        var b2 = new Menu.SubMenu({            
            content:"sub-sub-menu",
            menu:sb2
        });
        sb.addChild(b2);

        var b = new Menu.SubMenu({ 
            content:"submenu",
            menu:sb
        });

        var menu = new Menu.PopupMenu({
            // 接受键盘事件
            focusable:1,
						width:160,
            children:[b,new Menu.Item({
                
                content:"alone"})]
        });


        menu.on("click", function(e) {
            context.html(e.target.get("content") + " clicked");
        });

        context.on("contextmenu", function(e) {
            e.halt();
            menu.render();
            menu.set("xy", [e.pageX,e.pageY]);
            menu.show();
            // 接受键盘事件
            menu.get("el")[0].focus();
        });

    });
    KISSY.use("menu", function(S, Menu) {
      var menu = new Menu.PopupMenu({
        // 接受键盘事件
        focusable:1,
				width:160,
        children:[
              {
                  xclass:'submenu',
                  content:"action",
                  menu:{
                      xclass:'popupmenu',
                      // boolean，是否鼠标脱离菜单后自动隐藏
                      autoHideOnMouseLeave:true,
                      // ms，鼠标脱离菜单多长时间后自动隐藏
                      autoHideDelay:0.3,
                      children:[
                          {
                              xclass:'menuitem',
                              elStyle:{
                                  color:"red"
                              },
                              content:"submenuitem1"
                          },
                          {
                              xclass:'menuseparator'
                          },
                          {
                              xclass:'menuitem',
                              content:"submenuitem2"
                          }
                      ]
                  }
              },
              {
                  xclass:'menuitem',
                  content:"another"
              }
          ]
      });
      var link = S.one('#J_Menu1'),
        parent = link.parent();
      link.on('click',function(e){
        e.halt();
        var sender = S.one(this),
          offset = sender.offset();
        parent.addClass('open');
        menu.render();
        menu.set("xy", [offset.left,offset.top + parent.height() + 1]);
        
        menu.show();
        menu.set('focused',true);
      });

      menu.on('afterVisibleChange',function(e){
        if(!e.newVal){
          parent.removeClass('open');
        }
      });
    });
  </script>
</section>