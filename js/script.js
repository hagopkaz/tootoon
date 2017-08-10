jQuery(document).ready(function($){

		$( "#bannerCarousel div.item" ).first().addClass('active');
		$( "#testimCarousel div.item" ).first().addClass('active');
		$( "#bannerCarousel .carousel-indicators li" ).first().addClass('active');
		$( "#testimCarousel .carousel-indicators li" ).first().addClass('active');
		$( ".current-menu-item" ).first().addClass('active');
		$( "#main-content img" ).addClass('img-responsive');
		$('#bannerCarousel').carousel ( 'cycle');
		$('#testimCarousel').carousel ( 'cycle');

// 		$("#bannerCarousel").swiperight(function() {
//      	 $(this).carousel('prev');
// 	    });
// 	   $("#bannerCarousel").swipeleft(function() {
// 	      $(this).carousel('next');
// 	   });
// $("#testimCarousel").swiperight(function() {
//      	 $(this).carousel('prev');
// 	    });
// 	   $("#testimCarousel").swipeleft(function() {
// 	      $(this).carousel('next');
// 	   });
});

