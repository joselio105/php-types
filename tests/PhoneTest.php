<?php

use Php\Types\Types\Phone;
use Php\Types\Errors\MustBePhoneError;
use PHPUnit\Framework\TestCase;

class PhoneTest extends TestCase
{
    public function testPhoneType()
    {
        $value = "12 3456-8900";
        $object = new Phone($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBePhoneError
     */
    public function testFail()
    {
        $this->expectException(MustBePhoneError::class);
        
        $value = false;
        $object = new Phone($value);
    }
}