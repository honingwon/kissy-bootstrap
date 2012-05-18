<?php	 $page = "bussiness" ?>
<?php $title="CRM 业务控件"?>
<?php include("./templates/header.php"); ?>
<!-- Masthead
      ================================================== -->
<header id="overview">
	<h1>CRM 业务控件</h1>
	<p class="lead">CRM 业务控件。</p>
	<div class="subnav">
		<ul class="nav nav-pills">
			<li><a href="#reply">懒加载 && 留言回复</a></li>
		</ul>
	</div>
</header>

<ul id='t'>
    <li><a data-href='workInfo' href='#'>工单信息</a></li>
    <li><a data-href='message' href='#'>留言凭证</li>
    <li><a data-href='order' href='#'>订单信息</li>
    <li><a data-href='buyer' href='#'>买家</li>
    <li><a data-href='seller' href='#'>卖家</li>
    <li><a data-href='product' href='#'>物流信息</li>
</ul>

<div style='overflow:auto;height:300px;overflow-x:hidden;border:1px solid red;' id='container'>
    
        <a id='workInfo'>workInfo</a>
    
        <textarea class='ks-datalazyload' style='visibility:hidden;display:block;height:300px;'>
          <div style='height:300px'>
            我是工单信息
            <script>
                KISSY.log("我是工单信息");
            </script>
           </div> 
        </textarea>
        
         <a id='message'>message</a>
         
        <textarea class='ks-datalazyload' style='visibility:hidden;display:block;height:300px;'>
           <!--
              <div style='height:300px'>
                我是留言凭证
                <script>
                    KISSY.log("我是留言凭证");
                </script>
             </div> 
             -->
             
             <?php include("./bussiness/reply.php"); ?>
             <script>
                    KISSY.log("我是留言凭证");
             </script>
        </textarea>
        
        <a id='order'>order</a>
        <textarea class='ks-datalazyload' style='visibility:hidden;display:block;min-height:300px;'>
           <div style='height:300px'>
                我是订单信息
                <script>
                    KISSY.log("我是订单信息");
                </script>
            </div>  
        </textarea>
        
        <a id='buyer'>buyer</a>
        <textarea class='ks-datalazyload' style='visibility:hidden;display:block;height:300px;'>
           <div style='height:300px'>
                我是买家
                <script>
                    KISSY.log("我是买家");
                </script>
            </div>  
        </textarea>
        
        <a id='seller'>seller</a>
        <textarea class='ks-datalazyload' style='visibility:hidden;display:block;height:300px;'>
           <div style='height:300px'>   
                我是卖家
                <script>
                    KISSY.log("我是卖家");
                </script>
            </div>  
        </textarea>
        
         <a id='product'>product</a>
         <textarea class='ks-datalazyload' style='visibility:hidden;display:block;height:300px;'>
            <div style='height:300px'>    
                我是物流信息
                <script>           
                    KISSY.log("我是物流信息");
                </script>
            </div>  
         </textarea>
        
        
        <script>
            KISSY.use("datalazyload",function(S,DataLazyLoad){
               new  DataLazyLoad([S.DOM.get('#container')],{                  
                    diff:150
               });
               
               
               var $=S.all;
               var container=$("#container");
               
               $("#t a").on("click",function(e){
                    e.halt();
                    var a=$(e.target);
                    var dataHref=a.attr("data-href");
                    
                    $("#"+dataHref).scrollIntoView(container);                                   
               });
            });
        </script>
        
    
</div>

<?php  include("./templates/footer.php"); ?>