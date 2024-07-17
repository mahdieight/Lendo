<?php

namespace App\Contracts\DTO;

interface DTOInterface
{
    public static function fromArray(array $data);
}