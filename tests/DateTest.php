<?php

use Php\Types\Errors\MustBeDateError;
use Php\Types\Types\Date;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testDateType()
    {
        $value = "2010-01-01";
        $object = new Date($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeDateError
     */
    public function testFail()
    {
        $this->expectException(MustBeDateError::class);
        
        $value = false;
        $object = new Date($value);
    }
}