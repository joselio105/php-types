<?php

use Php\Types\Errors\MustBeLattesUrlError;
use Php\Types\Types\UrlLattes;
use PHPUnit\Framework\TestCase;

class UrlLattesTest extends TestCase
{
    public function testUrlLattesType()
    {
        $value = "http://lattes.cnpq.br/01234567890123456";
        $object = new UrlLattes($value);

        $this->assertEquals($value, $object->getValue());
    }

    /**
     * expects Exception MustBeLattesUrlError
     */
    public function testFail()
    {
        $this->expectException(MustBeLattesUrlError::class);
        
        $value = false;
        $object = new UrlLattes($value);
    }
}