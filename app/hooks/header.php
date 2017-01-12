<?php 


// 	Action list
add_action( 'medusa/header', 'medusa_header_elements', 10, 1 );


// 	Functions
function medusa_header_elements( $header ) {

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

}

