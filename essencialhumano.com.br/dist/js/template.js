window.addEventListener('load', function() {
	var speed = 600;
	$('.slide').owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		nav: false,
		dots: true,
		autoplaySpeed: speed,
		dotsSpeed: speed,
		dragEndSpeed: speed
	});
	$('.depoimento').owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		nav: false,
		dots: true,
		autoplaySpeed: speed,
		dotsSpeed: speed,
		dragEndSpeed: speed
	});

	$('.clientes').owlCarousel({
		autoplay: true,
		loop: true,
		nav: false,
		dots: true,
		autoplaySpeed: speed,
		dotsSpeed: speed,
		dragEndSpeed: speed,
		margin: 26,
		responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    }
	});

	// Mask Phones
    var SPMaskBehavior = function(val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.phone').mask(SPMaskBehavior, spOptions);

    // Menu Mobile
    $('nav .button-toggle-nav').click(function(e) {
        e.preventDefault();
        
        $(this).toggleClass('ativo');
        
        $('nav .nav-inner').slideToggle();
    });

    // Anchor
	$('.back-top').click(function(e) {
		e.preventDefault();

		$('html, body').animate({
			scrollTop: $('body').offset().top
		}, 600);
	});
});