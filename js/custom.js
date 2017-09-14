jQuery(document).ready(function($) {
	
	$(window).scroll(function(event) {
		scrollHeader();
	});

	$('.banner').slick({
		adaptiveHeight: true,
		autoplay: true,
		arrows: false,
		dots: true,
		mobileFirst: true
	});

	$('.linkMenu').click(function(event) {
		$('header .container').toggleClass('showMenu');
		$('.linkMenu').toggleClass('fechar');
	});

	function scrollHeader(){
		if( $(window).scrollTop() > 50 ){
			$('header').addClass('scrollHeader');
			$('header').hover(function() {
				$('header').removeClass('scrollHeader');
			}, function() {
				$('header').addClass('scrollHeader');
			});
		} else {
			$('header').removeClass('scrollHeader');
			$('header').hover(function() {
				$('header').removeClass('scrollHeader');
			}, function() {
				$('header').removeClass('scrollHeader');
			});
		}
	}

});