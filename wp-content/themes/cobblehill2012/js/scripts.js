$(document).ready(function() {
	$('body').fadeIn('slow');

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
 

				
	$(document).ready(function(){
		$("label").inFieldLabels();
		$(".work-slides").fitVids();
	});
});

$(document).ready(function() {
	var aboveHeight = $('.header-image-wrap').height();
	var slidesHeight = $('.work-slides').height();

	var newH = slidesHeight - 475 +'px';


	$(window).scroll(function(){


	if ($(window).scrollTop() > aboveHeight){

			$('.single-content').addClass('fixed');
			if ($(window).scrollTop() > slidesHeight){

				$('.single-content').removeClass('fixed');
				$('.single-content').css({'margin-top':newH});

				 } else {

				$('.single-content').addClass('fixed');
				$('.single-content').css({'margin-top':0});
			}
	} else {
			$('.single-content').removeClass('fixed');
	}


	});
});