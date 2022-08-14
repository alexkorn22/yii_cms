(function($) {
"use strict";
	jQuery(document).ready(function($){
	    $(".cf7_range_slider").ionRangeSlider();
	    $("input").change(function(){
	    	console.log($(this).val());
	    });
	})

})(jQuery);