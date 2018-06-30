//(function($) {
    $(document).ready(function () {
        $(".brain-layer")
            .mousemove(function () {
                if(!$(this).has(".brain-layer:hover").length){
                    $(this).addClass("active");
                } else {
                    $(this).removeClass("active");
                }
            }).mouseleave(function () {
                $(this).removeClass("active");
            });
    });
//})(jQuery);
