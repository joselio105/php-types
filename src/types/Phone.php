<?php

namespace Php\Types\Types;

class Phone extends AbstractType
{
    public function __construct($value)
    {
        $this->isPhone($value);

        $this->value = $value;
    }
}