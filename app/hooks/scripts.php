<?php 


// 	Action list
add_action( 'medusa/scripts', 'medusa_styles', 10, 1 );


// 	Functions
function medusa_styles( $styles ) {

	$css_dir = get_template_directory_uri() . 'assets/local/css';

	$styles->add_style( $handle, $src, $deps = false, $ver = false, $media = false );

	$styles->add_style( 'medusa-reset', $css_dir . '/reset.css', false, false, 'screen' );

	$styles->add_style( 'medusa-contact', $css_dir . '/contact.css', false, false, 'screen' );

	$styles->add_style( 'medusa-flexslider', $css_dir . '/flexslider.css', false, false, 'screen' );

	$styles->add_style( 'medusa-fancybox', $css_dir . '/jquery.fancybox.css', false, false, 'screen' );

	$styles->add_style( 'medusa-retina', $css_dir . '/retina-responsive.css', false, false, 'screen' );

	$styles->add_style( 'medusa-print', $css_dir . '/print.css', false, false, 'print' );

	$styles->add_style( 'fonts-googleapis', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,600,800', false, false, 'screen' );

}