<?php

namespace Php\Types\Types;

use Php\Types\Errors\MustBeBoolError;

class Text extends AbstractType
{
    public function __construct($value)
    {
        if(!is_bool($value)){
            throw new MustBeBoolError();
        }

        $this->value = $value;
    }
}