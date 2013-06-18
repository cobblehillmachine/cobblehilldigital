$(document).ready(function() {
	$('body').delay(2000).css('display', 'block');
	$('img[title]').each(function() { $(this).removeAttr('title'); });
	$('.team-member .img-cont').on({
		mouseenter: function(){$(this).children('.overlay').show();},
		mouseleave: function(){$(this).children('.overlay').hide();},

	});

    $('#slideshow').cycle({
		fx: 'fade',
	  slideResize: true,
	  containerResize: false,
	  width: '100%',
	  fit: 1,
	  pause:true,
	  speed:7000
	});
	
		$("a.work span").css({"opacity" : 0});
		
		$("a.work").hover(function(){
		$(this).children("span").animate({"opacity" : 1}, 400);
			}, function(){
		$(this).children("span").animate({"opacity" : 0}, 400);
	});
	
		$("div.map-popup").css({"opacity" : 0});
		
		$("img.map-marker").hover(function(){
		$("div.map-popup").animate({"opacity" : 1}, 400);
			}, function(){
		$("div.map-popup").animate({"opacity" : 0}, 400);
	});
		
		$("a.post-link").hover(function(){
		$(this).toggleClass("rollover");
	});
	
		$(".filter-by").live({
		mouseenter: function(){
			$(".tab").addClass("rollover");
			$(".filter-by ul").slideToggle();
			$(this).css('border-color','#c1c0c0');
		}
	});

	$(".filter-by").live({
		mouseleave: function(){
			$(".tab").removeClass("rollover");
			$(".filter-by ul").slideToggle();
			$(this).css('border-bottom-color','#c84927');
		}
	});
 
// 	//Calculate the height of <header>
// 	//Use outerHeight() instead of height() if have padding
// 	var aboveHeight = $('.header-image-wrap').height();
// 
// //when scroll
// 	$(window).scroll(function(){
// 
// 		//if scrolled down more than the header’s height
// 					if ($(window).scrollTop() > aboveHeight){
// 
// 		// if yes, add “fixed” class to the <nav>
// 		// add padding top to the #content
// 		//      (value is same as the height of the nav)
// 					$('.single-content').addClass('fixed');
// 
// 					} else {
// 
// 		// when scroll up or less than aboveHeight,
// 		//      remove the “fixed” class, and the padding-top
// 					$('.single-content').removeClass('fixed');
// 					}
// 	});
				
	$(document).ready(function(){
		$("label").inFieldLabels();
		$(".work-slides").fitVids();
	});
});