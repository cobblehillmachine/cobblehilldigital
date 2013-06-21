var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPod/i);  // I removed Ipad for the splash. May need to put it back | iPad |
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};


$(document).ready(function() {

 	if(isMobile.any()) {
		$('#video-wrap').remove();
	}
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
	var videoH = $('#video-wrap').height();
	//$('#video-wrap').css({'height': videoH});

});

