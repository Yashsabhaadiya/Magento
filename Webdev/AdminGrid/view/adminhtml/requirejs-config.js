var config = {
    map: {
        '*': {
            'Magento_Checkout/js/view/form/element/email.js': 'emailPath'
        }
    },
    paths: {
        'emailPath': 'Webdev_AdminGrid/view/web/js/view/form/element/email.js'
    },
    shim: {
        'emailPath': {
            deps: ['jquery']
        }
    }
};
