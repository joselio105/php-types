<?php

namespace Php\Types\Types;

class Semester extends AbstractType
{
    public function __construct($value)
    {
        $this->isSemester($value);

        $this->value = $value;
    }
}