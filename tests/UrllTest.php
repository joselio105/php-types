<?php

use Php\Types\Errors\MustBeUrlError;
use Php\Types\Types\Url;
use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{
    public function testUrlType()
    {
        $value = "http://www.plug-se.com";
        $object = new Url($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeUrlError
     */
    public function testFail()
    {
        $this->expectException(MustBeUrlError::class);
        
        $value = false;
        $object = new Url($value);
    }
}