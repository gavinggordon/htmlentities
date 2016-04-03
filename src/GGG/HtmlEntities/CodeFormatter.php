<?php

namespace \GGG\HtmlEntities;

class CodeFormatter
{

	private $decoded_chars;
	private $encoded_chars;
	private $encoded = NULL;
	private $decoded = NULL;

	public function __construct() {
	    $this->decoded_chars = array(
			'0' => '?',
			'1' => '!',
			'2' => '&',
			'3' => '@',
			'4' => '#',
			'5' => '%',
			'6' => '$',
			'7' => 'ˆ',
			'8' => '*',
			'9' => '{',
			'10' => '}',
			'11' => '[',
			'12' => ']',
			'13' => '(',
			'14' => ')',
			'15' => '.',
			'16' => ',',
			'17' => ':',
			'18' => ';',
			'19' => '˜',
			'20' => '>',
			'21' => '<',
			'22' => '+',
			'23' => '=',
			'24' => '-',
			'25' => '_',
			'26' => '•',
			'27' => '/',
			'28' => '\\',
			'29' => '"',
			'30' => '\''
		);
	    $this->encoded_chars = array(
			'0' => '&amp;quest;',
			'1' => '&amp;excl;',
			'2' => '&amp;amp;',
			'3' => '&amp;commat;',
			'4' => '&amp;num;',
			'5' => '&amp;percnt;',
			'6' => '&amp;dollar;',
			'7' => '&amp;circ;',
			'8' => '&amp;ast;',
			'9' => '&amp;lbrace;',
			'10' => '&amp;rbrace;',
			'11' => '&amp;lbrack;',
			'12' => '&amp;rbrack;',
			'13' => '&amp;lpar;',
			'14' => '&amp;rpar;',
			'15' => '&amp;period;',
			'16' => '&amp;comma;',
			'17' => '&amp;colon;',
			'18' => '&amp;semi;',
			'19' => '&amp;tilde;',
			'20' => '&amp;gt;',
			'21' => '&amp;lt;',
			'22' => '&amp;plus;',
			'23' => '&amp;equals;',
			'24' => '&amp;hyphen;',
			'25' => '&amp;lowbar;',
			'26' => '&amp;middot;',
			'27' => '&amp;sol;',
			'28' => '&amp;bsol;',
			'29' => '&amp;quot;',
			'30' => '&amp;apos;'
		);
	}

	public function encode( $inp ) {
	    $this->htmlentities_plus( $inp );
	    return $this->get_encoded();
	}

	public function decode( $inp ) {
		$this->html_entity_decode_plus( $inp );
		return $this->get_decoded();
	}

	private function htmlentities_plus( $input ) {
	    $encoded = NULL;
	    $key = NULL;
	    if( is_array( $input ) ) {
	      $encoded = [];
	      foreach( $input as $index => $char ) {
	        if( in_array( $char, $this->decoded_chars ) ) {
	          $keys = array_keys( $this->decoded_chars, $char );
	          $encoded[ $index ] = $this->encoded_chars[ $keys[0] ];
	        } else {
	          $encoded[ $index ] = $char;
	        }
	      }
	      $encoded = implode("", $encoded);
	    }
	    if( is_string( $input ) ) {
	      if( strlen( $input ) === 1 ) {
	        if( in_array( $input, $this->decoded_chars ) ) {
	          $flipped = array_flip( $this->decoded_chars );
	          $key = $flipped[ $input ];
	          $encoded = $this->encoded_chars[ $key ];
	        }
	      }
	      if( strlen( $input ) >= 2 ) {
	        $encoded = [];
	        $chars = str_split( $input );
	        foreach( $chars as $index => $char ) {
	          if( in_array( $char, $this->decoded_chars ) ) {
	            $keys = array_keys( $this->decoded_chars, $char );
	            $encoded[ $index ] = $this->encoded_chars[ $keys[0] ];
	          } else {
	            $encoded[ $index ] = $char;
	          }
	        }
	        $encoded = implode("", $encoded);
	      }
	      $this->encoded = $encoded;
	    }
	}

	private function html_entity_decode_plus( $input ) {
	    $decoded = NULL;
	    $key = NULL;
	    if( is_array( $input ) ) {
	      $decoded = [];
	      foreach( $input as $index => $char ) {
	        if( in_array( $char, $this->encoded_chars ) ) {
	          $keys = array_keys( $this->encoded_chars, $char );
	          $decoded[ $index ] = $this->decoded_chars[ $keys[0] ];
	        } else {
	          $decoded[ $index ] = $char;
	        }
	      }
	      $decoded = implode("", $decoded);
	    }
	    if( is_string( $input ) ) {
	      if( strlen( $input ) === 1 ) {
	        if( in_array( $input, $this->encoded_chars ) ) {
	          $flipped = array_flip( $this->encoded_chars );
	          $key = $flipped[ $input ];
	          $decoded = $this->decoded_chars[ $key ];
	        }
	      }
	      if( strlen( $input ) >= 2 ) {
	        $decoded = [];
	        preg_match_all( '/(\&amp\;[a-z]+\;)/i', $input, $matches );
	        $chars = $matches[1];
	        foreach( $chars as $index => $char ) {
	          if( in_array( $char, $this->encoded_chars ) ) {
	            $keys = array_keys( $this->encoded_chars, $char );
	            $decoded[ $index ] = $this->decoded_chars[ $keys[0] ];
	          } else {
	            $decoded[ $index ] = $char;
	          }
	        }
	        $decoded = implode("", $decoded);
	      }
	      $this->decoded = $decoded;
	    }
	}

	public function get_encoded() {
    	return $this->encoded;
	}

	public function get_decoded() {
    	return $this->decoded;
	}

}
