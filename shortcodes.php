<?php

function spagobi_shortcode( $atts ) {
	// Attributes
	extract( shortcode_atts(
		array(
			'label' => '', //nomes de atributo sao todos lowercase
			'height' => '540px',
			'width' => '100%',
		), $atts )
	);

	return do_shortcode('[twbs_frameless]' . '<iframe frameborder="no" width="' . $width . '" scrolling="no" src="http://alpha.indicadores.cultura.gov.br/SpagoBISDK/verdocspago.jsp?documentLabel=' . $label . '" height="'.$height.'" ></iframe>' . '[/twbs_frameless]');
}
add_shortcode( 'spagobi', 'spagobi_shortcode' );

function h1_shortcode( $atts, $content = null ) {
	return '<h1>' . $content . '</h1>';
}
add_shortcode( 'h1', 'h1_shortcode' );

function h2_shortcode( $atts, $content = null ) {
	return '<h2>' . $content . '</h2>';
}
add_shortcode( 'h2', 'h2_shortcode' );

function h3_shortcode( $atts, $content = null ) {
	return '<h3>' . $content . '</h3>';
}
add_shortcode( 'h3', 'h3_shortcode' );

function h4_shortcode( $atts, $content = null ) {
	return '<h4>' . $content . '</h4>';
}
add_shortcode( 'h4', 'h4_shortcode' );

function blockquote_shortcode( $atts, $content = null ) {
	return '<blockquote>' . $content . '</blockquote>';
}
add_shortcode( 'blockquote', 'blockquote_shortcode' );

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
