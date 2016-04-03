# HtmlEntities

This class (GGG\Html\HtmlEntities) provides the capability to decode and encode a wider variety of html characters, 
compared to Php's predefined functions, htmlentities and html_entity_decode.

## Installation

	composer require gavinggordon/htmlentities

## Examples

#### Instantiation:

	include_once( __DIR__ . '/vendor/autoload.php' );
	$formatter = new \GGG\HtmlEntities\CodeFormatter();

#### Encoding:

    $to_encode = "-,;:";
    $encoded = $formatter->encode($to_encode);
    echo $encoded;
    // Result: &amp;hyphen;&amp;comma;&amp;semi;&amp;colon;

#### Decoding:

    $to_decode = '&amp;tilde;&amp;ast;&amp;lpar;&amp;num;';
    $decoded = $formatter->decode($to_decode);
    echo $decoded;
    // Result: ~*(#


[View this class package](http://www.phpclasses.org/package/9698.html) on [PHPClasses.org](http://www.phpclasses.org).