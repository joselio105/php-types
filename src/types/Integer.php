<?php

namespace Php\Types\Types;

class Integer extends AbstractType
{
    public function __construct($value)
    {
        $this->isInteger($value);

        $this->value = $value;
    }
}