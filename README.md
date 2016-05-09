# HtmlEntities 

[![Build Status](https://travis-ci.org/gavinggordon/htmlentities.svg?branch=master)](https://travis-ci.org/gavinggordon/htmlentities)
[![Dependency Status](https://www.versioneye.com/user/projects/57305cbea0ca350034be70f7/badge.svg?style=flat)](https://www.versioneye.com/user/projects/57305cbea0ca350034be70f7)

--------------

## Prologue

The ability to encode and decode a certain set of characters called 'Html Entities' has existed since PHP4. Amongst the vast number of functions built into PHP, there are 4 nearly identical functions that are used to encode and decode html entities; despite their similarities, however, 2 of them do provide additional capabilities not available to the others.


| Encoding Functions | Decoding Functions |
|--------------|--------------|
| htmlentities&sup1; | html_entity_decode&sup1; | 
| htmlspecialchars&sup2; | htmlspecialchars_decode&sup2; |


__&sup1;__ *htmlentities and html_entity_decode can only encode and decode characters within PHP's HTML translations table.*
__&sup2;__ *htmlspecialchars and htmlspecialchars_decode can only encode and decode special characters&sup3;.*
__&sup3;__ *special characters are not interpreted as HTML tags and 8-bit characters are encoded as ASCII characters only.*

--------------

## What Sets This Apart
 
What sets this class apart from the rest is that this class, in addition to being able to encode and decode all of the same characters/entities that can be encoded and decoded by PHP's htmlentities() and html_entity_decode() functions, it can also encode and decode a very large number of characters/entities which PHP's built-in htmlentities encoding and decoding functions won't encode/decode, due to their lack of special meaning in HTML, like:

 - punctuation characters;
 - ASCII characters;
 - Greek characters;
 - Latin characters;
 - Russian characters;
 - Arithmetic characters;
 - and tons more...

--------------

## Quick Class Overview

__Encoding__
    
    use \GGG\HtmlEntities\EncoderPlus as Encoder;
    $to_encode = 'String of values to encode.';
    $encoder = new Encoder( $to_encode );
    $encoded = $encoder->encode();
    echo $encoded;
    

__Decoding__
    
    use \GGG\HtmlEntities\DecoderPlus as Decoder;
    $to_decode = 'String of values to decode.';
    $decoder = new Decoder( $to_decode );
    $decoded = $decoder->decode();
    echo $decoded;
    

--------------

### Installation (via Composer)

    composer require gavinggordon/htmlentities

### Include autoloader.php

    include_once( __DIR__ . '/vendor/autoload.php' );

### Examples

#### Encoding:

    
    $to_encode = 'Test-,;:';
    // Set a variable containing a string of the encoded characters you wish to be encoded;
    
    $encoder = new \GGG\HtmlEntities\EncoderPlus( $to_encode );
    // An instance of encoderplus is returned, and the necessary internal property value is set, when properly "__construct"ed:
    // A single argument value is required and must be of type String;
    
    $encoded = $encoder->encode();
    // Get the encoded result by using the encode method on the returned instance of encoderplus;
    
    echo $encoded;
    // Display the encoded result, which is of type String;
    // Test&amp;hyphen;&amp;comma;&amp;semi;&amp;colon;
    

#### Decoding:

    
    $to_decode = 'Test&amp;tilde;&amp;ast;&amp;lpar;&amp;num;';
    // Set a variable containing a string of the encoded characters you wish to be decoded;
    
    $decoder = new \GGG\HtmlEntities\DecoderPlus( $to_decode );
    // An instance of decoderplus is returned, and the necessary internal property value is set, when properly "__construct"ed:
    // A single argument value is required and must be of type String;
    
    $decoded = $decoder->decode();
    // Get the decoded result by using the decode method on the returned instance of decoderplus;
    
    echo $decoded;
    // Display the decoded result, which is of type String;
    // Test~*(#
    

--------------

#### More Information

##### CodeClimate

Check out our [CodeClimate](https://codeclimate.com) stats by [clicking here](https://codeclimate.com/github/gavinggordon/htmlentities).

##### PHP Innovation Award

This [class](http://www.phpclasses.org/package/9698.html) has been nominated for a PHP Innovation Award, provided by [PHPClasses.org](http://www.phpclasses.org). If you found [this class](http://www.phpclasses.org/package/9698.html) to be at all interesting, helpful, particularly useful, or innovative in any way, please [vote](http://www.phpclasses.org/vote.html) for it, to show your support for [this](http://www.phpclasses.org/package/9698.html) or any other PHP classes accessible online via my [GitHub profile](https://github.com/gavinggordon) or [PHPClasses.org profile](http://www.phpclasses.org/browse/author/1348645.html).

--------------
