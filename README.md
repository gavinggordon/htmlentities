# HtmlEntities

[![Build Status](https://travis-ci.org/gavinggordon/htmlentities.svg?branch=master)](https://travis-ci.org/gavinggordon/htmlentities)

These classes (GGG\HtmlEntities\DecoderPlus & GGG\HtmlEntities\EncoderPlus) provide the capability to decode and encode a wider variety of html characters than Php's predefined functions, 'htmlentities' and 'html_entity_decode'.

## Installation

	composer require gavinggordon/htmlentities

## Examples

#### Instantiation:

	include_once( __DIR__ . '/vendor/autoload.php' );

#### Encoding:

    $to_encode = 'Test-,;:';
	$encoder = new \GGG\HtmlEntities\EncoderPlus( $to_encode );
    $encoded = $encoder->encode();
    echo $encoded;
    // Result: Test&amp;hyphen;&amp;comma;&amp;semi;&amp;colon;

#### Decoding:

    $to_decode = 'Test&amp;tilde;&amp;ast;&amp;lpar;&amp;num;';
	$decoder = new \GGG\HtmlEntities\DecoderPlus( $to_decode );
    $decoded = $decoder->decode();
    echo $decoded;
    // Result: Test~*(#


[View this class package](http://www.phpclasses.org/package/9698.html) on [PHPClasses.org](http://www.phpclasses.org).
