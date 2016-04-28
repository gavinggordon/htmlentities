<?php

namespace GGG\HtmlEntities;

use \GGG\HtmlEntities\Abstracts\Decoder as Decoder;
use \GGG\HtmlEntities\Interfaces\DecoderInterface as DecoderInterface;

class DecoderPlus extends Decoder implements DecoderInterface
{

  public function __construct( $input )
  {
    $this->toDecode = $input;
    return $this;
  }

}
