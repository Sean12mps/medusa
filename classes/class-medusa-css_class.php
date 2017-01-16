<?php 

class Medusa_Css_Class {


	public $body_class = array();


	public function __construct() {

	}

	public function update_body_class( $classes ) {

		$classes = array_merge( $classes, $this->body_class );

		return $classes;

	}


}