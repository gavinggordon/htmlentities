<?php

namespace GGGTests;

//use GGG\Html\HtmlEntities;

class HtmlEntitiesTest extends \PHPUnit_Framework_TestCase
{

	public $TestClass = NULL;
	public $unencoded = NULL;
	public $encoded = NULL;

	public function __construct()
	{
		include_once( dirname( dirname( dirname( __FILE__ ) ) ) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Html' . DIRECTORY_SEPARATOR . 'HtmlEntities.php' );
		$this->unencoded = '@,;:';
		$this->encoded = '&amp;percnt;&amp;ast;&amp;lpar;&amp;num;';
		$this->TestClass = new \GGG\Html\HtmlEntities();
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
