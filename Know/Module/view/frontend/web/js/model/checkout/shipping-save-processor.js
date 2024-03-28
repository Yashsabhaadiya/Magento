define([
    'mage/utils/wrapper'
], function() {

    return function (shippingSaveProcessor) {
        shippingSaveProcessor.saveShippingInformation = wrapper.wrapSuper(shippingSaveProcessor.saveShippingInformation, 
            function (type) {
                if(!confirm('Do you want to continue to save shipping information for ' + type + 'type?')){
                    return [];
                }
                return this._super(type);
            });
        return shippingSaveProcessor;
    }
})