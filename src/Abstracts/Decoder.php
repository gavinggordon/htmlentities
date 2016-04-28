<?php

namespace GGG\HtmlEntities\Abstracts;

abstract class Decoder
{

  use \GGG\HtmlEntities\Traits\Codable;

  public $toDecode;
  private $decoded = NULL;

  public function decode() {
    $this->html_entity_decode_plus( $this->toDecode );
    return $this->get_decoded();
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
      $decoded = implode('', $decoded);
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
        preg_match_all( '/((\&amp\;\w+\;)|([\w\d\s]{1,}))/i', $input, $matches );
        $chars = $matches[1];
        foreach( $chars as $index => $char ) {
          if( in_array( $char, $this->encoded_chars ) ) {
            $keys = array_keys( $this->encoded_chars, $char );
            $decoded[ $index ] = $this->decoded_chars[ $keys[0] ];
          } else {
            $decoded[ $index ] = $char;
          }
        }
        $decoded = implode('', $decoded);
      }
      $this->decoded = $decoded;
    }
  }

  private function get_decoded() {
    return $this->decoded;
  }

}
