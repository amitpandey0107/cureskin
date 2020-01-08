jQuery(document).ready(function() {

	// Toggle Main Menu for Mobile View
	jQuery('#mobileicon').on('click tap', function() {
		jQuery('.menuWrapper').show(0); 
	    setTimeout(function(){ 
	    	jQuery('body').addClass('bodyoverlay');
	    },0);
	    
	});

	jQuery('#mobilecross').on('click tap', function() {
		jQuery('.menuWrapper').hide(0); 
		setTimeout(function(){ 
	    	jQuery('body').removeClass('bodyoverlay');
	    },0);
	});


	// Product Slider
	jQuery('#featuredlogo').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	})



})