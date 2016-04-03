<?php

namespace \GGG\Tests\Html;

use \GGG\Html\HtmlEntities as HtmlEntities;

class SameTest extends \PHPUnit_Framework_TestCase
{

	private $TestClass = NULL;
	private $unencoded = NULL;
	private $encoded = NULL;

	public function __construct()
	{
		$this->unencoded = '-,;:';
		$this->encoded = '&amp;tilde;&amp;ast;&amp;lpar;&amp;num;';
		$this->TestClass = new HtmlEntities;
	}

	public function testFailure()
    {
		$actual = $this->TestClass->encode( $this->unencoded );
		$expected = '&amp;hyphen;&amp;comma;&amp;semi;&amp;colon;';
        $this->assertSame( $expected, $actual );
    }
	
	public function testFailure2()
    {
		$actual = $this->TestClass->decode( $this->encoded );
		$expected = '~*(#';
        $this->assertSame( $expected, $actual );
    }
	
}
