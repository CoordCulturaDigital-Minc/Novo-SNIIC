<?php

///////////////////////// SPAGO BI Shortcode \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

function spagobi_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'documentlabel' => '', //nomes de atributo sao todos lowercase
			'height' => '500px',
		), $atts )
	);

	return '<iframe src="http://spagobi.lab.cultura.gov.br/SpagoBISDK/verdocspago.jsp?documentLabel=' . $documentlabel . '" width="100%" height="'.$height.'" ></iframe>';
}
add_shortcode( 'spagobi', 'spagobi_shortcode' );

/*
https://en.support.wordpress.com/shortcodes/
http://getbootstrap.com/components/#media
https://codex.wordpress.org/Shortcode
http://www.wprecipes.com/how-to-use-wordpress-shortcodes-in-theme-files
https://codex.wordpress.org/Shortcode_API
*/
