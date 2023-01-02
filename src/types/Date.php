<?php

namespace Php\Types\Types;

class Date extends AbstractType
{
    public function __construct($value)
    {
        $this->isDate($value);


        $this->value = $value;
    }
}