define([
    'jquery'
], function ($) {
    'use strict';

    let modalMixin = {
        options: {
            openInfo: 'Newly created Address won\'t be saved anymore',
            closeConfirmMessage: 'Do you really want to close the modal?'
        },

        openModal: function() {
            alert(this.options.openInfo);

            return this._super();
        }, 

        closeModal: function() {
            if(!confirm(this.options.closeConfirmMessage)) {
                return this.element;
            } 

            return this._super();
        }
    };

    return function (modalWidget) {
        $.widget('mage.modal', modalWidget, modalMixin);

        return $.mage.modal;
    }

})