<?php

namespace Php\Types\Types;

use Php\Types\Errors\MustBeIntError;

class Text extends AbstractType
{
    public function __construct($value)
    {
        if(!is_int($value)){
            throw new MustBeIntError();
        }

        $this->value = $value;
    }
}