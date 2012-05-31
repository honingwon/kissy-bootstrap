/**
 * Model and Control for dpl button group render
 * @author dxq613@gmail.com
 */
KISSY.add('bootstrap/grouprender',function(S,Component){

	/**
     * @name DPL.ButtonGroupRender
     * @constructor
     * @extends Button
     */
	var ButtonGroupRender = Component.define(Component.Render,[],{
		 createDom:function () {
            // set wai-aria role
            this.get("el")
                .attr("role", "toolbar");
        }
	});
	return ButtonGroupRender;
}, {
    requires:['component']
});