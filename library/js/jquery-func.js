function mycarousel_initCallback(carousel) {
	    $('.slider-navigation a').bind('click', function() {
	        carousel.scroll($.jcarousel.intval($(this).text()));
	        return false;
	    });	    
	    $('.big-navigation .button-holder a').bind('click', function() {
	        carousel.scroll($.jcarousel.intval($(this).text()));
	        return false;
	    });	        
};
	
function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
	$('.slider-navigation a').removeClass('active');
	$('.slider-navigation a').eq(idx-1).addClass('active');
};

$(document).ready(function(){
	
	$("#slider .slider-holder ul").jcarousel({
		scroll:1,
		auto:4,
		start:1,
		wrap:"both",
        itemFirstInCallback: mycarousel_itemFirstInCallback,
        initCallback: mycarousel_initCallback,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null	
	});
	
	$(".field").focus(function(){
		if($(this).val()==$(this).attr('title'))
			$(this).val("");
	});
	$(".field").blur(function(){
		if($(this).val()=="")
			$(this).val($(this).attr('title'));
	});
	
});