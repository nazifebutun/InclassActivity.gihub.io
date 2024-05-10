$(document).ready(function() {
        	$("#slider").bxSlider({
			  auto: true,
			  randomStart: true,
			  moveSlides: 1,
			  minSlides: 1,
			  maxSlides: 1,  
			  slideWidth: 250,
			  slideMargin: 10,
			  pagerType: "short",
			  pause: 3000,
			  captions:true,
			  pagerCustom: '#pager'
			});
    	});