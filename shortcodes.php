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

	return '<iframe frameborder="no" width="' . $width . '" scrolling="no" src="http://spagobi.lab.cultura.gov.br/SpagoBISDK/verdocspago.jsp?documentLabel=' . $label . '" height="'.$height.'" ></iframe>';
}
add_shortcode( 'spagobi_dash', 'spagobi_dashboard_shortcode' );

function spagobi_chart_shortcode( $atts ) {
	extract( shortcode_atts(
		array(
			'label' => '', //nomes de atributo sao todos lowercase
			'height' => '500px',
			'width' => '100%',
		), $atts )
	);

	return '<iframe frameborder="no" height="'.$height.'" width="' . $width . '" scrolling="no" src="http://spagobi.lab.cultura.gov.br/SpagoBIChartEngine/servlet/AdapterHTTP?&user_id=sefic&SPAGOBI_AUDIT_ID=3527&EXECUTION_CONTEXT=DOCUMENT_COMPOSITION&DOCUMENT_LABEL=' . $label . '&DOCUMENT_COMMUNITIES=[]&DOCUMENT_IS_VISIBLE=true&SBICONTEXT=/SpagoBI&ACTION_NAME=CHART_ENGINE_START_ACTION&DOCUMENT_FUNCTIONALITIES=[14, 3]&DOCUMENT_AUTHOR=biadmin&DOCUMENT_DESCRIPTION=&document=26&IS_TECHNICAL_USER=false&language=en&country=US&SBI_EXECUTION_ID=7caf6699a6df4c6db71f65c475aed4df&DOCUMENT_NAME=_&NEW_SESSION=TRUE&DOCUMENT_IS_PUBLIC=true&DOCUMENT_VERSION=271&SBI_HOST=http://spagobi.lab.cultura.gov.br&MODALITY=VIEW&SBI_LANGUAGE=pt&SBI_COUNTRY=BR&ROLE=/spagobi/sefic"></iframe>';
}
add_shortcode( 'spagobi_chart', 'spagobi_chart_shortcode' );

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
