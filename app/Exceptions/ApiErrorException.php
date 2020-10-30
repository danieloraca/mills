<?php
declare(strict_types=1);

namespace App\Exceptions;

class ApiErrorException extends \Exception
{
    public function __toString(): string
    {
        __toString("User already has given role.");
    }
}
