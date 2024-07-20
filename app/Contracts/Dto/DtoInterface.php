<?php

namespace App\Contracts\Dto;

interface DtoInterface
{
    public static function fromArray(array $data);
}