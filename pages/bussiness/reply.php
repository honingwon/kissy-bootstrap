<section id="reply">
	<div class="row">
		<div class="span24">
			<h3>留言回复</h3>
			<div id="J_Reply" class="reply-list span22 well show-all" >
				<div class="btn-group">
					<button data-type="all" class="btn active">全部</button>
					<button data-type="buy"  class="btn">买家</button>
					<button data-type="sale"  class="btn">卖家</button>
					<button data-type="reply" class="btn">小二</button>
				</div>
			</div>
		</div>
	</div>
	<script id="leave-temp" type='x-template'>
		<dl class="reply-type-{type} row">
					<dt class="reply-title span2">
						<img class="reply-user-img" src="{userImg}"/>
					</dt>
					<dd class="reply-content span12">
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
					<dt class="reply-title span2">
						<img class="reply-user-img" src="{userImg}"/>
					</dt>
					<dd class="reply-content">
						<div class="popover left span12">
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
			var replyEl = S.one('#J_Reply'),
					leaveTemp = S.one('#leave-temp').text(),
					replyTemp = S.one('#reply-temp').text(),
					btns = S.all('.btn'),
					ATTR_TYPE = "data-type",
					PREFIX_SHOW = 'show-';
			function replyCallback(data){
				S.each(data,function(reply){
					var temp = getTemplate(reply);
					new S.Node(temp).appendTo(replyEl);
				});
			}

			function getTemplate(reply){
				if(reply.type === 'reply'){
					return getReplyTemplate(reply);
				}else{
					return getLeaveMessageTemplate(reply);
				}
			}
			
			function getLeaveMessageTemplate(reply){
				return S.substitute(leaveTemp,reply);
			}

			function getReplyTemplate(reply){
				return S.substitute(replyTemp,reply);
			}

			function fiterReply(type){
				var clsArray = replyEl.attr('class').split(' ');
				S.each(clsArray,function(cls){
					if(cls.indexOf(PREFIX_SHOW)===0){
						replyEl.removeClass(cls);
					}
				});
				replyEl.addClass(PREFIX_SHOW + type);
			}

			btns.on('click',function(event){
				var sender = S.one(event.target),
						type =sender.attr(ATTR_TYPE);
				btns.removeClass('active');
				sender.addClass('active');
				fiterReply(type);
			});
			/**/
			S.io({
				dataType:'json',
				type:'get',
				url:'./bussiness/data.php',
				success: replyCallback
			});
		});
	</script>
</section>