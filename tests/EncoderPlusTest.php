<?php

use GGG\HtmlEntities\EncoderPlus;

class EncoderPlusTest extends \PHPUnit_Framework_TestCase
{

	private $unencoded = 'Test@,;:';

	public function testEncode()
    {
		$encoder = new EncoderPlus( $this->unencoded );
		$actual = $encoder->encode();
		$expected = 'Test&amp;commat;&amp;comma;&amp;semi;&amp;colon;';
        $this->assertSame( $expected, $actual );
    }
	
}
