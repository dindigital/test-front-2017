$('.carousel').carousel({
	interval: 2000,
	keyboard: true,
	pause: 'hover',
	wrap: true
});

$('#slider4').on('slide.bs.carousel', function () {
	console.log('SLIDE!');
});

$('#slider4').on('slid.bs.carousel', function () {
	console.log('SLID!');
});