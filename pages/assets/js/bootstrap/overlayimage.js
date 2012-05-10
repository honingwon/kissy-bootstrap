KISSY.add('bootstrap/overlayimage',function(S,O){
	var CLS_ITEM = 'thumbnail';
	/**
     * @name DPL.OverlayImage
     * @constructor
     */
	function overlayImage(config){
		overlayImage.superclass.constructor.call(this, config);
		this._init();
	}
	S.extend(overlayImage,S.Base);

	S.augment(overlayImage,
	/** @lends  DPL.OverlayImage.prototype */	
	{
		//获取所有的链接元素
		_getLinkItems : function(){
			var _self = this,
				el = _self.get('el'),
				linkItems = el.all('.' + CLS_ITEM);
			return linkItems;
		},
		//获取当前显示的项
		_getCurrentItem : function(){
			var _self = this;
			return _self.get('currentItem');
		},
		//获取索引值
		_getItemIndex : function(item,items){
			var result = -1;
			items.each(function(elem,index){
				if(elem[0] === item[0]){
					result = index;
					return false;
				}
			});
			return result;
		},
		//获取下个图片
		_getNextItem : function(currentItem,items){
			var _self = this,
				curIndex = -1;
			currentItem = currentItem || _self._getCurrentItem();
			items =  items || _self._getLinkItems();
			curIndex = _self._getItemIndex(currentItem,items);
			return S.one(items[curIndex + 1]);
		},
		//获取前一个图片
		_getPrevItem : function(currentItem,items){
			var _self = this,
				curIndex = -1;
			currentItem = currentItem || _self._getCurrentItem();
			items =  items || _self._getLinkItems();
			curIndex = _self._getItemIndex(currentItem,items);
			return S.one(items[curIndex - 1]);
		},
		//初始化
		_init : function(){
			var _self = this;
			_self._initDom();
			_self._initEvent();
			_self._initOverlay();
			_self._initOverlayEvent();
		},
		//初始化DOM
		_initDom : function(){
			var _self = this,
				el = S.one(_self.get('srcNode'));
			_self.set('el',el);
		},
		//初始化事件
		_initEvent : function(){
			var _self = this,
				el = _self.get('el'),
				overlay = null;
			el.delegate('click','.' + CLS_ITEM,function(event){
				event.halt();
				var sender = S.one(event.currentTarget);
				_self._showItem(sender);
			});
		},
		//初始化overlay
		_initOverlay : function(){
			var _self = this,
				overlay = new O({
					content : '<div class="oi-outer"><div class="oi-container"><img class="oi-img" src="http://lokeshdhakar.com/projects/lightbox2/images/loading.gif"/><div class="oi-nav" style="display: block; "><a class="oi-prev" style="display: block; "></a><a class="oi-next" style="display: block; "></a></div></div>' +
							'<div class="oi-data"><div class="oi-title"></div><div class="oi-numer"></div><a href="#" class="close">×</a></div></div>',
					effect:{
						effect:'fade', //"fade",
						duration:0.5
					},align: {
					   points: ['cc', 'cc']
					},
					width : 500,
					height : 530,
					closable : false,
					mask:true
				});
			
			//overlay.render();
			_self.set('overlay',overlay);
		},
		_initOverlayEvent : function(){
			var _self = this,
				overlay = _self.get('overlay'),
				overlayEl = null,
				prevEl = null,
				nextEl = null;
			overlay.on('afterRenderUI',function(){
				overlayEl = overlay.get('el');
				prevEl = overlayEl.one('.oi-prev');
				nextEl = overlayEl.one('.oi-next');
				overlayEl.delegate('click','.close',function(event){
					event.halt();
					overlay = _self.get('overlay');
					overlay.hide();
				});
				//前一张图片
				prevEl.on('click',function(event){
					event.halt();
					var prevItem = _self._getPrevItem();
					_self._showItem(prevItem);
				});
				//后一张
				nextEl.on('click',function(event){
					event.halt();
					var nextItem = _self._getNextItem();
					_self._showItem(nextItem);
				});

			});
		},
		//显示对应的图片
		_showItem : function(item){
			if(!item){
				return;
			}
			var _self = this,
				src = item.attr('href'),
				el = _self.get('el'),
				linkItems = null,
				currentItem = _self._getCurrentItem(),
				overlay = _self.get('overlay');
			//重新显示Overlay时，获取所有的图片集合，期间图片集合发生改变
			if(!overlay.get('visible')){
				linkItems = el.all('.' + CLS_ITEM);
				_self.set('linkItems',linkItems);
				overlay.show();
			}
			if(currentItem && currentItem.attr('href' === src)){
				return;
			}
			_self.set('currentItem',item);
			_self._setImageInfo(item);
		},
		//设置图片信息，加载图片
		_setImageInfo : function(item){
			var _self = this,
				overlay = _self.get('overlay'),
				container = overlay.get('el'),
				img = item.one('img'),
				prevEl = container.one('.oi-prev');
				nextEl = container.one('.oi-next');
			container.one('.oi-img').attr('src',item.attr('href'));
			container.one('.oi-title').text(item.attr('title'));
			if(img){
				container.one('.oi-numer').text(item.attr('alt'));
			}
			//设置是否可以查看前一个图片
			if(_self._getPrevItem(item)){
				prevEl.show();
			}else{
				prevEl.hide();
			}
			//设置是否可以查看下一个图片
			if(_self._getNextItem(item)){
				nextEl.show();
			}else{
				nextEl.hide();
			}
		},
		getTotalCount : function(){
			
		},
		getCurrentIndex : function(){
			
		},
		show : function(index){
			
		},
		hide : function(){
			
		},
		next : function(){
			
		},
		prev : function(){
			
		}
	});

	return overlayImage;
},{
    requires : ['overlay']
});