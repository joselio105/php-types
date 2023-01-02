<?php

namespace Php\Types\Types;

class Boolean extends AbstractType
{
    public function __construct($value)
    {
        $this->isBoolean($value);

        $this->value = $value;
    }
}