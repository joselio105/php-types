<?php

use Php\Types\Errors\MustBeIntError;
use Php\Types\Types\Integer;
use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{
    public function testIntegerType()
    {
        $value = 1234;
        $object = new Integer($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeIntError
     */
    public function testFail()
    {
        $this->expectException(MustBeIntError::class);
        
        $value = false;
        $object = new Integer($value);
    }
}