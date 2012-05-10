KISSY.add(function(S,O){
	var ATTR_TITLE = 'data-title';
	function tooltip(config){
		var selector = config.selector,
			nodes = S.all(selector);
		nodes.each(function(node){
			var title = node.attr('title');
			node.removeAttr('title');
			node.attr(ATTR_TITLE,title);
		});
		var popup = new O.Popup({
				trigger : nodes,
				triggerType:'mouse',
				elCls:'tooltip  top in',
				effect:{
					effect:'fade', //"fade",
					duration:0.5
				}
			});
		popup.on('afterCurrentTriggerChange', function (e) {
			var t = e.newVal;
				
			if (!t) {
				return;
			}
			popup.set('content', '<div class="tooltip-arrow"></div><div class="tooltip-inner">' + t.attr(ATTR_TITLE) + '</div>');
			popup.set('align', {
				node:t,
				points:["tc", "bc"]
			});
		});

	}

	return tooltip;
},{
    requires : ['overlay']
});