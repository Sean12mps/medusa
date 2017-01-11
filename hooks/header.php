<?php 

// 	initiate classes
$header = new Medusa_Header();

/*	@NOTE: adding custom elements to head

 */
$header->add_header_data( array(
	'name'		=> 'meta',
	'attr'		=> array(
		'charset'	=> get_bloginfo( 'charset' )
	),
	'content'	=> false
) );

$header->add_header_data( array(
	'name'		=> 'title',
	false,
	'content'	=> ( wp_title( '', false ) ? ' :' : '' ) . get_bloginfo( 'name' )
) );

$header->add_header_data( array(
	'name'		=> 'link',
	'attr'		=> array(
		'href'		=> get_template_directory_uri() . '/img/icons/favicon.ico',
		'rel'		=> "shortcut icon"
	),
	'content'	=> false
) );

$header->add_header_data( array(
	'name'		=> 'meta',
	'attr'		=> array(
		'name'		=> 'description',
		'content'	=> get_bloginfo( 'description' )
	),
	'content'	=> false
) );

$header->_header = apply_filters( 'medusa/header/content_elements', $header->_header );

// 	actions hooked list
add_action( 'wp_head', array( $header, 'print_elements' ), 0 );