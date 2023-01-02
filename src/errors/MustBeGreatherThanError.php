<?php

namespace Php\Types\Errors;

use Exception;

class MustBeGreatherThanError extends Exception
{
    public function __construct(int $length)
    {
        http_response_code(411);
        parent::__construct("A variável deve ser maior que {$length}");
    }
}