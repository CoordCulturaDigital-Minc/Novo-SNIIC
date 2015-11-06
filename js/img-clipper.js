( function( $ ) {

	$('.img-clipper').each(function() {
		var child = $(this).children('img');
		var wrapperRatio = ($(this).width()/$(this).height());
		var imgRatio = (child.attr('width')/child.attr('height'));

		child.addClass((imgRatio > wrapperRatio) ? 'wide' : 'tall');
	});

} )( jQuery );
