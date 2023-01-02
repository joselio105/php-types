<?php

use Php\Types\Errors\MustBeStringError;
use Php\Types\Types\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testTextType()
    {
        $value = "um texto";
        $object = new Text($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeStringError
     */
    public function testFail()
    {
        $this->expectException(MustBeStringError::class);
        
        $value = 0;
        $object = new Text($value);
    }
}