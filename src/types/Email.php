<?php

namespace Php\Types\Types;

class Email extends AbstractType
{
    public function __construct($value)
    {
        $this->isEmail($value);

        $this->value = $value;
    }
}