$(document).ready(function(){

	$('.flexslider').flexslider({
		prevText: "",
		nextText: "",
		pauseOnAction: false,
		slideshowSpeed: 3000,
		touch: true
	});

});
	$(window).scroll(function () {
			if ($(document).scrollTop() > 100) {
				$('nav').addClass('tu');
			}
			else if ($(document).scrollTop() <20) {
				$('nav').removeClass('tu');
			}
			});