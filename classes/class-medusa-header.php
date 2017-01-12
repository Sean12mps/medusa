<?php 

class Medusa_Header {


	public $_header;
	public $header;


	public function __construct() {}


	public function create_header_data() {

		$before = array();

		$after = array(

			// 	Metas
			array(
				'name'		=> 'meta',
				'attr'		=> array(
					'http-equiv'	=> 'X-UA-Compatible',
					'content'		=> "IE=edge,chrome=1"
				),
				'content'	=> false
			),
			array(
				'name'		=> 'meta',
				'attr'		=> array(
					'name'		=> 'viewport',
					'content'	=> "width=device-width, initial-scale=1.0"
				),
				'content'	=> false
			)

		);

		$this->_header = array_merge( $before, $this->_header, $after );


	}


	public function create_tags( $arr ) {

		$output = '';

		if ( $arr ) {

			foreach ( $arr as $value ) {

				$name		= $value['name'];

				$attr		= ( isset( $value['attr'] ) ? $value['attr'] : false );

				$content	= ( isset( $value['content'] ) ? $value['content'] : false );

				$output .= $this->create_tag( $name, $attr, $content ) . "\n";

			}

		}

		return $output;

	}


	public function create_tag( $name, $attr, $content = null ) {

		$output = "<$name";

		if ( $attr ) {

			foreach ( $attr as $key => $value ) {

				$output .= " $key='$value'";

			}

		}

		if ( ! is_null( $content ) && ! is_bool( $content ) ) {

			$output .= '>';

			$output .= $content;

			$output .= "</$name>";

		}

		if ( is_null( $content ) ) {

			$output .= ">";

		}

		if ( is_bool( $content ) && $content ) {

			$output .= "></$name>";

		}

		if ( is_bool( $content ) && ! $content ) {
			
			$output .= ">";

		}

		return $output;

	}


	public function create_header() {

		$this->create_header_data();

		$output = $this->create_tags( $this->_header );

		return $output;

	}


	public function add_header_data( $arr ) {

		$this->_header[] = $arr;

	}


	public function print_elements() {

		$this->header = $this->create_header();

		if ( $this->header ) {

			echo $this->header;

		}

	}


}
