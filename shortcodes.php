<?php

function spagobi_shortcode( $atts ) {
	// Attributes
	extract( shortcode_atts(
		array(
			'documentlabel' => '', //nomes de atributo sao todos lowercase
			'height' => '500px',
			'width' => '100%',
		), $atts )
	);

	return '<iframe frameborder="no" width="' . $width . '" scrolling="no" src="http://spagobi.lab.cultura.gov.br/SpagoBISDK/verdocspago.jsp?documentLabel=' . $documentlabel . '" height="'.$height.'" ></iframe>';
}
add_shortcode( 'spagobi', 'spagobi_shortcode' );

function bootstrap_text_wrapper($atts, $content = null) {
	extract( shortcode_atts(
		array(
			'backgroundcolor' => 'transparent',
		), $atts )
	);
	return '<div class="clearfix row" style="background-color:'. $backgroundcolor .'"><div class="wrapper center-block"><div class="col-xs-12 col-sm-10 col-md-8">'. do_shortcode($content) . '</div></div></div>';
}
add_shortcode( 'twbs_txt', 'bootstrap_text_wrapper' );

function bootstrap_wrapper($atts, $content = null) {
	extract( shortcode_atts(
		array(
			'backgroundcolor' => 'transparent',
		), $atts )
	);
	return '<div class="clearfix row" style="background-color:'. $backgroundcolor .'"><div class="wrapper center-block"><div class="col-xs-12">'. do_shortcode($content) . '</div></div></div>';
}
add_shortcode( 'twbs_wrapper', 'bootstrap_wrapper' );

function bootstrap_frameless($atts, $content = null) {
	extract( shortcode_atts(
		array(
			'backgroundcolor' => 'transparent',
		), $atts )
	);
	return '<div class="clearfix row" style="background-color:'. $backgroundcolor .'"><div class="col-xs-12">'. do_shortcode($content) . '</div></div>';
}
add_shortcode( 'twbs_frameless', 'bootstrap_frameless' );
