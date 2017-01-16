<?php 

// 	initiate classes
$scripts = new Medusa_Scripts();

// 	available actions
do_action( 'medusa/scripts', $scripts );

// 	available filters
$scripts->styles = apply_filters( 'medusa/scripts/styles', $scripts->styles );

$scripts->scripts = apply_filters( 'medusa/scripts/scripts', $scripts->scripts );

// 	actions hooked list
add_action( 'wp_enqueue_scripts', array( $scripts, 'print_styles' ), 10 );

add_action( 'wp_enqueue_scripts', array( $scripts, 'print_scripts' ), 15 );
