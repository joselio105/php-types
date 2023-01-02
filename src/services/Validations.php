<?php

namespace Php\Types\Services;

use Php\Types\Errors\MustBeBoolError;
use Php\Types\Errors\MustBeDateError;
use Php\Types\Errors\MustBeEmailError;
use Php\Types\Errors\MustBeGreatherThanError;
use Php\Types\Errors\MustBeIntError;
use Php\Types\Errors\MustBeLattesUrlError;
use Php\Types\Errors\MustBePhoneError;
use Php\Types\Errors\MustBeSemesterError;
use Php\Types\Errors\MustBeSmallerThanError;
use Php\Types\Errors\MustBeStringError;
use Php\Types\Errors\MustBeUrlError;

trait Validations
{
    public function isText($value): void
    {
        if(!is_string($value)){
            throw new MustBeStringError();
        }
    }

    public function isGreatherThan($value, int $length)
    {
        if(strlen($value) <= $length){
            throw new MustBeGreatherThanError($length);
        }
    }

    public function isSmallerThan($value, int $length)
    {
        if(strlen($value) <= $length){
            throw new MustBeSmallerThanError($length);
        }
    }

    public function isInteger($value): void
    {
        if(!is_int($value)){
            throw new MustBeIntError();
        }
    }

    public function isBoolean($value): void
    {
        if(!is_bool($value)){
            throw new MustBeBoolError();
        }
    }

    public function isDate($value): void
    {
        $pattern = "/(1|2{1})(\d{3})\-{1}(0|1{1})(\d{1})\-{1}(\d{2})/";
        preg_match($pattern, $value, $matches);

        if(empty($matches)){
            throw new MustBeDateError();
        }
    }
    
    public function isSemester($value): void
    {
        $pattern = "/(1|2{1})(\d{3})\-{1}(1|2{1})/";
        preg_match($pattern, $value, $matches);

        if(empty($matches)){
            throw new MustBeSemesterError();
        }
    }

    public function isPhone($value): void
    {
        $pattern = "/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/";
        preg_match($pattern, $value, $matches);

        if(empty($matches)){
            throw new MustBePhoneError();
        }
    }

    public function isEmail($value): void
    {
        $pattern = "/(.+)\@{1}(.+\..+)/";
        preg_match($pattern, $value, $matches);
        
        if(empty($matches)){
            throw new MustBeEmailError();
        }
    }

    public function isUrl($value): void
    {
        $pattern = "/^https?:\\/\\/(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)$/";
        preg_match($pattern, $value, $matches);

        if(empty($matches)){
            throw new MustBeUrlError();
        }
    }

    public function isUrlLattes($value): void
    {
        $pattern = "/(http\:\/\/lattes.cnpq.br\/{1})(\d{16})/";
        preg_match($pattern, $value, $matches);

        if(empty($matches)){
            throw new MustBeLattesUrlError();
        }
    }
}
