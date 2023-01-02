<?php

namespace Php\Types\Types;

class Text extends AbstractType
{
    public function __construct($value, int $minimalLength = 0)
    {
        $this->isText($value);

        $this->value = $value;
    }
}