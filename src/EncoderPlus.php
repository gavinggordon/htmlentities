<?php

namespace GGG\HtmlEntities;

use \GGG\HtmlEntities\Abstracts\Encoder as Encoder;
use \GGG\HtmlEntities\Interfaces\EncoderInterface as EncoderInterface;

class EncoderPlus extends Encoder implements EncoderInterface
{

  public function __construct( $input )
  {
    $this->toEncode = $input;
    return $this;
  }

}
