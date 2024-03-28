define([], function () {
    let colMixin = {
        defaults:{
            draggable : false
        }
    };
 
    return function (target) {
        return target.extend(colMixin);
    }
});