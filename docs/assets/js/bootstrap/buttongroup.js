/**
 * Model and Control for dpl button
 * @author dxq613@gmail.com
 */
KISSY.add("bootstrap/buttongroup", function (S, Button, Component, GroupRender) {

    /**
     * @name DPL.ButtonGroup
     * @constructor
     * @extends Button
     */
    var ButtonGroup = Component.Container.extend({
        /**
         * init children before initializer
         */
        initializer:function () {
            var _self = this,
                children = _self.get('children'),
                count = children ? children.length : 0,
                child = null;
            for (var i = 0; i < count; i++) {
                child = children[i];
                if (!(child instanceof Button)) {
                    children[i] = _self._createButton(child);
                }
            }
        },
        // use config to create button
        _createButton:function (config) {
            var _self = this,
                checkMode = _self.get('checkMode');
            config.checkable = checkMode == ButtonGroup.checkMode.NONE ? false : true;
            config.handleMouseEvents = false;
            var button = new Button(config);
            button.on('click', function (event) {
                if (checkMode === ButtonGroup.checkMode.RADIO) {
                    _self._clearChecked([this]);
                }
                if (checkMode !== ButtonGroup.checkMode.NONE) {
                    _self.fire('checkedChanged');
                }
                config.handler(event);
            });
            return button;
        },
        _clearChecked:function (exceptList) {
            var _self = this,
                children = _self.get('children');
            S.each(children, function (button) {
                if (!S.inArray(button, exceptList)) {
                    button.set('checked', false);
                }
            });

        }
    }, {
        ATTRS:{
            decorateChildCls:{
                value:'button'
            },
            /**
             * none : no button checked
             * radio : single button can checked
             * check : multiple button can checked
             */
            checkMode:{
                value:'none'
            },
            checkedValue:{
                value:[],
                getter:function () {
                    var _self = this,
                        children = _self.get('children'),
                        result = [];
                    S.each(children, function (button) {
                        if (button.get('checked')) {
                            result.push(button.get('value'));
                        }
                    });
                    return result;
                },
                setter:function (value) {
                    var _self = this,
                        children = _self.get('children');
                    S.each(children, function (button) {
                        if (S.inArray(button.get('value'), value)) {
                            button.set('checked', true);
                        }
                    });
                }
            }
        },
        /**
         * check modle of buttons in group
         */
        checkMode:{
            NONE:'none',
            RADIO:'radio',
            CHECK:'check'
        }
    }, {
        xclass:"button-group",
        priority:1
    });

    ButtonGroup.DefaultRender = GroupRender;

    return ButtonGroup;
}, {
    requires:['button', 'component', './grouprender']
});