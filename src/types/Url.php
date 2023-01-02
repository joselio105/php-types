<?php

namespace Php\Types\Types;

class Url extends AbstractType
{
    public function __construct($value)
    {
        $this->isUrl($value);

        $this->value = $value;
    }
}