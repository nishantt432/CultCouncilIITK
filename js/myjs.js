$( document ).ready(function() {
    $(window).bind("load", function() {
    	// Adjust heigt of Left Sidebar
      $('.topBar').width( $(window).width() +12);
      $('.bottomBar').width( $(window).width() );
      $('.leftBar').height( $(window).height() - 50 );
      $('.sub-menu').css('left',($('.leftBar').width()));
      $('.sub-menu').css('top',$('.council-nav').height());
      $('.scrollBar').height($(window).height()*.62);

    	$(function() {
    	    $('.navigation li.has-sub').hoverIntent(function(){
    	        $(this).addClass("active").find('.sub-menu').fadeIn("fast");
    	    },
    	    function(){ //Close when not hovered
    	        $(this).removeClass("active").find('.sub-menu').fadeOut("fast");
    	    });
    	});
    });

});

$( document ).ready(function() {
	window.onresize = function() {
		// Adjust heigt of Left Sidebar
    $('.scrollBar').height($(window).height()*.62);
    $('.topBar').width( $(window).width() );
    $('.leftBar').height( $(window).height() - $('.topBar').height() - $('.bottomBar').height() );
    $('.bottomBar').width( $(window).width()  );
    $('.sub-menu').css('left',($('.leftBar').width()));
    $('.sub-menu').css('top',$('.council-nav').height());
    ///$('.council-nav').height(($(window).height() - 400)/6);
	};
});
