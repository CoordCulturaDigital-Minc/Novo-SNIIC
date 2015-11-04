( function( $ ) {
	
	$('article .img-clipper img').each(function() {
		var imgRatio = ($(this).attr('width')/$(this).attr('height'));
		var wrapperRatio = ($(this).parent().width()/$(this).parent().height());
		$(this).addClass((imgRatio > wrapperRatio) ? 'wide' : 'tall');
	});

} )( jQuery );
