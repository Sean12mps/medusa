<?php 

class Medusa_Scripts {


	public $styles;
	public $scripts;


	public function __construct() {

		//	defaults
		$this->styles = array(
			array(
				'handle'	=> 'theme-stylesheet',
				'src'		=> get_stylesheet_uri(),
				'deps'		=> array( 'medusa-reset', 'medusa-contact' ),
				'ver'		=> false,
				'media'		=> false,
			)
		);

	}


	public function add_style( $handle, $src, $deps = false, $ver = false, $media = false ) {

		$this->styles[] = array(
			'handle'	=> $handle,
			'src'		=> $src,
			'deps'		=> $deps,
			'ver'		=> $ver,
			'media'		=> $media,
		);

	}

	public function add_script( $handle, $src = false, $deps = false, $ver = false, $in_footer = false ) {

		$this->scripts[] = array(
			'handle'		=> $handle,
			'src'			=> $src,
			'deps'			=> $deps,
			'ver'			=> $ver,
			'in_footer'		=> $in_footer,
		);

	}


	public function print_styles() {

		$use_parent_theme = apply_filters( 'medusa/styles/use_parent_styles', true );

		//	load parent stylesheet first if this is a child theme
		if ( is_child_theme() && $use_parent_theme ) {

			wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );

		}

		if ( $this->styles ) {

			foreach ( $this->styles as $key => $style ) {

				$handle	= ( $style['handle'] 	? $style['handle'] 	: false );
				$src	= ( $style['src'] 		? $style['src'] 	: false );
				$deps	= ( $style['deps'] 		? $style['deps'] 	: false );
				$ver	= ( $style['ver'] 		? $style['ver'] 	: false );
				$media	= ( $style['media'] 	? $style['media'] 	: false );

				wp_enqueue_style( $handle, $src, $deps, $ver, $media );

			}

		}

	}


	public function print_scripts() {

		if ( $this->scripts ) {

			foreach ( $this->scripts as $key => $script ) {

				$handle		= ( $script['handle'] 		? $script['handle'] 	: false );
				$src		= ( $script['src'] 			? $script['src'] 		: false );
				$deps		= ( $script['deps'] 		? $script['deps'] 		: false );
				$ver		= ( $script['ver'] 			? $script['ver'] 		: false );
				$in_footer	= ( $script['in_footer'] 	? $script['in_footer'] 	: false );

				wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

			}

		}

	}


}