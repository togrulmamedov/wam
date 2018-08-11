jQuery(function () {
    $("#mw-media").click(function () {
        $(".sub-menu--media li").slideToggle("slow");
    });

    $("#mw-interesting").click(function () {
        $(".sub-menu--interesting li").slideToggle("slow");
    });
});