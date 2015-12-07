<?php

function spagobi_shortcode( $atts ) {
	// Attributes
	extract( shortcode_atts(
		array(
			'documentlabel' => '', //nomes de atributo sao todos lowercase
			'height' => '500px',
		), $atts )
	);

	//[spagobi documentLabel=dash_ben_cadastradas height=3500px]
	return '<iframe frameborder="no" width="100%" scrolling="no" src="http://spagobi.lab.cultura.gov.br/SpagoBISDK/verdocspago.jsp?documentLabel=' . $documentlabel . '" height="'.$height.'" ></iframe>';
}
add_shortcode( 'spagobi', 'spagobi_shortcode' );
