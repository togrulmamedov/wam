jQuery(function () {
    $("#mw-media").click(function () {
        $(".sub-menu--media li").slideToggle("slow");
    });

    $("#mw-interesting").click(function () {
        $(".sub-menu--interesting li").slideToggle("slow");
    });

    $("#mw-media").hover(
    	function () {
    		$("#mw-media .mw-angle").css("color", "#ffffff");
    	},
    	function() {
    		$("#mw-media .mw-angle").css("color", "#e8b548");
    	});

    $("#mw-interesting").hover(
    	function () {
    		$("#mw-interesting .mw-angle").css("color", "#ffffff");
    	},
    	function() {
    		$("#mw-interesting .mw-angle").css("color", "#e8b548");
    	});
});