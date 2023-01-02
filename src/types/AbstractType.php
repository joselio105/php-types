<?php

namespace Php\Types\Types;

use Php\Types\Services\Validations;

abstract class AbstractType
{
    use Validations;
    
    protected $value;
    protected $matches;

    abstract public function __construct($value);

    public function getValue(): string
    {
        return $this->value;
    }
}