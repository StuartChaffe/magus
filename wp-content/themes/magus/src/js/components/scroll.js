jQuery(document).ready(function($) {

	var btn = $('#button');

	$(window).scroll(function() {
	if ($(window).scrollTop() > 1100) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
	});
	btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '1100');
	});
});


jQuery(document).ready(function($) {

	var btn = $('#cta-button');

	$(window).scroll(function() {
	if ($(window).scrollTop() > 900) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
	});
});

jQuery(document).ready(function($) {
	var btn = $('#cta-button-2');

	$(window).scroll(function() {
	if ($(window).scrollTop() > 900) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
	});
});


jQuery(document).ready(function($) {

	var btn = $('.modal');

	if (sessionStorage.getItem('advertOnce') !== 'true') {

		$(window).scroll(function() {
		if ($(window).scrollTop() > 900) {
			btn.addClass('show');
			sessionStorage.setItem('advertOnce','true');
			console.log('yes');
		}
		});
	}

	// $(window).scroll(function() {
	// if ($(window).scrollTop() > 900) {
	// 	btn.addClass('show');
	// }
	// });

});

jQuery(document).ready(function($) {
	$('.modal--close').click(function() {
		$('.modal').addClass('noshow');
	});
});

