// Site desenvolvido por Paulo Vinicius - ploviniciusplo@gmail.com

$(function() {
	$(document).ready(function(){
		// Sociais do menu mobile
		var sociaisMobile = $('#sociais').clone();
		$('#menu #lista-menu').append('<div id="sociaisMobile">'+ sociaisMobile.html() +'</div>');

		// Efeito de fade das sections
		window.sr = ScrollReveal({ reset: true });
	    if (sr.isSupported()) {
	        document.documentElement.classList.add('sr');
	    }
	    sr.reveal('#destaques .destaque-item', { duration: 1500, origin: 'top'}, 30);
	    sr.reveal('#todos-itens .titulo-intro', { duration: 1500, origin: 'top'}, 30);
	    sr.reveal('#todos-itens .item', { duration: 1500, origin: 'top'}, 30);
	    sr.reveal('#rodape .custom-col', { duration: 1500, origin: 'top'}, 30);
	});

	// Botao de Abrir/Fechar menu Mobile
	$('#menu .navbar-toggle').click(function(e){
		e.preventDefault();
		if ($('#lista-menu').hasClass('open')) {
			$('#lista-menu').fadeOut();
			$('#lista-menu').removeClass('open');
		} else {
			$('#lista-menu').fadeIn();
			$('#lista-menu').addClass('open');
		}
	});

	// Scroll Hide/Show para rodape com pesquisa no mobile
	$(window).scroll(function(){
		if ($(window).width() <= 752) {
			if(($(window).scrollTop() + $(window).height()) >= ($(document).height() - 20)) {
				$('#pesquisar').hide();
			} else {
				$('#pesquisar').show();
			}
		}
	});
});