	//Calculate the height of <header>
	//Use outerHeight() instead of height() if have padding
	var aboveHeight = $('.header-image-wrap').height();
	var slidesHeight = $('.work-slides').height();
	var leftcontentHeight = $('.single-content').height();
	var newH = slidesHeight - 475 +'px';
	$('.single-content').css('height', leftcontentHeight) ;

$(window).scroll(function(){

		//if scrolled down more than the header’s height
	if ($(window).scrollTop() > aboveHeight){

			$('.single-content').addClass('fixed');
			//if ($(window).scrollTop() > slidesHeight){
			// 
			// 	$('.single-content').removeClass('fixed');
			// 	$('.single-content').css({'margin-top':newH});
			// 
			// 	 } else {
			// 
			// 	$('.single-content').addClass('fixed');
			// 	$('.single-content').css({'margin-top':0});
			// }
	} else {
			$('.single-content').removeClass('fixed');
	}


});