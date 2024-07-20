<?php

namespace App\Dto\Auth;

use App\Contracts\DTO\DtoInterface;

class CustomerLoginDto implements DtoInterface
{
    public function __construct(
        public readonly string $mobile,
        public readonly string $password,
    ) {
    }

    public static function fromArray(array $data)
    {
        return new self(
            mobile: $data['mobile'],
            password: $data['password'],
        );
    }
}
