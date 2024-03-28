define([], function() {
    'use strict';

    let totals = {
        isFullMode: function(){
            return true;
        }
    };

    return function(target) {
        return target.extend(totals);
    }

});