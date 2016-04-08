<?php

use GGG\HtmlEntities\HtmlEntities;

class HtmlEntitiesTest extends \PHPUnit_Framework_TestCase
{

	private $unencoded = '@,;:';
	private $encoded = '&amp;percnt;&amp;ast;&amp;lpar;&amp;num;';

	public function testEncode()
    {
		$htmlentities = new HtmlEntities();
		$actual = $htmlentities->encode( $this->unencoded );
		$expected = '&amp;commat;&amp;comma;&amp;semi;&amp;colon;';
        $this->assertSame( $expected, $actual );
    }
	
	public function testDecode()
    {
		$htmlentities = new HtmlEntities();
		$actual = $htmlentities->decode( $this->encoded );
		$expected = '%*(#';
        $this->assertSame( $expected, $actual );
    }
	
}
