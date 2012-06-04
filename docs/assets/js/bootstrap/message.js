KISSY.add('bootstrap/message',function(S){
	/**
     * @name DPL.Message
     * @constructor
     */
	function message(config){
		message.superclass.constructor.call(this, config);
		this._init();
	}

	S.extend(message,S.Base);
	S.augment(message,
	/** @lends  DPL.Message.prototype */	
	{
		_init : function(){
			var _self = this;
			_self._initDom();
			_self._initEvent();
		},
		_initDom : function(){
			var _self = this,
				srcNode = _self.get('srcNode'),
				el = S.one(srcNode);
			_self.set('el',el);
		},
		_initEvent : function(){
			var _self = this,
				el = _self.get('el');
			el.one('.close').on('click',function(event){
				event.halt();
				_self.hide();
			});

		},
		/**
		* ��ʾ��Ϣ
		*/
		show : function(){
			var _self = this,
				el = _self.get('el');
			el.show();
		},
		/**
		* ������Ϣ
		*/
		hide : function(){
			var _self = this,
				el = _self.get('el');
			el.hide();
		}
	});
	return message;
});