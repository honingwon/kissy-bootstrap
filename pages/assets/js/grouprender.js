/**
 * Model and Control for dpl button group render
 * @author dxq613@gmail.com
 */
KISSY.add(function(S,UIBase,Component){

	/**
     * @name DPL.ButtonGroupRender
     * @constructor
     * @extends Button
     */
	var ButtonGroupRender = UIBase.create(Component.Render,[],{
		 createDom:function () {
            // set wai-aria role
            this.get("el")
                .attr("role", "toolbar");
        }
	});
	return ButtonGroupRender;
}, {
    requires:['uibase', 'component']
});