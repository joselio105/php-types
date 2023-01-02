<?php

use Php\Types\Errors\MustBeEmailError;
use Php\Types\Types\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmailType()
    {
        $value = "teste@teste.tst";
        $object = new Email($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeEmailError
     */
    public function testFail()
    {
        $this->expectException(MustBeEmailError::class);
        
        $value = false;
        $object = new Email($value);
    }
}