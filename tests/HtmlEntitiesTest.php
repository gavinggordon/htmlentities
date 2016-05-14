<?php

use GGG\HtmlEntities;

class HtmlEntitiesTest extends \PHPUnit_Framework_TestCase
{

    private $coder;
    private $unencoded = 'Test@,;:';
    private $encoded = 'Test&amp;percnt;&amp;ast;&amp;lpar;&amp;num;';
    
    public function __construct()
    {
        $this->coder = new HtmlEntities();
    }

    public function testEncode()
    {
        $actual = $this->coder->encode( $this->unencoded );
        $expected = 'Test&amp;commat;&amp;comma;&amp;semi;&amp;colon;';
        $this->assertSame( $expected, $actual );
    }

     public function testDecode()
    {
        $actual = $this->coder->decode( $this->encoded );
        $expected = 'Test%*(#';
        $this->assertSame( $expected, $actual );
    }

    
}
