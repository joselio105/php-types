<?php

use Php\Types\Types\Boolean;
use Php\Types\Errors\MustBeBoolError;
use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
{
    public function testBooleanType()
    {
        $value = true;
        $object = new Boolean($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeBoolError
     */
    public function testFail()
    {
        $this->expectException(MustBeBoolError::class);
        
        $value = "1234-5678";
        $object = new Boolean($value);
    }
}