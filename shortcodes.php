<?php

function spagobi_dashboard_shortcode( $atts ) {
	// Attributes
	extract( shortcode_atts(
		array(
			'label' => '', //nomes de atributo sao todos lowercase
			'height' => '500px',
			'width' => '100%',
		), $atts )
	);

	return do_shortcode('[twbs_frameless]' '<iframe frameborder="no" width="' . $width . '" scrolling="no" src="http://spagobi.lab.cultura.gov.br/SpagoBISDK/verdocspago.jsp?documentLabel=' . $label . '" height="'.$height.'" ></iframe>' . '[/twbs_frameless]');
}
add_shortcode( 'spagobi', 'spagobi_dashboard_shortcode' );

function bootstrap_text_wrapper($atts, $content = null) {
	extract( shortcode_atts(
		array(
			'backgroundcolor' => 'transparent',
		), $atts )
	);
	return '<div class="clearfix row" style="background-color:'. $backgroundcolor .'"><div class="wrapper center-block"><div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">'. do_shortcode($content) . '</div></div></div>';
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
