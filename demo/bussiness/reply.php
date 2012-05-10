<section id="reply">
	<div class="row">
		<div class="span12">
			<h3>留言回复</h3>
			<div id="J_Reply" class="reply-list span11 well" >
				<div class="btn-group">
					<button data-type="all" class="btn active">全部</button>
					<button data-type="buy"  class="btn">买家</button>
					<button data-type="sale"  class="btn">卖家</button>
					<button data-type="reply" class="btn">小二</button>
				</div>
				<div class="reply-item-container  show-all">
					
				</div>
				<div class="reply-more  class="btn-group""><a class="reply-more-link" href="#">更多</a></div>
			</div>
		</div>
	</div>
	<script id="leave-temp" type='x-template'>
		<dl class="reply-type-{type} row">
					<dt class="reply-title span1">
						<img class="reply-user-img" src="{userImg}"/>
					</dt>
					<dd class="reply-content span6">
						<div class="popover right">
							<div class="arrow"></div>
							<div class="popover-inner">
								<h4 class="popover-title"><span>{userName}</span>{action}</h4>
								<div  class="reply-content-text popover-content">
									<p>{text}</p>
								</div>
							</div>
						</div>
						<div class="reply-bottom clearfix">
							<span class="reply-time">{replyTime}</span>
							<span class="reply-mask"><a href="#">屏蔽留言</a></span>
						</div>
					</dd>
		</dl>
	</script>

	<script id="reply-temp" type='x-template'>
		<dl class="reply-type-{type} row">
					<dt class="reply-title span1">
						<img class="reply-user-img" src="{userImg}"/>
					</dt>
					<dd class="reply-content">
						<div class="popover left span6">
							<div class="arrow"></div>
							<div class="popover-inner">
								<h4 class="popover-title"><span>{userName}</span>{action}</h4>
								<div  class="reply-content-text popover-content">
									<p>{text}</p>
								</div>
							</div>
						</div>
						<div class="reply-bottom clearfix">
							<span class="reply-time">{replyTime}</span>
							<span class="reply-mask"><a href="#">屏蔽留言</a></span>
						</div>
					</dd>
		</dl>
	</script>

	<script>
		KISSY.ready(function(S){
			S.config({
				//
				packages:[{

				name:"assets",

				tag:"201204271014",

				path:"./bussiness"

				}]
			});
			KISSY.use('assets/reply',function(S,Reply){
				var reply =	new Reply({
						renderTo : 'J_Reply',
						url : './bussiness/data.php'
				});

			});

		});
	</script>
</section>