# \GGG\HtmlEntities

## CodeFormatter

This class (GGG\HtmlEntities\CodeFormatter) provides the capability to decode and encode a wider variety of characters,
compared to the standard htmlentities and html_entity_decode functions that are predefined in PHP.

### Examples

##### Instantiation:

  $formatter = new \GGG\HtmlEntities\CodeFormatter();

##### Encoding:

    $to_encode = "-,;:'";
    $encoded = $formatter->encode($to_encode);
    echo $encoded;
    // Result: &amp;hyphen;&amp;comma;&amp;semi;&amp;colon;&amp;apos;

##### Decoding:

    $to_decode = '&amp;tilde;&amp;apos;';
    $decoded = $formatter->decode($to_decode);
    echo $decoded;
    // Result: ~'


[View this class package](http://www.phpclasses.org/package/9698.html) on [PHPClasses.org](http://www.phpclasses.org).
