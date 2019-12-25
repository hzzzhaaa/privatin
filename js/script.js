$('.js-scroll-trigger').on('click', function(e) {

	var tujuan = $(this).attr('href');

	var elemenTujuan = $(tujuan);

	$('html , body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 800);

	e.preventDefault();
});