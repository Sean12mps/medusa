<?php 

// 	initiate classes
$header = new Medusa_Header();

// 	available actions
do_action( 'medusa/header', $header );

// 	available filters
$header->_header = apply_filters( 'medusa/header/content_elements', $header->_header );

// 	actions hooked list
add_action( 'wp_head', array( $header, 'print_elements' ), 0 );