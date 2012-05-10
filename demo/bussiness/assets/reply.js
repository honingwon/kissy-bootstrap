KISSY.add(function(S){

	
	var	ATTR_TYPE = 'data-type',
		CLS_ITEM_CONTAINER = 'reply-item-container',
		CLS_MORE_LINK = 'reply-more-link',
		TYPE_LEAVE = 'leave',
		TYPE_REPLY = 'reply',
		PREFIX_SHOW = 'show-';
	var reply = function(config){
		reply.superclass.constructor.call(this, config);
		this._init();
	};
	reply.ATTRS = {
		//获取不同类型的模板Container的ID,目前只提供留言和回复2种模板
		typeTemplate : {
			getter:function(value){
				if(value === TYPE_REPLY){
					return TYPE_REPLY + '-temp';
				}
				return TYPE_LEAVE + '-temp';
			}
		},
		//每次加载数据的条数
		pageSize : {
			value : 10
		},
		//加载数据的当前位置
		position : {
			value : 0	
		}
	};
	S.extend(reply,S.Base);
	S.augment(reply,{
		//初始化
		_init : function(){
			var _self = this;
			_self._initDom();
			_self._initEvent();
			_self._initData();
		},
		//初始化DOM
		_initDom : function(){
			var _self = this,
				replyEl = S.one('#' + _self.get('renderTo')),
				containerEl = S.one('.'+CLS_ITEM_CONTAINER , replyEl),
				btns = S.all('.btn',replyEl),
				moreLnkEl = S.one('.'+CLS_MORE_LINK, replyEl);
			_self.set('btns',btns);
			_self.set('containerEl',containerEl);
			_self.set('moreLnkEl',moreLnkEl);
		},
		//初始化事件
		_initEvent : function(){
			var _self = this,
				btns = _self.get('btns'),
				moreLnkEl = _self.get('moreLnkEl');
			btns.on('click',function(event){
				var sender = S.one(event.target),
					type =sender.attr(ATTR_TYPE);
				btns.removeClass('active');
				sender.addClass('active');
				_self._fiterReply(type);
			});
			moreLnkEl.on('click',function(event){
				event.halt();
				_self.loadData();
			});
		},
		//初始化数据
		_initData : function(){
			var _self = this;
			_self.loadData();
		},
		//过滤不同的信息类型
		_fiterReply : function (type){
			var _self = this,
				containerEl = _self.get('containerEl'),
				clsArray = containerEl.attr('class').split(' ');
			S.each(clsArray,function(cls){
				if(cls.indexOf(PREFIX_SHOW)===0){
					containerEl.removeClass(cls);
				}
			});
			containerEl.addClass(PREFIX_SHOW + type);
		},
		_replyCallback : function(data){
			var _self = this,
				containerEl = _self.get('containerEl');
			S.each(data,function(item){
				var temp = _self._getTemplate(item);
				new S.Node(temp).appendTo(containerEl);
			});
		},
		//获取信息的模板，买家、卖家留言和小二回复
		_getTemplate : function(record){
			var _self = this,
				tempContainerId = _self.get('typeTemplate',record.type),
				tempEl = S.one('#'+tempContainerId),
				temp = '';
			if(tempEl){
				temp =  S.substitute(tempEl.text(),record);
			}
			return temp;

		},
		//加载数据
		loadData : function(){
			var _self = this,
				pageSize = _self.get('pageSize'),
				position = _self.get('position');
			S.io({
				dataType:'json',
				type:'get',
				data : {start : position,pageSize : pageSize},
				url:_self.get('url'),
				success: function(data){
					_self._replyCallback(data);
					_self.set('position',position + pageSize);
				}
			});
		}

	});

	return reply;
},{requires:["./css/reply.css"]});