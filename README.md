# HtmlEntities

--------------

[![Build Status](https://travis-ci.org/gavinggordon/htmlentities.svg?branch=master)](https://travis-ci.org/gavinggordon/htmlentities)

--------------

## Prologue

The ability to encode and decode a certain set of characters called 'Html Entities' has existed since PHP4. There are 4 nearly identical functions, built into PHP, related to the encoding and decoding of 'Html Entities'; yet, although each of these 4 functions are very similar to one and other, 2 of them are more robust and provide some additional capability. 

| Encode Func. | Decode Func. |
|--------------|--------------|
| htmlentities | html_entity_decode | 
| htmlspecialchars | htmlspecialchars_decode |

__Note__: *Special characters are not interpreted as HTML tags and 8-bit characters are encoded as ASCII characters only.*

--------------

## What Sets This Apart
 
What sets this class apart from the rest is that this class, in addition to being able to encode and decode all of the same characters/entities that can be encoded and decoded by PHP's htmlentities() and html_entity_decode() functions, it can also encode and decode a large number of characters/entities which PHP's built-in htmlentities encoding and decoding functions won't encode/decode, like, for instance, punctuation characters that do not have a special meaning in HTML.

--------------

## Quick Class Overview

- __Setting__
$str_to_encode = 'String containing values to encode.';
$encoder = new GGG\HtmlEntities\EncoderPlus( $str_to_encode );

or

str_to_decode = 'String containing values to decode.';
$decoder = new GGG\HtmlEntities\DecoderPlus( str_to_decode );

- __Getting__
$encoded = $encoder->encode();

or

$decoded = $decoder->decode();

--------------

### Installation (via Composer)

	composer require gavinggordon/htmlentities

### Include autoloader.php

	include_once( __DIR__ . '/vendor/autoload.php' );

### Examples

#### Encoding:

    // Set a variable containing a string of the encoded characters you wish to be encoded;
    $to_encode = 'Test-,;:';

    // An instance of encoderplus is returned, and the necessary internal property value is set, when properly "__construct"ed:
    // A single argument value is required and must be of type String;
	$encoder = new \GGG\HtmlEntities\EncoderPlus( $to_encode );

    // Get the encoded result by using the encode method on the returned instance of encoderplus;
    $encoded = $encoder->encode();

    // Display the encoded result, which is of type String;
    echo $encoded;

    // Test&amp;hyphen;&amp;comma;&amp;semi;&amp;colon;

#### Decoding:

    // Set a variable containing a string of the encoded characters you wish to be decoded;
    $to_decode = 'Test&amp;tilde;&amp;ast;&amp;lpar;&amp;num;';

    // An instance of decoderplus is returned, and the necessary internal property value is set, when properly "__construct"ed:
    // A single argument value is required and must be of type String;
	$decoder = new \GGG\HtmlEntities\DecoderPlus( $to_decode );

    // Get the decoded result by using the decode method on the returned instance of decoderplus;
    $decoded = $decoder->decode();

    // Display the decoded result, which is of type String
    echo $decoded;

    // Test~*(#

--------------

[Click here](http://www.phpclasses.org/package/9698.html) to view this class on [PHPClasses.org](http://www.phpclasses.org).

--------------