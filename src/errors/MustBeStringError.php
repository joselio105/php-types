<?php

namespace Php\Types\Errors;

use Exception;

class MustBeStringError extends Exception
{
    public function __construct()
    {
        http_response_code(406);
        parent::__construct("A variável deve ser do tipo Texto");
    }
}