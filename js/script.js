jQuery(document).ready(function($){

	$( "div.item" ).first().addClass('active');
		$( ".carousel-indicators li" ).first().addClass('active');
		$( ".current-menu-item" ).first().addClass('active');
		$( "#main-content img" ).addClass('img-responsive');
		$('#testimCarousel').carousel ( 'cycle');

});