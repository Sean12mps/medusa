<?php 


// 	Action list
add_action( 'medusa/scripts', 'medusa_styles', 10, 1 );

add_action( 'medusa/scripts', 'medusa_scripts', 15, 1 );


// 	Functions
function medusa_styles( $styles ) {

	$css_dir = get_template_directory_uri() . '/assets/local/css';

	$styles->add_style( 'medusa-reset', $css_dir . '/reset.css', false, false, 'screen' );

	$styles->add_style( 'medusa-contact', $css_dir . '/contact.css', false, false, 'screen' );

	$styles->add_style( 'medusa-flexslider', $css_dir . '/flexslider.css', false, false, 'screen' );

	$styles->add_style( 'medusa-fancybox', $css_dir . '/jquery.fancybox.css', false, false, 'screen' );

	$styles->add_style( 'medusa-retina', $css_dir . '/retina-responsive.css', false, false, 'screen' );

	$styles->add_style( 'medusa-print', $css_dir . '/print.css', false, false, 'print' );

	$styles->add_style( 'fonts-googleapis', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,600,800', false, false, 'screen' );

}

function medusa_scripts( $scripts ) {

	$js_dir = get_template_directory_uri() . '/assets/local/js';

	$scripts->add_script( 'jquery' );

	$scripts->add_script( 'medusa-jquery-easing', $js_dir . '/jquery-easing-1.3.js', array( 'jquery' ) );

	$scripts->add_script( 'medusa-modernizr', $js_dir . '/modernizr.js', array( 'jquery' ) );

	$scripts->add_script( 'medusa-retina', $js_dir . '/retina.js', array( 'jquery' ) );

	$scripts->add_script( 'medusa-jquery.isotope.min', $js_dir . '/jquery.isotope.min.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-jquery.ba-bbq.min', $js_dir . '/jquery.ba-bbq.min.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-jquery.isotope.load_home', $js_dir . '/jquery.isotope.load_home.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-jquery.isotope.perfectmasonry', $js_dir . '/jquery.isotope.perfectmasonry.js', array( 'jquery' ) );

	$scripts->add_script( 'medusa-responsive-nav', $js_dir . '/responsive-nav.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-jquery.flexslider-min', $js_dir . '/jquery.flexslider-min.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-jquery.fancybox.pack', $js_dir . '/jquery.fancybox.pack.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-image-hover', $js_dir . '/image-hover.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-scrollup', $js_dir . '/scrollup.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-preloader', $js_dir . '/preloader.js', array( 'jquery' ) );
	
	$scripts->add_script( 'medusa-navi-slidedown', $js_dir . '/navi-slidedown.js', array( 'jquery' ) );

}