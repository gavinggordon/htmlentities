<?php

use GGG\HtmlEntities\DecoderPlus;

class DecoderPlusTest extends \PHPUnit_Framework_TestCase
{

	private $encoded = 'Test&amp;percnt;&amp;ast;&amp;lpar;&amp;num;';
	
	public function testDecode()
    {
		$decoder = new DecoderPlus( $this->encoded );
		$actual = $decoder->decode();
		$expected = 'Test%*(#';
        $this->assertSame( $expected, $actual );
    }
	
}
