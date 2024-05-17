(function($){
    "use strict";
    var HT = {};
    var $document = $(document)

    HT.switchery = () => {
        $('.js-switch').each(function(){
            var switchery = new Switchery(this, {color:'rgb(162, 20, 197)'})
        })
    }

    $document.ready(function(){
        HT.switchery()
    })
})(jQuery);
