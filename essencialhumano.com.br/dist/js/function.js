
jQuery(function($) {'use strict';


		
// ======================================================
   //SCROLLING
// ======================================================
	
$('body').scrollspy({target: ".navbar", offset: 50});     
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 100);
        return false;
 });
$(".scroll").click(function(event){
		  
	  event.preventDefault();
	  $('html,body').animate({scrollTop:$(this.hash).offset().top}, 2000);
  });
	

	
// ======================================================
   //LIGHT BOX
// ======================================================
if($('.lightbox-image').length) {
	$('.lightbox-image').fancybox();
}


// ======================================================
   //POPUPS
// ======================================================
$('a[href=".team"]').on('click', function(event) {
		 event.preventDefault();
		 $('#team').addClass('open');
		 $('#team > form > input[type="search"]').focus();
	 });
	 $('#team, #team button.close').on('click keyup', function(event) {
	  if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
		  $(this).removeClass('open');
  }
});
$('a[href=".popup_login"]').on('click', function(event) {
		 event.preventDefault();
		 $('#popup_login').addClass('open');
		 $('#popup_login > form > input[type="search"]').focus();
	 });
	 $('#popup_login, #popup_login button.close').on('click keyup', function(event) {
	  if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
		  $(this).removeClass('open');
  }
});
 
	

// ======================================================
   //ALL OWL SLIDERS
// ======================================================
 $('#main-slider.carousel').carousel({
	  interval: 5000,
	  singleItem : true,
	  transitionStyle : "fade"
});

$("#index_7_slider").owlCarousel({
	autoPlay: true, //Set AutoPlay to 3 seconds		
	singleItem : true,
	pagination : true,
	navigation : false
});



$("#about-owl-slider").owlCarousel({
	autoPlay: true, //Set AutoPlay to 3 seconds		
	singleItem : true,
	pagination : false
});

$("#services_index1, #our-agent-slider, #services_slider").owlCarousel({
	  autoPlay: 5000, //Set AutoPlay to 5 seconds
	  items : 3,
	  pagination : false,
	  navigation : true,
	  navigationText: [
		"<i class='fa fa-angle-left'></i>",
		"<i class='fa fa-angle-right'></i>"],
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3]
     
});

$("#gallery-slider").owlCarousel({
	autoPlay: 2000, //Set AutoPlay to 2 seconds
    navigation : true,
	pagination : false,
	navigationText: [
		"<i class='fa fa-angle-left'></i>",
		"<i class='fa fa-angle-right'></i>"],
}); 

$(".client-owl").owlCarousel({
	  autoPlay: 2000, //Set AutoPlay to 2 seconds
	  navigation : false,
	  pagination : false
  });
  
var revapi;
	revapi = jQuery("#rev_slider_8, #rev_slider").revolution({
		sliderType:"standard",
		sliderLayout:"fullwidth",
		scrollbarDrag:"true",
		delay:9000,
		navigation: {
			arrows:{enable:true},
			touch:{

					  touchenabled:"on",
					  swipe_threshold: 75,
					  swipe_min_touches: 1,
					  swipe_direction: "horizontal",
					  drag_block_vertical: false

				  }
			
		},
			
		gridwidth:1170,
		gridheight:640		
});


	
});				




// ======================================================
   //CLOUDY BANNER
// ======================================================
function setHeight() {
   
	 var $window = $(window);
		windowHeight = $(window).innerHeight();
		   if ($window.width() >= 1600) {

		$('#index-banner').css('min-height', windowHeight);
	} 
	else{
		$('#banner_2').removeClass('home-center');
	}
	  };
	  setHeight();
	  
	  $(window).resize(function() {
});
