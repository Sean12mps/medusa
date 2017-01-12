<?php 

// 	initiate classes
$scripts = new Medusa_Scripts();

// 	available actions
do_action( 'medusa/scripts', $scripts );

// 	available filters
$scripts->styles = apply_filters( 'medusa/scripts/styles', $scripts->styles );

// 	actions hooked list
add_action( 'wp_enqueue_scripts', array( $scripts, 'print_styles' ), 10 );
