$(document).ready(function() {

	// Product Slider
	$('#featuredlogo').owlCarousel({
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

	// Toogle Menu
	$('#menu_icon').on('click', function() {
		$('.top_navigation').slideToggle();		
	})
	$('.top_navigation > .main_menu > li.has_child_menu').append('<i class="fa fa-angle-right dropdown_icon"></i>');
	$('.top_navigation > .main_menu > li.has_child_menu i.dropdown_icon').on('click', function() {
		$(this).prev().toggle();
       	$(this).toggleClass('fa-angle-up fa-angle-right');
	})
})