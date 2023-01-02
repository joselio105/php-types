<?php

namespace Php\Types\Errors;

use Exception;

class MustBeSmallerThanError extends Exception
{
    public function __construct(int $length)
    {
        http_response_code(411);
        parent::__construct("A variável deve ser menor que {$length}");
    }
}