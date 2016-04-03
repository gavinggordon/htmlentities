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

##### Decoding:
$to_decode = '&amp;middot;&amp;apos;';
$decoded = $formatter->decode($to_decode);
echo $decoded;
