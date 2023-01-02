<?php

use Php\Types\Errors\MustBeSemesterError;
use Php\Types\Types\Semester;
use PHPUnit\Framework\TestCase;

class SemesterTest extends TestCase
{
    public function testSemesterType()
    {
        $value = "2010-1";
        $object = new Semester($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeSemesterError
     */
    public function testFail()
    {
        $this->expectException(MustBeSemesterError::class);
        
        $value = false;
        $object = new Semester($value);
    }
}