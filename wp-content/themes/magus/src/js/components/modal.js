jQuery(function ($) {
    $(".ajax-featherlight").featherlight({
        targetAttr: 'href',
        closeSpeed: 1,
        openSpeed: 1,
        beforeOpen: function(){
            $.featherlight.close()
        } 
    });

    $(window).scroll(function() {
		if ($(this).scrollTop()>600) {
			$('.ask').fadeIn();
		} else {
			$('.ask').fadeOut();
		}
	});
});