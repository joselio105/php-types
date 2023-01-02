<?php

namespace Php\Types\Types;

class UrlLattes extends AbstractType
{
    public function __construct($value)
    {
        $this->isUrlLattes($value);

        $this->value = $value;
    }
}