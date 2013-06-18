$(document).ready(function() {


	$(window).scroll(function(){
		var aboveHeight = $('.header-image-wrap').height();
		var slidesHeight = $('.work-slides').height();
		var leftcontentHeight = $('.single-content').height();
		var newH = slidesHeight - 475 +'px';

			if ($(window).scrollTop() > aboveHeight && $(window).scrollTop() < slidesHeight) {

					$('.single-content').addClass('fixed');

			} else if ($(window).scrollTop() > slidesHeight) {
					$('.single-content').removeClass('fixed');
					$('.single-content').css({'margin-top':newH});
			} else {
			 			$('.single-content').removeClass('fixed');
						$('.single-content').css({'margin-top':0});

			}
	});

});
