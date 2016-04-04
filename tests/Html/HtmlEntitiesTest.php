<?php

namespace GGGTests;

use GGG\Html\HtmlEntities;

class HtmlEntitiesTest extends \PHPUnit_Framework_TestCase
{

	private $TestClass = NULL;
	private $unencoded = NULL;
	private $encoded = NULL;

	public function __construct()
	{
		$this->unencoded = '@,;:';
		$this->encoded = '&amp;percnt;&amp;ast;&amp;lpar;&amp;num;';
		$this->TestClass = new HtmlEntities;
	}

	public function testEncodeEntities()
    {
		$actual = $this->TestClass->encode( $this->unencoded );
		$expected = '&amp;commat;&amp;comma;&amp;semi;&amp;colon;';
        $this->assertSame( $expected, $actual );
    }
	
	public function testDecodeEntities()
    {
		$actual = $this->TestClass->decode( $this->encoded );
		$expected = '%*(#';
        $this->assertSame( $expected, $actual );
    }
	
}
