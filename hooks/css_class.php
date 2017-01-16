<?php 

// 	initiate classes
$css_class = new Medusa_Css_Class();

// 	available actions
do_action( 'medusa/css_class', $css_class );

// 	filters hooked list
add_filter( 'body_class',  array( $css_class, 'update_body_class' ) );