/*
Author       : Themes_master.
Template Name: Nurjahan - Creative Architecture & Interior HTML5 Template
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
		/*PRELOADER JS*/
		$(window).on('load', function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*END PRELOADER JS*/

		/*START MENU JS*/
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

			$(window).on('scroll', function() {
			  if ($(this).scrollTop() > 100) {
				$('.menu-top').addClass('menu-shrink');
			  } else {
				$('.menu-top').removeClass('menu-shrink');
			  }
			});
						
			$(document).on('click','.navbar-collapse.in',function(e) {
				if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
					$(this).collapse('hide');
				}
			});				
		/*END MENU JS*/ 

	   
		/*END PROGRESS BAR*/
			
		/*START SLIDER JS*/
			$('.carousel').carousel({
				interval:10000,
				pause:'false',
			});
		/*END SLIDER JS*/

		/*START PARTNER LOGO*/
		$('.partner').owlCarousel({
		  autoPlay: 5000, //Set AutoPlay to 3 seconds
		  items : 4,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3]
		});
		/*END PARTNER LOGO*/

		 /*START PORTFOLIO POPUP JS*/
		  $("a[data-rel^='prettyPhoto']").prettyPhoto();				 
		  $('#projectModal').on('shown.bs.modal', function () {
			  $('#myInput').focus()
		  })
		  /*END PORTFOLIO POPUP JS*/ 
		   
		
			
	}); 		

	/*START WOW ANIMATION JS*/
	  new WOW().init();	
	/*END WOW ANIMATION JS*/	
				
})(jQuery);


  

