<?php

namespace Php\Types\Types;

class Text extends AbstractType
{
    public function __construct($value)
    {
        $this->isBoolean($value);

        $this->value = $value;
    }
}