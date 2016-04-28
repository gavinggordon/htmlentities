<?php

namespace GGG\HtmlEntities\Abstracts;

abstract class Encoder
{

  use \GGG\HtmlEntities\Traits\Codable;

  public $toEncode;
  private $encoded = NULL;

  public function encode() {
    $this->htmlentities_plus( $this->toEncode );
    return $this->get_encoded();
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
      $encoded = implode('', $encoded);
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
        $encoded = implode('', $encoded);
      }
      $this->encoded = $encoded;
    }
  }

  private function get_encoded() {
    return $this->encoded;
  }

}
