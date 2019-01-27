jQuery(function ($) {
    $("#mw-menu--linkID-1082").click(function () {
        $("#mw-menu--itemID-1082 > .sub-menu li").slideToggle("slow");
    });

    $("#mw-menu--linkID-1081").click(function () {
        $("#mw-menu--itemID-1081 > .sub-menu li").slideToggle("slow");
    });

    $("#mw-menu--linkID-1082").hover(
    	function () {
    		$("#mw-menu--linkID-1082 .mw-angle").css("color", "#ffffff");
    	},
    	function() {
    		$("#mw-menu--linkID-1082 .mw-angle").css("color", "#e8b548");
    	});

    $("#mw-menu--linkID-1081").hover(
    	function () {
    		$("#mw-menu--linkID-1081 .mw-angle").css("color", "#ffffff");
    	},
    	function() {
    		$("#mw-menu--linkID-1081 .mw-angle").css("color", "#e8b548");
    	});
});