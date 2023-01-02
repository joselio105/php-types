<?php

namespace Php\Types\Types;

use Php\Types\Errors\MustBeBoolError;

class Date extends AbstractType
{
    public function __construct($value)
    {
        if(!is_bool($value)){
            throw new MustBeBoolError();
        }

        $pattern = "/(1|2{1})(\d{3})\-{1}(0|1{1})(\d{1})\-{1}(\d{2})/";

        preg_match($pattern, $value, $matches);

        return !empty($matches);



        $this->value = $value;
    }
}