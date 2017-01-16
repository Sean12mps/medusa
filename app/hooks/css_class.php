<?php 


// 	Action list
add_action( 'medusa/css_class', 'medusa_body_css_class', 10, 1 );


// 	Functions
function medusa_body_css_class( $css_class ) {

	$css_class->body_class[] = 'index';

}