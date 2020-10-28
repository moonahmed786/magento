define([
    'ko',
    'uiComponent'
], function (ko, Component) {
    'use strict';
    return Component.extend({
        initialize: function () {
            //initialize parent Component
            this._super();
            this.title = ko.observable(this.moduleName);
        },
        getTitle: function() {
             return this.title();
        },
    });
});
